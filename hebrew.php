<?php
// Checks if the input text is Hebrew
function checkHebrew($str){
	preg_match('/[׳-׳×]/u', $str, $match);
	return ( mb_detect_encoding($str, 'UTF-8', true) == 'UTF-8' && !empty($match[0]) );
}

// Gets wrongly encoded text and outputs readable UTF-8 Hebrew 
function ensureHebrew($str, $encodings = array('UTF16-LE', 'WINDOWS-1255')){
	if(!checkHebrew($str)){
		foreach($encodings as $key => $encoding){
			if($encoding == 'UTF16-LE')
				$result = mb_convert_encoding($str , 'UTF-8' , 'UTF-16LE');
			else
				$result = iconv($encoding, 'UTF-8', $str);

			if(checkHebrew($result)){
				//echo "Encoding was $encoding...\n";
				return $result;
			}
		}

		//echo "Encoding was never found...\n";
		return false;
	} else {
		return $str;
	}	
}