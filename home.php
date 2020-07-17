

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Dashboard Sanwa Lili</title>
 <link rel="stylesheet" href="../asset/defaullt.css">
 <link rel="stylesheet" href="../asset/font/css/all.css" />
 <style type="text/css">

 	* {
 padding: 0;
 margin: 0;
}
body {
 background: #E7E7E7FF;
}
.aaa {
  font-family: sans-serif;
  background: #d5f0f3;
}

h1 {
  text-align: center;
  /*ketebalan font*/
  font-weight: 300;
}

.art-sheet{
    border-top: 1px solid #FEFEFE; 
    clear: both;
    width: 950px;
    margin: 2px auto 0;
    background: white;
    color: #000000;
    text-align:left;
}
.tulisan_login {
  text-align: center;
  /*membuat semua huruf menjadi kapital*/
  text-transform: uppercase;
}

.kotak_login {
  width: 350px;
  background: white;
  /*meletakkan form ke tengah*/
  margin: 20px auto;
  padding: 30px 20px;
  margin-left: 0px;
}

label {
  font-size: 11pt;
}

.form_login {
  /*membuat lebar form penuh*/
  box-sizing: border-box;
  width: 100%;
  padding: 10px;
  font-size: 11pt;
  margin-bottom: 20px;
}

.tombol_login {
  background: #46de4b;
  color: white;
  font-size: 11pt;
  width: 100%;
  border: none;
  border-radius: 3px;
  padding: 10px 20px;
}
.tombol_cancel {
  background: #f3061c;
  color: white;
  font-size: 11pt;
  width: 100%;
  border: none;
  border-radius: 3px;
  padding: 10px 20px;
}

.link {
  color: #232323;
  text-decoration: none;
  font-size: 10pt;
}

.navbar {
 width: 100%;
 height: 60px;
 background: #32cdff;
 border-bottom: 2px solid #585858FF;
}
.sidebar {
 width: 70px;
 height: 1120px;
 background: #3A3A3AFF;
 float: left;
}
.asd {
	margin-right: 10px: 
}
/*.wrapper {
 width: 1270px;
 height: 549px;
 background: #E7E7E7FF;
 float: left;
 margin:5px;
}*/
.box5 {
 width: 250px;
 height: 170px;
 background: #7ee0ea;
 float: left;
 box-shadow: 2px 4px 4px grey;
 cursor: pointer;
 margin-right: 10px;
 margin-left: 50px;
}
.box1 {
 width: 250px;
 height: 150px;
 background: #5AAA4CFF;
 float: left;
 box-shadow: 2px 4px 4px grey;
 cursor: pointer;
}
.box2 {
 width: 250px;
 height: 150px;
 background: #1000ff;
 float: left;
 margin-left: 30px;
 box-shadow: 2px 4px 4px grey;
 cursor: pointer;
}
.box3 {
 width: 250px;
 height: 150px;
 background: #DC7E3BFF;
 float: left;
 margin-left: 30px;
 box-shadow: 2px 4px 4px grey;
 cursor: pointer;
}
.box4 {
 width: 250px;
 height: 150px;
 background: #F74C4FFF;
 float: left;
 margin-left: 30px;
 box-shadow: 2px 4px 4px grey;
 cursor: pointer;
}
.boxx {
 width: 1140px;
 height: 150px;
 margin-top: 20px;
 margin-left:170px;
}
.admin {
 color: white;
 font-size: 35px;
 line-height: 60px;
 margin-left: 20px;
}
.btn {
 width: 70px;
 height: 40px;
 background: #3A3A3AFF;
 border: none;
 border-bottom: 1px solid #666666FF;
 color: white;
 cursor: pointer;
 outline-color: #3A3A3AFF;

}
.btnt {
 width: 70px;
 height: 40px;
 background: #2D2D2DFF;
 border: none;
 border-bottom: 1px solid #666666FF;
 color: white;
 cursor: pointer;
 outline-color: #2D2D2DFF;
 
}
.btnn {
 width: 70px;
 height: 40px;
 background: #595959FF;
 border: none;
 border-bottom: 1px solid #666666FF;
 color: white;
 cursor: pointer;
 outline-color: #595959FF;
}
.btn:hover {
 background: #595959FF;
}
.btnn:hover {
 background: #353535FF;
}
.title {
 width: 120px;
 height: 150px;
 float: right;
}
.int {
 color: white;
 margin: 30px 0px;
}
.intt {
 color: white;
 margin: 30px -40px;
}
.inttt {
 color: white;
 margin: 30px 30px;
}
.intttt {
 color: white;
 margin: 30px 30px;
}
.box1:hover {
 background: #529646FF;
}
.box2:hover {
 background: #5160B4FF;
}
.box3:hover {
 background: #F1873AFF;
}
.box4:hover {
 background: #CF4330FF;
}
.insert {
 margin-top: 40px;
 margin-left: 20px;
 width: 150px;
 height: 30px;
 background: #507AC7FF;
 border:none;
 color: white;
 font-weight: bold;
 box-shadow: 2px 2px 4px grey;
 cursor: pointer;
}
.insert:hover {
 background: #335FFFFF;
}
.hapus {
 width: 20px;
 height: 20px;
 background: #FF1919FF;
 border: none;
 color: white;
 border-radius: 3px;
 cursor: pointer;
 margin-left: 30px;
}
.edit {
 width: 20px;
 height: 20px;
 background: #0808BDFF;
 border: none;
 color: white;
 margin-left: 5px;
 border-radius: 3px;
 cursor: pointer;
}
.dasare {
 width: 500px;
 height: 300px;
 margin:30px auto;
 border-radius: 20px;
 border: 1px solid #D9D9D9FF;
}
.in {
 width: 400px;
 margin-left: 50px;
 margin-top: 50px;
 height: 40px;
 background: none;
 border :1px solid #55B6FFFF;
 border-radius: 20px;
 outline:none;
 text-align: center;
}
.inn {
 width: 400px;
 margin-left: 50px;
 margin-top: 10px;
 height: 40px;
 background: none;
 border :1px solid #55B6FFFF;
 border-radius: 20px;
 text-align: center;
 outline: none;
}
.innn {
 margin-left: 50px;
 margin-top: 10px;
}
.sbm {
 width: 148px;
 height: 30px;
 background-color: #5180EEFF;
 border: none;
 color: white;
 font-weight: bold;
 box-shadow: 2px 2px 3px grey;
}
 </style>
