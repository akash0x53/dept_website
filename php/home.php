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

<title>Welcome To Comp Dept</title>

<script type="text/javascript">
$(document).ready(function() {
         
		 /*time out for feedback form*/
		setTimeout(function(){ hide_box('feedback_form')},30000);
		
		$("#feedback").click(function(e) {
			$("#feedback_form").slideDown("slow");
		 });
		 
		 
/*		 if(!flag)
		 {*/
		 $(".ban").animate({marginTop:"0px"},800).delay(1500);
         //$(".ban").animate({marginTop:"-40em"},800);
		 $("body").animate({ backgroundColor:"black"},3000);
		 $(".main").animate({backgroundColor:"black"},3000);
	 	$("body").animate({ backgroundColor:"#CCCCCC"},2000);
		$(".main").animate({ backgroundColor:"#FFFFFF"},2000);
		 $(".ban").slideUp("slow");
	
	 
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
		 

		$("#slides").delay(5000);
		$("#slides").show(1000);
	
		
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

</style>

</head>

<body bgcolor="#CCCCCC" onload="date_picker()">

<!--feedback form NOTE: its hidden -->
<div id="feedback_form">
<iframe src="feedback.html" scrolling="no" frameborder="0" style="height:220px;width:260px">
</iframe>
<label onclick="hide_box('feedback_form')"> X </label>
<!--<form method="post">
<table>
<tr><td>Name: </td><td> <input type="text" size="18" /></td></tr>
<tr><td>Email: </td><td> <input type="email" size="18" /></td></tr>
<tr><td>Feedback: </td><td> <textarea cols="15" rows="6" wrap="soft"> </textarea> </td></tr>
<tr><td></td><td><input type="submit" value="Submit"/> <input type="button" value="Close"/></td></tr>
</table>
</form> -->
</div>

<div id="feedback">
Feedback</div>

<!-- Banner-->
<div class="ban">
<img src="images/temp_ban.png" class="ban" />
</div>


<!-- Main Container -->
<div class="main" >

    <!--menu baar -->
    <div id="menu">
    <ul><center>
    <li >&lt;!--</li>
     <li ><a href="home.html" id="1" onmouseover="blink(this.id)" class="selected" >Home</a></li>
    <li ><a href="code_hub.html" id="2" onmouseover="blink(this.id)" >CodeHub</a></li>
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
        <tr><th colspan="2" style="text-align:center; border-bottom:solid 1px white" >Sign In</th></tr>
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
            <tr><td>Password</td><td><input type="password" size=20/></td></tr>
            <tr><td>Again</td><td><input type="password" size=20/></td></tr>
            <tr><td ></td><td><input type="submit" value="Join" /><input type="reset" value="Cancel" onclick="hide_box('signup_box')" /></td></tr></table></form>
	</div>
    
    
    
    <!--<div id="slides">-->
   <iframe  src="gallary.html" height="322px" width="482px" id="slides" scrolling="no" >
    </iframe>
<!--    </div>-->
	
    <div id="update_head">
        	<label class="up_lbl">Updates</label>
    	</div>
    <div id="update_container">
		<div id="updates">
        <center>
        <marquee behavior="scroll" direction="up"  scrolldelay="150" scrollamount="5" onmouseover="this.stop()" onmouseout="this.start()">
        
        	<?php 
				$con=mysql_connect("localhost","root") or die(mysql_error());
				$db=mysql_select_db("dept_site",$con) or die(mysql_error());
				$qry="SELECT news,link FROM updates";
				$res=mysql_query($qry,$con) or die(mysql_error());
				while($obj=mysql_fetch_array($res))
					echo "<a href=\"".$obj[1]."\">".$obj[0]."</a><br/>";
				
				mysql_close($con);
				
			?>
		</marquee>
        </center>
    	</div>
    </div>
  
  
  
  <!-- footer :NOTE: hardcoded position only for Animated home page-->
    <div id="footer" style="position:relative; top:21.9em">
    <hr /><br />
    <div class="foot_text">&copy; 2012,Designed and Developed by <a href="http://www.facebook.com/10nary.infection" style="text-decoration:none; color:#cc3322">Akash</a></div>
     <div id="hits">
    Total Hits 
    </div>
    
    </div> <!-- footer ends-->
   
 </div> <!--main ends-->
 
</body>
</html>
