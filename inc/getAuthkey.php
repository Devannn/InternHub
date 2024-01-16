<?php 

function getAuthKey() {
    $authKey = isset($_COOKIE['authkey']) ? $_COOKIE['authkey'] : '';

    if (empty(trim($authKey))) {
        header("Location: homepage.php");
        exit;
    }

    $apiUrl = 'https://localhost:7040/api/Auth/IsAuthValid?authKey=' . urlencode($authKey);

    $apiResponse = file_get_contents($apiUrl);
	
	if ($apiResponse === "true") {
		return $authKey;
    } else {
        header("Location: homepage.php");
        exit;
	}
	
}

?>