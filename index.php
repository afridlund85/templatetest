<?php

use TemplateTest\Renderer;
require('./vendor/autoload.php');
$renderer = new Renderer;

echo $renderer->render(__DIR__.'/src/a_view.php', ['value_a' => 'the value of A']);
