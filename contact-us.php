<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>JC&amp;Company CPAs and Attorneys | Contact Us</title>
<meta name="Keywords" content="los angeles CPAS, los angeles attroneys, irvine CPA, wilshire accountant, asian practice, tax services, avisory, law, southern california lawyers" />
<meta name="Description" content="A full scope audit, tax, and advisory services firm with serious Big 4 experience." />
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href="css/ipad.css" rel="stylesheet"media="only screen and (device-width: 768px)" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript">
$(function(){
	$('#f-content input[type="text"]').click(function(){
		if ($(this).val() == "Your Email Address"){$(this).val('')}								
	})
	$('.form select').customStyle();
});

function Valid()
{
	var form = document.frm;

	if(form.first_name.value == "")
	{
		alert("Please Input Your First Name.");
		form.first_name.focus();
		return false;
	}
	else if(form.last_name.value == "")
	{
		alert("Please Input Your Last Name.");
		form.last_name.focus();
		return false;	
	}
	else if(form.email.value == "")
	{
		alert("Please Input Your Email.");
		form.email.focus();
		return false;	
	}
	else if(form.phone.value == "")
	{
		alert("Please Input Your Phone Number.");
		form.phone.focus();
		return false;	
	}
	else if(form.company.value == "")
	{
		alert("Please Input Your Compnay Name.");
		form.company.focus();
		return false;	
	}
	else if(form.street.value == "")
	{
		alert("Please Input Your Street Address.");
		form.street.focus();
		return false;	
	}
	else if(form.City.value == "")
	{
		alert("Please Input Your City.");
		form.city.focus();
		return false;	
	}
	else if(form.zipcode.value == "")
	{
		alert("Please Input Your Zipcode.");
		form.zipcode.focus();
		return false;	
	}
	else if(form.comments.value == "")
	{
		alert("Please Input Comments.");
		form.comments.focus();
		return false;	
	}
	else if(form.comments.value.length > 500)
	{
		alert("Maximum 500 Characters.");
		form.comments.focus();
		return false;	
	}
	else
	{
		return true;
	}
}
</script>
</head>

