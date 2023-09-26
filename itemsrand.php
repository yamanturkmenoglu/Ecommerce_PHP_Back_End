<?php 

include "connect.php" ; 

$alldata = array() ; 

$alldata['status'] = "success" ; 



$itemsra = getAllData("itemsview", "items_discuont = 0 ORDER BY RAND() LIMIT 6", null, false);

$alldata['itemsra'] = $itemsra;



 
echo json_encode($alldata) ;