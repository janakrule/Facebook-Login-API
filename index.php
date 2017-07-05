<?php
require 'fbconfig.php';   // Include fbconfig.php file
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
<head >
<title >Login with Facebook</title>
<link href="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet"> 
</head>
<body>

<!--**************************************************************************************************************-->
<!--  After user login  -->

<?php if ($user): ?>      

<div >

	<div class="hero-unit">
		<h2 style=" font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; color:#00F;">Welcome to your Facebook Profile details.</h2>
	</div>

	<div class="span4" align="center">
		<ul class="nav nav-list">
			<li class="nav-header">Image</li>
				<li><img src="https://graph.facebook.com/<?php echo $user; ?>/picture"></li>
			<!--<li class="nav-header">Facebook ID</li>-->
				<!--<li><?php echo  $fbid; ?></li>-->
			<li class="nav-header">Facebook Username</li>
				<li><?php echo $fbuname; ?></li>
			<li class="nav-header">Facebook fullname</li>
				<li><?php echo $fbfullname; ?></li>
			<li class="nav-header">Facebook Email Id</li>
				<li><?php echo $femail; ?></li>
			<div> 
				<input type="button" value="Logout" onClick="window.location.href='<?php echo $logoutUrl; ?>'">
			</div>
		</ul>
	</div>
</div>
<!--**************************************************************************************************************-->



<!--**************************************************************************************************************-->
<!-- Before login -->

<?php else: ?>      
<div class="container" align="center" >
	<h1 style=" font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; color:#00F;" >Login with Facebook</h1>
	<div style=" font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; color:#00F;">
		<input type="button" value="Login with Facebook" onClick="window.location.href='<?php echo $loginUrl; ?>'">
	</div>
</div>

<!--**************************************************************************************************************-->

<?php endif ?>
</body>
</html>