<body class="contact">
<? include "inc/newsTop.inc.php";?>
<div id="wrap">
    <a href="index.php" id="logo">JC &amp; Company CPAs and Attroneys</a>
    <ul id="nav">
        <li><a href="who-we-are-overview.php">Who We Are</a></li>
        <li><a href="what-we-do-overview.php">What We Do</a></li>
        <li><a href="newsroom.php">News Room</a></li>
        <li><a href="careers.php">Careers</a></li>
        <li class="active"><a href="contact-us.php">Contact Us</a></li> </ul>
    
    <div id="top">
    	<h1>Contact Us</h1>
        <p class="crumb">
        	<a href="index.php">Home</a> &gt; <span>Contact Us</span>
        </p>        
    </div>
	<ul id="locations">
    	<li>
        	<h2>Irvine</h2>
        	<p>10 Corporate Park, Ste. 210, Irvine CA 92606 </p>
            <p>Phone. <span>949.553.1110</span></p>
            <p>Fax. <span>949.485.4900</span></p>
            <p>Email. info@jclawcpa.com</p>
            <a href="http://maps.google.com/maps?q=38+Corporate+Park,+Irvine,+CA+92606+&hl=en&sll=37.0625,-95.677068&sspn=80.692593,124.013672&z=17" target="_blank">view map</a>
        </li>
    	<li>
        	<h2>Los Angeles</h2>
        	<p>4801 Wilshire Blvd. Ste. 306</p>
            <p> Los Angeles, CA 90010</p>
            <p>Phone. <span>213.293.9110</span></p>
            <p>Fax. <span>213.973.4720</span></p>
            <a href="http://maps.google.com/maps?q=3600+Wilshire+Blvd.+suite+2036&hl=en&sll=33.688791,-117.827418&sspn=0.010784,0.015138&z=17" target="_blank">view map</a>
        </li>  
    	<li>
        	<h2>Northeast Regional Office</h2>
        	<p>1830 Easton Ave. Somerset</p>
            <p>NJ 08873</p>
            <a href="http://maps.google.com/maps?q=1830+Easton+Ave.+Somerset&hl=en&sll=34.06153,-118.303463&sspn=0.010737,0.015138&z=17" target="_blank">view map</a>
        </li>               
    </ul>
    <form action="contactPS.php" name="frm" method="post" enctype="multipart/form-data" onsubmit="return Valid();">
    	<h2>We appreciate your interest in JC&amp;Company and look forward to speaking with you.</h2>
        <p>To contact JC&amp;Company, please complete the form below and we will contact you within 24-hours during normal business days.</p>
        <p class="first">* Please fill in all fields with <span class="req">*</span></p>
        <ul class="form">
        	<li>
            	<label><span class="req">*</span> First Name</label> 
                <input type="text" id="first_name" name="first_name" />
            </li>
        	<li>
            	<label><span class="req">*</span> Last Name</label> 
                <input type="text" id="last_name" name="last_name" />
            </li>  
        	<li>
            	<label><span class="req">*</span> Email</label> 
                <input type="text" id="email" name="email" />
            </li> 
        	<li>
            	<label><span class="req">*</span> Phone Number</label> 
                <input type="text" id="phone" name="phone" />
            </li> 
        	<li>
            	<label><span class="req">*</span> Company Name</label> 
                <input type="text" id="company" name="company" />
            </li> 
        	<li>
            	<label><span class="req">*</span> Street Address</label> 
                <input type="text" id="street" name="street" />
            </li> 
        	<li>
            	<label><span class="req">*</span> City</label> 
                <input type="text" id="city" name="city" />
            </li>             
        	<li>
            	<label><span class="req">*</span> State/Province</label> 
                <select name="state" id="state">
                	<option>Please select</option>
									<option value="AL">AL</option>
									<option value="AK">AK</option>
									<option value="AZ">AZ</option>
									<option value="AR">AR</option>
									<option value="CA">CA</option>
									<option value="CO">CO</option>
									<option value="CT">CT</option>
									<option value="DE">DE</option>
									<option value="FL">FL</option>
									<option value="GA">GA</option>
									<option value="HI">HI</option>
									<option value="ID">ID</option>
									<option value="IL">IL</option>
									<option value="IN">IN</option>
									<option value="IA">IA</option>
									<option value="KS">KS</option>
									<option value="KY">KY</option>
									<option value="LA">LA</option>
									<option value="ME">ME</option>
									<option value="MD">MD</option>
									<option value="MA">MA</option>
									<option value="MI">MI</option>
									<option value="MN">MN</option>
									<option value="MS">MS</option>
									<option value="MO">MO</option>
									<option value="MT">MT</option>
									<option value="NE">NE</option>
									<option value="NV">NV</option>
									<option value="NH">NH</option>
									<option value="NJ">NJ</option>
									<option value="NM">NM</option>
									<option value="NY">NY</option>
									<option value="NC">NC</option>
									<option value="ND">ND</option>
									<option value="OH">OH</option>
									<option value="OK">OK</option>
									<option value="OR">OR</option>
									<option value="PA">PA</option>
									<option value="RI">RI</option>
									<option value="SC">SC</option>
									<option value="SD">SD</option>
									<option value="TN">TN</option>
									<option value="TX">TX</option>
									<option value="UT">UT</option>
									<option value="VT">VT</option>
									<option value="VA">VA</option>
									<option value="WA">WA</option>
									<option value="WV">WV</option>
									<option value="WI">WI</option>
									<option value="WY">WY</option>
                    <!-- Please fill the rest with programming or plugin -->
                </select>
            </li> 
        	<li>
            	<label><span class="req">*</span> Zip/postal code</label> 
                <input type="text" id="zipcode" name="zipcode" />
            </li> 
        	<li>
            	<label><span class="req">*</span> Country/Region</label> 
                <select id="country" name="country">
                	<option>Please select</option>
                    <option value="United States">United States</option>
                    <option value="Canada">Canada</option>
                    <option value="Korea">Korea</option>
                    <!-- Please fill the rest with programming or plugin -->
                </select>
            </li> 
        	<li class="cl">
            	<label><span class="req">*</span> Comments/Questions (Maximum 500 Characters)</label> 
                <textarea rows="" cols="" id="comments" name="comments"></textarea>
            </li> 
        	<li class="cl">
                <input type="submit" value="Submit" />
            	<a href="javascript:document.frm.reset();" class="reset">Cancel</a> 
            </li>                                                                                                           
        </ul>
    </form>
    
    
    </div><!--/close wrap-->
    <div class="cl"></div>
    
<? include "./inc/footer.inc.php";?>
	<!--/close footer-->
</body>
</html>
