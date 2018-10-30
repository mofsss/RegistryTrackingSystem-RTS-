<?php
include('config.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <title>Members</title>
    </head>
    <body style="font-size: 18px;">
    	<div class="header">
        	<a href="<?php echo $url_home; ?>"><img src="<?php echo $design; ?>/images/Logo.png" alt="Members" /></a>
	    </div>
        <div class="content">
<?php
//We display a welcome message, if the user is logged, we display it username
?>
Hello<?php if(isset($_SESSION['username'])){echo ' '.htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8');} ?>,<br />
Welcome<br />
You can <a href="users.php">see the list of users</a>.<br /><br />
<?php
//If the user is logged, we display links to edit his infos, to see his pms and to log out
if(isset($_SESSION['username']))
{
//We count the number of new messages the user has
$nb_new_pm = mysqli_fetch_array(mysqli_query($con,'select count(*) as nb_new_pm from pm where ((user1="'.$_SESSION['userid'].'" and user1read="no") or (user2="'.$_SESSION['userid'].'" and user2read="no")) AND id2="1"'));

//The number of new messages is in the variable $nb_new_pm
$nb_new_pm = $nb_new_pm['nb_new_pm'];
//We display the links
?>
<a href="edit_infos.php">Edit My personnal informations</a><br />
<a href="list_pm.php">My personnal messages(<?php echo $nb_new_pm; ?> unread)</a><br />
<a href="connection.php">Logout</a>
<?php
}
else
{
//we display a link to log in and to Sign up
?>
<a href="connection.php">Log in</a><br>
<a href="sign_up.php">Sign up</a><br>
<br>
<br>

<a href="http://localhost/ecz/index.html">Homepage</a><br />
<?php
}
?>
		</div>

	</body>
</html>
