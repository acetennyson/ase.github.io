<?php
session_start();
unset($_session['user']);
session_destroy();#destroys all sessions

header("Location: index.php");
#redirecting to login page
?>