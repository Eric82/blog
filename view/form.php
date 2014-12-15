<?php
//this code will get information and let us know whats in the table that I made in create-db.php
// textarea allows me to make as much as sentences as i want to put and do.
    require_once (__DIR__ . "/../model/config.php");
    require_once (__DIR__ . "/../controller/login-verify.php");
    
    if(!authenticateUser()){
        header("Location: " . $path . "index.php");
        die();
    } 
    
?>
<h1>Create Blog Post</h1>

<form method="post" action="<?php echo $path ."controller/create-post.php";?>">
    <div>
        <laber for="title">Title:</laber>
        <input type="text" name="title" />
    </div>
        <label for="post">Post:</label>
        <textarea name="post"></textarea>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>