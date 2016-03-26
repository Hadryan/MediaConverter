# MediaConverter
Audio and video editor, converter to popular formats and preview maker.

## Installation
You can install MediaConverter through composer:
```
composer install wapmorgan/media-converter
```

## Example
* Simple example of converting any file to 3gp format.
```php
$conv = new wapmorgan\MediaConverter\MediaConverter('filename.avi');
$conv->convertTo3gp('filename.3gp');
```

* Simple example of creating preview with original frame size from video.
```php
$conv = new wapmorgan\MediaConverter\MediaConverter('filename.avi');
$conv->makeGif(new wapmorgan\MediaConverter\GifSelectors\Total(4), [], 'preview.gif');
```

## API
[__construct($filename)](#user-content-__constructfilename)

[convertTo3gp([$filename,] array $options)](#user-content-convertto3gpfilename-array-options)

[convertToAvi([$filename,] array $options)](#user-content-converttoavifilename-array-options)

[convertToMp4([$filename,] array $options)](#user-content-converttomp4filename-array-options)

[convertToMov([$filename,] array $options)](#user-content-converttomovfilename-array-options)

[convertToMpeg([$filename,] array $options)](#user-content-converttompegfilename-array-options)

[convertToMkv([$filename,] array $options)](#user-content-converttomkvfilename-array-options)

[convertToMp3([$filename,] array $options)](#user-content-converttomp3filename-array-options)

[convertToWav([$filename,] array $options)](#user-content-converttowavfilename-array-options)

[convertToAmr([$filename,] array $options)](#user-content-converttoamrfilename-array-options)

[convertToAac([$filename,] array $options)](#user-content-converttoaacfilename-array-options)

[join($filename, $output)](#user-content-joinfilename-output)

[cut($start, $end, $output)](#user-content-cutstart-end-output)

[makeGif(GifSelectors\Abstract $selector, $options, $output)](#user-content-makegifgifselectorsabstract-selector-options-output)

### __construct($filename)
Just a constructor. `$filename` is a video or audio file.

### convertTo3gp([$filename,] array $options)
Converts the file to 3gp format and saves result as `$filename`. If filename is not specified, it rewrites original file.
`$options` holds all converting options. Available options described in this table:

| option | meaning | description |
|---|---|---|---|---|
| b | bitrate | Video bitrate. Should be a digit with optional "k" like `2000k` |
| r | rate | Video frame rate. Should be a decimal or a float like `24` or `23.976` |
| s | size | Video frame size. Should be two digits joined by "x" like `720x340` |
| ab | audio bitrate | Audio bitrate. Should look like video bitrate like `128k` |
| ac | audio channels | Number of audio channels. Should be a natural number like `1` or `2` |

### convertToAvi([$filename,] array $options)
Converts the file to avi format and saves result as `$filename`. If filename is not specified, it rewrites original file.
`$options` holds all converting options. Available options described in this table:

| option | meaning | description |
|---|---|---|---|---|
| b | bitrate | Video bitrate. Should be a digit with optional "k" like `2000k` |
| r | rate | Video frame rate. Should be a decimal or a float like `24` or `23.976` |
| s | size | Video frame size. Should be two digits joined by "x" like `720x340` |
| ab | audio bitrate | Audio bitrate. Should look like video bitrate like `128k` |
| ac | audio channels | Number of audio channels. Should be a natural number like `1` or `2` |

### convertToMp4([$filename,] array $options)
Converts the file to mp4 format and saves result as `$filename`. If filename is not specified, it rewrites original file.
`$options` holds all converting options. Available options described in this table:

| option | meaning | description |
|---|---|---|---|---|
| b | bitrate | Video bitrate. Should be a digit with optional "k" like `2000k` |
| r | rate | Video frame rate. Should be a decimal or a float like `24` or `23.976` |
| s | size | Video frame size. Should be two digits joined by "x" like `720x340` |
| ab | audio bitrate | Audio bitrate. Should look like video bitrate like `128k` |
| ac | audio channels | Number of audio channels. Should be a natural number like `1` or `2` |

### convertToMov([$filename,] array $options)
Converts the file to mov format and saves result as `$filename`. If filename is not specified, it rewrites original file.
`$options` holds all converting options. Available options described in this table:

| option | meaning | description |
|---|---|---|---|---|
| b | bitrate | Video bitrate. Should be a digit with optional "k" like `2000k` |
| r | rate | Video frame rate. Should be a decimal or a float like `24` or `23.976` |
| s | size | Video frame size. Should be two digits joined by "x" like `720x340` |
| ab | audio bitrate | Audio bitrate. Should look like video bitrate like `128k` |
| ac | audio channels | Number of audio channels. Should be a natural number like `1` or `2` |

### convertToMpeg([$filename,] array $options)
Converts the file to mpeg format and saves result as `$filename`. If filename is not specified, it rewrites original file.
`$options` holds all converting options. Available options described in this table:

| option | meaning | description |
|---|---|---|---|---|
| b | bitrate | Video bitrate. Should be a digit with optional "k" like `2000k` |
| r | rate | Video frame rate. Should be a decimal or a float like `24` or `23.976` |
| s | size | Video frame size. Should be two digits joined by "x" like `720x340` |
| ab | audio bitrate | Audio bitrate. Should look like video bitrate like `128k` |
| ac | audio channels | Number of audio channels. Should be a natural number like `1` or `2` |

### convertToMkv([$filename,] array $options)
Converts the file to mkv format and saves result as `$filename`. If filename is not specified, it rewrites original file.
`$options` holds all converting options. Available options described in this table:

| option | meaning | description |
|---|---|---|---|---|
| b | bitrate | Video bitrate. Should be a digit with optional "k" like `2000k` |
| r | rate | Video frame rate. Should be a decimal or a float like `24` or `23.976` |
| s | size | Video frame size. Should be two digits joined by "x" like `720x340` |
| ab | audio bitrate | Audio bitrate. Should look like video bitrate like `128k` |
| ac | audio channels | Number of audio channels. Should be a natural number like `1` or `2` |

### convertToMp3([$filename,] array $options)
Converts the file to mp3 format and saves result as `$filename`. If filename is not specified, it rewrites original file.
`$options` holds all converting options. Available options described in this table:

| option | meaning | description |
|---|---|---|---|---|
| ab | audio bitrate | Audio bitrate. Should look like video bitrate like `128k` |
| ac | audio channels | Number of audio channels. Should be a natural number like `1` or `2` |

### convertToWav([$filename,] array $options)
Converts the file to wav format and saves result as `$filename`. If filename is not specified, it rewrites original file.
`$options` holds all converting options. Available options described in this table:

| option | meaning | description |
|---|---|---|---|---|
| ab | audio bitrate | Audio bitrate. Should look like video bitrate like `128k` |
| ac | audio channels | Number of audio channels. Should be a natural number like `1` or `2` |

### convertToAmr([$filename,] array $options)
Converts the file to amr format and saves result as `$filename`. If filename is not specified, it rewrites original file.
`$options` holds all converting options. Available options described in this table:

| option | meaning | description |
|---|---|---|---|---|
| ab | audio bitrate | Audio bitrate. Should look like video bitrate like `128k` |
| ac | audio channels | Number of audio channels. Should be a natural number like `1` or `2` |

### convertToAac([$filename,] array $options)
Converts the file to aac format and saves result as `$filename`. If filename is not specified, it rewrites original file.
`$options` holds all converting options. Available options described in this table:

| option | meaning | description |
|---|---|---|---|---|
| ab | audio bitrate | Audio bitrate. Should look like video bitrate like `128k` |
| ac | audio channels | Number of audio channels. Should be a natural number like `1` or `2` |

### join($filename, $output)
Joins the video with `$filename` and saves it as `$output`.

### cut($start, $end, $output)
Cuts the video from `$start` to `$end` seconds and saves result as `$output`.

### makeGif(GifSelectors\Abstract $selector, $options, $output)
Creates a gif preview from the video. `$selector` can be one of following objects:

1. **wapmorgan\MediaConverter\GifSelectors\Every** - create preview from frames every **N** seconds.
2. **wapmorgan\MediaConverter\GifSelectors\Total** - creates preview of total **N** frames from video.

`$options` holds few options of converting and making options.
Available options described in this table:

| option | meaning | description |
|---|---|---|---|---|
| s | size | Video frame size. Should be two digits joined by "x" like `720x340` |
| delay |  | Delay between frames. Should be a positive number in msec like `200` |
| repeatitions |  | Number of repeatitions of frames. If value is `0`, then gif will be infinite. Should be a natural number like `5` |

Resulting gif will be stored as `$output`.
## Troubleshooting
1. **No available encoders in your system. Please check ...**. Make sure you use unix/linux-based OS and have installed program **ffmpeg**.

