<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Buy Your Watch Here</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap.css" rel="stylesheet">

<SCRIPT LANGUAGE="JavaScript" SRC="javascript/JSFX_Layer.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" SRC="javascript/JSFX_Mouse.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" SRC="javascript/JSFX_TextFlag.js"></SCRIPT>    
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
    <script src="js/bootstrap.min.js"></script>
<SCRIPT LANGUAGE="JavaScript">
function JSFX_StartEffects()
{
  JSFX.MakeTextFlag("AVALLON", "lightcyan", "Arial", 4);
}
</SCRIPT>

  </head>
 <style type="text/css">
  .body{
    background-color: #00002D;
  }

  .fonta{
    font-family: "Comic Sans MS", cursive, sans-serif;
    font-color:color:black;
    word-spacing: 10px;
  }

  .img{
  width:200px;
  height:200px;
  padding-left:5px;
  padding-right:5px;
 }

  #fonta{
    font-family: "Comic Sans MS", cursive, sans-serif;
    font-color:color:black;
    word-spacing: 10px;
  }

  #fontname{
    font-family: "Comic Sans MS", cursive, sans-serif;
      font-size: "15px"
      word-spacing: 5px;
  }
 
 #about{
    width: 800px;
    height: 430px;
    background-color:#000060;
    color: white;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    font-family: "Comic Sans MS", cursive, sans-serif;
    word-spacing: 10px;

 }

 #clock{
  float: left;
  padding-left: 30px;
  padding-right: 30px;
  background-color:mediumblue;
  color: white;
  font-family: "Comic Sans MS", cursive, sans-serif;
  word-spacing: 10px;
}
  #header{
  position: right;
  float: right;
  padding-left: 0px;
  padding-right: 40px;
  color: white;
  font-family: "Comic Sans MS", cursive, sans-serif;
  word-spacing: 10px;
  }

   /* Footerblurb */
      #footerblurb { background:#00002D;}
      #footerblurb-inner { background:#00002D; margin:0 auto; width:922px; padding:24px;}
   
      
      /* Footer */
      #footer { background:#8080ff;}
      #footer-inner { margin:auto; text-align:center ; color:white; padding:12px; width:922px;}
      #footer a { color:#00002D; text-decoration: none; font-family:Comic  Sans MS}

      /* Clear both sides to assist with div alignment  */
      .clr { clear:both; padding:0; margin:0; width:100%; font-size:0px; line-height:0px;}
      

  </style>

  </style>

  <body class="body" onload="JSFX_StartEffects()">

 <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

		<div class="row" width="90%" style="background-color:#00002D">
		  <div class="col-xs-12 col-sm-6 col-md-9">
		  <h1 style="color:#BBBBFF; margin-left:10px" class="fonta">AVALLON</h1></div>
		  <div class="col-xs-6 col-md-3">
		  <p style="color:#BBBBFF; margin-top:25px; margin-right:20px;" class="text-right" id="fonta">

<div id="clock">
          <p id="demo"></p>

<script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script></div> 


<a href="signup.html" id="fontname"><strong>Sign up</strong></a> | <a href="login.html" id="fontname"><strong>Log in</strong></a></p>
		  </div>
		</div>

		<div class="row" style="background-color:#00002D" width="90%">
      <div class="col-xs-12 col-sm-6 col-md-9">
          <nav class="navbar navbar-default " style="background-color:#00002D; border:0px">
                <div class="container">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    
                  <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                      <li><a href="Avallon1.html" style="color:#BBBBFF" id="fontname">Home</a></li>
                     <li><a href="aboutus.html" style="color:#BBBBFF" id="fontname">About Us</a></li>
                      <li class="dropdown" id="fontname">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#BBBBFF">Products 
                                          <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                          <li><a href="productwomens.html" style="color:#BBBBFF">Womens</a></li>
                                          <li><a href="productmens.html" style="color:#BBBBFF">Mens</a></li>
                                          <li><a href="productchildrens.html" style="color:#BBBBFF">Children</a></li></ul>

