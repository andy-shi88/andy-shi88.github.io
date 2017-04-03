<?php
  switch ($page) {
       case 'main':
       		include './contents/main.php';
       		break;
       case 'manajemen_stok':
            include './content/Forms/form_manajemen_stok.php';
            break;
    default:
      include './contents/main.php';
  		break;
  }
?>
