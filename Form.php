<!DOCTYPE html>
<html>
  <head>
    <title>RJR</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
<div id="canvas">
    <form class="" action="hasil.php" method="post">

    <div align="center" id="header">
      <img src="BahanWEB.png" alt="">
      <li>Layanan Kesehatan Check COVID-19</li>
    </div>

    <div id="menu">
      <ul>
        <li class="utama"><a href="http://localhost/TugasAkhir/index.php">Beranda</a></li>
        <li class="utama"><a href="">About</a></li>
        <li class="utama"><a href="">Akun</a>
            <ul>
              <li><a href="">Login</a></li>
              <li><a href="">Logout</a></li>
            </ul>
            </li>
      </ul>
    </div>


    <form id="isi" action="" method="post">
    <div align="center" id="isi">
      <ul>
        <li>1. Apakah Anda mengalami salah satu dari yang berikut:
Kesulitan bernafas yang parah (Bernafas dengan sangat cepat atau berbicara dalam satu kata)
(Nyeri dada yang parah),
(Sulit untuk bangun),
(Merasa kebingungan),
(Penurunan kesadaran)?
        </li>
        <li align="center">
          <input type="radio" name="pilihan1" value="y">Iya
          <input type="radio" name="pilihan1" value="t">Tidak
        </li>

        <li>2. Apakah Anda mengalami salah satu dari yang berikut:
Nafas yang pendek saat istirahat
Ketidakmampuan untuk berbaring karena kesulitan bernafas
Kondisi kesehatan kronis yang anda alami dirasakan lebih berat karena kesulitan bernapas?
        </li>
        <li align="center">
          <input type="radio" name="pilihan2" value="y">Iya
          <input type="radio" name="pilihan2" value="t">Tidak
        </li>

        <li>3. Apakah Anda mengalami salah satu dari yang berikut:
(Demam)
(Batuk)
(Bersin)
(Sakit Tenggorokan)
(Sulit Bernafas)
        </li>
        <li align="center">
          <input type="radio" name="pilihan3" value="y">Iya
          <input type="radio" name="pilihan3" value="t">Tidak
        </li>

        <li>4. Apakah anda pernah muncul gejala sekitar 14 hari setelah travelling ke luar negeri?
          (China, Italy, Iran, Korea Selatan, Prancis, Spanyol, Jerman, USA) atau
          ke kota terjangkit (Jakarta, Bali, Solo, Yogyakarta, Pontianak, Manado, Bandung dll)?
        </li>
        <li align="center">
          <input type="radio" name="pilihan4" value="y">Iya
          <input type="radio" name="pilihan4" value="t">Tidak
        </li>

        <li>5. Apakah Anda memberikan perawatan atau melakukan kontak dekat dengan seseorang dengan COVID-19 (kemungkinan atau dikonfirmasi)
          saat mereka sakit (batuk, demam, bersin, atau sakit tenggorokan)?
        </li>
        <li align="center">
          <input type="radio" name="pilihan5" value="y">Iya
          <input type="radio" name="pilihan5" value="t">Tidak
        </li>

        <li>6. Apakah Anda memiliki kontak dekat dengan seseorang yang bepergian ke luar Negeri
          dalam 14 hari terakhir yang menjadi sakit (batuk, demam, bersin, atau sakit tenggorokan)?
        </li>
        <li align="center">
          <input type="radio" name="pilihan6" value="y">Iya
          <input type="radio" name="pilihan6" value="t">Tidak
        </li>
      </ul>
    </div>

    <div align="center" id="tombol">
      <ul>
        <li>
        <input type="submit" name="sub" value="Ketahui Hasilnya"></a>
        </li>
      </ul>
    </div>
  </form>
    </form>
    <?php
    $pilihan1=@$_POST["pilihan1"];
    $pilihan2=@$_POST["pilihan2"];
    $pilihan3=@$_POST["pilihan3"];
    $pilihan4=@$_POST["pilihan4"];
    $pilihan5=@$_POST["pilihan6"];
    $pilihan6=@$_POST["pilihan7"];
    $sub=@$_POST["sub"];


    if ($sub) {
      if ($pilihan1 == 'y' || $pilihan2 == 'y' || $pilihan3 == 'y' || $pilihan4 == 'y' || $pilihan5 == 'y' || $pilihan6 == 'y') {
        header("location: hasil2.php");
      }else {
        header("location: hasil.php");
      }
    }

     ?>
    <div id="footer">
      Copyright 2020 - RJR_MV.
    </div>
</div>
  </body>
</html>
