

<?php
error_reporting(0);
session_start();
  /* DATABASE CONNECTION*/


      $connection = mysqli_connect('10.104.164.132','root','Sabc123*','Company');
      if(!$connection){
          die("Cannot Establish A Secure Connection To The Host Server At The Moment!");
      }
/*
      try{
          $db = new PDO('mysql:dbhost=localhost;dbname=Company;charset=utf8','root','Sabc123*');


      }
      catch(Exception $e){

          die('Cannot Establish A Secure Connection To The Host Server At The Moment!');
      }*/

      /*DATABASE CONNECTION */



?>
