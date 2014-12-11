<?php
//this let the user register and put there information down.
//this code will get information and let us know whats in the table that I made in create-db.php
// textarea allows me to make as much as sentences as i want to put and do.
require_once (__DIR__ . "/../model/config.php");
?>
<h1>Register</h1>

<form method="post" action="<?php echo $path ."controller/create-user.php"?>">;
    <div>    
        <label for="email">Email: </label>
        <input type="text" name="email"/>
    </div>

    <div>    
        <label for="username">Username:</label>
        <input type="text" name="username" />
    </div>

    <div>    
        <label for="password">password: </label>
        <input type="password" name="password"/>
    </div>

    <div>
        <button type ="submit">Submit</button>
    </div>    
</form>

