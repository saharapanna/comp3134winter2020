<form method=POST>
    <label for="username">Username:</input>
    <input type=text name=username></input>

    <br>
    
    <label for="pword">Password:</input>
    <input type=password name=password></input>

    <br>

    <input type=submit name= submit value="Submit the Form"/> 
</form>

<div id="splash"> 

<?php
    $session_confirm = $_SESSION["confirmation"]; 
    $post_confirm  = $_POST['confirmation'];

    if ($session_confirm == $post_confirm && $_POST['password'] == 'pass' && $_POST['username'] == 'host'){
        print "Access Successful!";
    }
    else{
        print "Access NotSuccsseful";
    }
?>

</div>