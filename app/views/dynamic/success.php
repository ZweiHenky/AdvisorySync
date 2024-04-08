<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        //     // HTTP basic authentication example in PHP using the Agora Server RESTful API
        // // Customer ID
        // $customerKey = "b968e99d057e4f6d91e38f8e289d1ff3";
        // // Customer secret
        // $customerSecret = "9d9cbc65fb604a2aa557e95c0855e4fc";
        // // Concatenate customer key and customer secret
        // $credentials = $customerKey . ":" . $customerSecret;

        // // Encode with base64
        // $base64Credentials = base64_encode($credentials);
        // // Create authorization header
        // $arr_header = "Authorization: Basic " . $base64Credentials;


        // // Data to be sent
        // $data = array(
        //     'name' => 'Example Project',
        //     'enable_sign_key' => true
        // );

        // // Convert data to JSON
        // $jsonData = json_encode($data);

        // $curl = curl_init();
        // // Send HTTP request
        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => 'https://api.agora.io/dev/v1/project',
        //     // CURLOPT_URL => 'https://api.agora.io/dev/v1/projects',
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'POST',
        //     CURLOPT_POSTFIELDS => $jsonData,
        //     CURLOPT_HTTPHEADER => array(
        //         $arr_header,
        //         'Content-Type: application/json'
        //     ),
        //     CURLOPT_CAINFO => 'C:/wamp64/cacert.pem' // Ruta relativa al certificado PEM
        // ));

        // $response = curl_exec($curl);

        // if(curl_errno($curl)) {
        //     echo "Error in cURL : " . curl_error($curl);

        // curl_close($curl);

        // // Decodificar la respuesta JSON en un array asociativo
        // $data = json_decode($response, true);

        // // Verificar si la decodificación fue exitosa
        // if ($data === null) {
        //     echo "Error al decodificar la respuesta JSON";
        // } else {
        //     // Imprimir un echo con un array asociativo
        //     var_dump($data);

        //     $id = $data['project']['vendor_key'];
        //     $channel = $data['project']['name'];
        //     $token = $data['project']['sign_key'];


        // }

    ?>

    <a href="http://localhost/advisorysync/dynamic/profile">Regresar</a>
    success
</body>
</html>