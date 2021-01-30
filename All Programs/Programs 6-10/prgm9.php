<?php
$allTheStates = "Mississippi Alabama Texas Massachusetts Kansas";
$statesArray = array();
$states1 = explode(' ', $allTheStates);
$i = 0;
//states that ends in xas
foreach ($states1 as $state) {
 if (preg_match('/xas$/', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 echo "<h3>The States that ends in xas: " . $state . "</h3>";
 }
}
//states that begins with k and ends in s
foreach ($states1 as $state) {
 if (preg_match('/^k.*s$/i', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 echo "<h3>The states that begins with k ans ends in s: " . $state ."</h3>";
 }
}
//states that begins with M and ends in s
foreach($states1 as $state) {
 if (preg_match('/^M.*s$/', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 print "<h3>The states that begins with M and ends in s: " . $state . "</h3>";
 }
}
//states that ends in a
foreach($states1 as $state) {
 if (preg_match('/a$/', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 print "<h3> The states that ends in a: " . $state . "</h3>";
 }
}
foreach ($statesArray as $element => $value) {
 echo( "<h4>" . $value . " is the element " . $element . "</h4>");
}
?>
</body>
</html>
