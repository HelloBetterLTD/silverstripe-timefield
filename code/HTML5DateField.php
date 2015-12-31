<?php

class HTML5DateField extends DateField
{

    public function __construct($name, $title = null, $value = "")
    {
        $this->setConfig('dateformat', 'mm-dd-yyyy');
        parent::__construct($name, $title, $value);
    }

    public function getAttributes()
    {
        return array_merge(
            parent::getAttributes(),
            array(
                'type' => 'date'
            )
        );
    }

    public function setConfig($name, $val)
    {
        if ($name == 'dateformat') {
            $val = 'mm-dd-yyyy';
        }

        $this->config[$name] = $val;
        return $this;
    }
}
