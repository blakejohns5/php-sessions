
<?php
    session_start();
    require '../layout/page_header.php';
?>

    <header class='task'>Create a panel.php file. This panel should:</header>
    <section class="instr">
        <ul>
            <li>indicate whether the user is already logged in or not.</li>
            <li>In case they are, require a button to log out, destroy the current session and then redirect you to the "index.php" file.</li>
            <li>If not logged in, alert the user that this is a private section.</li>
        </ul>
    </section>
    <?php

    if (!isset($_SESSION["email"])) {
        // Similar to timeout, by using header('Refresh: #seconds; URL=url');
        header('Location:./index.php?redirect=true');
    } else {
        $currentEmail = $_SESSION['email'];
        echo "<pre>
            <section class='validation__msg flex'>
                <div class='panel flex'>
                <p class='validation success'>Welcome $currentEmail!</p>
                <p class='validation'>You are currently logged in.</p>
                    <form method='GET' action='./close_session.php' id='logoutForm' class='logout__form flex'>
                        <button id='logoutBtn' class='btn logout__btn'>Log out</button>
                    </form>
                </div>
            <section></pre>";
    }

    require '../layout/page_footer.php';
?>


