<?php
@session_start();
include'../kn/koneksi.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Halaman Login</title>
  <style type="text/css">
    body{
      font-family: arial;
      font-size: 14px;
      background-color: grey;
    }
    #utama{
      width: 300px;
      margin: 0 auto;
      margin-top: 12%;
    }
    #judul{
      padding: 15px;
      text-align: center;
      color: #fff;
      font-size: 20px;
      background-color: #37BCFF;
      border-top-right-radius: 10px;
      border-top-left-radius: 10px;
      border-bottom: 3px solid #37BCFF;
    }
    #inputan{
      background-color: #eaeaec;
      padding: 20px;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;
    }
    input{
      padding: 10px;
    }
    .pj{
      width: 235px;
    }
    .tulisan{
      font-size: 20px;
      font-style: arial;
    }
    .btn{
      background-color: green;
      border-radius: 8px;
      color: #afff;
    }
    .btn:hover{
      background-color: #33666;
      cursor: pointer;
    }
  </style>
  </head>
  <body>
    <div id="utama">

     <div id="judul">
      Halaman Login
     </div>

     <div id="inputan">
       <form action="" method="post">
         <div class="tulisan">
          Username
         </div>
         <div>
          <input type="text" name="user" placeholder="Username" class="pj">
         </div>

         <div style="margin-top:20px;" class="tulisan">
          Password
         </div>
         <div>
           <input type="password" name="pass" placeholder="password" class="pj">
         </div>
         <div align="center" style="margin-top:30px;">
           <input type="submit" name="login" value="Login" class="btn btn-success">
         </div>
       </form>

        <?php
          $user = @$_POST['user'];
          $user = @$_POST['pass'];
          $login = @$_POST['login'];

          if ($login) {
            if ($user == "" || $pass == "") {
              ?> <script type="text/javascript">alert("Username / Password Tidak Boleh Kosong")</script> <?php
            }else {
              $sql = mysql_query("select * from tb_login where username = '$user' and password = md5('$pass')") or die (mysql_error());
              $data = mysql_fetch_array($sql);
              $cek = mysql_num_rows($sql);

              if ($cek >= 1) {
                if ($data['level'] == "admin") {
                @$_SESSION['admin'] = $data['kode_user'];
                header("location: index.php");

              }elseif ($data['user'] == "user") {
                @$_SESSION['user'] = $data['kode_user'];
                header("location: index.php");
                }
              }else {
                echo "Login gagal";
              }
          }
      }
         ?>

     </div>

    </div>
  </body>
</html>
