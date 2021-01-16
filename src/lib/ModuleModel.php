<?php
namespace ovicko\opencart;

use ovicko\opencart\ModuleBuilderInterface;

class ModuleModel implements ModuleBuilderInterface
{

    private $name;
    private $side;
    private $extension;
    private $content;
    private $version;
    private $path;

    public function name($name) {
        $this->name = $name;
        return $this;

    }
    public function side($side) {
        $this->side = $side;
        return $this;
    }
    public function extension($extension) {
        $this->extension = $extension;
        return $this;
    }

    public function path($path)
    {
        $this->path = $path;
        return $this;
    }

    public function content($content) {
        $this->content = $content;
        return $this;
    }
    public function version($version) {
        $this->version = $version;
        return $this;
    }

    public function generateFile() {
        $output_folder = 'output/' . $this->name.'/upload/'. $this-> side . '/' . $this->path;

        if (!file_exists($output_folder)) {
            mkdir($output_folder, 0777, true);
        }

        $filename = $output_folder.$this->name.'.'. $this->extension;

        file_put_contents($filename, $this->content);     // Save our content to the file.
    }
    
}