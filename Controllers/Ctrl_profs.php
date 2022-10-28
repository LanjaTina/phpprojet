<?php 
require_once "./Models/Mdl_prof.php";
class ControllerProfs {
    /* Ampiasaina hiantsona le fonction misy requete ao amin'ny Model */
    private $model_data;
    public function __construct(){
        $this->model_data = new Prof();
    }
    public function index(){
        $data_to_insert = $this->model_data->get_data();
        require_once("./Views/prof/list_prof.php");
    }
    public function delete(){
        $data_to_insert = $this->model_data->delete_data();
        require_once("./Views/prof/list_prof.php");
    }  
    public function update(){
        
        
    }  
    public function add(){
        $data_to_insert = $this->model_data->set_data();
        require_once("./Views/prof/list_prof.php");
    }  
    public function save(){

        
    }  
}
?>