<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PHPMVC\LIB;

 
trait InputFilter {
    public  function filterInt($input)
     {
        return filter_var($input,FILTER_SANITIZE_NUMBER_INT);   
       }
       public function  filterFloat($input)
       {
           return filter_var($input,FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
       }
       
       public function filterString($input)
       {
           return htmlentities(strip_tags($input),ENT_QUOTES,'UTF-8');
       }
}
