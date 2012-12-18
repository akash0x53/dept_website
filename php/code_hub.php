<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="jqry.js" type="text/javascript">
var flag=false;
</script>

<link href="style.css" type="text/css" rel="stylesheet" />

<link href="jqry_ui_css.css"  rel="stylesheet" type="text/css" />

<script src="jqry_ui.js" type="text/javascript">
</script>

<title>CodeHub</title>

<script type="text/javascript">
$(document).ready(function() {
         
		setTimeout(function(){ hide_box('feedback_form')},30000);
		
         
		$("#feedback").click(function(e) {
			$("#feedback_form").slideDown("slow");
		 });
	 
		 $(".login").click(function(e) {
            $("#login_box").show("slow");
			
			if($("#signup_box").is(":visible"))
			{
				$("#signup_box").hide("slow");
			}
        });
		$(".join").click(function(e) {
			$("#signup_box").show("slow");
			if($("#login_box").is(":visible"))
			{
				$("#login_box").hide("slow");
			}
        });
});


function blink(id)
{
/*	$("#menu").mouseover(function(e){*/
		$("#"+id).fadeOut("show");
		$("#"+id).fadeIn("show");
		//alert(id);	
/*	});*/
}

function date_picker()
{
	$("#date_pick").datepicker();
}
function hide_box(id)
{
	$("#"+id).hide("slow");
}

function signup_form()
{
	$("#signup_box").dialog({Title:"Signup"});
}

</script>

<style type="text/css">
@font-face
{
	font-family:Orlad_sad;
	src:url('OratorStd.otf');
}


#quote
{
	font-family:"Courier New", Courier, monospace;
	font-size:24px;
	width:20em;
	position:absolute;
	font-weight:bolder;
	left:35%;
	top:20px;
	text-shadow:2px 2px 4px #999999;
	color:#cc3333;
}
</style>

</head>

<body bgcolor="#CCCCCC" onload="date_picker()">

<!--feedback form NOTE: its hidden -->

<div id="feedback_form">
<iframe src="feedback.html" scrolling="no" frameborder="0" style="height:220px;width:260px">
</iframe>
<label onclick="hide_box('feedback_form')"> X </label>
</div>

<div id="feedback">
Feedback</div>

<!-- Main Container -->
<div class="main" >

	<div id="quote">
    	"Talk is Cheap, Show me the code"
    </div>
    
    <!--menu baar -->
    <div id="menu">
    <ul><center>
    <li >&lt;!--</li>
     <li ><a href="home.html" id="1" onmouseover="blink(this.id)" >Home</a></li>
    <li ><a href="code_hub.html" id="2" onmouseover="blink(this.id)" class="selected" >CodeHub</a></li>
    <li><a href="cesa.html" id="3" onmouseover="blink(this.id)" > CESA</a></li>
    <li><a href="success.html" id="4" onmouseover="blink(this.id)">Success</a></li>
    <li><a href="tp.html" id="5" onmouseover="blink(this.id)">Tp</a></li>
    <li><a href="about.html" id="6" onmouseover="blink(this.id)" >About</a></li>
    <li> --&gt;</li>
    </center>
    </ul>
    </div> <!--menu ends-->
    
    <div id="login_signup">
    <label class="join">Join</label>
    <label class="login">Login</label>
    </div>

<!--  NOTE: Datepicker disabled, may b used latere  <br />
    <div id="date_pick">
</div> -->


<!-- Login box -->
<div id="login_box">
	<form >
		<table>
        <tr><td colspan="2" style="text-align:center; border-bottom:solid 1px white" >Sign In</td></tr>
        	<tr><td>Login ID</td><td><input type="text" name="login_id" size=17/></td></tr>
            
            <tr><td>Password</td><td><input type="password" name="pass" size="17" /> </td></tr>
            <tr><td></td> <td><input type="submit" value="Login" /> <input type="reset" onclick="hide_box('login_box')" id="cls_btn" value="Close" />
            </tr>
        </table>
    </form>
</div> <!--login_box ends here-->


<!-- signup box-->
	<div id="signup_box">
    	<form>
        <table width="221">
        	<tr bgcolor="#cc3333"><th colspan="2" style="text-align:center; border-bottom:solid 1px white">Join</th></tr>
           	<tr><td>Name</td><td><input type="text" size=20/></td></tr>
            <tr><td>Email</td><td><input type="email" size=20 name="email_id"/></td></tr>
            <tr><td>Password</td><td><input type="password" size=20/></td></tr>
            <tr><td>Again</td><td><input type="password" size=20/></td></tr>
            <tr><td ></td><td><input type="submit" value="Join" /><input type="reset" value="Cancel" onclick="hide_box('signup_box')" /></td></tr></table></form>
	</div>



<!---------------  Recent post ------------------------>
<div id="recent_post">
<center>
<table>
	
    <tr><th>Recent Posts</th><th style="border-left:solid 1px black;">Views</th></tr>
    
<!--    
   <tr><td><center><a href="#">Untitled</a></center></td><td style="border-left:solid 1px black;"><center>10</center></td></tr>
    <tr><td class="even"><center><a href="#">Untitled</a></center></td><td class="even" style="border-left:solid 1px black;"><center>10</center></td></tr> -->
    
    <?php
		$con=mysql_connect("localhost","root") or die(mysql_error());
		$db=mysql_select_db("dept_site",$con) or die(mysql_error());
	?>

   </table>
  
   </center>
   <br />
</div>

<div id="upload_btn">
<a href="upload.html" style="font-family:'Courier New', Courier, monospace; font-size:30px">UPLOAD</a></div>
<!----------------Recent post-------------------->

 
  
  
  <!-- footer-->
    <div id="footer">
    <hr /><br />
    <div class="foot_text">&copy; 2012,Designed and Developed by <a href="http://www.facebook.com/10nary.infection" style="text-decoration:none; color:#cc3322">Akash</a></div>
     <div id="hits">
    Total Hits 
    </div>
    
    </div> <!-- footer ends-->
   
 </div>
 
 
    




</body>
</html>
