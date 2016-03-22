<?php

namespace wapmorgan\MediaConverter\Encoders;

class Ffmpeg {

    public $bin;

    public function __construct($bin) {
        $this->bin = $bin;
    }

    public function convert($input, $output, $options) {
        $cmd = $this->bin.' -i '.escapeshellarg($input);
        foreach ($options as $option => $value) {
            $cmd .= ' -'.$option.' '.escapeshellarg($value)};
        }
        $cmd .= ' '.$output;

        $result = system($cmd);

        return $result;
    }

}
