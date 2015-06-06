<?php

class Blog extends CI_Controller{

  /*public function __construct(){
    parent::__construct();
    echo "This is initialisation <br>";
  }*/

  public function index(){
    //echo "hello this is index function"
    $arr['value1'] = "First subhead";
    $arr['value2'] = "Second subhead";
    $arr['value3'] = "Third subhead";
    $this->load->model('blog_model');
    $profile=$this->blog_model->getProfile('kabadi');
    $arr['profile'] = $profile;
    //print_r($profile);
    $this->load->view('blog_view',$arr);
  }

  public function one($p1,$p2){
    echo "hello this is one <br>";
    echo "helo these are the parameters : $p1, $p2";
  }
}

?>
