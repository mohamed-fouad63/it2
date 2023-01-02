<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Acme|Lobster');

/* This allow me to have the full width of the page without the initial padding/margin*/
body, html {
  margin:0;
  padding:0;
  height: 100%;
  width:100%;
  font-family:system-ui;
  min-width:700px;
}

.splitdiv{
  height:100%;

}

/* This part contains all of the left side of the screen */
/* ----------------------------------------- */
#leftdiv{
  float:right;
  width:40%;
  background-color:#FAFAFA;
}

#leftdivcard{
  margin:0 auto;
  width:50%;
  background-color:white;
  margin-top: 50vh; 
  transform: translateY(-50%);
  /* box-shadow: 10px 10px 1px 0px rgba(78, 205, 196, .2); */
  border-radius:10px
}

#leftbutton{
    background-color:#2c3e50;
    border-radius:5px;
    color:#FAFAFA;
}

/* ----------------------------------------- */

/* This part contains all of the left side of the screen */
/* ----------------------------------------- */
#rightdiv{
  float:left;
  width:60%;
  background-color:#2c3e50;
}

#rightdivcard{
  margin:0 auto;
  width:50%;
  margin-top: 50vh;
  transform: translateY(-50%);
  background-image: linear-gradient(to right, white 33%,  rgba(255,255,255,0) 0%);
  background-position: bottom;
  background-size: 20px 2px;
  background-repeat: repeat-x;
}

#rightbutton{
    background-color:#FFFFFF;
    border-radius:5px;
    color:#2c3e50;
}
/* ----------------------------------------- */

/* Basic styling */
/* ----------------------------------------- */

h1{
  font-family:system-ui;
  color:#2c3e50
}

input{
  font-family:system-ui;
  font-size:16px;
  text-align:right
}

input{
  width:85%;
  height:40px;
  padding:10px;
  margin-left:2%;
  margin-right:2%;
  margin-top:10px;
  margin-bottom:10px;
  display:inline-block;
  background-color:#FAFAFA;
  border:none;
}

input {
    outline: none !important;
    border:1px solid #2c3e50;
    box-shadow: 0 0 5px #719ECE;
}

button{
  outline: none !important;
  font-family:system-ui;
  margin-bottom:15px;
  border:none;
  font-size:20px;
  padding:8px;
  padding-left:20px;
  padding-right:20px;
}

/* ----------------------------------------- */

/* Animation for the buttons from 

https://codepen.io/finnhvman/pen/jLXKJw

*/

.ripple {
  background-position: center;
  transition: background 0.8s;
}
.ripple:hover {
  background: #47a7f5 radial-gradient(circle, transparent 1%, #2c3e50 1%) center/15000%;
}
.ripple:active {
  background-color: #2c3e50;
  background-size: 100%;
  transition: background 0s;
}

.ripple2 {
  background-position: center;
  transition: background 0.8s;
}
.ripple2:hover {
  background: #47a7f5 radial-gradient(circle, transparent 1%, #FFFFFF 1%) center/15000%;
}
.ripple2:active {
  background-color: #FAFAFA;
  background-size: 100%;
  transition: background 0s;
}


  </style>
</head>
<body>
  <html>
  <!-- If you ever use this tell me and show me ! @kryze :) -->
  <body>
    <div style="height:100%;">
      
    <div class="splitdiv" id="leftdiv">
      <div id="leftdivcard">
        <h1 style="padding-top:20px;text-align:center">جنوب الشرقيه</h1>
          <input type="text" placeholder="رقم الملف" />
          <input type="password" placeholder="كلمه المرور" />
          <div style="text-align:center">
            <button id="leftbutton" class="ripple21">تسجيل الدخول</button>
          </div>
      </div>
    </div>
      
    <div class="splitdiv" id="rightdiv">
      <div id="rightdivcard">
        <h1 style="padding-top:20px;text-align:center;color:white">اداره الاجهزه و الاعمال الاداريه</h1>
        <p style="color:white;text-align:center">Do you want to discover new things ? Just Register !</p>
        <div style="text-align:center">
             <img src="../../../it2/assets/images/it1.svg" style="height:50vh" class="logo">
        </div>
      </div>
    </div>
      
    </div>
  </body>
</html>
</body>
</html>