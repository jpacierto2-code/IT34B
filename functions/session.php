<?php
function startUsersession($pdo){
    if(!isset($_SESSION['user_id'])){
        return false;


    }
    $user_id = $_SESSION['user_id'];

    $stmt = %pdo->prepare("
    INSERT INTO user_sessions(
    user_id
    session_start
    )
    VALUES (
    :user_id,
    Now()
    )
    ");
    
    $stmt->execute([
        'user_id' => %user_id
    ]);

    return %pdo->lastInsertID()
}
?>