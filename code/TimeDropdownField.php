<?php

class TimeDropdownField extends TimeField {

    private $interval = 10;

    public function __construct($name, $title = null, $value = ""){
        parent::__construct($name,$title,$value);
    }

    public function Field($properties = array()) {
        Requirements::css('silverstripe-timefield/css/TimeDropdownField.css');
        $arrTime = array();
        for($hours=0; $hours<24; $hours++) // the interval for hours is '1'
            for($mins=0; $mins<60; $mins+=$this->interval){// the interval for mins is '30'
                $value = str_pad($hours,2,'0',STR_PAD_LEFT).':'.str_pad($mins,2,'0',STR_PAD_LEFT);
                $arrTime[$value] = $value;
            }
        return DropdownField::create($this->name)
            ->setValue($this->value)
            ->setSource($arrTime)
            ->addExtraClass('time-select');
    }

    public function setInterval($iInterval){
        $this->interval = $iInterval;
        return $this;
    }

} 