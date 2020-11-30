<?php

	/* Author: Fredrik Skoglind, 2020 */

	// Presets
	$minvalue = 1;
	$maxvalue = 9;

	// Get numeric $uservalue from querystring "x", with min/max value
	if(isset($_GET['x']) && 
		is_numeric($_GET['x']) &&
		$_GET['x'] >= $minvalue &&
		$_GET['x'] <= $maxvalue) {
		$uservalue = intval($_GET['x']);
	} else {
		$uservalue = 1;
	}

	// Calculate faculty, recursive, n = x * [...] * 2 * 1
	function calcFaculty($x, $value = 1) : int {
		if( $x < 2 ) { return $value; } // Base case
		else { return calcFaculty($x - 1, $value * $x); }
	}

	// Do the calculations
	$calculatedValue = calcFaculty($uservalue);

?>
<?php $projtitle = 'Faculty'; ?>
<?php require_once( '../_proj_head.php' ) ?>
	<p>Calculate: <?php echo $uservalue; ?>! = <?php echo $calculatedValue ?></p>
	<div class="data">
		<input type="button" value="-1" onclick="location.href='?x=<?php echo $uservalue - 1 ?>'" <?php if($uservalue-1 < $minvalue){ echo 'disabled'; } ?> />
		<input type="button" value="+1" onclick="location.href='?x=<?php echo $uservalue + 1 ?>'" <?php if($uservalue+1 > $maxvalue){ echo 'disabled'; } ?> />
	</div>
<?php require_once( '../_proj_foot.php' ) ?>