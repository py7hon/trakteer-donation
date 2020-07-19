<?php
	require('simple_html_dom.php');
	$id = $_GET['widget'];
if($_GET['widget'] != ""){
	$id = $_GET['widget'];
		$html = file_get_html('https://trakteer.id/'.$id);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<?php
	foreach($html->find(".goal") as $element)  { 
		echo '<div class="card text-center" style="width: 18rem;">';
		echo '<div class="card-body">';
   		echo '<p class="card-text">',$element->find('.description',0)->innertext,"<p/>\n";
   		echo $element->find('span.explanation', 0)->innertext,"<br/>\n";
   		echo '<div class="progress">';
   		echo $element->find('div.progress-bar-container', 0)->innertext,"<br/>\n";
		echo '</div><br/>';
		echo '<a href="https://trakteer.id/',$id,'" target="_blank" rel="noopener noreferrer" class="btn btn-primary" role="button" aria-pressed="true">Kirim Dukungan</a>';
		echo '</div>';
		echo '</div>';
}}else{echo"id not found";}?>

