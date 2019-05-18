<?php
//$section_title = (htmlspecialchars($_POST["chapter"][0]));
//$section_text = (htmlspecialchars($_POST["section-title"][0]));
$section_text="this is chaptert";
$section_title="This is text";
$myfile = fopen("test.tex", "w") ;
$document_template = "\\documentclass{article}
                      \\begin{document}";
$title = "\\section{".$section_title."}";
$subsection_title = "\\subsection{".$section_text."}";
$text = $section_text;
$end ="\\end{document}";
fwrite($myfile,$document_template.$title.$subsection_title.$text.$end);
fclose($myfile);
shell_exec("pdflatex test.tex");
/*$section = $_POST["section-title"];
foreach ($section as $sec) {
	echo $sec." ";
}
echo "Chapter<br />";
$chapter = $_POST["chapter"];
foreach ($chapter as $chap) {
	echo $chap." ";
}
echo "text<br />";
$text = $_POST["text"];
foreach($text as $t){
	echo $t." ";
}

/*echo count($_POST["section-title"]);
$dom = new DOMDocument();
$dom->preserveWhiteSpace = false;
$dom->formatOutput       = true;
$dom->loadHTML('index.html');
$result = $dom->childNodes;
foreach($result as $node) {
	//print_r($node);
}
var_dump($_POST);
*/

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
     <embed src="test.pdf" width="600px" height="800px" />
   </div>
 </body>
 <html>
