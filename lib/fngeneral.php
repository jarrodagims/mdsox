<?php

    # Setup KEY Variables
    $alphaKey = 'c23A57n61N89o19N54';
    $epKey = '14532157';
    $eyKey = '384288';
    $vcKey = '1253854';
    
    # Sanbox 
    /*
    * Get from REQUEST API CREDENTIALS (API ACCESS) ->  
    * SETUP PAYPAL API CREDENTIALS AND PERSMISSIONS ->
    * OPTION 2 Request API credentials to create your own API username and password -> 
    * VIEW API SIGNATURE
    */
    $ppAPIUsername = 'mercatikait-facilitator_api1.gmail.com';
    $ppAPIPassword = '1396557939';
    $ppAPISignature = 'AFcWxV21C7fd0v3bYYYRCpSSRl31AaItTjydZ4O-OXP2Jtx38opnUFVX';


    # PayPal Live production
    /*
    $ppAPIUsername = 'rcboots_api1.hotmail.com';
    $ppAPIPassword = 'FHX2LVSWUGRP9KQM';
    $ppAPISignature = 'AJn57ynEnjpJjEh4Bc.HCG2ClUm2AxE4q5bjnU6wEem-TOm-TJ8JMtbc';
    */
    #-------------------------------------------------------------------------------------------------


    function encodeParameter($parameter){
        return encodeString( rand($parameter, ($parameter+9)) ) . '=';
    }


    function encodeString($stringValue){
        return str_replace( "=", "", base64_encode( $stringValue ) );
    }


    function getQueryStringParameters($queryString){

        $i=0;
        $element = 0;
        $charSplit = '=';
        $queryParams=array();

        for ($i=0; $i<=strlen($queryString); $i++){

            if ( $charSplit == '=' ){
                if ($queryString[$i] != '=' )
                    $key = $key . $queryString[$i];
                elseif ($queryString[$i] == '=' )
                    $charSplit = '&';
            }

            else {
                if ($queryString[$i] != '&' )
                    $value = $value . $queryString[$i];
                elseif ( $queryString[$i] == '&' ){
                    $queryParams[$key] = $value;
                    $queryParams[$element] = $value;
                    $key = '';
                    $value = '';
                    $charSplit = '=';
                    $element++;
                }
            }

            if ( $i == strlen($queryString) ){
                $queryParams[$key] = $value;
                $queryParams[$element] = $value;
            }
        }

        return $queryParams;
    }

    
    function writeOptionListDay( $selected ){

        $selected = isset($selected) ? $selected : date("d");

        for ($i=1; $i<=31; $i+=1 ){
            echo '<option ';
            if($selected == $i) echo 'SELECTED ';
            echo '>'.  $i .'</option>';
        }

    }


    function writeOptionListMonth( $selected ){

        $selected = isset($selected) ? $selected : date("m");

        for ($i=1; $i<=12; $i+=1 ){
            echo '<option value="'. $i . '"';
            if($selected == $i) echo ' SELECTED ';
            echo '>';
            switch ($i){
                case 1: echo "ENE";break;
                case 2: echo "FEB";break;
                case 3: echo "MAR";break;
                case 4: echo "ABR";break;
                case 5: echo "MAY";break;
                case 6: echo "JUN";break;
                case 7: echo "JUL";break;
                case 8: echo "AGO";break;
                case 9: echo "SEP";break;
                case 10: echo "OCT";break;
                case 11: echo "NOV";break;
                case 12: echo "DIC";break;
            }
            echo '</option>';
        }
    }


    function spanishMonthName($month){

        switch ($month) {
        case "January": return 'Enero'; break;
        case "February": return 'Febrero'; break;
        case "March": return 'Marzo'; break;
        case "April": return 'Abril'; break;
        case "May": return 'Mayo'; break;
        case "June": return 'Junio'; break;
        case "July": return 'Julio'; break;
        case "August": return 'Agosto'; break;
        case "September": return 'Septiembre'; break;
        case "October": return 'Octubre'; break;
        case "November": return 'Noviember'; break;
        case "Decemeber": return 'Diciembre'; break;
        }

    }


    function fstrhsec($value){
        
        $value = str_replace("\'", "'", $value);
        $value = str_replace('\"', '"', $value);
        
        $value = str_replace("'", "&#39;", $value);
        $value = str_replace('"', "&quot;", $value);
        
        $value = str_replace("<br/>", "\n", $value);
        $value = str_replace("<br />", "\n", $value);
        return $value;
    }

    function freplacebr($value){
        $value = str_replace("<br/>", "\n", $value);
        $value = str_replace("<br />", "\n", $value);
        return $value;
    }

    function freplacechr13($value){
        $value = str_replace("\n", "<br/>", $value);
        return $value;
    }
    
    function fstrffb($value){
        $value = str_replace("\'", "'", $value);
        $value = str_replace('\"', '"', $value);
        
        $value = str_replace("<br/>", "\n", $value);
        $value = str_replace("<br />", "\n", $value);
        return $value;
    }
    
    function removeAccentChars($str){
        $a = array('À','Á','Â','Ã','Ä','Å','Æ','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ð','Ñ','Ò','Ó','Ô','Õ','Ö','Ø','Ù','Ú','Û','Ü','Ý','ß','à','á','â','ã','ä','å','æ','ç','è','é','ê','ë','ì','í','î','ï','ñ','ò','ó','ô','õ','ö','ø','ù','ú','�»','ü','ý','ÿ','Ā','ā','Ă','ă','Ą','ą','Ć','ć','Ĉ','ĉ','Ċ','ċ','Č','č','Ď','ď','Đ','đ','Ē','ē','Ĕ','ĕ','Ė','ė','Ę','ę','Ě','ě','Ĝ','ĝ','Ğ','ğ','Ġ','ġ','Ģ','ģ','Ĥ','ĥ','Ħ','ħ','Ĩ','ĩ','Ī','ī','Ĭ','ĭ','Į','į','İ','ı','Ĳ','ĳ','Ĵ','ĵ','Ķ','ķ','Ĺ','ĺ','�»','ļ','Ľ','ľ','Ŀ','ŀ','Ł','ł','Ń','ń','Ņ','ņ','Ň','ň','ŉ','Ō','ō','Ŏ','ŏ','Ő','ő','Œ','œ','Ŕ','ŕ','Ŗ','ŗ','Ř','ř','Ś','ś','Ŝ','ŝ','Ş','ş','Š','š','Ţ','ţ','Ť','ť','Ŧ','ŧ','Ũ','ũ','Ū','ū','Ŭ','ŭ','Ů','ů','Ű','ű','Ų','ų','Ŵ','ŵ','Ŷ','ŷ','Ÿ','Ź','ź','�»','ż','Ž','ž','ſ','ƒ','Ơ','ơ','Ư','ư','Ǻ','�»','Ǽ','ǽ','Ǿ','ǿ');
	$b = array('A','A','A','A','A','A','AE','C','E','E','E','E','I','I','I','I','D','N','O','O','O','O','O','O','U','U','U','U','Y','s','a','a','a','a','a','a','ae','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','o','u','u','u','u','y','y','A','a','A','a','A','a','C','c','C','c','C','c','C','c','D','d','D','d','E','e','E','e','E','e','E','e','E','e','G','g','G','g','G','g','G','g','H','h','H','h','I','i','I','i','I','i','I','i','I','i','IJ','ij','J','j','K','k','L','l','L','l','L','l','L','l','l','l','N','n','N','n','N','n','n','O','o','O','o','O','o','OE','oe','R','r','R','r','R','r','S','s','S','s','S','s','S','s','T','t','T','t','T','t','U','u','U','u','U','u','U','u','U','u','U','u','W','w','Y','y','Y','Z','z','Z','z','Z','z','s','f','O','o','U','u','A','a','I','i','O','o','U','u','A','a','AE','ae','O','o');
	return str_replace($a, $b, $str);
    }



    function forceUTF8($text){
    /**
    * Function forceUTF8
    *
    * This function leaves UTF8 characters alone, while converting almost all non-UTF8 to UTF8.
    *
    * It may fail to convert characters to unicode if they fall into one of these scenarios:
    *
    * 1) when any of these characters:   ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖ×ØÙÚÛÜÝÞß
    *    are followed by any of these:  ("group B")
    *                                    ¡¢£¤¥¦§¨©ª«¬­®¯°±²³´µ¶•¸¹º»¼½¾¿
    * For example:   %ABREPRESENT%C9%BB. «REPRESENTÉ»
    * The "«" (%AB) character will be converted, but the "É" followed by "»" (%C9%BB)
    * is also a valid unicode character, and will be left unchanged.
    *
    * 2) when any of these: àáâãäåæçèéêëìíîï  are followed by TWO chars from group B,
    * 3) when any of these: ðñòó  are followed by THREE chars from group B.
    *
    * @name forceUTF8
    * @param string $text  Any string.
    * @return string  The same string, UTF8 encoded
    *
    */

        if(is_array($text)){
            foreach($text as $k => $v){
                $text[$k] = forceUTF8($v);
            }
            return $text;
        }

        $max = strlen($text);
        $buf = "";
        for($i = 0; $i < $max; $i++){
            $c1 = $text{$i};
            if($c1>="\xc0"){ //Should be converted to UTF8, if it's not UTF8 already
              $c2 = $i+1 >= $max? "\x00" : $text{$i+1};
              $c3 = $i+2 >= $max? "\x00" : $text{$i+2};
              $c4 = $i+3 >= $max? "\x00" : $text{$i+3};
                if($c1 >= "\xc0" & $c1 <= "\xdf"){ //looks like 2 bytes UTF8
                    if($c2 >= "\x80" && $c2 <= "\xbf"){ //yeah, almost sure it's UTF8 already
                        $buf .= $c1 . $c2;
                        $i++;
                    } else { //not valid UTF8.  Convert it.
                        $cc1 = (chr(ord($c1) / 64) | "\xc0");
                        $cc2 = ($c1 & "\x3f") | "\x80";
                        $buf .= $cc1 . $cc2;
                    }
                } elseif($c1 >= "\xe0" & $c1 <= "\xef"){ //looks like 3 bytes UTF8
                    if($c2 >= "\x80" && $c2 <= "\xbf" && $c3 >= "\x80" && $c3 <= "\xbf"){ //yeah, almost sure it's UTF8 already
                        $buf .= $c1 . $c2 . $c3;
                        $i = $i + 2;
                    } else { //not valid UTF8.  Convert it.
                        $cc1 = (chr(ord($c1) / 64) | "\xc0");
                        $cc2 = ($c1 & "\x3f") | "\x80";
                        $buf .= $cc1 . $cc2;
                    }
                } elseif($c1 >= "\xf0" & $c1 <= "\xf7"){ //looks like 4 bytes UTF8
                    if($c2 >= "\x80" && $c2 <= "\xbf" && $c3 >= "\x80" && $c3 <= "\xbf" && $c4 >= "\x80" && $c4 <= "\xbf"){ //yeah, almost sure it's UTF8 already
                        $buf .= $c1 . $c2 . $c3;
                        $i = $i + 2;
                    } else { //not valid UTF8.  Convert it.
                        $cc1 = (chr(ord($c1) / 64) | "\xc0");
                        $cc2 = ($c1 & "\x3f") | "\x80";
                        $buf .= $cc1 . $cc2;
                    }
                } else { //doesn't look like UTF8, but should be converted
                        $cc1 = (chr(ord($c1) / 64) | "\xc0");
                        $cc2 = (($c1 & "\x3f") | "\x80");
                        $buf .= $cc1 . $cc2;
                }
            } elseif(($c1 & "\xc0") == "\x80"){ // needs conversion
                    $cc1 = (chr(ord($c1) / 64) | "\xc0");
                    $cc2 = (($c1 & "\x3f") | "\x80");
                    $buf .= $cc1 . $cc2;
            } else { // it doesn't need convesion
                $buf .= $c1;
            }
        }
        return $buf;
    }

    function forceLatin1($text) {
        if(is_array($text)) {
            foreach($text as $k => $v) {
                $text[$k] = forceLatin1($v);
            }
            return $text;
        }
        return utf8_decode(forceUTF8($text));
    }

    function fixUTF8($text){
        if(is_array($text)) {
            foreach($text as $k => $v) {
                $text[$k] = fixUTF8($v);
            }
            return $text;
        }

        $last = "";
        while($last <> $text){
            $last = $text;
            $text = forceUTF8(utf8_decode(forceUTF8($text)));
        }
        return $text;
    }


    function getDiggPaginationString($page = 1, $totalitems, $limit = 15, $adjacents = 1, $targetpage = "/", $pagestring = "?page="){
	//defaults
	if(!$adjacents) $adjacents = 1;
	if(!$limit) $limit = 15;
	if(!$page) $page = 1;
	if(!$targetpage) $targetpage = "/";

	//other vars
	$prev = $page - 1;									//previous page is page - 1
	$next = $page + 1;									//next page is page + 1
	$lastpage = ceil($totalitems / $limit);				//lastpage is = total items / items per page, rounded up.
	$lpm1 = $lastpage - 1;								//last page minus 1

	//echo 'targetpage = '. $targetpage.'<br>';
	//echo 'pagestring = '. $pagestring.'<br>';

	/*
		Now we apply our rules and draw the pagination object.
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{
		$pagination .= "<div class=\"pagination\"";
		if($margin || $padding)
		{
			$pagination .= " style=\"";
			if($margin)
				$pagination .= "margin: $margin;";
			if($padding)
				$pagination .= "padding: $padding;";
			$pagination .= "\"";
		}
		$pagination .= ">";

		//previous button
		if ($page > 1)
			$pagination .= "<a href=\"". $targetpage. str_replace( "=", "", base64_encode($pagestring. $prev) ) . "\">&laquo;</a>";
		else
			$pagination .= "<span class=\"disabled\">&laquo;</span>";


		//pages
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination .= "<span class=\"current\">$counter</span>";
				else
					$pagination .= "<a href=\"" . $targetpage . str_replace( "=", "", base64_encode($pagestring . $counter) ) . "\">$counter</a>";
			}
		}
		elseif($lastpage >= 7 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 3))
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination .= "<span class=\"current\">$counter</span>";
					else
						$pagination .= "<a href=\"" . $targetpage . str_replace( "=", "", base64_encode($pagestring . $counter) ) . "\">$counter</a>";
				}
				$pagination .= "<span class=\"elipses\">...</span>";
				$pagination .= "<a href=\"" . $targetpage . str_replace( "=", "", base64_encode($pagestring . $lpm1) ) . "\">$lpm1</a>";
				$pagination .= "<a href=\"" . $targetpage . str_replace( "=", "", base64_encode($pagestring . $lastpage) ) . "\">$lastpage</a>";
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination .= "<a href=\"" . $targetpage . str_replace( "=", "", base64_encode($pagestring . "1") ) . "\">1</a>";
				$pagination .= "<a href=\"" . $targetpage . str_replace( "=", "", base64_encode($pagestring . "2") ) . "\">2</a>";
				$pagination .= "<span class=\"elipses\">...</span>";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination .= "<span class=\"current\">$counter</span>";
					else
						$pagination .= "<a href=\"" . $targetpage . str_replace( "=", "", base64_encode($pagestring . $counter) ) . "\">$counter</a>";
				}
				$pagination .= "...";
				$pagination .= "<a href=\"" . $targetpage . str_replace( "=", "", base64_encode($pagestring . $lpm1) ) . "\">$lpm1</a>";
				$pagination .= "<a href=\"" . $targetpage . str_replace( "=", "", base64_encode($pagestring . $lastpage) ) . "\">$lastpage</a>";
			}
			//close to end; only hide early pages
			else
			{
				$pagination .= "<a href=\"" . $targetpage . str_replace( "=", "", base64_encode($pagestring . "1") ) . "\">1</a>";
				$pagination .= "<a href=\"" . $targetpage . str_replace( "=", "", base64_encode($pagestring . "2") ) . "\">2</a>";
				$pagination .= "<span class=\"elipses\">...</span>";
				for ($counter = $lastpage - (1 + ($adjacents * 3)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination .= "<span class=\"current\">$counter</span>";
					else
						$pagination .= "<a href=\"" . $targetpage . str_replace( "=", "", base64_encode($pagestring . $counter) ) . "\">$counter</a>";
				}
			}
		}

		//next button
		if ($page < $counter - 1)
			$pagination .= "<a href=\"" . $targetpage . str_replace( "=", "", base64_encode($pagestring . $next) ) . "\">&raquo;</a>";
		else
			$pagination .= "<span class=\"disabled\">&raquo;</span>";
		$pagination .= "</div>\n";

	}

	return $pagination;

    }

    function alphaID($in, $to_num = false, $pad_up = false, $passKey = null){
        
        $index = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        if ($passKey !== null) {
            // Although this function's purpose is to just make the
            // ID short - and not so much secure,
            // with this patch by Simon Franz (http://blog.snaky.org/)
            // you can optionally supply a password to make it harder
            // to calculate the corresponding numeric ID

            for ($n = 0; $n<strlen($index); $n++) {
            $i[] = substr( $index,$n ,1);
            }

            $passhash = hash('sha256',$passKey);
            $passhash = (strlen($passhash) < strlen($index))
            ? hash('sha512',$passKey)
            : $passhash;

            for ($n=0; $n < strlen($index); $n++) {
            $p[] =  substr($passhash, $n ,1);
            }

            array_multisort($p,  SORT_DESC, $i);
            $index = implode($i);
        }

        $base  = strlen($index);

        if ($to_num) {
            // Digital number  <<--  alphabet letter code
            $in  = strrev($in);
            $out = 0;
            $len = strlen($in) - 1;
            for ($t = 0; $t <= $len; $t++) {
            $bcpow = bcpow($base, $len - $t);
            $out   = $out + strpos($index, substr($in, $t, 1)) * $bcpow;
            }

            if (is_numeric($pad_up)) {
            $pad_up--;
            if ($pad_up > 0) {
                $out -= pow($base, $pad_up);
            }
            }
            $out = sprintf('%F', $out);
            $out = substr($out, 0, strpos($out, '.'));
        } else {
            // Digital number  -->>  alphabet letter code
            if (is_numeric($pad_up)) {
            $pad_up--;
            if ($pad_up > 0) {
                $in += pow($base, $pad_up);
            }
            }

            $out = "";
            for ($t = floor(log($in, $base)); $t >= 0; $t--) {
            $bcp = bcpow($base, $t);
            $a   = floor($in / $bcp) % $base;
            $out = $out . substr($index, $a, 1);
            $in  = $in - ($a * $bcp);
            }
            $out = strrev($out); // reverse
        }

        return $out;
    }


    function ccValidateChecksum($cardNumber) {

        $cardNumber = preg_replace('/\D/', '', $cardNumber);

        // Determine the string length
        $cardLength = strlen($cardNumber);

        // Determine the string's remainder
        $cardCheck = $cardLength % 2;

        // Break up the card number into individual
        // digits and combine total.
        $combineTotal = 0;
        $cur = 0;
        $breakCard = str_split($cardNumber);
        foreach ($breakCard as $digit) {

            // Multiply alternate digits by two
            if ($cur % 2 == $cardCheck) {
                // If the multiplied digits is greater
                // than 9, subtract 9.
                $digit *= 2;
                if ($digit > 9) {
                    $digit -= 9;
                }
            }

            // Total up the digits
            $combineTotal += $digit;
            $cur++;

        }

        // If the combined total's modulus 10 is equal to 0,
        // we know that the the number could be valid,
        // pending confirmation from a payment gateway
        // that the number exists.
        return ($combineTotal % 10 == 0) ? true : false;

    }

?>