Minion is a cli tool for performing tasks

Usage 

  minion {task}

Where {task} is one of the following:

<?php foreach ($groups as $group => $tasks): ?>
<?php echo Minion_CLI::color($group, 'brown') ?>

<?php foreach ($tasks as $task): ?>
  <?php echo Minion_CLI::color($task, 'green') ?>

<?php endforeach; ?>

<?php endforeach; ?>

For more information on what a task does and usage details execute 

  minion {task} --help

