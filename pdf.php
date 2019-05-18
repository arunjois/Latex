<?php
//$myfile = fopen("test.tex", "w") ;
$document_template = "\\documentclass{article}
                      \\begin{document}";
$section = $_POST["section"];
foreach ($section as $sec) {
	echo $sec." ";
}
$chapter = $_POST["chapter"][0];
echo $chapter;
$tmp = $_POST["document"];
$array = explode(',',$tmp);

$section_count=0;
$chapter_count=0;
$text_count=0;

foreach($array as $t){
	switch ($t) {
		case 'C':$chapter = $_POST["chapter"][$chapter_count++];
				$title = "\\section{".$chapter."}";


			
		break;
		
		case 'S': $section = $_POST["section"][$section_count++];
		$subsection_title = "\\subsection{".$section."}";

		break;
		case 'T': $text = $_POST["text"][$text_count++];
		


		break;
	}
	echo $chapter."<br />";
echo $section."<br />";
echo $text."<br />";
}




/*$myfile = fopen("test.tex", "w") ;
$document_template = "\\documentclass{article}
                      \\begin{document}";
$title = "\\section{".$section_title."}";
$subsection_title = "\\subsection{".$section_text."}";
$text = $section_text;
$end ="\\end{document}";
fwrite($myfile,$document_template.$title.$subsection_title.$text.$end);
fclose($myfile);
shell_exec("pdflatex test.tex");
*/





 ?>
 <!--
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
     <embed src="test.pdf" width="600px" height="800px" />
   </div>
 </body>
 <html>
-->