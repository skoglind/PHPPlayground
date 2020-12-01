<?php
    $jsfiledata = file_get_contents('FacultyApp.js');
?>
<?php $projtitle = 'Faculty React'; ?>
<?php require_once( '../__res/_proj_head.php' ) ?>
    <pre><?php echo htmlentities($jsfiledata) ?></pre>
<?php require_once( '../__res/_proj_foot.php' ) ?>