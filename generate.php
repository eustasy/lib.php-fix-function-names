<?php

$Aliases_File = file_get_contents('src.md');
$Aliases_Lines = explode("\n", $Aliases_File);
foreach ( $Aliases_Lines as $Value ) {
	if (
		!empty($Value) &&
		strpos($Value, '#') === false
	) {
		$Value = explode(' ← ', $Value);
		foreach ( $Value as $Key => $Trim ) {
			$Value[$Key] = trim($Trim);
		}
		if ( strpos($Value[1], ',') !== false ) {
			//echo $Value[1];
			$Value_End = explode(',', $Value[1]);
			foreach ( $Value_End as $New ) {
				$Aliases[$Value[0]] = trim($New);
			}
		} else if ( $Value[0] != $Value[1] ) {
			$Aliases[$Value[0]] = $Value[1];
		}
	}
}
//var_dump($Aliases);

$Aliases_File = '<?php'."\n";
foreach ( $Aliases as $Key => $Value ) {
	// use function sleep as wait;
	$$Key = function() {
		return call_user_func_array($Value, func_get_args());
	};
	$Aliases_File .= 'function '.$Key.'() {'."\n\t".'return call_user_func_array(\''.$Value.'\', func_get_args());'."\n".'}'."\n";
}
//var_dump($Aliases_File);

$Result = file_put_contents('lib.php-fix-function-names.php', $Aliases_File);
//var_dump($Result);
