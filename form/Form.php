<?php
/**
 * User: LaMarca_Creative
 * Date: 1/22/2022
 * Time: 11:47 PM
 */

namespace kb\phpmvc\form;

use kb\phpmvc\Model;

/**
 * Class Form
 * 
 * @author Keith Barreras <keith.barreras@gmail.com>
 * @package kb\phpmvc\form
 */

 class Form 
 {
     public static function begin($action, $method)
     {
         echo sprintf('<form action="%s" method="%s">', $action, $method );
         return new Form();
     }

     public static function end()
     {
         echo '</form>';
     }

     public function field(Model $model, $attribute)
     {
        return new InputField($model, $attribute);  
     }
 }