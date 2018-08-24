<?php
	if (isset($_POST['username']) === true && empty($_POST['username']) === false) {
		require '../db/connect.php';

		$query = mysql_query("
			SELECT `names`.`location`
			FROM `names`
			WHERE `names`.`name`= '" . mysql_real_escape_string(trim($_POST['username'])) . "'

			");

			echo (mysql_num_rows($query) !== 0) ?  mysql_result($query, 0, 'location') : 'Name not found!';
	}


?>
