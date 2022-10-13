<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="svg/icon.svg" />

    <link rel="stylesheet" href="stylesheet/pesananphp.css" />

    <title>Toko Tanaman Polaris</title>
  </head>
  <body>
   
    <div class="header">
      <nav>
        <div class="header-logo">Toko Tanaman Polaris</div>
            <ul class="navbar">
          <li>
            <a href="index.html"> Home </a>
          </li>
          <li>
            <a class="about" href="about.html"> About </a>
          </li>
          <li>
            <a href="katalog.html"> Katalog </a>
          </li>
          <li>
            <img src="Assets/moon.png" alt="dark" id="icon" />
          </li>
        </ul>
      </nav>
    </div>
    <div class="main">
      <div class="copy-container">
        <div class="container">
          <h1 id="sub-judul">Toko Tanaman Polaris</h1>
          
          <h3 class="tanaman-title">Pesanan</h3>
        </div>
        <div class="contents" style="display: none" id="pesan">
        <div class="request-form">
                <div id="form">
                <?php
                if(isset($_POST['Kirim'])){
                    echo "Nama :  ".$_POST['nama'];
                    echo "<br/>";
                    echo "<br/>";
                    echo "Email :  ".$_POST['email'];
                    echo "<br/>";
                    echo "<br/>";

                    if(!empty($_POST['tanaman'])) {

                        foreach($_POST['tanaman'] as $value){
                            echo "Tanaman :  ".$value.'<br/>';
                        }
                    }
                    echo "<br/>";
                    echo "<br/>";
                    echo " Jumlah :".$_POST['jumlah'];
                    echo "<br/>";
                    echo "<br/>";
                    echo "Alamat : ".$_POST['alamat'];
                    echo "<br/>";
                    echo "<br/>";
                    echo "Keterangan :".$_POST['keterangan'];
                    echo "<br/>";
                    echo "<br/>";
                    echo "Pembayaran :".$_POST['pembayaran'];
                    echo "<br/>";
                    echo "<br/>";
                    echo "Waktu Pemesanan :  ".$_POST['waktu_req'];
                    echo "<br/>";
                    echo "<br/>";

                }
            ?>
            </div>
            </div>
            </div>
            </div>
            </div>
            
    <footer class="footer">
      <div class="footer-logo">Toko Tanaman Polaris</div>
      <hr />
      <p>Copyright &copy 2022 All Rights Reserved by Riska Nurliyanti</p>
    </footer>
    <script>
      var icon = document.getElementById("icon");

      icon.onclick = function () {
        document.body.classList.toggle("dark-theme");
        if (document.body.classList.contains("dark-theme")) {
          icon.src = "Assets/sun.png";
          alert("Dark-Mode Berhasil!");
          const desk = document.getElementById("det");
          desk.style.fontStyle = "italic";
        } else {
          icon.src = "Assets/moon.png";
          alert("Light-Mode Berhasil!");
          const desk = document.getElementById("det");
          desk.style.fontStyle = "normal";
        }
      };

    </script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
  </body>
</html>




