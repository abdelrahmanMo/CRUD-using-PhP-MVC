<?php
 

namespace PHPMVC\controllers;
use PHPMVC\Models\EmployeeModel;
 
class EmployeeController extends AbstractController {
    use \PHPMVC\LIB\InputFilter;
    use \PHPMVC\LIB\Helper;
    //put your code here
    public function defaultAction()
    {
        $this->_data['employees'] = EmployeeModel::getAll();
      
        $this->_view();
    }

     public function addAction()
    {
        if(isset($_POST['submit'])) {
        $emp = new EmployeeModel();
         $emp->setName($this->filterString($_POST['name']));
         $emp->setAge($this->filterInt($_POST['age']));
         $emp->setAddress($this->filterString($_POST['address']));
         $emp->setSalary($this->filterFloat($_POST['salary']));
         $emp->setTax($this->filterFloat($_POST['tax'])); 
         
         if($emp->save())
         {
             //if yo work on host
             //$this->redirect('/employee');
             //if work on localhost
             $_SESSION['message']= 'Employee Saved successfully';
             $this->redirect('/MVC/public/employee');
         }
         
        }

     
        $this->_view();
    }
    
    
     public function editAction()
    {
         $id = $this->filterInt($this->_params[0]);
         
         $emp = EmployeeModel::getByID($id);
         if($emp === FALSE)
         {
              $this->redirect('/MVC/public/employee');
         }
         $this->_data['employee'] = $emp;
         
          if(isset($_POST['submit'])) {
     
         $emp->setName($this->filterString($_POST['name']));
         $emp->setAge($this->filterInt($_POST['age']));
         $emp->setAddress($this->filterString($_POST['address']));
         $emp->setSalary($this->filterFloat($_POST['salary']));
         $emp->setTax($this->filterFloat($_POST['tax'])); 
         
         if($emp->save())
         {
             //if yo work on host
             //$this->redirect('/employee');
             //if work on localhost
             $_SESSION['message']= 'Employee Update successfully';
             $this->redirect('/MVC/public/employee');
         }
         
        }

     
        $this->_view();
    }
     public function deleteAction()
    {
         
         $id = $this->filterInt($this->_params[0]);
         
         $emp = EmployeeModel::getByID($id);
         if($emp === FALSE)
         {
              $this->redirect('/MVC/public/employee');
         }
         if($emp->delete() === TRUE)
         {
             
             $_SESSION['message']= 'Employee deleted successfully';
            
              $this->redirect('/MVC/public/employee');
         }
         
        
             //if yo work on host
             //$this->redirect('/employee');
             //if work on localhost

    }
}