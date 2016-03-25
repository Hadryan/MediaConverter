<?php

namespace wapmorgan\MediaConverter\GifSelectors;

class Every extends Abstract {

    public $interval;

    public function __construct($interval) {
        $this->interval = $interval;
    }

}
