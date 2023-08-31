<?php
    include_once 'header.php';
?>
        <div class="form">
            <H1>Login system</H1>
        <form action="includes/login.inc.php" method="post"  >
                <input type="text" id="fname" name="name" placeholder="Name">
                <input type="email" id="fname" name="name" placeholder="Email">
                <input type="text" id="lname" name="password" placeholder="Usernaem">
                <input type="password" id="lname" name="password" placeholder="Password">
                <input type="password" id="lname" name="password" placeholder="Reprat Password">

                <br>
            <input type="submit" value="Submit">
        </form>
        </div>

<?php
    include_once('footer.php');
?> 