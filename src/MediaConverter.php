<?php

namespace wapmorgan\MediaConverter;

class MediaConverter {

    public $filename;
    public $encoder;

    public function __construct($filename) {
        $this->filename = $filename;
        if (($bin = find_existing_file(['/usr/bin/ffmpeg', '/usr/local/bin/ffmpeg'])) !== false)
            $this->encoder = new Encoders\Ffmpeg($bin);
        else
            throw new \Extension('No available encoders in your system. Please visit http://github.com/wapmorgan/MediaConverter/README.md to solve this problem.');
    }

    public function convertTo3gp($filename, $options = []) {
        if (is_array($filename)) {
            $options = $filename;
            $filename = null;
        }

        $optionsValidator = new OptionsValidator($options, []);

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
