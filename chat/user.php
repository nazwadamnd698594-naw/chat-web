<?php
session_start();
include_once "../kdb.php";

$outgoing_id = $_SESSION['id_users'];
$sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT id_users = {$outgoing_id}");
$output = "";

if(mysqli_num_rows($sql) == 0){
    $output .= "No users are available to chat";
}elseif(mysqli_num_rows($sql) > 0){
    while($row = mysqli_fetch_assoc($sql)){
        $status = $row['status'] == "Active now" ? "online" : "offline";
        $output .= '
        <a href="chat.php?user_id='.$row['id_users'].'">
            <div class="content">
                <div class="details">
                    <span>'.$row['nama'].'</span>
                    <p>'.$row['status'].'</p>
                </div>
            </div>
        </a>';
    }
}
echo $output;
?>
