<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Encode each value before passing to URL
    $params = [
        "firstName"  => urlencode($_POST['firstName']),
        "middleName" => urlencode($_POST['middleName']),
        "lastName"   => urlencode($_POST['lastName']),
        "contact"    => urlencode($_POST['contact']),
        "email"      => urlencode($_POST['email']),
        "course"     => urlencode($_POST['course']),
        "batch"      => urlencode($_POST['batch']),
        "studentId"  => urlencode($_POST['studentId'])
    ];

    // Build query string
    $query = http_build_query($params);

    // Redirect with data
    header("Location: records.php?$query");
    exit();
} else {
    echo "Invalid request!";
}
?>
