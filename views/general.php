<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    //session_start();
    //$name = $_SESSION['username'];
    //if ($_SESSION['timeout'] + 10*60 < time()) {
      //    unset($_SESSION['username']);
    //      $_SESSION = array();
          //DELETES THE COOKIES
    //      if (isset($_COOKIE[session_name()])) {
    //            setcookie(session_name(), '', time() - 42000, '/');
                //header("Location: ../views/login.php");
    //          }
    //     }else{}
    include ('head.php');
    include('header.php');
?>
  <body>
<!--      /////////////////////////////////////////////     START SECTION  ///////////////////////////////////////////--->
    <div id="page-wrapper">
      <div ui-view></div>
    </div>
<!--     /////////////////////////////////////////////     END SECTION ///////////////////////////////////////////--->
<?php include '../views/footer.php';?>
  </body>
</html>
