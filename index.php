<h1>Exploring basic PHP elements</h1>
<p>Elijah Long</p>
<p>07/15/26</p>

<?php
$varString = "string";
$varInteger = 1;
$varBool = true;

function testFunction($varString,$varInteger){
    $varNew = $varString . " " . (string) $varInteger;
    return $varNew;
}

echo "<h1>" . testFunction($varString,$varInteger) . "</h1>";

echo '<p>So far javascript seems like it would be better at manipulating the DOM and the elements within it but i can already see php has its perks. The ability to write in html and php at the same time eliminates some of the problems the required javascript to begin with </p>';
?> 