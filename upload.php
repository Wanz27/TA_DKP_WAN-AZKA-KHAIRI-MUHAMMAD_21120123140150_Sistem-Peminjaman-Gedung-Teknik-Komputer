<?php
// Menerima data dari form
$classId = $_POST['class_id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$borrow_time = $_POST['borrow_time'];
$return_time = $_POST['return_time'];
$notes = $_POST['notes'];
$file = $_FILES['file'];
?>

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

    echo "Terima Kasih telah merequest!";
}
?>
    <h1>Request Peminjaman Kelas Berhasil!</h1>
        <p><strong>ID Kelas:</strong> <?php echo htmlspecialchars($classId); ?></p>
        <p><strong>Nama:</strong> <?php echo htmlspecialchars($name); ?></p>
        <p><strong>Nomor Telepon:</strong> <?php echo htmlspecialchars($phone); ?></p>
        <p><strong>Waktu Mulai Meminjam:</strong> <?php echo htmlspecialchars($borrow_time); ?></p>
        <p><strong>Waktu Selesai Meminjam:</strong> <?php echo htmlspecialchars($return_time); ?></p>
        <p><strong>Keterangan:</strong> <?php echo nl2br(htmlspecialchars($notes)); ?></p>
</div>

</body>
