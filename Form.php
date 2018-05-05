<?php 
//session_start();
$_SESSION["session"] = "session";

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Human Race Nation</title>
<style>
body{background:#59ABE3;margin:0}
.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}
.tombol {
	width:40%;
	height: 40px;
	background-color: solid grey;
	color: #f8b195;
}

.btn {
  border: 2px solid gray;
  color: gray;
  background-color: white;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 20px;
  font-weight: bold;
}

.btnsubmit{
  border: 2px solid gray;
  color: gray;
  background-color: #f8b195;
  padding: 8px 8px;
  border-radius: 8px;
  font-size: 20px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
.container {
    display: block;
    position: relative;
    padding-top: 5px;
    padding-left: 35px;
    margin-bottom: 18px;
    cursor: pointer;
    font-size: 15px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #f8b195;
}
.checkmarkRadio {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #f8b195;
    border-radius: 50%;
}
.container:hover input ~ .checkmark {
    background-color: #ccc;
}
.container:hover input ~ .checkmarkRadio {
    background-color: #ccc;
}
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}
.container input:checked ~ .checkmarkRadio {
    background-color: #2196F3;
}
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}
.checkmarkRadio:after {
    content: "";
    position: absolute;
    display: none;
}
.container input:checked ~ .checkmark:after {
    display: block;
}
.container input:checked ~ .checkmarkRadio:after {
    display: block;
}
.container .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
.container .checkmarkRadio:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border-radius: 50%;
    background : #2196F3;
}
.form{width:40%;height:40%;background:#e6e6e6;border-radius:15px;box-shadow:0 0 40% -10% #000;margin:calc(50vh - 220px) auto;padding:2% 3%;max-width:calc(100vw - 40px);box-sizing:border-box;font-family:'Montserrat',sans-serif;position:relative}
h2{margin:10px 20px;padding-bottom:10px;width:130px;color:#78788c;border-bottom:3px solid #78788c}
input{width:100%;padding:10px;box-sizing:border-box;background:none;outline:none;resize:none;border:0;font-family:'Montserrat',sans-serif;transition:all .3s;border-bottom:2px solid #bebed2}
input:focus{border-bottom:2px solid #78788c}
p:before{content:attr(type);display:block;margin:28px 0 0;font-size:17px;padding-bottom:8px;color:#5a5a5a}
button{float:center;padding:5px 20px;margin:8px 0 0;font-family:'Montserrat',sans-serif;border:2px solid #78788c;background:#f8b195;color:#5a5a6e;cursor:pointer;transition:all .3s}
button:hover{background:#78788c;color:#fff}
div{content:'Hi';position:absolute;bottom:-15px;right:-20px;background:#50505a;color:#fff;width:320px;padding:16px 4px 16px 0;border-radius:6px;font-size:13px;box-shadow:10px 10px 40px -14px #000}
.centerImage
{
display: block;
    margin-left: auto;
    margin-right: auto;
    padding-top: 10%;
}
.centerImage2
{
display: block;
    width: 300px;
    height: 150px;
    margin-left: auto;
    margin-right: auto;
    padding-top: 20px;
    margin-top: 30px;
}
</style>
</head>
<body>
	<img src="http://i1066.photobucket.com/albums/u405/MikailGbrn/judul.png?t=1520436886" class="centerImage" width="400" height="250">
	<form class="form" action="router.php" method="POST">

		<!-- judul -->
		<h2>PROVE IT!</h2>

		<!-- select button -->
		<p type="Select Your Human Title :">
		<select name="select">
  			<option value="Mr">Mr</option>
 		    <option value="Ms">Ms</option>
 		    <option value="Mrs">Mrs</option>
 		    <option value="Miss">Miss</option>
		</select>
		</p>

		<!-- nama -->
		<p type="Name:"><input type="text" placeholder="Write your human name.." name="nama"></p>

		<!-- email -->
		<p type="E-mail Address:"><input placeholder="Write your real E-mail.." name="email"></input></p>

		<!-- checkbox -->
		<p type="Your Human Interest">
      <label class="container">Music
       <input type="checkbox" name="check_list[]" value="Music">
          <span class="checkmark"></span>
      </label>
      <label class="container">Sport
       <input type="checkbox" name="check_list[]" value="Sport">
          <span class="checkmark"></span>
      </label>
      <label class="container">Movie
       <input type="checkbox" name="check_list[]" value="Movie">
          <span class="checkmark"></span>
      </label>
      <label class="container">Fashion
       <input type="checkbox" name="check_list[]" value="Fashion">
          <span class="checkmark"></span>
      </label>
      <label class="container">Automotive
       <input type="checkbox" name="check_list[]" value="Automotive">
          <span class="checkmark"></span>
      </label>
    </p>

			<!-- radiobutton -->
		<p type="Your Human Gender :">
			<label class="container">Male
  			<input type="radio" checked="checked" name="radio" value="Male">
			  <span class="checkmarkRadio"></span>
			</label>
			<label class="container">Female
  			<input type="radio" name="radio" value="Female">
 			 <span class="checkmarkRadio"></span>
			</label>
			<label class="container">Others...
  			<input type="radio" name="radio" value="Crossgender">
 			 <span class="checkmarkRadio"></span>
			</label>
		</p>

		<!-- text area -->
		<p type="Your Human Motto of Life :">
			<textarea rows="4" cols="50" name="motto[]">
			</textarea>
		</p>

		<p type="Upload Your Face to Prove You're Human :">
		<label class="upload-btn-wrapper" style="padding-left: 100px">
  <button class="btn">Upload a file</button>
  <input type="file" name="myfile" />
</label>
</p>	

<p class="centerImage2"><input type="image" src="http://i1066.photobucket.com/albums/u405/MikailGbrn/submit.png?t=1520436880" alt="Submit" /></p>

	</form>
  

	<!-- <a href="http://localhost/input.php"><img src="http://i1066.photobucket.com/albums/u405/MikailGbrn/submit.png?t=1520436880" class="centerImage2" width="400" height="250"></a>-->
</body>
</html>
