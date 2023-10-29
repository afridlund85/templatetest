<?php

namespace TemplateTest;

use Exception;
use Throwable;

class Renderer {

    public function render(string $path, array $data = []):string {
        if(!file_exists($path)) {
            throw new Exception('File not found');
        }

        try{
            extract($data);
            ob_start();

            require($path);

            $output = ob_get_clean();
            var_dump($output); exit;

            if(isset($parent_template)) {
                $output = $this->render($parent_template);
            }

            return $output;
        } catch(Throwable $e) {
            throw $e;
        }

    }
}
