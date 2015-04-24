<?php

class HTML5TimeField extends TimeField {

    private $interval = '600';

    public function __construct($name, $title = null, $value = "") {
        $this->setConfig('timeformat', 'H:mm:s');
        $this->setInterval($this->Config()->interval);
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
                'type'  => 'time',
                'step'  => $this->$interval
            )
        );
    }

    public function setInterval($iInterval){
        $this->$interval = $iInterval;
    }

} 