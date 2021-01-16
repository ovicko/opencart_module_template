<?php
interface ModuleBuilderInterface {

    public function name($name);
    public function side($side);
    public function extension($extension);
    public function content($content);
    public function version($version);
    public function path($path);

}