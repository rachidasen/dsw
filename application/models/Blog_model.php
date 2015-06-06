<?php defined('BASEPATH') OR exit('No direct script access allowed');
  class Blog_model extends CI_Model{

    public function getprofile($value)
    {
      # code...
      return $info = array('name' =>'Raghib Ahsan' , 'age'=>45);
    }
  }


?>
