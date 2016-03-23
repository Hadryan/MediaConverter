# MediaConverter
Audio and video editor, converter to popular formats and preview maker.

## API
[__construct($filename)](__construct)


### __construct($filename)
Just a constructor. `$filename` is a video or audio file.

### convertTo3gp([$filename,] array $options)
Converts the to 3gp format and saves result as `$filename`. If filename is not specified, it rewrites original file.
`$options` holds all converting options. Available options described in this table:
