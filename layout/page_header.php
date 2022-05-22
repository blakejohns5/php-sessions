<?php

$pageHeader = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css"></link>
    <script src="../src/form.js" defer></script>
    <title>PHP Sessions Pill</title>
</head>
<body>
    <main class="main">
        <nav class="nav flex">
            
            <ul class="nav__ul">
                <li class="nav__item"><a class="nav__text" href="../session/index.php">Login</a></li> 
                <li class="nav__item"><a class="nav__text" href="../phpinfo/server_variables.php">server variables</a></li>                
                <li class="nav__item"><a class="nav__text" href="../phpinfo/session_variables.php">session variables</a></li>                
                <li class="nav__item"><a class="nav__text" href="../phpinfo/php_custom.php">PHP custom</a></li>
                
            </ul>
            <header class="nav__header">PHP Sessions</header>
        </nav>
        <section class="content">';

echo $pageHeader;

?>


