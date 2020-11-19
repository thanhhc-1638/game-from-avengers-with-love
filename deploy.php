<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'game_from_avengers_with_love');

// Project repository
set('repository', 'git@github.com:thanhhc-1638/game-from-avengers-with-love.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Default branch
set('branch', 'develop');

// Shared files/dirs between deploys 
add('shared_files', ['.env']);
add('shared_dirs', [
    'storage',
    'bootstrap/cache',
]);

// Writable dirs by web server 
add('writable_dirs', [
    'bootstrap/cache',
    'storage',
    'storage/app',
    'storage/app/public',
    'storage/framework',
    'storage/framework/cache',
    'storage/framework/sessions',
    'storage/framework/views',
    'storage/logs',
]);

// Hosts
host('45.76.190.30')
    ->user('deploy')
    ->stage('production')
    ->set('deploy_path', '~/{{application}}')
    ->forwardAgent(false);
    
// Tasks
task('build', function () {
    run('cd {{release_path}} && build');
});
task('npm:run:install', function () {
    run('cd {{release_path}} && npm install');
});
task('npm:run:dev', function () {
    run('cd {{release_path}} && npm run dev');
});
task('reload:php-fpm', function () {
    run('sudo /etc/init.d/php7.2-fpm reload');
});

desc('Deploy your project');
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:vendors',
    'deploy:writable',
    'artisan:storage:link',
    'artisan:view:cache',
    'artisan:config:cache',
    'artisan:optimize',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'reload:php-fpm',
    'npm:run:install',
    'npm:run:dev',
]);

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.
// before('deploy:symlink', 'artisan:migrate');

desc('Deploy done!');
