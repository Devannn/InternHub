<?php
setcookie('authkey', '', time() - 3600, '/');

header('Location: index.php');
exit();

?>