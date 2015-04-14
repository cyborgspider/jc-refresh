<?
include_once($_SERVER['DOCUMENT_ROOT'] . "/Classes/JFunction.class.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/Classes/HtmlUtil.class.php");
include_once $_SERVER['DOCUMENT_ROOT'] . "/Classes/class.phpmailer/class.phpmailer.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/Classes/class.phpmailer/class.smtp.php";


$JFunction = new JFunction();
$HtmlUtil = new HtmlUtil();

$mailFormPath = $_SERVER['DOCUMENT_ROOT'] . "/file/mailForm.html";

$fp = fopen($mailFormPath,"r");
$fileBody = @fread($fp,filesize($mailFormPath));


$MailTitle = "Customer Email - From:" . $_REQUEST["first_name"] . " " . $_REQUEST['last_name'];
//$MailTitle = stripslashes($MailTitle);

$title = stripslashes($_REQUEST['title']);
$first_name = stripslashes($_REQUEST['first_name']);
$last_name = stripslashes($_REQUEST['last_name']);
$email = stripslashes($_REQUEST['email']);
$phone = stripslashes($_REQUEST['phone']);
$company = stripslashes($_REQUEST['company']);
$street = stripslashes($_REQUEST['street']);
$city = stripslashes($_REQUEST['city']);
$state = stripslashes($_REQUEST['state']);
$zipcode = stripslashes($_REQUEST['zipcode']);
$country = stripslashes($_REQUEST['country']);
$comments = stripslashes($_REQUEST['comments']);
$comments = str_replace("\n","<br>",$comments);
$title = str_replace("<","&gt",$MailTitle);
$title = str_replace(">","&lt",$MailTitle);


/*
$MailDesc = str_replace("{{TITLE}}",$title,$fileBody);
$MailDesc = str_replace("{{FIRST_NAME}}",$first_name,$fileBody);
$MailDesc = str_replace("{{LAST_NAME}}",$last_name,$fileBody);
$MailDesc = str_replace("{{EMAIL}}",$email,$fileBody);
$MailDesc = str_replace("{{PHONE}}",$phone,$fileBody);
$MailDesc = str_replace("{{COMPANY}}",$company,$fileBody);
$MailDesc = str_replace("{{STREET}}",$street,$fileBody);
$MailDesc = str_replace("{{CITY}}",$city,$fileBody);
$MailDesc = str_replace("{{STATE}}",$state,$fileBody);
$MailDesc = str_replace("{{ZIPCODE}}",$zipcode,$fileBody);
$MailDesc = str_replace("{{COUNTRY}}",$country,$fileBody);
$MailDesc = str_replace("{{COMMENTS}}",$comments,$fileBody);
echo $title;

$MailDesc = str_replace("\n","<br>",$MailDesc);

*/

