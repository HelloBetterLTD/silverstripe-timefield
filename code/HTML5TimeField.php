<?php

class HTML5TimeField extends TimeField {

    public function __construct($name, $title = null, $value = "") {
        $this->setConfig('timeformat', 'H:mm:s');
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
                'type' => 'time'
            )
        );
    }

} 