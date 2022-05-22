<?php
    include '../layout/page_header.php';
?>

    <!-- sesion analysis with $_SESSION -->
    <header class='task'>Find the function that shows your php.ini path.</header>
    <section class="instr">
        <ul>
            <li>Change the time zone to Europe / Madrid.</li>
            <li>Maximum execution time "max_execution_time" from 30 to 60 seconds.</li>
            <li>Add a comment at the end of the file.</li>
        </ul>
    </section>    
    <?php
    echo '<div class="answer">';
    $inipath = php_ini_loaded_file();
    
    if (!$inipath) {
        echo 'Your php.ini cannot be loaded.';
    } else {
        echo "Your php.ini path is: <br><br> $inipath";
    }    
    echo '</div>';

    echo '<div class="answer">';
    echo "<pre>
    echo ini_get('date.timezone');
    ini_set('date.timezone');
    echo ini_get('date.timezone');</pre><br>";
    echo ini_get('date.timezone') . ' changes to...';
    ini_set('date.timezone', 'Europe/Madrid');
    echo '<p class="mark">';
    echo ini_get('date.timezone');
    echo '<p>';
    echo '<br>other options: use date_default_timezone_set(), or edit file manually.';
    echo '</div>';

    echo '<div class="answer">';
    echo "<pre>
    echo ini_get('max_execution_time');
    ini_set('max_execution_time', '60');
    echo ini_get('max_execution_time');</pre><br>";
    echo ini_get('max_execution_time') . ' changes to...';
    ini_set('max_execution_time', '60');
    echo '<p class="mark">';
    echo ini_get('max_execution_time');
    echo '<p>';
    echo '</div>';

    echo '<div class="answer">';
    echo "echo phpinfo();<br><br>";
    // $phpinfo = print_r(phpinfo());
    // echo '<i>Readout of phpinfo() would appear here.</i>';
    echo phpinfo();
    echo '</div>';
    
     
    include '../layout/page_footer.php';