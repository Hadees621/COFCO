<?php
session_start();

if (isset($_POST['token']) && isset($_POST['user'])) {
    $_SESSION['token'] = $_POST['token'];
    $_SESSION['user'] = $_POST['user'];

    echo json_encode(['status' => 'success', 'message' => 'Session data stored successfully']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Token or user data not provided']);
}
