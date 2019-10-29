<?php
if ($_SESSION["logged"] == 1)  {
//Do Nothing
} else {
header("Refresh: 4; URL=index.php");
echo '<font size="+3" color="#FF0000">Your session has expired. You are being redirected to the login page!</font><br>';
echo '(<font size="+1">If your browser doesn\'t support this, <a href="login.php">click here</a></font>)';

die();
}
?>