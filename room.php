<?php
include 'classes.php';
$classId = $_GET['id'];
$class = null;
foreach ($classes as $c) {
    if ($c['id'] == $classId) {
        $class = $c;
        break;
    }
}
if ($class === null) {
    echo "Kelas tidak ditemukan!";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Room Page - <?php echo $class['name']; ?></title>
    <link rel="stylesheet" type="text/css" href="roomstyle.css">
</head>
<body>
<div class="wrapper">
<div class="container">
<img src="img1.jpg" alt="<?php echo $class['name']; ?>" class="class-image">
    <h1><?php echo $class['name']; ?></h1>
    <p><?php echo $class['description']; ?></p>
    <h2>Jadwal</h2>
    <ul>
        <?php foreach ($class['schedule'] as $schedule) {
            echo '<li>' . $schedule . '</li>';
        } ?>
    </ul>
    <a href="req.php?id=<?php echo $class['id']; ?>">Request Peminjaman</a>
    </div>
</div>
</body>
</html>
