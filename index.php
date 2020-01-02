<?require_once './calculator.php';
//new object class calculator
$calculator = new Calculator();
//minus 20 with result
$calculator->minus(20);
//add 20 by result
$calculator->plus(20);
if ($calculator->result != 0) {
	$calculator->plus(42);
}
//print result
print($calculator->result);

?>