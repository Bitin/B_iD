<?php
function mini_html($texte) {
$texte = preg_replace(",\n[\t\ ]*,", "\n", $texte);
$texte = preg_replace(",\n+,", "\n", $texte);
return $texte;
}
?>
