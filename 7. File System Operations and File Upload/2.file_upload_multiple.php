<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if files were uploaded without errors
    if (isset($_FILES["files"])) {
        $targetDir = "uploads/"; // Directory to save the uploaded files
        $allowedExtensions = ["jpg", "jpeg", "png"]; // Allowed file extensions
        $maxFileSize = 5 * 1024 * 1024; // Maximum file size in bytes (5MB)

        // Loop through each uploaded file
        $fileCount = count($_FILES["files"]["name"]);
        for ($i = 0; $i < $fileCount; $i++) {
            $fileName = $_FILES["files"]["name"][$i];
            $fileSize = $_FILES["files"]["size"][$i];
            $fileTmpName = $_FILES["files"]["tmp_name"][$i];
            $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            // Check if file extension is allowed
            if (!in_array($fileExtension, $allowedExtensions)) {
                echo "Error: File extension not allowed - " . $fileName . "<br>";
                continue;
            }

            // Check if file size is within the limit
            if ($fileSize > $maxFileSize) {
                echo "Error: File size exceeds the limit - " . $fileName . "<br>";
                continue;
            }

            $targetFile = $targetDir . $fileName;

            // Move the uploaded file to the desired directory
            if (move_uploaded_file($fileTmpName, $targetFile)) {
                echo "File uploaded successfully: " . $fileName . "<br>";
            } else {
                echo "There was an error uploading file: " . $fileName . "<br>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Multiple File Upload</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple />
        <input type="submit" value="Upload" />
    </form>
</body>

</html>