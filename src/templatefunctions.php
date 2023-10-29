<?php

if(!function_exists('parent_template')) {
    function parent_template(string $path) {
        if(!file_exists($path)) {
            throw new Exception('File not found');
        }
        $parent_template = $path;
    }
}
if(!function_exists('start_slot')) {
    function start_slot(string $name) {
        unset(${$name});
        ob_start();
        ${$name} = '';
    }
}

if(!function_exists('end_slot')) {
    function end_slot(string $name) {
        if(!isset(${$name})) {
            throw new Exception('end slot: Slot not found ' . $name );
        }
        ${$name} = ob_get_clean();
    }
}

if(!function_exists('slot')) {
    function slot(string $name) {
        if(!isset(${$name})) {
            throw new Exception('Slot not found');
        }
        echo ${$name};
    }
}
