
<!DOCTYPE html>
<html>
<head>
    <title>Home Page - Peminjaman Kelas</title>
    <link rel="stylesheet" href="./homestyle.css">
</head>
<body>
    <div class="container">
        <nav>
        <?php 
            include ("userService.php");

            $user = new userService($_POST['email'], $_POST['password']);

            if ($get_user = $user->login()) {
                echo 'Selamat datang '.$user->getRole();
            } else {
                echo 'Invalid login!';
            }
        ?>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Rooms</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>

    </div>

    <section>
        <div class="title"> 
            <h1>Peminjaman Kelas</h1>
            <div class="line"></div>
        </div>

        <div class="card-container">
        <?php
        include 'classes.php';
        foreach ($classes as $class) {
            echo '<div class="card"><a href="room.php?id=' . $class['id'] . '">' . $class['name'] . '</a></div>';
        }
        ?>
        </div>


        <div class="room_box">
            <div class="room_card">
                <div class="room_img"> 
                    <img src="./img1.jpg">
                </div>
                <div class="room_info"> 
                    <h2>A201</h2>
                    <p>ini deskripsi</p>
                    <h3>jam operasional:</h3>
                    <a href="#" class="room_btn">Request Pinjam</a>
                </div>
            </div>
        
            <div class="room_card">
                <div class="room_img"> 
                    <img src="./img1.jpg">
                </div>
                <div class="room_info"> 
                    <h2>A202</h2>
                    <p>ini deskripsi</p>
                    <h3>jam operasional:</h3>
                    <a href="#" class="room_btn">Request Pinjam</a>
                </div>
            </div>

            <div class="room_card">
                <div class="room_img"> 
                    <img src="./img1.jpg">
                </div>
                <div class="room_info"> 
                    <h2>B101</h2>
                    <p>ini deskripsi</p>
                    <h3>jam operasional:</h3>
                    <a href="#" class="room_btn">Request Pinjam</a>
                </div>
            </div>

            <div class="room_card">
                <div class="room_img"> 
                    <img src="./img1.jpg">
                </div>
                <div class="room_info"> 
                    <h2>B102</h2>
                    <p>ini deskripsi</p>
                    <h3>jam operasional:</h3>
                    <a href="#" class="room_btn">Request Pinjam</a>
                </div>
            </div>

            <div class="room_card">
                <div class="room_img"> 
                    <img src="./img1.jpg">
                </div>
                <div class="room_info"> 
                    <h2>B201</h2>
                    <p>ini deskripsi</p>
                    <h3>jam operasional:</h3>
                    <a href="#" class="room_btn">Request Pinjam</a>
                </div>
            </div>
        </div>
    </section>


</body>
</html>

