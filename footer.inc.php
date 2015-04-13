<?
include_once ($_SERVER['DOCUMENT_ROOT'] . "/Classes/Init.class.php");
include_once ($_SERVER['DOCUMENT_ROOT'] . "/Classes/class.db/db_mysql.inc.php");
include_once ($_SERVER['DOCUMENT_ROOT'] . "/Classes/class.db/db_local.mysql.inc.php");
include_once ($_SERVER['DOCUMENT_ROOT'] . "/Classes/HtmlUtil.class.php");
include_once ($_SERVER['DOCUMENT_ROOT'] . "/Classes/JC.class.php");

$JC = new JC();

?>
<script type="text/javascript">
<!--
	function checkValid()
	{
		if(document.getElementById("email_address").value == "" || document.getElementById("email_address").value == "Your Email Address")
		{
			alert("Enter Your Email Address");
			document.getElementById("email_address").value = "";
			document.getElementById("email_address").focus();
			return false;
		}
		else
		{
			//alert("Sorry! We're not ready!");
			//return false;
			return true;
		}
	}

	function setInit()
	{
		if(document.getElementById("mce-EMAIL").value == "Your Email Address")
		{
			document.getElementById("mce-EMAIL").value = "";
		}
	}
//-->
</script>
	<div class="footer-right">
<!--                 <form name="frmEmail" action="subscribeLetterPS.php" method="post" onsubmit="return checkValid();">
 -->
	    <form action="http://facebook.us3.list-manage.com/subscribe/post?u=8b2644704240c22e1e44ed546&amp;id=f39a7980e1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	    <p>Subscribe to Newsletter</p>
	    <input type="email" value="Your Email Address" name="EMAIL" class="required email input-text" id="mce-EMAIL" onclick="setInit();" />
	    <div style="position: absolute; left: -5000px;"><input type="text" name="b_8b2644704240c22e1e44ed546_f39a7980e1" value=""></div>
	    <input class="input-submit" type="submit" id="mc-embedded-subscribe" value="Subscribe" />
	    </form>
	    <div class="cl"></div>
	    <div class="social">
	      <p>Follow us on</p>
	      <a href="http://www.facebook.com/jclawcpa" target="_blank"><img src="img/social-fb.png" /></a>
	      <a href="https://twitter.com/JC_LawCPA" target="_blank"><img src="img/social-twitter.png" /></a>
	      <a href="https://www.youtube.com/channel/UC2A6gNuULMFPd107sGowphg" target="_blank"><img src="img/social-youtube.png" /></a>
	      <a href="http://jclawcpa.com/images/48-icon-linkedin.png" target="_blank"><img src="img/social-linkedin.png" /></a>
	      </div>
	</div>
