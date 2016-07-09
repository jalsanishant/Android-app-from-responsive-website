<?php
   ob_start();
   session_start();
?>

<?
   error_reporting(E_ALL);
   ini_set("Errors_List", 1);
?>

<html lang = "en">
   
   <head>
      <title>JalsaNishant</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>
         body {
            padding-top: 30px;
            padding-bottom: 30px;
            background-color: #AAAAAA;
         }
         
         .form-signin {
            max-width: 90px;
            padding: 10px;
            margin: 1 auto;
            color: #010101;
         }

<input type = "password" class = "form-control"
       name = "password" placeholder = "password = 123" required>
<button class = "btn btn-lg btn-primary btn-block" type = "submit" 
       name = "login">Login</button>