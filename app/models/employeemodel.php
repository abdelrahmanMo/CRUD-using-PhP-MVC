<?php
 namespace PHPMVC\Models;
class EmployeeModel extends Abstractmodel
{
    public $id;
    private $name;
    private $age;
    private $address;
    private $tax;
    private $salary;
    
    protected static $primaryKey = 'id';
     
    protected static $tableName='employees';
    protected static $tableSchema=array(
        'name'=> self::DATA_TYPE_STR,
        'age'=> self::DATA_TYPE_INT  ,
        'address' => self::DATA_TYPE_STR,
        'tax' => self::DATA_TYPE_DECIMAL,
        'salary' => self::DATA_TYPE_DECIMAL
    );
   
    public  function __construct()
    {
        
       
    }
     
    public function __get($prop)
    {
    return $this->$prop;
    }
    public function setName($name)
    {
        $this->name =$name;
    }
     public function getName()
    {
    return $this->name ;
    }
    
    public function setAge($age)
    {
        $this->age =$age;
    }
     public function getAge()
    {
    return $this->age ;
    }
    
    
    public function setAddress($address)
    {
        $this->address =$address;
    }
     public function getAddress()
    {
    return $this->address ;
    }
    
    
    public function setTax($tax)
    {
        $this->tax =$tax;
    }
     public function getTax()
    {
    return $this->tax ;
    }

    
    public function setSalary($salary)
    {
        $this->salary =$salary;
    }
     public function getSalary()
    {
    return $this->salary ;
    }
    public function getId()
    {
        return $this->id;
    }
}


