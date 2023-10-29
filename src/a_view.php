<?php parent_template(__DIR__. '/base.php') ?>

<?php start_slot('title') ?>
    Title from template
<?php end_slot('title') ?>

<?php start_slot('content') ?>
    Content from template
    <div><?= $value_a ?></div>
<?php end_slot('content') ?>

<?php start_slot('not_in_base') ?>
    asd qwe
<?php end_slot('not_in_base') ?>
