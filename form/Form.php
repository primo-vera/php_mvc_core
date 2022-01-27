<?php
/**
 * User: LaMarca_Creative
 * Date: 1/22/2022
 * Time: 11:47 PM
 */

namespace app\core\form;

use app\core\Model;

/**
 * Class Form
 * 
 * @author Keith Barreras <keith.barreras@gmail.com>
 * @package app\core\form
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