<?php
    function ambil_url($url){
        $client=curl_init($url);
        curl_setopt($client,CURLOPT_SSL_VERIFYHOST,0);
        curl_setopt($client,CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
        $response=curl_exec($client);
        return json_decode($response);
    }

    //Ambil Data RS
    $url_RS_Rujukan="https://dekontaminasi.com/api/id/covid19/hospitals";
    $res=ambil_url($url_RS_Rujukan);
    $nama=$res->name;
    $alamat=$res->address;
    $daerah=$res->region;
    $tlp=$res->phone;
    $provinsi=$res->province;

?>