<?php

function getBooks($keyword) {
  $search=str_replace(' ', '%20', $keyword);
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://openlibrary.org/api/books?bibkeys=ISBN:0201558025,LCCN:93005405='$search'",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
      ),
    ));
    
    $jsonData = curl_exec($curl);
    $data = json_decode($jsonData, true); //true makes it an array!
    $items=$data['items'];
    
    return $items;

}
?>