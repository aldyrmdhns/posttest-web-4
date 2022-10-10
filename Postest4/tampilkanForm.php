<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> MEBEL SINAR PUTRA </title>
        <link rel="stylesheet" href="style_php.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="main.js"></script>
    </head>

    <body>
        <header class="sub-head">
            <nav>
                <a href="index.html"><img src="images/logo.png"></a>
                <div class="nav-links">
                    <ul>
                        <li> <a href="index.php"> HOME </a></li>
                        <li> <a href="produk.html"> PRODUCT </a></li>
                        <li> <a href="about.html"> ABOUT ME </a></li>
                        <li> <a href="orderHere.php"> ORDER HERE </a> </li>
                    </ul>
                </div>
            </nav>
            <h1> THIS IS YOUR ORDER, <br> THANK YOU FOR TRUSTING US!!!</h1>
        </header>

        <div class="phpnya">
            <div class="echoes">
                <?php 
                $nama = $_POST['nama'];
                echo "Nama Pemesan        : ".$nama."<br>"; 
                ?>
            </div>
            <br>
            <div class="echoes">
                <?php
                $alamat = $_POST['alamat'];
                echo "Alamat Pemesan      : ".$alamat."<br>"; 
                ?>
            </div>
            <br>
            <div class="echoes">
                <?php
                $nomorhp = $_POST['nomorhp'];
                echo "Nomor HP Pemesan    : ".$nomorhp."<br>"; 
                ?>
            </div>
            <br>
            <div class="echoes">
                <?php
                $barang = $_POST['barang'];
                echo "Barang Yang Dipesan : ".$barang."<br>"; 
                ?>
            </div>
            <br>
            <div class="echoes">
                <?php
                $panjang = $_POST['panjang'];
                echo "Panjang Barang      : ".$panjang." Cm <br>"; 
                ?>
            </div>
            <br>
            <div class="echoes">
                <?php
                $tinggi = $_POST['tinggi'];
                echo "Tinggi Barang       : ".$tinggi." Cm <br>"; 
                ?>
            </div>
            <br>
            <div class="echoes">
                <?php
                $metode = $_POST['metode'];
                echo "Metode Pembayaran   : ".$metode."<br>"; 
                ?>
            </div>
            <br>
            <div class="echoes">
                <?php
                $gambar = $_POST['gambar'];
                echo "Contoh Gambar       : ".$gambar."<br>"; 
                ?>
            </div>
        </div>

        <script src="main.js"></script>
    </body>
</html>