$MailDesc = "
<style>
td{style=\"width:150px;height:23px;font-weight:bold;font-size:13px;font-family:Lucida Sans Unicode;\"}
.title{width:150px}
.answer{color:#0066CC}
</style>
<table style='width:650px;border:solid 0px;padding:10px 10px 10px 10px'>
	<tr>
		<td style=\"width:150px;height:23px;font-weight:bold;font-size:13px;font-family:Lucida Sans Unicode;\">* First Name</td>
		<td style=\"font-size:13px;color:#0066CC;font-family:Lucida Sans Unicode;\">" . $first_name . "</td>
	</tr>
	<tr>
		<td style=\"width:150px;height:23px;font-weight:bold;font-size:13px;font-family:Lucida Sans Unicode;\">* Last Name</td>
		<td style=\"font-size:13px;color:#0066CC;font-family:Lucida Sans Unicode;\">" . $last_name . "</td>
	</tr>
	<tr>
		<td style=\"width:150px;height:23px;font-weight:bold;font-size:13px;font-family:Lucida Sans Unicode;\">* Email</td>
		<td style=\"font-size:13px;color:#0066CC;font-family:Lucida Sans Unicode;\">" . $email . "</td>
	</tr>
	<tr>
		<td style=\"width:150px;height:23px;font-weight:bold;font-size:13px;font-family:Lucida Sans Unicode;\">* Phone Number</td>
		<td style=\"font-size:13px;color:#0066CC;font-family:Lucida Sans Unicode;\">" . $phone . "</td>
	</tr>
	<tr>
		<td style=\"width:150px;height:23px;font-weight:bold;font-size:13px;font-family:Lucida Sans Unicode;\">* Company Name</td>
		<td style=\"font-size:13px;color:#0066CC;font-family:Lucida Sans Unicode;\">" . $company . "</td>
	</tr>
	<tr>
		<td style=\"width:150px;height:23px;font-weight:bold;font-size:13px;font-family:Lucida Sans Unicode;\">* Street Address</td>
		<td style=\"font-size:13px;color:#0066CC;font-family:Lucida Sans Unicode;\">" . $street . "</td>
	</tr>
	<tr>
		<td style=\"width:150px;height:23px;font-weight:bold;font-size:13px;font-family:Lucida Sans Unicode;\">* City</td>
		<td style=\"font-size:13px;color:#0066CC;font-family:Lucida Sans Unicode;\">" . $city . "</td>
	</tr>
	<tr>
		<td style=\"width:150px;height:23px;font-weight:bold;font-size:13px;font-family:Lucida Sans Unicode;\">* State/Province</td>
		<td style=\"font-size:13px;color:#0066CC;font-family:Lucida Sans Unicode;\">" . $state . "</td>
	</tr>
	<tr>
		<td style=\"width:150px;height:23px;font-weight:bold;font-size:13px;font-family:Lucida Sans Unicode;\">* Zip/postal code</td>
		<td style=\"font-size:13px;color:#0066CC;font-family:Lucida Sans Unicode;\">" . $zipcode . "</td>
	</tr>
	<tr>
		<td style=\"width:150px;height:23px;font-weight:bold;font-size:13px;font-family:Lucida Sans Unicode;\">* Country/Region</td>
		<td style=\"font-size:13px;color:#0066CC;font-family:Lucida Sans Unicode;\">" . $country . "</td>
	</tr>
	<tr>
		<td style=\"width:150px;height:23px;font-weight:bold;font-size:13px;font-family:Lucida Sans Unicode;\">* Comments/Question</td>
		<td style=\"font-size:13px;color:#0066CC;font-family:Lucida Sans Unicode;\">" . $comments . "</td>
	</tr>
</table>
";




$MailTitle = $MailTitle;

$SenderAddr = $_REQUEST['email'];

$mailheader = "";
$mailheader .= "X-Priority: 1\n"; // Urgent message!
$mailheader .= "X-Sender: <" . $SenderAddr . ">\n";
$mailheader .= "Return-Path: " . $SenderAddr . "\r\n";
$mailheader .= "From: " . iconv("UTF-8","UTF-8",$_REQUEST['first_name']) . " " . $_REQUEST['last_name'] . "<" . $SenderAddr . ">\r\n";
$mailheader .= "X-Mailer: Gfew Interface\r\n";
$mailheader .= "Content-Type: text/html; charset=UTF-8\r\n";
//$mailheader .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
$mailheader .= "Content-Transfer-Encoding: base64\r\n\r\n";

//test
$mail_ok=mail("pure4499@gmail.com",iconv("UTF-8","UTF-8",$MailTitle),stripslashes(chunk_split(base64_encode(iconv("UTF-8","UTF-8",$MailDesc)))),$mailheader);

$mail_ok=mail("jchung@jclawcpa.com",iconv("UTF-8","UTF-8",$MailTitle),stripslashes(chunk_split(base64_encode(iconv("UTF-8","UTF-8",$MailDesc)))),$mailheader);
$mail_ok=mail("josh.chung@jclawcpa.com",iconv("UTF-8","UTF-8",$MailTitle),stripslashes(chunk_split(base64_encode(iconv("UTF-8","UTF-8",$MailDesc)))),$mailheader);
$mail_ok=mail("info@jclawcpa.com",iconv("UTF-8","UTF-8",$MailTitle),stripslashes(chunk_split(base64_encode(iconv("UTF-8","UTF-8",$MailDesc)))),$mailheader);
$mail_ok=mail("hr@jclawcpa.com",iconv("UTF-8","UTF-8",$MailTitle),stripslashes(chunk_split(base64_encode(iconv("UTF-8","UTF-8",$MailDesc)))),$mailheader);

$JFunction->goPage($goUrl="http://www.jclawcpa.com/v2/thank-you.html", $target='self.', $alert="Mail Sent.", $addScript="")
?>
