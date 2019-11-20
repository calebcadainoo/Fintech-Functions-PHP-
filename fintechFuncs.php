/* This function will help you hash or hide all 
*  characters of your card numbers and keep 
*  only last four characters of your card
*/

function hashCard($cardNumber){
	$cardNUM = $cardNumber;
	$numKeep = substr($cardNUM, -4);
	$cardLen = strlen(substr($cardNUM, 0, -4));

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
				
