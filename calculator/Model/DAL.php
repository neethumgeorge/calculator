<?php
class DAL
{

    public function __construct()
    {
        
    }
	
    public function api($fn,$val1,$val2)
    {
	
		$endpoint = '';
		$url = $endpoint."?fn=$fn&val1=$val1&val2=$val2";

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($ch);
		$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		
		if ($httpCode == 200) {
			$arr = json_decode($result,true);
			foreach($arr as $key=>$value);
			return $value;
		} else {
			error_log("HTTP_FAIL_$httpCode");
		}

	}
	
}

?>