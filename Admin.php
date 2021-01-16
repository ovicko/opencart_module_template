<?php
require_once "AbstractModule.php";
require_once "ModuleModel.php";
class Admin extends AbstractModule
{
    private $name;
    private $model;
    private $side = 'admin';

    public function __construct($name) {
        $this->name = $name;
        $this->model = new ModuleModel();
    }
    
    public function language()
    {
        
    }

    public function model()
    {
        $modelName = "ModelExtensionModule".ucwords($this->name);
        $content =  "<?php
                        class $modelName extends Model 
                        { 

                        }
                        ";
        $model = new ModuleModel();
        $model->name($this->name)
                ->path("model/extension/module/")
                ->side($this->side)
                ->extension('php')
                ->content($content)
                ->version('3.0.x')->generateFile();
    }

    public function view()
    {
    }
    
    public function controller()
    {
        
    }
    
}

$test = new Admin('test1');
$test->model();
