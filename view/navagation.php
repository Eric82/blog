<?php
    require_once (__DIR__ . "/../model/config.php");
    require_once (__DIR__ . "/../controller/login-verify.php");
//stops users from going into our create posts and going into parts we don't want them to.    
    if (!authenticateUser()) {
        header("Location: " . $path . "index.php");
        die();
    }

//this will make a link to go to posts php
?>
<nav>
    <ul>
        <li><a href="<?php echo $path . "post.php" ?>">Blog Post Form</a></li>
    </ul>
</nav>