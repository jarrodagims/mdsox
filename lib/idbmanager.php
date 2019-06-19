<?php

	$HOST = "localhost";
	$DATABASE = "migs";
	$USER = "root";
	$PASSWORD = "root";
       

        
	// $HOST = "pixyel.com";
	// $DATABASE = "pixyel_emc2";
	// $USER = "pixyel_alien";
	// $PASSWORD = "Pixy3l012814";


	class iDBManager
	{

		//set up the object
                private $_host;
		private $_user;
		private $_password;
		private $_database;
		private $_connection;
		private $_connectionOpenStatus;
		
		private $_result;
		private $_sqlQuery;
		private $_numberOfRows;
		private $_transactionSwitch;

                private $_recordset1;
                private $_recordset2;
                private $_recordset3;
                private $_recordset4;
                private $_recordset5;

		private $_insertId;
		private $_recordset;
		private $_errorMessage;
		private $_outputParameterValues;
		private $_sqlQueryOutputParameters;

		// Property Get & Set
		
		public function getHost() {
			return $this->_host;
		}

		public function setHost($host) {
			$this->_host = $host;
		}
		
		public function getDatabase() {
			return $this->_database;
		}

		public function setDatabase($database) {
			$this->_database = $database;
		}

		public function getUser() {
			return $this->_user;
		}

		public function setUser($user) {
			$this->_user = $user;
		}

		public function getPassword() {
			return $this->_password;
		}

		public function setPassword($password) {
			$this->_password = $password;
		}

		public function setConnection($connection) {
			$this->_connection = $connection;
		}

		public function getConnection() {
			return $this->_connection;
		}

		public function getSqlQuery() {
			return $this->_sqlQuery;
		}

		public function setSqlQuery($sqlQuery) {
			$this->_sqlQuery = $sqlQuery;
		}

		public function getSqlQueryOutputParameters() {
			return $this->_sqlQueryOutputParameters;
		}

		public function setSqlQueryOutputParameters($sqlQueryOutputParameters) {
			$this->_sqlQueryOutputParameters = $sqlQueryOutputParameters;
		}

		public function getNumberOfRows() {
			return $this->_numberOfRows;
		}

		public function setNumberRows($numberOfRows) {
			$this->_numberOfRows = $numberOfRows;
		}

		public function getResult() {
			return $this->_result;
		}

		public function setResult($result) {
			$this->_result = $result;
		}

		public function getTransactionSwitch() {
			return $this->_transactionSwitch;
		}

		public function setTransactionSwitch($transactionSwitch) {
			$this->_transactionSwitch = $transactionSwitch;
		}

		public function getErrorMessage() {
			return $this->_errorMessage;
		}

		public function setErrorMessage($errorMessage) {
			$this->_errorMessage = $errorMessage;
		}

		public function getRecordset($i) {
                        $variable = '_recordset'. $i;
			return $this->$variable;
		}

		public function setRecordset($i, $recordset) {
                        $variable = '_recordset' . $i;
			$this->$variable = $recordset;
		}

                public function getRecordset1() {
			return $this->_recordset1;
		}

		public function setRecordset1($recordset) {
			$this->_recordset1 = $recordset;
		}

                public function getRecordset2() {
			return $this->_recordset2;
		}

		public function setRecordset2($recordset) {
			$this->_recordset2 = $recordset;
		}

                public function getRecordset3() {
			return $this->_recordset3;
		}

		public function setRecordset3($recordset) {
			$this->_recordset3 = $recordset;
		}

                public function getRecordset4() {
			return $this->_recordset4;
		}

		public function setRecordset4($recordset) {
			$this->_recordset4 = $recordset;
		}

                public function getRecordset5() {
			return $this->_recordset5;
		}

		public function setRecordset5($recordset) {
			$this->_recordset5 = $recordset;
		}

		public function getInsertId() {
			return $this->_insertId;
		}

		public function setInsertId($insertId) {
			$this->_insertId = $insertId;
		}

		public function getOutputParameterValues() {
			return $this->_outputParameterValues;
		}

		public function setOutputParameterValues($outputParameterValues) {
			$this->_outputParameterValues = $outputParameterValues;
		}

		/*
		This is the constructor for the object. In this case I have set
		the initial values of a number of the object properties to those
		values declared in the global constants.inc. By doing this, I
		only need to change the values of these properties for specific
		operations, which we will not need to do throughout this example
		*/

                public function iDBManager() {

                        global $HOST, $DATABASE, $USER, $PASSWORD;

                        $this->setHost($HOST);
			$this->setDatabase($DATABASE);
			$this->setUser($USER);
			$this->setPassword($PASSWORD);

		}


		/*
		These are the methods for the object. They provide for opening a
		connection to the database, closing a connection and executing a
		SELECT query. Of course, these can be expanded upon to allow for
		INSERT's, UPDATE's and DELETE's etc...
		*/

		public function openConnection() {

			$this->_connection = mysqli_connect("$this->_host", "$this->_user", "$this->_password", "$this->_database");
			
			if (mysqli_connect_errno() ){
				$this->_errorMessage = "Connection failed - Error(". mysqli_connect_errno() . ") " . mysqli_connect_error();
				return false;
			}
			return true;
                  
		}


		public function closeConnection() {
			mysqli_close($this->_connection);
		}


		public function beginTran( ) {

			$this->_sqlQuery = "SET AUTOCOMMIT=0";
			$this->_result = mysqli_query( $this->_connection, $this->_sqlQuery);
			if (!$this->_result){
				$this->_errorMessage = mysqli_error($this->_connection);
				return false;
			}

			$this->_sqlQuery = "START TRANSACTION";
			$this->_result = mysqli_query( $this->_connection, $this->_sqlQuery );
			if (!$this->_result){
				$this->_errorMessage = mysqli_error( $this->_connection );
				return false;
			}

			unset( $this->_result);
			return true;
		}


		public function rollbackTran( ) {

			$this->_sqlQuery = "ROLLBACK";
			$this->_result = mysqli_query( $this->_connection, $this->_sqlQuery );
			if (!$this->_result){
				$this->_errorMessage = mysqli_error( $this->_connection );
				return false;
			}

			//mysqli_free_result( $this->_result);
			return true;
		}


		public function commitTran( ) {

			$this->_sqlQuery = "COMMIT";
			$this->_result = mysqli_query( $this->_connection, $this->_sqlQuery );
			if (!$this->_result){
				$this->_errorMessage = mysqli_error( $this->_connection );
				return false;
			}

			unset( $this->_result);
			return true;
		}


                public function setUTF8( ) {

			$this->_sqlQuery = "SET NAMES 'utf8'";
			$this->_result = mysqli_query( $this->_connection, $this->_sqlQuery );
			if (!$this->_result){
				$this->_errorMessage = mysqli_error( $this->_connection );
				return false;
			}

			unset( $this->_result);
			return true;
		}


                public function selectDataRow(){

                    if ( mysqli_multi_query( $this->_connection, $this->_sqlQuery ) ){

                        $i = 1;
                        do {
                            if ($this->_result = mysqli_store_result( $this->_connection ) ){

                                if ($i==1)
                                    $this->_numberOfRows = mysqli_num_rows( $this->_result );

                                $irecordset = array();
                                while ( $row = mysqli_fetch_array( $this->_result, MYSQLI_BOTH ) )
                                    array_push( $irecordset, $row );

                                mysqli_free_result($this->_result);
                            }

                            if ( mysqli_more_results( $this->_connection ) ){
                                //$result = mysqli_store_result( $this->_connection);\
                            }

                            if ($i == 1)$this->_recordset = $irecordset[0];
                            
                            $this->_outputParameterValues = $irecordset[0];

                            $i++;

                        } while ( mysqli_next_result ( $this->_connection ) );

                    }
                    else{
                        $this->_errorMessage = mysqli_error( $this->_connection );
                        return false;
                    }


                    return true;
		}


                public function selectDataSet(){

                    if ( mysqli_multi_query( $this->_connection, $this->_sqlQuery ) ){

                        $i = 1;
                        do {
                            if ($this->_result = mysqli_store_result( $this->_connection ) ){

                                $irecordset = array();
                                while ( $row = mysqli_fetch_array( $this->_result, MYSQLI_BOTH ) )
                                    array_push( $irecordset, $row );

                                mysqli_free_result($this->_result);
                            }

                            if ( mysqli_more_results( $this->_connection ) ){
                                //$result = mysqli_store_result( $this->_connection);\
                            }

                            #$method = '_recordset' . $i;
                            #$this->$method = $irecordset;
                            $this->setRecordset($i, $irecordset);
                            
                            $this->setOutputParameterValues($irecordset[0]);

                            $i++;

                        } while ( mysqli_next_result ( $this->_connection ) );

                    }
                    else{
                        $this->_errorMessage = mysqli_error( $this->_connection );
                        return false;
                    }

                    return true;
		}


                 public function selectDataSet2(){

                    if ( mysqli_multi_query( $this->_connection, $this->_sqlQuery ) ){

                        $i = 1;
                        do {
                            if ($this->_result = mysqli_store_result( $this->_connection ) ){

                                $irecordset = array();
                                while ( $row = mysqli_fetch_array( $this->_result, MYSQLI_BOTH ) )
                                    array_push( $irecordset, $row );

                                mysqli_free_result($this->_result);
                            }

                            if ( mysqli_more_results( $this->_connection ) ){
                                //$result = mysqli_store_result( $this->_connection);\
                            }

                            if ($i == 1) $this->_recordset1 = $irecordset;
                            if ($i == 2) $this->_recordset2 = $irecordset;
                            
                            $this->_outputParameterValues = $irecordset[0];

                            $i++;
                            
                        } while ( mysqli_next_result ( $this->_connection ) );
                        



                    }
                    else{
                        $this->_errorMessage = mysqli_error( $this->_connection );
                        return false;
                    }


                    return true;
		}


                public function selectDataSet3(){

                    if ( mysqli_multi_query( $this->_connection, $this->_sqlQuery ) ){

                        $i = 1;
                        do {
                            if ($this->_result = mysqli_store_result( $this->_connection ) ){

                                $irecordset = array();
                                while ( $row = mysqli_fetch_array( $this->_result, MYSQLI_BOTH ) )
                                    array_push( $irecordset, $row );

                                mysqli_free_result($this->_result);
                            }

                            if ( mysqli_more_results( $this->_connection ) ){
                                //$result = mysqli_store_result( $this->_connection);\
                            }

                            if ($i == 1) $this->_recordset1 = $irecordset;
                            if ($i == 2) $this->_recordset2 = $irecordset;
                            if ($i == 3) $this->_recordset3 = $irecordset;
                            
                            $this->_outputParameterValues = $irecordset[0];

                            $i++;

                        } while ( mysqli_next_result ( $this->_connection ) );

                    }
                    else{
                        $this->_errorMessage = mysqli_error( $this->_connection );
                        return false;
                    }


                    return true;
		}


                public function selectDataSet4(){

                    if ( mysqli_multi_query( $this->_connection, $this->_sqlQuery ) ){

                        $i = 1;
                        do {
                            if ($this->_result = mysqli_store_result( $this->_connection ) ){

                                $irecordset = array();
                                while ( $row = mysqli_fetch_array( $this->_result, MYSQLI_BOTH ) )
                                    array_push( $irecordset, $row );

                                mysqli_free_result($this->_result);
                            }

                            if ( mysqli_more_results( $this->_connection ) ){
                                //$result = mysqli_store_result( $this->_connection);\
                            }

                            if ($i == 1) $this->_recordset1 = $irecordset;
                            if ($i == 2) $this->_recordset2 = $irecordset;
                            if ($i == 3) $this->_recordset3 = $irecordset;
                            if ($i == 4) $this->_recordset4 = $irecordset;
                            
                            $this->_outputParameterValues = $irecordset[0];

                            $i++;

                        } while ( mysqli_next_result ( $this->_connection ) );

                    }
                    else{
                        $this->_errorMessage = mysqli_error( $this->_connection );
                        return false;
                    }


                    return true;
		}


                public function selectDataSet5(){

                    if ( mysqli_multi_query( $this->_connection, $this->_sqlQuery ) ){

                        $i = 1;
                        do {
                            if ($this->_result = mysqli_store_result( $this->_connection ) ){

                                $irecordset = array();
                                while ( $row = mysqli_fetch_array( $this->_result, MYSQLI_BOTH ) )
                                    array_push( $irecordset, $row );

                                mysqli_free_result($this->_result);
                            }

                            if ( mysqli_more_results( $this->_connection ) ){
                                //$result = mysqli_store_result( $this->_connection);\
                            }

                            if ($i == 1) $this->_recordset1 = $irecordset;
                            if ($i == 2) $this->_recordset2 = $irecordset;
                            if ($i == 3) $this->_recordset3 = $irecordset;
                            if ($i == 4) $this->_recordset4 = $irecordset;
                            if ($i == 5) $this->_recordset5 = $irecordset;
                            
                            $this->_outputParameterValues = $irecordset[0];

                            $i++;

                        } while ( mysqli_next_result ( $this->_connection ) );

                    }
                    else{
                        $this->_errorMessage = mysqli_error( $this->_connection );
                        return false;
                    }


                    return true;
		}


		public function executeQuery() {

			$this->_result = mysqli_query( $this->_connection, $this->_sqlQuery );
			if (!$this->_result){
				$this->_errorMessage = mysqli_error( $this->_connection );
				return false;
			}

			if ( !empty($this->_sqlQueryOutputParameters) ){
				$this->_result = mysqli_query( $this->_connection, $this->_sqlQueryOutputParameters );
				if (!$this->_result) {
					$this->_errorMessage = mysqli_error( $this->_connection );
					return false;
				}

				$this->_outputParameterValues = mysqli_fetch_assoc( $this->_result );
			}

			mysqli_free_result ( $this->_result );
			return true;
		}


                public function executeNonQuery() {

                    if ( mysqli_multi_query( $this->_connection, $this->_sqlQuery ) ){

                        $i = 1;
                        do {
                            if ($this->_result = mysqli_store_result( $this->_connection ) ){

                                $irecordset = array();
                                while ( $row = mysqli_fetch_array( $this->_result, MYSQLI_BOTH ) )
                                    array_push( $irecordset, $row );

                                mysqli_free_result($this->_result);
                            }

                            if ( mysqli_more_results( $this->_connection ) ){
                                //$result = mysqli_store_result( $this->_connection);\
                            }

                            $this->setOutputParameterValues($irecordset[0]);

                            $i++;

                        } while ( mysqli_next_result ( $this->_connection ) );

                    }
                    else{
                        $this->_errorMessage = mysqli_error( $this->_connection );
                        return false;
                    }

                    return true;

		}

	}
?>