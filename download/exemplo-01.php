<?php

$link = "https://a.espncdn.com/combiner/i?img=/i/teamlogos/leagues/500/nba.png?w=100&h=100&transparent=true";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>">