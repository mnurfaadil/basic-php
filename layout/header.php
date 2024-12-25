<?php
// Memulai sesi
session_start();

// Inisialisasi daftar tugas jika belum ada
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Menangani penambahan tugas
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['addTask'])) {
    $task = trim($_GET['task']);
    if (!empty($task)) {
        $_SESSION['tasks'][] = $task;
    }
}

// Menangani penghapusan tugas
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deleteTask'])) {
    $index = $_POST['deleteTask'];
    if (isset($_SESSION['tasks'][$index])) {
        unset($_SESSION['tasks'][$index]);
        $_SESSION['tasks'] = array_values($_SESSION['tasks']); // Reindeks array
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP To-Do List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h1 {
            font-size: 24px;
            color: #333333;
            margin-bottom: 20px;
        }
        .input-section {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        input[type="text"] {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            width: calc(100% - 70px);
        }
        button {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }
        button[type="submit"] {
            background: #4caf50;
            color: white;
        }
        button[type="submit"]:hover {
            background: #45a049;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            background: #f1f1f1;
            margin: 5px 0;
            padding: 10px;
            border-radius: 4px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        ul li form {
            margin: 0;
        }
        ul li button {
            background: #ff4d4d;
            color: white;
        }
        ul li button:hover {
            background: #e63939;
        }
    </style>
</head>
<body>
    <div class="container">

