<?php
$classId = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Request Peminjaman</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 500px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="datetime-local"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="file"] {
            margin-bottom: 20px;
        }

        input[type="submit"] {
            width: 100%;
            background: #007bff;
            color: #fff;
            border: none;
            padding: 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Request Peminjaman Kelas</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="class_id" value="<?php echo $classId; ?>">
            <label for="name">Nama:</label><br>
            <input type="text" name="name" id="name" required><br>
            <label for="phone">Nomor Telepon:</label><br>
            <input type="text" name="phone" id="phone" required><br>
            <label for="borrow_time">Waktu Mulai Meminjam:</label><br>
            <input type="datetime-local" name="borrow_time" id="borrow_time" required><br>
            <label for="return_time">Waktu Selesai Meminjam:</label><br>
            <input type="datetime-local" name="return_time" id="return_time" required><br>
            <label for="notes">Keterangan:</label><br>
            <textarea name="notes" id="notes" rows="4" cols="50"></textarea><br>
            <label for="file">Upload Dokumen:</label><br>
            <input type="file" name="file" id="file"><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
