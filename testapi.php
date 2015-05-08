<?php


$ch = curl_init();

//curl_setopt($ch, CURLOPT_URL,"https://www.favcy.com/favcy-rest/v1/register");

curl_setopt($ch, CURLOPT_URL,"https://www.favcy.com/favcy-rest/v1/login");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "email=parthsoni@gmail.com&password=jagrutsoni");

// in real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);

curl_close ($ch);

var_dump($server_output);

?> 