<?php
	header('Access-Control-Allow-Origin: *');
	if (!empty($_GET)) {
		extract($_GET);

		if ($bypass) {
			header("Location: " . $bypass, true, 302);
			exit;
		}

		if ($type == "jwplayer") {
			header("Location: jwplayer.php?url=$url&sub=$sub&thumbnail=$thumbnail", true, 302);
			exit;
		}

		if ($type == "videojs") {
			header("Location: videojs.php?url=$url&sub=$sub&thumbnail=$thumbnail", true, 302);
			exit;
		}

		if ($type == "download") {
			header("Location: download.php?url=$url&sub=$sub", true, 302);
			exit;
		}
	}
?>