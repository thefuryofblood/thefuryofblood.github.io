<?php
$data_to_save = $_POST["scores"];
$fh = fopen("scoreboard.txt", "w+") or die("Couldn't open the scores file!");
fwrite($fh, $data_to_save);
fclose($fh);
?>