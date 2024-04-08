<?php
// HTTP basic authentication example in PHP using the Agora Server RESTful API
// Customer ID

session_start();
$_POST = json_decode(file_get_contents('php://input'), true);

//  $usuario = json_decode($_POST['user'],true);
$name = $_POST['name'];


// // Convierte el array asociativo en una cadena JSON
// $json_string = json_encode($array);

// // Imprime la cadena JSON
// echo $json_string;

$customerKey = "b968e99d057e4f6d91e38f8e289d1ff3";
// Customer secret
$customerSecret = "9d9cbc65fb604a2aa557e95c0855e4fc";
// Concatenate customer key and customer secret
$credentials = $customerKey . ":" . $customerSecret;

// Encode with base64
$base64Credentials = base64_encode($credentials);
// Create authorization header
$arr_header = "Authorization: Basic " . $base64Credentials;


// Data to be sent
$data = array(
  'name' => $name,
  'enable_sign_key' => false
);

// Convert data to JSON
$jsonData = json_encode($data);

$curl = curl_init();
// Send HTTP request
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.agora.io/dev/v1/project',
  // CURLOPT_URL => 'https://api.agora.io/dev/v1/projects',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $jsonData,
  CURLOPT_HTTPHEADER => array(
    $arr_header,
    'Content-Type: application/json'
  ),
  CURLOPT_CAINFO => 'C:/wamp64/cacert.pem' // Ruta relativa al certificado PEM

));

$response = curl_exec($curl);

// if(curl_errno($curl)) {
//     echo "Error in cURL : " . curl_error($curl);
// } else {
//     $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
//     if ($http_code == 200) {
//         // echo "Request successful.\n";
//         // echo "Response: \n";
//         // var_dump($response);
//         echo 'hola';
//     } else {
//         // echo "HTTP Error: " . $http_code . "\n";
//         // echo "Response: \n";
//         echo $response;
//     }
// }

if(curl_errno($curl)) {
  echo 'Error al realizar la solicitud: ' . curl_error($ch);
}

curl_close($curl);

echo $response;

// // Decodificar la respuesta JSON en un array asociativo
// $data = json_decode($response, true);

// // Verificar si la decodificación fue exitosa
// if ($data === null) {
//     echo "Error al decodificar la respuesta JSON";
// } else {
//     // Imprimir un echo con un array asociativo
//     var_dump($data);
// }
?>
