<?php
    require '../layout/page_header.php';
    if (isset($_GET['loginerr'])) {
        $loginError = true;
    }
    if (isset($_GET['logout'])) {
        $logout = true;
    }
    if (isset($_GET['redirect'])) {
        $redirect = true;
    };
?>

        <header class='task'>Creating a login page in PHP</header>
        <section class="instr">
            <ul>
                <li>require user and password fields and a login button.</li>
                <li>The fields must be in a form and point the action to a validation script.</li>
                <li>If the user is already logged in, they will be redirected to the panel.</li>
            </ul>
        </section>
        <section class="login">
            <form method="POST" action="./validation.php" id="loginForm" class="login__form flex">
                <h1>Please sign in:</h1>
                <fieldset id="inputFieldset class="input__fieldset>
                    <label for="inputEmail" class="label">Email address</label>
                    <input id="inputEmail" type="email" name="email" placeholder="username@domain.com">
                    <label for="inputPassword" class="label">Password</label>
                    <input id="inputPassword" type="password" name="password" placeholder="password">
                </fieldset>
                <footer id="formFooter" class="form__footer flex">
                    <button id="inputBtn" class="input__btn btn" type="submit">Sign in</button>
                </footer>
                <?php
                    if (isset($loginError)) {
                        echo '<pre>
                            <section id="formError" class="form__error flex">
                                <p class="error__msg">Your email or password is incorrect.</p>
                            </section></pre>';
                    } else if (isset($logout)) {
                        echo '<pre>
                            <section id="formError" class="form__error flex">
                                <p class="error__msg">You are currently logged out.</p>
                            </section></pre>';
                    } else if (isset($redirect)) {
                        echo '<pre>
                            <section id="formError" class="form__error flex">
                                <p class="error__msg">That is an internal page. You have been redirected.</p>
                            </section></pre>';
                    };
                ?>
            </form>
        </section>
    </section>

<?php
    require '../layout/page_footer.php';
?>