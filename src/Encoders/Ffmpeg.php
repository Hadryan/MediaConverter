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

    public function join($first, $second, $output) {
        $result = system('echo "'.escapeshellarg($first).'\n'.escapeshellarg($second).'" | '.$this->bin.' -f concat -i - -c copy '.escapeshellarg($output));

    return $result;
    }

    public function cut($filename, $start, $end, $output) {
        $result = system($this->bin.' -i '.escapeshellarg($filename).' -ss '.$start.' -t '.($end - $start).' '.escapeshellarg($output));
        return $result;
    }

    public function getFrame($filename, $time, $options) {
        $temp = tempnam(system_get_temp_dir(), 'frm');
        $cmd = $this->bin.' -i '.escapeshellarg($input).' -ss '.$time.' -f mjpeg -frames:v 1'

;
        foreach ($options as $option => $value) {
            $cmd .= ' -'.$option.' '.escapeshellarg($value)};
        }
        $cmd .= ' '.escapeshellarg($temp);

        $result = system($cmd);

        $frame = file_get_contents($temp);
        unlink($temp);

        return $frame;
    }

    public function getLength($filename) {
        $output = shell_exec($this->bin.' -i '.$filename);
        preg_match('/Duration: ([0-9]{2}):([0-9]{2}):([0-9]+)/', $output, $matches);
        return $matches[1]*3600 + $matches[2]*60 + $matches[3];
    }

}
