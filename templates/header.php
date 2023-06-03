<?php 
    include_once("./data/categories.php");
    include_once("./data/posts.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Codar</title>
    <link rel="stylesheet" href="./src/style.css">
    <link rel="stylesheet" href="./src/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="/index.php" id="logo">
            <img src="/img/code.png" alt="Blog Codar">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="/index.php" class="nav-link">HOME</a></li>
                <li><a href="#" class="nav-link">categorias</a></li>
                <li><a href="#" class="nav-link">sobre</a></li>
                <li><a href="/contato.php" class="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header>
