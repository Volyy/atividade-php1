<?php

$forca = readline("qual sua forca?(0 a 10): ");
$intelecto = readline("qual seu intelecto?(0 a 10): ");
$vigor = readline("qual seu vigor?(0 a 10): ");

$nex = round((($forca + $intelecto + $vigor) / 3) * 5);

print("Seu nex eh de %$nex");