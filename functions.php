<?php
function echoRow($row){
	echo '<div class="row">';
    	echo '<div class="col-md-3">';
		echo '<img src="./photo/'. $row[0] . '" class="img-responsive"  alt="' . $row[0] . '">';
  	  	echo '</div>';
    	echo '<div class="col-md-3">';
		echo '<img src="./photo/'. $row[1] . '" class="img-responsive"  alt="' . $row[0] . '">';
  	  	echo '</div>';
    	echo '<div class="col-md-3">';
		echo '<img src="./photo/'. $row[2] . '" class="img-responsive"  alt="' . $row[0] . '">';
  	  	echo '</div>';
    	echo '<div class="col-md-3">';
		echo '<img src="./photo/'. $row[3] . '" class="img-responsive"  alt="' . $row[0] . '">';
  	  	echo '</div>';
      	echo '</div>';
}

function printPicRows(){
$dir    = './photo';
$files = scandir($dir);
$row = array();
unset($files[0]);
unset($files[1]);
unset($files[2]);
// print_r($files);exit;
shuffle($files);
foreach( $files as $name ){
	
	if(sizeof($row) == 4){
		echoRow($row);
		$row = array();
	}
	$row[] = $name;
}
echoRow($row);
}

?>