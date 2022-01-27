<?php
/**
 * User: LaMarca_Creative
 * Date: 1/26/2022
 * Time: 6:45 PM
 */

namespace app\core\form;


use app\core\Model;

/**
 * Class Basefield
 * 
 * @author Keith Barreras <keith.barreras@gmail.com>
 * @package app\core\form
 */

 abstract class Basefield
 {
    public $model;
    public $attribute;

    /**
     * Field constructor.
    *
    * @param \app\core\Model $model
    * @param string          $attribute
    */
    public function __construct(Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    } 
    
    abstract public function renderInput(): string;
    
    public function __toString()
    {
        return sprintf('
            <div class="form-group">
                <label>%s</label>
                %s
                <div class="invalid-feedback">
                    %s
                </div>
            </div>
        ', 
            $this->model->getLabel($this->attribute),
            $this->renderInput(),
            $this->model->getFirstError($this->attribute),
        );
    }
 }