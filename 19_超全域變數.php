<?php

# $_SERVER SUPERGLOBAL

// Create Server Array
$server = [
    'host_server_name' => $_SERVER['SERVER_NAME'],
    'Host_header' => $_SERVER['HTTP_HOST'],
    'server_software' => $_SERVER['SERVER_SOFTWARE'],
    'document_root' => $_SERVER['DOCUMENT_ROOT'],
    'current_page' => $_SERVER['PHP_SELF'],
    'script_name' => $_SERVER['SCRIPT_NAME'],
    'absolute_path' => $_SERVER['SCRIPT_FILENAME']
];

print_r($server);

// Create Client Array
$client = [
    'client_system_info' => $_SERVER['HTTP_USER_AGENT'],
    'client_ip' => $_SERVER['REMOTE_ADDR'],
    'remote_port' => $_SERVER['REMOTE_PORT']
];
