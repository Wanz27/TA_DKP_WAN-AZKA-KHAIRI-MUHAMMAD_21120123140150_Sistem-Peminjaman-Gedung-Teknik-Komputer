
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
                    <h3>jam operasional: </br>
                        Senin 08:00 - 10:00 </br>
                        Rabu 10:00 - 12:00
                    </h3>
                    <a href="#" class="room_btn">ID Kelas : 1</a>
                </div>
            </div>
        
            <div class="room_card">
                <div class="room_img"> 
                    <img src="./img1.jpg">
                </div>
                <div class="room_info"> 
                    <h2>A202</h2>
                    <p>ini deskripsi</p>
                    <h3>jam operasional: </br>
                    Selasa 09:00 - 11:00 </br>
                    Kamis 13:00 - 15:00
                    </h3>
                    <a href="#" class="room_btn">ID Kelas : 2</a>
                </div>
            </div>

            <div class="room_card">
                <div class="room_img"> 
                    <img src="./img1.jpg">
                </div>
                <div class="room_info"> 
                    <h2>B101</h2>
                    <p>ini deskripsi</p>
                    <h3>jam operasional: </br>
                    Selasa 09:00 - 11:00 </br>
                    Kamis 13:00 - 15:00
                    </h3>
                    <a href="#" class="room_btn">ID Kelas : 3</a>
                </div>
            </div>

            <div class="room_card">
                <div class="room_img"> 
                    <img src="./img1.jpg">
                </div>
                <div class="room_info"> 
                    <h2>B102</h2>
                    <p>ini deskripsi</p>
                    <h3>jam operasional: </br>
                    Selasa 09:00 - 11:00 </br>
                    Kamis 13:00 - 15:00
                    </h3>
                    <a href="#" class="room_btn">ID Kelas : 4</a>
                </div>
            </div>

            <div class="room_card">
                <div class="room_img"> 
                    <img src="./img1.jpg">
                </div>
                <div class="room_info"> 
                    <h2>B201</h2>
                    <p>ini deskripsi</p>
                    <h3>jam operasional: </br>
                    Selasa 09:00 - 11:00 </br>
                    Kamis 13:00 - 15:00
                    </h3>
                    <a href="#" class="room_btn">ID Kelas : 5</a>
                </div>
            </div>
            <div class="room_card">
                <div class="room_img"> 
                    <img src="./img1.jpg">
                </div>
                <div class="room_info"> 
                    <h2>B202</h2>
                    <p>ini deskripsi</p>
                    <h3>jam operasional: </br>
                    Selasa 09:00 - 11:00 </br>
                    Kamis 13:00 - 15:00
                    </h3>
                    <a href="#" class="room_btn">ID Kelas : 6</a>
                </div>
            </div>
        </div>
    </section>

    <footer> 
        <div class="footer_container"> 
            <div class="footer_content"> 
                <h3> Contact Us </h3>
                <p>Email: admin@gmail.com</p>
                <p>Phone: +628 1234 5678</p>
                <p>Address: Computer Engineering</p>
            </div>
        </div>
        <div class="bottom-bar"> 
            <p>&copy; 2024 Computer Engineering . All rights reserved </p>
        </div>
    </footer>


</body>
</html>

