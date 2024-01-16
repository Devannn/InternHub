<?php

function getAuthKey()
{
    $authKey = isset($_COOKIE['authkey']) ? $_COOKIE['authkey'] : '';

    $rawKey = trim($authKey);

    if (!empty($rawKey)) {
        header("Location: index.php");
        exit;
    }

    $apiUrl = 'https://localhost:7040/api/Auth/IsAuthValid?authKey=' . urlencode($rawKey);

    $apiResponse = file_get_contents($apiUrl);

    if ($apiResponse === "true") {
        return $authKey;
    } else {
        header("Location: index.php");
        exit;
    }
}
