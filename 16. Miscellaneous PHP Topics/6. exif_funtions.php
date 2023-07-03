<?php
// Get the exif data of an image
$exifData = exif_read_data("path/to/image.jpg");

// Get specific exif information
$cameraModel = $exifData['Model'];
$imageDateTime = $exifData['DateTimeOriginal'];
$imageResolution = $exifData['COMPUTED']['Width'] . "x" . $exifData['COMPUTED']['Height'];

// Check if exif data is available
if ($exifData === false) {
    echo "Exif data not available.";
} else {
    // Display the exif information
    echo "Camera Model: " . $cameraModel . "\n";
    echo "Date/Time: " . $imageDateTime . "\n";
    echo "Resolution: " . $imageResolution . "\n";
}

// Get all available exif tags
$allTags = exif_read_data("path/to/image.jpg", 'EXIF', true);

// Display all available exif tags and their values
foreach ($allTags as $key => $section) {
    foreach ($section as $name => $value) {
        echo "$key.$name: $value\n";
    }
}

// Remove exif data from an image
$success = exif_imagetype("path/to/image.jpg");
if ($success) {
    $image = imagecreatefromjpeg("path/to/image.jpg");
    if ($image !== false) {
        $removedExif = imagejpeg($image, "path/to/destination.jpg");
        if ($removedExif) {
            echo "Exif data removed successfully.";
        } else {
            echo "Failed to remove exif data.";
        }
        imagedestroy($image);
    } else {
        echo "Failed to create image resource.";
    }
} else {
    echo "Invalid image file.";
}
?>