<?php
/**
 * User: LaMarca_Creative
 * Date: 1/22/2022
 * Time: 11:47 PM
 */

namespace kb\phpmvc\form;


/**
 * Class TextareaField
 * 
 * @author Keith Barreras <keith.barreras@gmail.com>
 * @package kb\phpmvc\form
 */
class TextareaField extends Basefield
{

    public function renderInput(): string
    {
        return sprintf('<textarea class="form-control%s" name="%s">%s</textarea>', 
            $this->type,
            $this->attribute,
            $this->model->{$this->attribute},
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
        );
    }

}