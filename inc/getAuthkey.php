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

?>

<?php

function clearAuthCookie()
{
    // Set the expiration time to a past date
    $expirationTime = time() - 3600; // 1 hour ago (adjust as needed)

    // Set the 'authkey' cookie with an empty value and an expired time
    setcookie('authkey', '', $expirationTime, '/');

    // Optionally, you can unset the variable from the current script
    unset($_COOKIE['authkey']);
}

// Example usage:
// clearAuthCookie();

?>