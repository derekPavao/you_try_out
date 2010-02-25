<?php
$no_login = true;
include('global.php');
require_once('classes/recaptchalib.php');
/* This is the development public key
$public_key = '6LcCbAsAAAAAABQW8TIX6rLWefbMQro67CoBpYAr';
*/
$public_key = '6Le1bAsAAAAAAJH7rqdK5XAqShio-rUl547yI3np';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>MoFoYouTryOut..com - Where Athletes Compete - Coming Spring 2010</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="YouTryOut.com - Where Athletes Compete - Coming Spring 2010" />
<meta name="keywords" content="YouTryOut.com - Where Athletes Compete - Coming Spring 2010" />
<meta name="author" content="Aaron M. Souza - Commonwealth Web Design" />
<meta name="copyright" content="Copyright 2010 - YouTryOut Inc." />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="shortcut icon" href="images/favicon.ico" />
<script language="javascript" type="text/javascript" src="ghost.js"></script>
</head>

<body>
<a id="top"></a>

<div id="wrapper">

<div id="header">
<img src="images/logo01.jpg" width="650" height="213" alt="YouTryOut.com - Where Athletes Compete - Coming Spring 2010" title="YouTryOut.com - Where Athletes Compete - Coming Spring 2010" />
</div><!--end header-->

<div id="subwrap">

<div id="twitmainhold">
<div id="tbuttonhold">
<a href="http://twitter.com/youtryout" target="_blank" id="follow"></a>

<div id="drophold">
<a href="http://twitter.com/home?status=Check+out+http://YouTryOut.com+(@YouTryOut),+featuring+sport-specific+video+competitions." target="_blank" id="tthis" onmouseover="mopen('m1')" onmouseout="mclosetime()"></a>

<div id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
</div><!--end m1-->

</div><!--end drophold-->
</div><!--end tbuttonhold-->

<div id="widhold">
<script type="text/javascript" src="twitwid.js"></script>
<script type="text/javascript" src="widstyle.js"></script>
</div><!--end widhold-->
</div><!--end twitmainhold-->

<div id="texthold">

<p class="introt">
Do you have sports videos of yourself?
</p>

<p class="introt">
Upload them at YouTryOut.com to compete against other athletes in video competitions.
</p>

<p class="introt">
Whether it's a highlight film, a short clip, or a weightlifting video, we have a competition for you.
</p>

<div id="boldsp">
<img src="images/sports.jpg" width="158" height="25" alt="" title="" />
</div><!--end boldsp-->

<table id="sports">
<tr><td></td></tr>
<tr><td></td></tr>
<tr>
<td class="eachsport">Baseball</td><td class="spacer"></td><td class="eachsport">Skateboarding</td>
</tr>
<tr>
<td class="eachsport">Basketball</td><td class="spacer"></td><td class="eachsport">Skiing</td>
</tr>
<tr>
<td class="eachsport">Field Hockey</td><td class="spacer"></td><td class="eachsport">Snowboarding</td>
</tr>
<tr>
<td class="eachsport">Football</td><td class="spacer"></td><td class="eachsport">Soccer</td>
</tr>
<tr>
<td class="eachsport">Gymnastics</td><td class="spacer"></td><td class="eachsport">Softball</td>
</tr>
<tr>
<td class="eachsport">Hockey</td><td class="spacer"></td><td class="eachsport">Volleyball</td>
</tr>
<tr>
<td class="eachsport">Lacrosse</td><td class="spacer"></td><td class="eachsport">Wakeboarding</td>
</tr>
<tr><td></td></tr>
<tr><td></td></tr>
</table>

<p class="wrapup">
Email <a href="mailto:contact@youtryout.com" title="Contact YouTryOut Inc." class="normal">contact@youtryout.com</a> with any questions.
</p>

</div><!--end texthold-->

<div id="formhold">

<img src="images/learnmore.jpg" width="300" height="36" alt="Become a YouTryOut beta athlete&#33;" title="Become a YouTryOut beta athlete&#33;" />

<div id="formcontain">
<?php Flash::displayFlash() ?>
<form action="signup_process.php" method="post">
<input type="text" name="first_name" value="First Name" onfocus="this.value=''" class="widebar" /><br />
<input type="text" name="last_name" value="Last Name" onfocus="this.value=''" class="widebar" /><br />
<input type="text" name="email_address" value="Email Address" onfocus="this.value=''" class="widebarbott" /><br />
<input type="hidden" name="sendtoemail" value="contact@youtryout.com" /><br />
<?= recaptcha_get_html($public_key); ?>
<p class="clause">*YouTryOut Inc. will not share your information with third parties.</p>
<br clear="all" />
<div id="signup">
<input type="image" src="images/signup.jpg" value="submit" alt="Sign Up&#33;" />
</div><!--end signup-->
</form>
</div><!--end formcontain-->

</div><!--end formhold-->

<br clear="all" />

<div id="footer">
&copy; <script type="text/javascript" src="scripts.js"></script> YouTryOut Inc. - All rights reserved. &nbsp;|&nbsp; <a href="http://youtryout.com/content" title="YouTryOut Administrator Login" class="normal" target="_blank">Administrator</a> &nbsp;|&nbsp; <a href="http://youtryout.com/webmail" title="YouTryOut Webmail Login" class="normal" target="_blank">Webmail</a> &nbsp;|&nbsp; <a href="mailto:contact@youtryout.com" title="Contact YouTryOut Inc." class="normal">contact@youtryout.com</a>
</div><!--end footer-->

</div><!--end subwrap-->
</div><!--end wrapper-->
</body>
</html>
