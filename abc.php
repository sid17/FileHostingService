<?php
$username='siddhant';
$email='siddhantmanocha1994@gmail.com';
$clrpasswd='sam123';
$myfile = fopen(".htaccess", "w") or die("Unable to open file!");
fclose($myfile);
$myfile = fopen(".htpasswd", "w") or die("Unable to open file!");
fclose($myfile);
file_put_contents('.htaccess','AuthType Basic'. PHP_EOL, FILE_APPEND);
file_put_contents('.htaccess','AuthName "restricted area"'. PHP_EOL, FILE_APPEND);
file_put_contents('.htaccess','AuthUserFile /home/siddhantmanocha/apache/dropbox/'.md5(md5($username).md5($email)).'/.htpasswd'. PHP_EOL, FILE_APPEND);
file_put_contents('.htaccess','require valid-user', FILE_APPEND);
$clearTextPassword = $clrpasswd;
// Encrypt password
$password123 = crypt($clearTextPassword, base64_encode($clearTextPassword));
file_put_contents('.htpasswd',$username.':'.$password123, FILE_APPEND);
?>
