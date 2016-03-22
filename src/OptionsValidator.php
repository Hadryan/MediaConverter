<?php

namespace wapmorgan\MediaConverter;

class OptionsValidator {

    public $options;
    public $rules;

    public function __construct(array &$options, array $rules) {
        foreach ($options as $option => $value) {
            if ($option[0] == '-') {
                unset($options[$option]);
                $options[substr($option, 1)] = $value;
            }
        }
        $this->options = $options;
        $this->rules = $rules;
    }

    public function validate() {
        foreach ($this->options as $option =>$value) {
            if (!isset($this->rules[$option])) {
                throw new Exceptions\InvalidOptionException('This method doesn\'t accept option '.$option.'.');
            }
        if (isset($this->rules[$option]['expr'])) {
            if (!preg_match('~'.$this->rules[$option]['expr'].'~', $value))
                throw new Exceptions\InvalidOptionException('Option "'.$option.'" is invalid: '.(isset($this->rules[$option]['text']) ? $this->rules[$option]['text'] : 'format should be '.$this->rules[$option]['expr']));
    }

}
