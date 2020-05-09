<?php
namespace Deployer;


desc('Create cache dir');
task('create_cache_dir', function () {
    run("cd {{release_path}}/public && mkdir page-cache && chmod -R 775 page-cache && chown -R www-data:www-data page-cache ");
});