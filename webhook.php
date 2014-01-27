<?php #!/usr/bin/env /usr/bin/php
error_reporting(E_ALL);
ini_set('display_errors', '1');
set_time_limit(0);
 
try {
 
  $payload = json_decode($_REQUEST['payload']);
 
}
catch(Exception $e) {
 
    //log the error
    file_put_contents('/srv/www/yoxima/logs/github.txt', $e . ' ' . $payload, FILE_APPEND);
 
      exit(0);
}
 
if ($payload->ref === 'refs/heads/master') {
 
    $project_directory = '/var/www/yoxima/';
 
    $output = shell_exec($project_directory."git-puller.sh");
 
    //log the request
    file_put_contents('/srv/www/yoxima/logs/github.txt', $output, FILE_APPEND);
 
}
?>
