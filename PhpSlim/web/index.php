<?php
set_time_limit(0);
ini_set('max_execution_time', 0);

$command = 'php ../runPhpSlim.php ' . $_POST['classpath'] . ' ' . $_POST['port'];

echo shell_exec($command);
