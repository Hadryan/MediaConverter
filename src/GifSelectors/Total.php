<?php

namespace wapmorgan\MediaConverter\GifSelectors;

class Total extends Abstract {

    public $count;

    public function __construct($count) {
        $this->count = $count;
    }

}
