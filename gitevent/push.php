<?php
shell_exec("cd /var/www/board/gentelella && git log --oneline -10 --author=Exibi > /var/www/board/gentelella/git.log");

echo "saved";
var_dump(json_decode(file_get_contents("php://input"),true));
?>
