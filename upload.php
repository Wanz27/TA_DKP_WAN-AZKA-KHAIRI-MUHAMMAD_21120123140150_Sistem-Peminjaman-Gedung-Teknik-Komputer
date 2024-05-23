<!DOCTYPE html>
<html>
<head>
    <title>Room Page - <?php echo $class['name']; ?></title>
    <link rel="stylesheet" type="text/css" href="uploadstyle.css">
</head>
<body>
<div class="container">
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $classId = $_POST['class_id'];
    $notes = $_POST['notes'];
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;

    // Check if file is a actual document
    if (isset($_POST["submit"])) {
        $check = mime_content_type($_FILES["file"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not a document.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["file"]["size"] > 500000) { // 500 KB
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    if ($fileType != "pdf" && $fileType != "doc" && $fileType != "docx") {
        echo "Sorry, only PDF, DOC & DOCX files are allowed.";
        $uploadOk = 0;
    }

    echo "Terima Kasih telah merequest";
}
?>
</div>
</body>
