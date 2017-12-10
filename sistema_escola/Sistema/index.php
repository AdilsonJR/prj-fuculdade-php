<?php
?>

<?php

require_once './logged.php';

if (isLoggedIn()):

include_once './template/header.php';
include_once './dados-usuario.php';
include_once './template/footer.php';

?>

<?php

else: 
    header("location:./../index.php"); 
  endif;

?>