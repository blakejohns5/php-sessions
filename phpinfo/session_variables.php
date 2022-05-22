<?php
    require '../layout/page_header.php';
?>

    <header class='task'>Start a session and dump the content of the $_SESSION variable.</header>
    <section class="instr">Add this to script:<br>
        <pre>
        session_start();
        $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
        $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
        $_SESSION['time'] = time();
        echo '&lt;pre&gt;;
        print_r($_SESSION);
    </section>
    
    <?php
    
    echo '<div class="answer">';
    
    $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
    $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
    $_SESSION['time'] = time();
    
    echo '<pre>';
    print_r($_SESSION);
    
    echo '</div>';
   

    require '../layout/page_footer.php';
