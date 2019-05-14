<?php
$section_title = (htmlspecialchars($_POST["section-title-1"]));
$section_text = (htmlspecialchars($_POST["section-text-1"]));
$myfile = fopen("test.tex", "w") ;
$document_template = "\\documentclass{article}
                      \\begin{document}";
$title = "\\section{".$section_title."}";
$subsection_title = "\\subsection{".$section_text."}";
$text = "This is something";
$end ="\\end{document}";
fwrite($myfile,$document_template.$title.$subsection_title.$text.$end);
fclose($myfile);



 ?>
