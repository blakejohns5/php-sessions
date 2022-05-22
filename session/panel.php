
<?php
    session_start();
    include '../layout/page_header.php';
?>

    <header class='task'>Create a panel.php file. This panel should:</header>
    <section class="instr">
        <ul>
            <li>indicate whether the user is already logged in or not.</li>
            <li>In case they are, include a button to log out, destroy the current session and then redirect you to the "index.php" file.</li>
            <li>If not logged in, alert the user that this is a private section.</li>
        </ul>
    </section>
    
        

    <?php

    // function displayRedirect () {
    //     echo '<pre>
    //     <div class="panel flex">
    //         <p class="validation fail">This is a private section. You have been redirected.</p>        
    //     </div></pre>';
    // }

    // function display

    if (!isset($_SESSION["email"])) {
        echo "<pre>
        <section class='validation__msg'>
                <div class='panel flex'>
                    <p class='validation fail'>Sorry, you are not logged in.
                </div>
            <section></pre>";
        // Similar to timeout, by using header('Refresh: #seconds; URL=url');
        header('Location:./index.php');
    } else {
        $currentEmail = $_SESSION['email'];
        echo "<pre>
            <section class='validation__msg'>
                <div class='panel flex'>
                <p class='validation success'>Welcome $currentEmail!</p> 
                <p class='validation'>You are currently logged in.</p>
                    <form method='GET' action='./close_session.php' id='logoutForm' class='logout__form'>    
                        <button id='logoutBtn' class='btn logout__btn'>Log out</button>
                    </form>    
                </div>
            <section></pre>";
    }
    
        

            

    
?>


    <!-- <section class="validation__msg">
        <div class="panel flex">
          <p class="validation success">You have logged in successfully.</p>        
        </div>
        <div class="panel flex">
          <p class="validation fail">You are already logged in.</p>
          <button id="logoutBtn" class="logout__btn">Log out</button>
        </div>
        
    </section> -->

 