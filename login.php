<?php
    include_once 'header.php';
?>
        <div class="form">
            <H1>Login system</H1>
        <form action="includes/login.inc.php" method="post"  >
                <input type="text"  name="name" placeholder="Your Userna..">
                <input type="password"  name="password" placeholder="Your pass..">
            <input type="submit" value="Submit">
        </form>
        <p  >New here? <a href="signup.php"> Sign up</a></p>
        </div>

<?php
    include_once('footer.php');
?> 