
<?php 

// ------------- MESSAGE 1------------
if (isset($_SESSION['message'])) 
    { ?>
        <div class="alert alert-success" role="alert"><?php echo $_SESSION['message']; ?></div>
    <?php } 
unset($_SESSION['message']);


// ------------- MESSAGE 2 ------------
if (isset($_SESSION['message2'])) 
    { ?>
        <div class="alert alert-success" role="alert"><?php echo $_SESSION['message2'];?></div>
    <?php } 
unset($_SESSION['message2']);

// ------------- MESSAGE 3 ------------
if (isset($_SESSION['message3'])) 
    { ?>
        <div class="alert alert-success" role="alert"><?php echo $_SESSION['message3'];?></div>
    <?php } 
unset($_SESSION['message3']);


// ------------- ERREUR ------------

if (isset($_SESSION['erreur'])) 
    { ?>
        <div class="alert alert-danger" role="alert"><?php echo $_SESSION['erreur'];?></div>
    <?php } 
unset($_SESSION['erreur']);

?>
