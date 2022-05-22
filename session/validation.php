
<?php
    include '../layout/page_header.php';
 ?>

<!-- All login validations must be done in this file.
Use the POST method and redirect the user depending on whether the login is correct or not. -->
        

<?php
// Go through $_POST array and set value for each key variable, same as e.g. $email = $_POST["email"]
foreach($_POST as $key => $value) {
    ${$key} = $value;
}


$dbEmail = "user@user.com";
$dbPass = "user123";
$dbPassEnc = password_hash($dbPass, PASSWORD_DEFAULT);

if ($email === $dbEmail && password_verify($dbPass, $dbPassEnc)) {
    // pw is good
    session_start();                        // start session
    $_SESSION["email"] = $email;            // create session variable we can use from panel page
    header('Location: ./panel.php'); 
        // move to panel page
} else {
    header('Location: ./index.php');   
}


    include '../layout/page_footer.php';
?>