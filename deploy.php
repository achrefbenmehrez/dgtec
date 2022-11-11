<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', '[https://github.com/Boulaabi369/dgtec.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('212.107.17.101')
    ->set('remote_user', 'u446566429')
    ->set('deploy_path', '~/DGTEC')
    ->set('remote_port', 65002);

// Hooks

after('deploy:failed', 'deploy:unlock');
