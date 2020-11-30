<?php $projtitle = 'Faculty JS'; ?>
<?php require_once( '../__res/_proj_head.php' ) ?>
	<p>Calculate: <span id="value"></span>! = <span id="result"></span></p>
	<div class="data">
		<input type="button" id="decreaseButton" value="-1" onclick="decreaseValue();" />
		<input type="button" id="increaseButton" value="+1" onclick="increaseValue();" />
	</div>

	<script src="faculty.js"></script>
<?php require_once( '../__res/_proj_foot.php' ) ?>