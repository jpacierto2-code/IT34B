<?php

require_once 'config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $action = trim($_POST['action'] ?? '');

    $user_id = $_SESSION['user_id'] ?? null;
    $user_email = $_SESSION['user_email'] ?? 'test@example.com';

    $success = logActivity(
        $pdo,
        $user_id,
        $user_email,
        $action,
        'success'
    );

    if ($success) {
        echo "Activity log inserted successfully!";
    } else {
        echo "Failed to insert activity log!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Logger</title>
</head>
<body>

    <form method="POST">
        <button
            type="submit"
            name="action"
            value="sample"
        >
            Sample
        </button>
    </form>

</body>
</html>