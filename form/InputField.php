<?php
/**
 * User: LaMarca_Creative
 * Date: 1/22/2022
 * Time: 11:47 PM
 */

namespace app\core\form;

use app\core\Model;

/**
 * Class InputField
 * 
 * @author Keith Barreras <keith.barreras@gmail.com>
 * @package app\core\form
 */

 class InputField extends Basefield 
 {
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';

    public $type;
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
        $this->type = self::TYPE_TEXT;
        parent::__construct($model, $attribute);
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    public function renderInput(): string
    {
        return sprintf('<input type="%s" name="%s" value="%s" class="form-control%s">', 
            $this->type,
            $this->attribute,
            $this->model->{$this->attribute},
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
        );
    }
      
 }