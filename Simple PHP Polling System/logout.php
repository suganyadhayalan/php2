<html><head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
</head><body bgcolor="tan">
<center><a href ="https://sourceforge.net/projects/pollingsystem/"><img src = "images/logo" alt="site logo"></a></center><br>     
<center><b><font color = "brown" size="6">Simple PHP Polling System</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>Logged Out Successfully </h1>
<p align="center">&nbsp;</p>
</div>
<?
session_start();
session_destroy();
?>
You have been successfully logged out.<br><br><br>
Return to <a href="login.html">Login</a>
<div id="footer">
<div class="bottom_addr">&copy; 2012 Simple PHP Polling System. All Rights Reserved</div>
</div>
</div>
</body></html>