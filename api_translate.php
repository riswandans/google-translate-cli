<?php
class Google_Translate
{
    public $word, $from, $to;

    public function translate() {
     	$url = "https://translate.googleapis.com/translate_a/single?client=gtx&sl=".$this->from."&tl=".$this->to."&dt=t&q=".urlencode($this->word);
		$curl = curl_init();
	    curl_setopt($curl, CURLOPT_URL, $url);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	    $result = curl_exec($curl);
	    curl_close($curl);
	    $result = json_decode($result);
	    return $result[0][0][0];
    }
}

function question($msg){
        echo "# ".$msg;
        return rtrim(fgets(STDIN));
}