<?php
include_once 'header.php'
?>
<section class="signup-form">
    <h2>Sign up</h2>
    <form class="" action="signup.inc.php" method = "post">
        <input type="text" name="name" placeholder="Full name ...">
        <input type="text" name="email" placeholder="Email ...">
        <input type="text" name="uid" placeholder="Username...">
        <input type="password" name="pwd" placeholder="Password ...">
        <input type="password" name="pwdrepeat" placeholder="Password repeat ...">
        <input type="submit" name="submit"  >signup</button>
        
    </form>
</section>
<?php
include_once 'footer.php'
?>