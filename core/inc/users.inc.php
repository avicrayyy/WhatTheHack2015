<?php

function username_taken($user) {
	$user	= mysql_real_escape_string($user);
	$result	= mysql_query("SELECT COUNT(`uid`) FROM `users` WHERE `username` = '{$user}'");
	$result	= mysql_result($result, 0);
	return ($result > 0) ? false : true;
}

function add_user($user, $pass) {
	$user	= mysql_real_escape_string($user);
	if (!username_taken($user)) {
		$pass 	=	md5($pass);
		$query	=	"INSERT INTO
								`users`
							(
								`username`,
								`password`
							)
							VALUES
							(
								'{$user}',
								'{$pass}'
							)";
		return (mysql_query($query)) ? true : mysql_error();
	}
}

function validate_credentials($user, $pass) {
	$user 	= mysql_real_escape_string($user);
	$pass 	= md5($pass);
	$valid 	= mysql_query("SELECT COUNT(`uid`) FROM `users` WHERE `username` = '{$user}' AND `password` = '{$pass}'");
	$valid	= mysql_result($valid, 0);
	return ($valid > 0) ? true : false;
}

?>