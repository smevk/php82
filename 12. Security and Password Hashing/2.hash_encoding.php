<?php

$data = 'Hello, World!';
$key = 'secret_key';

// MD5
$md5Hash = md5($data);
echo "MD5: $md5Hash\n";

// SHA-1
$sha1Hash = sha1($data);
echo "SHA-1: $sha1Hash\n";

// SHA-256
$sha256Hash = hash('sha256', $data);
echo "SHA-256: $sha256Hash\n";

// HMAC
$hmacHash = hash_hmac('sha256', $data, $key);
echo "HMAC: $hmacHash\n";

// Base64 Encoding
$base64Encoded = base64_encode($data);
echo "Base64 Encoded: $base64Encoded\n";

// Base64 Decoding
$base64Decoded = base64_decode($base64Encoded);
echo "Base64 Decoded: $base64Decoded\n";

// CRC32
$crc32Hash = crc32($data);
echo "CRC32: $crc32Hash\n";

?>