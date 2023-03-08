<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LOG IN</title>
</head>
<style type="text/css">
  body{
    margin: 0;
    padding: 0;
    font-family: Candara;
    background: linear-gradient(#CDB3D4,#E7B7C8,#FFBE88); // warna pa ni buruk ah
    height: 100vh;
    overflow: hidden;
  }
  .center{
    position: absolute;
    top: 50%;
    left: 20%;
    transform: translate(50% ,-50%);
    width: 400px;
    background: white;
    border-radius: 10px;
  }
  .center h1{
    text-align: center;
    padding: 0 0 20px 0;
    border-bottom: 1px solid silver;
    }
    .center form{
      padding:0 40px;
      box-sizing: border-box;
    }
    form .txt_field{
      position: relative;
      border-bottom: 2px solid #adadad;
      margin: 30px 0;
    }
    .txt_field input{
      width: 100%;
      padding: 0 5px;
      height: 40px;
      font-size: 16px;
      border: none;
      background: none;
      outline: none;
    }
    .txt_field label{
      position: absolute;
      top: 50px;
      left: 5px;
      color: #adadad;
      transform: translateY(-50%);
      font-size: 16px;
      pointer-events: none;
      transition: .5s;
    }
    .txt_field span::before{
      content: '';
      position: absolute;
      top: 40px;
      left: 0;
      width: 0%;
      height: 2px;
      background: #2691d9;
    }
    .txt_field input:focus ~ label,
    .txt_field input:valid ~ label{
        top: -5px;
      color: #2691d9;
    }
    .txt_field input:focus ~ span::before,
    .txt_field input:valid ~ span::before{
      width: 100%;
    }
    .pass:hover{
      text-decoration: underline;
    }
    input[type="submit"]{
      width: 30%;
      height: 30px;
      border: 1px solid;
      background: #2691d9;
      border-radius: 25px;
      font-size: 18px;
      color: #e9f4fb;
      font-weight: 200;
      cursor: pointer;
      outline: none;
    }
    input[type="submit"]:hover{
      border-color: #2691d9;
      transition: .2s;
    }

</style>
<center>
<body>

  <div class="center">
    <h1>Login</h1>
    <form  method ="post"  action="">
      <div class="txt_field">
        <input type="text" required>
        <label>Username</label>
      </div>
  <div class="txt_field">
        <input type="password" required>
        <label>Password</label>
      </div>
      <div class="txt_field">
        <input type="id" required>
        <label>Id</label>
      </div>
      <a href="file:///C:/xampp/htdocs/HOTEL%20TEST/index.html">
      <input type="submit" value="Login">
    </a>
    </form>
  </div>
<?php
include ('config.php');

if (isset($_POST['id'])and isset($_POST['katalaluan'])) {

  $username = $_POST['username'];
  $password = $_POST['katalaluan'];
  $id = $_POST['id'];

  $query = "SELECT * FROM admin ='$username','$id',katalaluan ='$password'";

  $result = mysqli_query($link, $query) or die(mysqli_error($link));
  $count = mysqli_num_rows($result);

  if($count == 1){

    echo " <script type='text/javascript'>alert('Your login is successful')</script>";
    header("Location:index.php");
    }else{
      echo "<script type='text/javascript'>alert('Your login was no successful')</script>";
      header("Location:index.php");
      
    }
  }
  
  //ayam bermacam ayam
?>

</body>
</html>
s
