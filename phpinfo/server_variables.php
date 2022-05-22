<?php
    require '../layout/page_header.php';
?>

    <!-- server analysis with $_SERVER -->
    <header class='task'>Using local PHP server variable $_SERVER</header>

    <?php
    echo '<div class="answer">';

    echo '<pre>';
    print_r($_SERVER);
    echo '</pre>';
    echo '</div>';


    require '../layout/page_footer.php';