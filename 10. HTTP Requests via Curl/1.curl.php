<?php

// Initialize cURL
$curl = curl_init();

// Set the URL to send the request to
$url = 'https://api.example.com/data';
curl_setopt($curl, CURLOPT_URL, $url);

// Set additional cURL options if needed
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

// Set request headers if needed
$headers = [
    'Content-Type: application/json',
    'Authorization: Bearer your_access_token',
];
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

// Set request method (GET, POST, PUT, DELETE, etc.)
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');

// Set request parameters if needed
$params = [
    'param1' => 'value1',
    'param2' => 'value2',
];
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($params));

// Execute the request and get the response
$response = curl_exec($curl);

// Check for cURL errors
if (curl_errno($curl)) {
    $error = curl_error($curl);
    // Handle the error as needed
    echo "cURL Error: " . $error;
} else {
    // Process the response
    $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    echo "Response Code: " . $statusCode . "\n";
    echo "Response Body: " . $response . "\n";
}

// Close cURL
curl_close($curl);