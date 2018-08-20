<?php

namespace PHPMVC\controllers;

//عشان مش في كل كلاس في الكونترولر لما ميبقاش فيه اكشن اعمل جواه الفانكشن ديه فهعملها مره واحده واكستيند كله فيها 

class AbstractController {

    protected $_controller;
    protected $_action;
    protected $_params;
    
    protected  $_data = [];
    
    public function NotFoundAction() {
        $this->_view();
    }

    public function setController($controllerName) {

        $this->_controller = $controllerName;
    }

    public function setAction($actionName) {

        $this->_action = $actionName;
    }

    public function setParams($Params) {

        $this->_params = $Params;
    }

    protected function _view() {
      
        
        if ($this->_action == \PHPMVC\LIB\FrontController::NOT_FOUND_ACTION) {
            require_once VIEWS_PATH . 'notfound' . DS . 'notfound.view.php';
        } else {
            $view = VIEWS_PATH . $this->_controller . DS . $this->_action . '.view.php';
             
            if (file_exists($view)) {
                extract($this->_data);
                require_once $view;
            } else {
                require_once VIEWS_PATH . 'notfound' . DS . 'noview.view.php';
            }
        }
          
        
    }

}
