<!DOCTYPE html>
<html>
<head>
<title>Contact Info</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" type="text/css" href="steveStyles.css">
<!--

CID Name Assignment (change the title tag above too!)

What objectives are you demonstrating?

(X) Display an animated display of name/address/phone/email, Google map of headquarters, and contact form,
( ) if the contact email field is empty, alert the user with a dialog box,
( ) when the form is submitted to the server, a "thank you" message is returned with a copy of the submissions 

-->

<style>
    
body { background-image: url("blueSpace.png"); height: 768px; width: 1024px; display: inline-block;}

#alien1 { font-family: alien1Wizard; color: #ffffff;}
#alien2 { font-family: alien2Lovecraft; color: #ffffff; }
#alien3 { font-family: alien3Krypton; color: #ffffff; }
#redSeven { font-family: RedSeven; color:` #ffffff; }

li {
  display: inline;
  text-align: center;
}
   
hr { color: #5ABFFF; }
    
#conHeader {
	border-radius: 25px;
	margin: 3% auto;
    font-family: RedSeven;
    font-size: 1.5em;
    text-align: center;
    color: #5ABFFF;
}
    
#conInfo {
    padding-left: 1em;
    color: lightgrey;
    font-size: 0.8em;
    font-family: RedSeven; }

#sub { float: center; }
    
    input[type=text] { padding-left: 3px; align-content: center;}

    
input[type=button] { color: white; text-align: center; width: 100px; display: inline-block; max-width: 300px; background-color: #11469b; }
    
input[type=reset]  { color: white; text-align: center; width: 100px; display: inline-block; max-width: 300px; background-color: #11469b; }
    
div {  margin: auto;
  width: 18%; }
    
    iframe {
        text-align: center; width: 100px; display: inline-block; max-width: 300px;
    }

    #loc { text-align: center; margin: 0 auto; color: lightgrey;
    font-family: RedSeven; }
    
    input[value="name2"] { align-content: center;}
    
    label { font-size: .75em; }
    
    #google {
        padding: 1.5em;
        position: absolute;
        left: 250px;
        
    }
    
    
</style>

</head>
<body>
    
<h1>Contact Information Submitted!</h1>
<?php



// Get data from a GET or POST (change GET to POST for post)
if(isset($_POST['fname'])) { $fname = $_POST['fname']; } else { $fname = "A"; }
if(isset($_POST['lname'])) { $lname = $_POST['lname']; } else { $lname = "B"; }
/*if(isset($_POST['glxy'])) { $data = $_GET['glxy']; } else { $data = "C"; }
if(isset($_GET['slrs'])) { $data = $_GET['slrs']; } else { $data = "D"; }
if(isset($_GET['plnt'])) { $data = $_GET['plnt']; } else { $data = "E"; }*/

if($fname != "") {
    print "
    <b>Thanks for your submission!$fname $lname </b>
    <br /><br>
    <b>Galaxy: $gxly</b>
    <br />
    <b>Solar System: $slrs</b>
    <br />
    <b>Planet: $plnt</b>
";    
} else if($lname != "") {
    print "
    <b>Thanks for your submission!$fname $lname </b>
    <br /><br>
    <b>Galaxy: $gxly</b>
    <br />
    <b>Solar System: $slrs</b>
    <br />
    <b>Plantet: $slrs</b>
";    
} else if($glxy != "") {
    print "
    <b>Thanks for your submission!$fname $lname </b>
    <br /><br>
    <b>Galaxy: $gxly</b>
    <br />
    <b>Solar System: $plnt</b>
    <br />
    
";    
} else if($slrs != "") {
    print "
    <b>Thanks for your submission!$fname $lname </b>
    <br /><br>
    <b>Galaxy: $gxly</b>
    <br />
    <b>Solar System: $slrs</b>
    <br />
    <b>Planet: $plnt</b>
";    
} else if($slrs != "") {
    print "
    <b>Thanks for your submission!$fname $lname </b>
    <br /><br>
    <b>Galaxy: $gxly</b>
    <br />
    <b>Solar System: $slrs</b>
    <br />
    <b>Planet: $plnt</b>
";    
} else
    
{
    print "<p>
    <b style='color: #cc0000;'>AN ERROR OCCURRED! Please try again.</b> 
    </p>
    ";
}   

?>
</body>
</html>
