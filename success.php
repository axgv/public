<?php

$image=$_GET['image'];
$size=$_GET['size'];
$style=$_GET['style'];
$name=$_GET['name'];


if ($size == "Small") {
$displaysize = "S";
}
else if ($size == "Medium") {
$displaysize = "M";
}
else if ($size == "Large") {
$displaysize = "L";
}
else if ($size == "XLarge") {
$displaysize = "XL";
}
else
{
$displaysize = $size;
}


?>


<html>
  <head>
  <title>Checkout Successful</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #f5f5f5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
		    font-weight: 900;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        /* display: inline-block; */
        margin: 0 auto;
      }
	  html, body {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
}
.container {
    height: auto;
    width: 100%;
    color: #fff;
}
.div1 {
    background: #f5f5f5;
    position: absolute;
    top: 0;
    bottom: 0;
    width: 25%;
    }
.div2 {
    background: #fff;
    position: absolute;
    top: 0;
    left: 25%;
    bottom: 0;
    width: 75%;
}

	  
	  
    </style>
    <body>
      <div class="div1" style=" margin: 0; position: absolute; top: 50%; -ms-transform: translateY(-50%); transform: translateY(-50%); ">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✔</i>
      </div>
        <h1>Success</h1> 
        <p style=" margin-left: 5%; margin-right: 5%; "><?php echo $name; ?> - <b><?php echo $style; ?></b><br><p style="font-size: 9vw; "><?php echo $displaysize; ?></p></p>
		
      </div>
	  <div class="div2">
	  <img height="100%" src="<?php echo $image; ?>">
	  </div>
    </body>
</html>
