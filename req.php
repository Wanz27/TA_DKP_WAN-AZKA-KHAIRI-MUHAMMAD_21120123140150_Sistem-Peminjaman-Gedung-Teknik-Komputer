<?php
$classId = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Request Peminjaman</title>
    <link rel="stylesheet" type="text/css" href="reqstyle.css">
</head>
<body>
    <div class="container">
        <h1>Request Peminjaman Kelas</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="class_id" value="<?php echo $classId; ?>">
            <div class="input_box"> 
                <label for="name">Nama:</label><br>
                <input type="text" class="input-field" name="name" id="name" placeholder="Wanz" required><br>
                <i class="bx bx-user"></i>
            </div>
            <div class="input_box"> 
                <label for="phone">Nomor Telepon:</label><br>
                <input type="text" class="input-field" name="phone" id="phone" placeholder="08XXXXX" required><br>
                <i class="bx bx-user"></i>
            </div>
            <div class="input_box"> 
                <label for="borrow_time">Waktu Mulai Meminjam:</label><br>
                <input type="datetime-local" class="input-field" name="borrow_time" id="borrow_time" required><br>
                <i class="bx bx-user"></i>
            </div>
            <div class="input_box"> 
                <label for="return_time">Waktu Selesai Meminjam:</label><br>
                <input type="datetime-local" class="input-field" name="return_time" id="return_time" required><br>
                <i class="bx bx-user"></i>
            </div>
            <div class="input_box"> 
                <label for="notes">Keterangan:</label><br>
                <textarea name="notes" class="input-field" id="notes" rows="4" cols="50"></textarea><br>
                <i class="bx bx-user"></i>
            </div>
            <div class="input_box"> 
                <label for="file">Upload Dokumen:</label><br>
                <label for="file" class="custom-file-upload">
                    Pilih File
                </label>
                <input type="file" name="file" id="file"><br>
                <span id="file-upload-status"></span>
                <i class="bx bx-user"></i>
            </div>
            <input type="submit" class="submit" value="Submit">
        </form>
    </div>
    <script> 
        document.getElementById('file').addEventListener('change', function() {
    var fileUploadStatus = document.getElementById('file-upload-status');
    if (this.files && this.files.length > 0) {
        fileUploadStatus.innerHTML = '✔ File Uploaded successfully ✔';  
    } else {
        fileUploadStatus.innerHTML = '';
    }
});
    </script>
</body>
</html>
