<?php
  namespace model;

  class random extends \classes\abs\api {
    public function __construct($request) {
      parent::__construct($request);
    }

    protected function index($options = array()) {
      if(sizeof($options) == 0)
        $options = array(0, 9999);
      else if(sizeof($options) == 1) {
        array_push($options, 9999);
      }
      if(!is_numeric($options[0]) || !is_numeric($options[1]))
        return "Parameters must be numeric";
      return rand($options[0], $options[1]);
    }

  }

?>
