
Usage
=======
minion <?php echo Minion_CLI::color($task, 'cyan') ?>
<?php foreach ($params as $param => $attrs): ?>
 <?php echo Minion_CLI::color("--{$param}", 'light_green') ?><?php if ($attrs['type'] !== 'boolean')echo '='.Minion_CLI::color("<{$attrs['type']}>", 'light_purple'); ?>
<?php endforeach ?>

<?php if ($params): ?>

Params
=======
<?php foreach ($params as $param => $attrs): ?>
  <?php echo Minion_CLI::color("--{$param}", 'light_green') ?>: <?php echo Minion_CLI::color($attrs['type'], 'light_purple') ?> <?php echo $attrs['description'] ?>

<?php endforeach ?>
<?php endif ?>

Description
===========
<?php echo Minion_CLI::color($description, 'brown'); ?>


Details
=======
<?php foreach($tags as $tag_name => $tag_content): ?>
<?php echo ucfirst($tag_name) ?>: <?php echo $tag_content ?> 
<?php endforeach; ?>