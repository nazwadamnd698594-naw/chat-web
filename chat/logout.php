<?php
session_start();
session_destroy();
header("Location: ../index.php");
exit();
mysqli_query($conn, "UPDATE users SET status = 'Offline now' WHERE id_users = {$id}");
session_destroy();
header("Location: ../login.php");
exit;

?>

