<?php
@session_start();
include'../kn/koneksi.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>RJR</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
<div id="canvas">

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
            <li><a href="http://localhost/TugasAkhir/Login.php">Logout</a></li>
            </ul>
            </li>
      </ul>
    </div>

    <div align="center" id="isi">
      <ul>
        <li>
          KENALI GEJALANYA Jangan Panik!!!!
        </li>
        <li>
          Kenali gejalanya dan deteksi virus corona sejak dini.
        </li>
        <li>
          Hanya perlu mengatur jarak, hindari bersalaman dan bila sakit memakai masker, dan jaga kebersihan
        </li>
        <li>
          <img src="poster.png" alt="">
        </li>
        <li>Poster by <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.cnbcindonesia.com%2Fnews%2F20200302184039-4-141874%2Fkena-gejala-mirip-covid-19-anies-kami-akan-jemput&psig=AOvVaw3KFeNqdtkuOsmET4Gh0HAk&ust=1587710520336000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCKCgtOH4_egCFQAAAAAdAAAAABAZ">CNBC INDONESIA</a></li>
        <li>👇🏻Dan Juga Kalian bisa melakukan test online gratis COVID-19👇🏻</li>
      </ul>
    </div>

    <div align="center" id="tombol">
      <ul>
        <li>
        <a href="Form.php"><button type="submit" class="btn btn-success" >Test Covid-19</button></a>
        </li>
      </ul>
    </div>

    <div align="center" id="isi">
      <ul>
        <li>Kenali cara-cara mencegah virus corona (Covid-19) ini</li>
        <li>Karena mencegah itu lebih baik daripada mengobati</li>
        <img src="poster2.png" alt="">
      </ul>
    </div>

    <div id="footer">
      Copyright 2020 - RJR_MV.
    </div>
</div>
  </body>
</html>
