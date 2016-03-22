<?php

namespace wapmorgan\MediaConverter;

function find_existing_file($files) {
    foreach ($files as $file) {
        if (file_exists($file))
            return $file;
    }
    return false;
}

class MediaConverter {

    public $filename;
    public $encoder;

    public function __construct($filename) {
        $this->filename = $filename;
        if (($bin = find_existing_file(['/usr/bin/ffmpeg', '/usr/local/bin/ffmpeg', '/bin/ffmpeg'])) !== false)
            $this->encoder = new Encoders\Ffmpeg($bin);
        else
            throw new \Extension('No available encoders in your system. Please visit http://github.com/wapmorgan/MediaConverter/README.md to solve this problem.');
    }

    public function convertTo3gp($filename, $options = []) {
        if (is_array($filename)) {
            $options = $filename;
            $filename = null;
        }

        $optionsValidator = new OptionsValidator($options, [
            'b' => ['expr' => '^[0-9]+k?$', 'text' => 'bitrate should be a numeric with an optional "k".'],
            'r' => ['expr' => '^[0-9]+(\.[0-9]+)?$', 'text' => 'rate should be a numeric with an optional "float point".'],
            's' => ['expr' => '^[0-9]+x[0-9]+$', 'text' => 'size should be two digits  joined by "x".'],
            'ab' => ['expr' => '^[0-9]+k?$', 'text' => 'audio bitrate should be a numeric with an optional "k".'],
            'ac' => ['expr' => '^[1-9]+$', 'text' => 'audio channels should be a numeric.'],
        ]);
        $optionsValidator->validate();

        $result = $this->encoder->convert($this->filename, $filename == null ? $this->filename : $filename, $options);

        return $result;
    }

    public function getIsAudio() {
        $streams = $this->encoder->getStreams($this->filename);
        return count($streams) == 1 && $streams[0]->type == 'audio';
    }

    public function getIsVideo() {
        return !$this->getIsAudio();
    }

}
