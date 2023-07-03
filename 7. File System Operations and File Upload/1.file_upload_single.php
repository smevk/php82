<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file was uploaded without errors
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {
        $targetDir = "uploads/"; // Directory to save the uploaded files
        $targetFile = $targetDir . basename($_FILES["file"]["name"]);

        // Move the uploaded file to the desired directory
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            echo "File uploaded successfully.";
        } else {
            echo "There was an error uploading the file.";
        }
    } else {
        echo "Error: " . $_FILES["file"]["error"];
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>File Upload</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file" />
        <input type="submit" value="Upload" />
    </form>
</body>

</html>