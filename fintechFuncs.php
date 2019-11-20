/* This function will help you hash or hide all 
*  characters of your card numbers and keep 
*  only last four characters of your card
*/

function hashCard($cardNumber, $numChars = 4){
	$cardNUM = $cardNumber;
	$numKeep = substr($cardNUM, -($numChars));
	$cardLen = strlen(substr($cardNUM, 0, -($numChars)));

	$hashedCard = "";
	for ($i=1; $i < $cardLen; $i++) { 
		# code...
		$hashedCard .= "X";
	}
	$cardVal = $hashedCard.$numKeep;
	return $cardVal;
}

// test with this
echo hashCard("459199292029292929");
				