</head>


<body>
 <div class="navbar">
  <h3 class="admin">Dashboard Admin Sanwa &nbsp;<img src="ssi.jpg" height="50" style="margin-bottom: -13px"><img src="5.jpg" height="50" style="margin-bottom: -13px"></h3>
 </div>
 <div class="sidebar">
  <div class="nav"></div>
  <a>
  <button class="btnt"><i style="margin-right: 5px" class="fa fa-home"></i>Injection</button><br>
  <button class="btn"><i style="margin-right: 5px" class="fa fa-book"></i>Painting</button><br>
  <button class="btn"><i style="margin-right: 5px" class="fa fa-list"></i>Laser</button><br>
  <button class="btn"><i style="margin-right: 5px" class="fa fa-lock"></i>Printing Press</button><br>
  <button class="btnn"><i style="margin-right: 5px" class="fa fa-user"></i>QC</button><br>
 </div>
 <div class="wrapper">
  <div class="boxx">
   <div class="box1">
    <i class="fa fa-home fa-5x" style="color: white;margin:30px 20px"></i>
    <div class="title"><h2 class="int">Dashboard</h2></div>
   </div>
   <div class="box2">
    <i class="fa fa-book fa-5x" style="color: white;margin:30px 20px"></i>
    <div class="title"><h2 class="int">About</h2></div>
   </div>
   <div class="box3">
    <i class="fa fa-list fa-5x" style="color: white;margin:30px 20px"></i>
    <div class="title"><h2 class="int">Visi Misi</h2></div>
   </div>
   <div class="box4">
    <i class="fa fa-unlock fa-5x" style="color: white;margin:30px 20px"></i>
    <div class="title"><h2 class="intt">Organizational Structure</h2></div>
   </div>
  </div>
 </div>

 <br>
 	<div class="wrapper">
  	<div class="boxx">
	   	<!-- <div class="box5">
	    		<div class="">
			   	&nbsp;PT. Sanwa Screen Indonesia adalah &nbsp;suatu Perusahaan yang bergerak di &nbsp;bidang Automotive di Kawasan &nbsp;Industri MM2100. Yang dimana &nbsp;perusahaan ini bergerak untuk &nbsp;memenuhi kebutuhan Konsumen &nbsp;yang ingin membeli kendaraan beroda &nbsp;empat.
			   </div>
	    </div> -->

   		<div class="kotak_login">
		  <p class="tulisan_login">Silahkan login</p>

		  <form>
		    <label>Username</label>
		    <input type="text" name="username" class="form_login" placeholder="Username atau email ..">

		    <label>Password</label>
		    <input type="text" name="password" class="form_login" placeholder="Password ..">

		    <input type="submit" class="tombol_login" value="LOGIN">

		    <br/>
		    <br/>
		    <center>
		    <input type="submit" class="tombol_cancel" value="CANCEL">
		    </center>
		  </form>

			<!-- <div class="box5">
		    	<i class="fa fa-home fa-5x" style="color: white;margin:30px 20px"></i>
		    	<div class="title"><h2 class="int">Dashboard</h2></div>
		   </div> -->
		</div>
   		<div> &nbsp; &nbsp; &nbsp; <img src="sanwa.jpg" width="670px" height="300" style="margin-left: 400px; margin-top: -420px; margin-bottom: 39px;"></div>
	


    <<?php
include_once 'index.php';
?>

  </div>


</body>
</html>


