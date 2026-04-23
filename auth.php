<?php
session_start();

// Simulated database (array)
$users = [
    [
        "username" => "admin",
        "password" => "1234",
        "name" => "Admin User"
    ],
    [
        "username" => "beatrix",
        "password" => "pass123",
        "name" => "Beatrix"
    ]
];

// Function to validate login
function authenticate($username, $password, $users) {
    foreach ($users as $user) {
        if ($user["username"] === $username && $user["password"] === $password) {
            return $user;
        }
    }
    return false;
}
?>
