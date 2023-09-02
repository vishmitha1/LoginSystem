<?php
    include_once 'header.php';
?>
        <div class="form">
            <H1>Login system</H1>
        <form action="includes/signup.inc.php" method="post"  >
                <input type="text"  name="name" placeholder="Name">
                <input type="text"  name="email" placeholder="Email">
                <input type="text"  name="uid" placeholder="Username">
                <input type="password"  name="pwd" placeholder="Password">
                <input type="password"  name="repwd" placeholder="Repeat Password">

                <br>
            <input type="submit" name="Register" value="Register">
        </form>
        <p>Already have an account? <a href="login.php"> Login</a></p>
        </div>

<?php
    include_once('footer.php');
?> 