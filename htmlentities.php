<?php

// htmlentities & html_entity_decodes

$val = "A 'quote' is <b>bold.</b>";

echo $val . "<br>";
//echo htmlentities($val) . "<br>";
//echo html_entity_decode($val) . "<br>";


// same word of htmlspecialchars
echo htmlspecialchars($val) . "<br>";
echo htmlspecialchars_decode($val) . "<br>";




// htmlspecialchars codes list
ECHO "<PRE>";
print_r(get_html_translation_table(HTML_SPECIALCHARS));
ECHO "</PRE>";



// htmlentities codes list
ECHO "<PRE>";
print_r(get_html_translation_table(HTML_ENTITIES));
ECHO "</PRE>";






?>