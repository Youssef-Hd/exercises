<?php
$grocery = array("Eggs", "Milk", "Cheese", "Water Pack", "Tissues", "Watermelon");

echo "Hello Sir,do you have $grocery[0], $grocery[1], and $grocery[2]? <br>"; 

echo "Also if you sell fruits can i find a $grocery[5]? ";

?>




 <!-- Output the first 3 items of the array and the last item using the following message,
 Hello Sir, do you have Eggs, Milk, and Cheese?
 Also if you sell fruits can I find a Watermelon? -->


 <?php
$groceries = array(
    array(
        'name' => 'eggs',
        'brand' => 'balade',
        'supplier' => 'mazere3'

    ),
    array (
        'name' => 'Milk',
        'brand' => 'Fresh',
        'supplier' => 'Taanayel'
    ),
    array(
        'name' => 'Water-Pack',
        'brand' => 'Tanoureen',
        'supplier' => 'Reem'
    ),
   
);
echo "Hey Sir, Please i need 1 pack of {$groceries[0]['brand']}  {$groceries[0]['name']} and 3 {$groceries[2]['supplier']} {$groceries[2] ['name']}."

?>




// Create a Multidimensional Array with the following items: egss ( 'balade', 'mazere3' )
// milk ('Fresh', 'Taanayel'), water-pack ( 'Tanoureen', 'Reem')
// Output the following sentence,Hey Sir, Please I need 1 pack of balade eggs and 3 Reem Water Pack
//  Output the prvious syntax using the array previously declared






