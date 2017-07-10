<?php
include_once 'NewsCasterDatabase.php';
	
$userID = $_COOKIE['ID'];

$database = new NewsCasterDatabase();
$query = 'select profilePicPath from `userProfileInfo` where userID =' . $userID;
$result = $database->db_select($query);
if (empty($result)) {
	echo "./pictures/default.jpg";
} else {
    echo $result[0]['profilePicPath'];
}
?>