<?php

    include('idbmanager.php');


// <editor-fold defaultstate="collapsed" desc=" MetaData Functions ">

    function selectClientMetadata(
    $clientId,
    &$recordset1,
    &$recordset2,
    &$recordset3,
    &$recordset4,
    &$recordset5,
    &$returnMessage ) {

        $db = new iDBManager();

        if ( !$db->openConnection() ){
            $returnMessage = $db->getErrorMessage();
            return false;
        }

        $query = "CALL SelectClientMetadata($clientId)";
        //$query = "CALL SelectGenerationRecent( @ReturnValue, @ReturnMessage ); SELECT @ReturnValue AS ReturnValue, @ReturnMessage AS ReturnMessage";
        $db->setSqlQuery($query);

        $dbResult = true;
        if (!$db->selectDataSet()){
            $returnMessage = $db->getErrorMessage();
            $dbResult = false;
        } else {

            $recordset1 = $db->getRecordset(1);
            $recordset1 = $recordset1[0];           # Client
            $recordset2 = $db->getRecordset(2);     # Banner
            $recordset3 = $db->getRecordset(3);     # FileManager
            $recordset4 = $db->getRecordset(4);     # Article
            $recordset5 = $db->getRecordset(5);     # Product

        }

        $db->closeConnection();
        return $dbResult;

    }

// </editor-fold>

?>
