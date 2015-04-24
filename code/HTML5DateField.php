<?php

class HTML5DateField extends DateField {

    public function __construct($name, $title = null, $value = "") {
        $this->setConfig('dateformat', 'yyyy-MM-dd');
        parent::__construct($name,$title,$value);
    }

    public function setConfig($name, $val) {
        $this->config[$name] = $val;
        return $this;
    }

    public function getAttributes() {
        return array_merge(
            parent::getAttributes(),
            array(
                'type' => 'date'
            )
        );
    }

} 