</li>

                       <li class="active"><a href="contactus.php" style="color:#BBBBFF;background-color:black" id="fontname">Contact Us</a></li>
                      <li><a href="terms&conditions.html" style="color:#BBBBFF" id="fontname">Terms & Conditions</a></li>
                       <li><a href="faq.html" style="color:#BBBBFF" id="fontname">FAQ</a></li>
                    </ul>
                  </div>
                </div>
              </nav>
      </div>
    
 <div class="col-md-3">
        <input type="search" name="googlesearch">
  <input type="submit" value="Search">

</div>
</div>
    	
    	<center><div id="about" >
    	
      <table method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <h1>CONTACT US</h1>
          <br><br>
          <tr>
           <td style="color:white">Name</td>
           <td style="color:white"> : <td> 
          <input type="text" name="name" value="<?php echo (!empty($_POST['name'])) ? $_POST['name'] :'';?>">
           <span class="error">* <?php echo $nameErr;?></span>
         </tr>
         <tr>
            <td><br></td>
            <td></td>
            <td></td>
          </tr>
         <tr>
           <td style="color:white">E-mail</td>
           <td style="color:white"> : </td><td><input type="text" name="email" style="color:white">
           <span class="error">* <?php echo $emailErr;?></span>
          </td>
         </tr>
         <tr>
            <td><br></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td style="color:white">Comment</td>
            <td style="color:white"> : </td> 
            <td><textarea name="comment" rows="5" cols="40" style="color:white"></textarea></td>
          </tr>
          <tr>
            <td><br></td>
            <td></td>
            <td></td>
          </tr>
          <tr align="center">
           <td colspan="3"><input type="submit" name="submit" value="Submit"></td>
           <td></td>
           <td></td>
          </tr>
      </table>

 		</div></center>


  </body>

    <div id="footerblurb" >

  <br>
        <div id="footerblurb-inner">

          <center><table border="0" >

            <tr>


              <td width="250px" height="100px" align="center" >
            <h5><span style="color:#8080ff; font-family:Comic  Sans MS">ABOUT AVALLON</span></h5>
            <p><h6 style="color:#8080ff; font-family:Comic  Sans MS">Avallon is created to provided watches to purchase for women, men and also children. This website presents the most latest design of watches for the peoples to purchase. Lots of latest and interesting designs to choose. Have fun shopping! </h6></p>
              </td>

              <td width="250px" height="100px" align="center"> 
                <h5><span style="color:#8080ff; font-family:Comic  Sans MS">SUBSCRIBE</span></h5>
          <p><a href="https://www.facebook.com/"><img src="images/fb.png" width="30px" height="30px"></a>
             <a href="https://www.twitter.com/"><img src="images/tweet.png" width="30px" height="30px"></a>
             <a href="https://www.instagram.com/"><img src="images/ig.png" width="30px" height="30px"></a>
             <a href="https://www.blogger.com/"><img src="images/blog.png" width="30px" height="30px"></a></p>

              </td>

              <td  width="250px" height="100px" align="center">

            <h5><span style="color:#8080ff; font-family:Comic  Sans MS">USEFUL LINKS</span></h5>
            <p><a href="Avallon1.html"><h6> AVALLON </h6></a></p>
            <p><a href="aboutus.html"><h6> ABOUT US </h6></a></p>
            <p><a href="contactus.php"><h6> CONTACT US </h6></a></p>
            <p><a href="terms&conditions.html"><h6> TERMS & CONDITIONS </h6></a></p>
            <p><a href="faq.html"><h6> FAQ </h6></a></p>
          
              </td>


            </tr>

          </table><center>
        

          
          <div class="clr"></div>
        </div>

        <br>
      </div>

      <footer id="footer">
        <div id="footer-inner">
          <p> @Copyright <a href="Avallon1.html">AVALLON</a> | <a href="terms&conditions">Terms & Conditions</a> | <a href="faq.html">Privacy Policy</a></p>
          <div class="clr"></div>
        </div>
      </footer>



</html>
