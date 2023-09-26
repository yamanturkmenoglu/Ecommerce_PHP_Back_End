<?php 

include "../connect.php" ; 

$search = filterRequest("search") ; 

getAllData("itemsview" , "items_name LIKE '%$search%' OR items_name_tr  LIKE '%$search%'  ") ; 

?>