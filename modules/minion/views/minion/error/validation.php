Parameter Errors:
<?php foreach ($errors as $parameter => $error): ?>
    <?php echo Minion_CLI::color($parameter, 'light_green'); ?> - <?php echo Minion_CLI::color($error, 'red'); ?>
<?php endforeach; ?>

Run

    ./minion <?php echo Minion_CLI::color($task, 'cyan') ?> --help

for more help