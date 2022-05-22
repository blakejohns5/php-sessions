
<?php
    include '../layout/page_header.php';
?>

    <header class='task'>Creating a login page in PHP</header>
    <section class="instr">
        <ul>
            <li>Include user and password fields and a login button.</li>
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
            <section id="formError" class="form__error flex">
                    <!-- No formError content at the moment. -->
            </section>
          
        </form>
    </section>


<?php
    include '../layout/page_footer.php';
?>