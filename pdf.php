<?php

if(file_exists("./test.tex")) unlink("./test.tex");
if(file_exists("./test.pdf")) unlink("./test.pdf");
$myfile = fopen("test.tex", "w") ;
$document_template = "\\documentclass{article}
                      \\begin{document}";
$tmp = $_POST["document"];
$array = explode(',',$tmp);
var_dump($array);
$section_count=0;
$chapter_count=0;
$text_count=0;
$end ="\\end{document}";
$content = "";
$title = "";
$subsection_title ="";
$text="";
foreach($array as $t){
	switch ($t) {
		case 'C':$chapter = $_POST["chapter"][$chapter_count++];
				$title = "\\section{".$chapter."}";
				//echo $title."\n";
		break;
		case 'S': $section = $_POST["section"][$section_count++];
		$subsection_title = "\\subsection{".$section."}";
		//echo $subsection_title."\n";
		break;
		case 'T': $text = $_POST["text"][$text_count++];
		//echo $text."\n";
		break;
		
	}
	$content = $content.$title.$subsection_title.$text;
}

fwrite($myfile,$document_template.$content.$end);
fclose($myfile);
$string="/usr/bin/pdflatex test.tex";
$what = exec($string);




 ?>
 
 <!DOCTYPE html>
 <head>
 	<meta charset='UTF-8'>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>THis is LAtex</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
 	<script src="./js/script.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 </head>
 <body>
   <div id="pdf">
	   <?php include 'file.php'?>
   </div>
 </body>
 <html>
