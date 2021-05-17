/*
  Call results.php functions.
*/
window.onload = fetchData;

function fetchData(){
 
    var result = "<?php echo age()?>";
    document.getElementById("object").innerHTML = result;

}