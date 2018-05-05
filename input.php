<!DOCTYPE html>
<html>
<head>
	<title>CONGRATULATION!</title>
<style>
body{background:#59ABE3;margin:0}

.font {
  font-family: arial;
  font-weight: bold;
  text-align: center;
}

.font2 {
  font-size: 40px;
  color: #c15522;
  font-family: arial;
  font-weight: bold;
  text-align: center;
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
    margin-left: auto;
    margin-right: auto;
    padding-top: -30px;
    margin-top: -10px;
}
</style>
</head>
<body>
	<img src="http://i1066.photobucket.com/albums/u405/MikailGbrn/congrats.png?t=1520436886" class="centerImage" width="400" height="250">
	<form class="form">

  <p class="font centerImage2">HELLO<br></p>

    <p class="font2 centerImage2"><?php
  $select = $_REQUEST['select'];
  $nama = $_REQUEST['nama'];
  echo $select." ".$nama;
  ?><br></p>

  <p class="font centerImage2">As we can see, that you're a<br></p>

  <p class="font2 centerImage2">
    <?php
    $pilih = $_REQUEST['radio'];
    switch ($pilih){
    case "Male":
      echo "Male";
      break;
    case "Female":
      echo "Female";
      break;  
    case "Crossgender":
      echo "Crossgender";
      break; 
  }?>
<br></p>

  <p class="font centerImage2">and you really love<br></p>

  <p class="font2 centerImage2">
    <?php
foreach($_POST['check_list'] as $selected) {
echo $selected."<br>";
}
?>
<br></p>

    <p class="font centerImage2">and you have<br></p>

    <p class="font2 centerImage2">
    <?php
      foreach($_POST['motto'] as $selected) {
echo $selected."<br>";
}
    ?>
    <br></p>

    <p class="font centerImage2">as your motto.<br><br><br> Thus, we have a conclusion <br> that you ARE a Human!<br></p>
    <p class="font centerImage2">We will send a Human Sertification to Your Email written below<br></p>
 
<p class="font2 centerImage2">
    <?php
      $email = $_REQUEST['email'];
      echo $email;
    ?>
    <br></p>


</form>
</body>
</html>