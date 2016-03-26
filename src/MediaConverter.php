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
        $options['f'] = '3gp';

        $result = $this->encoder->convert($this->filename, $filename == null ? $this->filename : $filename, $options);

        return $result;
    }

    public function convertToAvi($filename, $options = []) {
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
        $options['f'] = 'avi';

        $result = $this->encoder->convert($this->filename, $filename == null ? $this->filename : $filename, $options);

        return $result;
    }

    public function convertToMp4($filename, $options = []) {
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
        $options['f'] = 'mp4';

        $result = $this->encoder->convert($this->filename, $filename == null ? $this->filename : $filename, $options);

        return $result;
    }

    public function convertToMov($filename, $options = []) {
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
        $options['f'] = 'mov';

        $result = $this->encoder->convert($this->filename, $filename == null ? $this->filename : $filename, $options);

        return $result;
    }

    public function convertToMpeg($filename, $options = []) {
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
        $options['f'] = 'mpegts';

        $result = $this->encoder->convert($this->filename, $filename == null ? $this->filename : $filename, $options);

        return $result;
    }

    public function convertToMkv($filename, $options = []) {
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
        $options['f'] = 'mkv';

        $result = $this->encoder->convert($this->filename, $filename == null ? $this->filename : $filename, $options);

        return $result;
    }

    public function convertToMp3($filename, $options = []) {
        if (is_array($filename)) {
            $options = $filename;
            $filename = null;
        }

        $optionsValidator = new OptionsValidator($options, [
            'ab' => ['expr' => '^[0-9]+k?$', 'text' => 'audio bitrate should be a numeric with an optional "k".'],
            'ac' => ['expr' => '^[1-9]+$', 'text' => 'audio channels should be a numeric.'],
        ]);
        $optionsValidator->validate();
        $options['f'] = 'mp3';

        $result = $this->encoder->convert($this->filename, $filename == null ? $this->filename : $filename, $options);

        return $result;
    }

    public function convertToWav($filename, $options = []) {
        if (is_array($filename)) {
            $options = $filename;
            $filename = null;
        }

        $optionsValidator = new OptionsValidator($options, [
            'ab' => ['expr' => '^[0-9]+k?$', 'text' => 'audio bitrate should be a numeric with an optional "k".'],
            'ac' => ['expr' => '^[1-9]+$', 'text' => 'audio channels should be a numeric.'],
        ]);
        $optionsValidator->validate();
        $options['f'] = 'wav';

        $result = $this->encoder->convert($this->filename, $filename == null ? $this->filename : $filename, $options);

        return $result;
    }

    public function convertToAmr($filename, $options = []) {
        if (is_array($filename)) {
            $options = $filename;
            $filename = null;
        }

        $optionsValidator = new OptionsValidator($options, [
            'ab' => ['expr' => '^[0-9]+k?$', 'text' => 'audio bitrate should be a numeric with an optional "k".'],
            'ac' => ['expr' => '^[1-9]+$', 'text' => 'audio channels should be a numeric.'],
        ]);
        $optionsValidator->validate();
        $options['f'] = 'amr';

        $result = $this->encoder->convert($this->filename, $filename == null ? $this->filename : $filename, $options);

        return $result;
    }

    public function convertToAac($filename, $options = []) {
        if (is_array($filename)) {
            $options = $filename;
            $filename = null;
        }

        $optionsValidator = new OptionsValidator($options, [
            'ab' => ['expr' => '^[0-9]+k?$', 'text' => 'audio bitrate should be a numeric with an optional "k".'],
            'ac' => ['expr' => '^[1-9]+$', 'text' => 'audio channels should be a numeric.'],
        ]);
        $optionsValidator->validate();
        $options['f'] = 'aac';

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

    public function join($filename, $output) {
        return $this->encoder->join($this->filename, $filename, $output);
    }

    public function cut($start, $end, $output) {
        $length = $this->getLength();
        if ($start > $length || $end > $length)
            throw new \InvalidArgumentException('Start and end time can\'t be bigger media length ('.$length.')');
        if ($end < $start)
            throw new \InvalidArgumentException('End time should be bigger or equal start');

        $result = $this->cut($this->filename, $start, $end, $output);

        return $result;
    }

    public function makeGif(GifSelectors\Abstract $selector, $options, $output) {
        $length = $this->getLength();
        $frames = [];
        switch (get_class($selector)) {
            case 'GifSelectors\Every':
                for ($i = 0; $i < $length; $i += $selector->interval)
                    $frames[] = $i;
                break;

            case 'GifSelectors\Total':
                $step = floor($length / $selector->count);
                for ($i = 0; $i < $length; $i += $step)
                    $frames[] = $i;
                break;
        }

        $optionsValidator = new OptionsValidator($options, [
            'delay' => ['expr' => '^[1-9][0-9]*$', 'text' => 'delay should be a positive number.'],
            'repeatitions' => ['expr' => '^[1-9][0-9]*$', 'text' => 'repeatitions should be a positive number.'],
            's' => ['expr' => '^[0-9]+x[0-9]+$', 'text' => 'size should be two digits  joined by "x".'],
        ]);
        $optionsValidator->validate();

        foreach ($frames as $i => $time) {
            $frames[$i] = $this->encoder->getFrame($this->filename, $time, (isset($options['s']) ? ['s' => $options['s']] : []);
        }

        $gc = new \GifCreator();
        $gc->create($frames, array_fill(count($frames), isset($options['delay']) ? $options['delay'] : 200), isset($options['repeatitions']) ? $options['repeatitions'] : 5);

        return file_put_contents($output, $gc->getGif());
    }

    public function getLength() {
        return $this->encoder->getLength($this->filename);
    }

}
