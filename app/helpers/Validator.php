<?php

class Validator
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function empty()
    {
        foreach($this->data as $key => $value)
        {
            if (trim($value) == '')
            {
                throw new Exception('empty_' . $key);
            }
        }
        return $this;
    }
}