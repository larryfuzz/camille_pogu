<?php
if ($_POST['password'] == 'coucoumichel'){    
   header('Location: adminIndex.php');
} else {
    echo 'mot de passe incorrect';
}
