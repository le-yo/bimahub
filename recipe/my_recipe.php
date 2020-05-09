
<?php

namespace Deployer;



task('my_task', "echo '{{my_custom_message}}'");

set('my_custom_message', 'hello world!');

desc('My task');
task('my_task', function () {
    run("cd {{release_path}} && echo '{{my_custom_message}}'");
});