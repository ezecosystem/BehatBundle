<?php

namespace EzSystems\BehatBundle\Context\CommonSubContext;

class File extends Base
{
    /**
     * This will contains the source path for media files
     *
     * ex:
     * $fileSource = array(
     * 	    "Video 1" => "/var/storage/original/media/video1.mp4",
     * );
     *
     * @var array This will have a ( 'identifier' => 'path' )
     */
    public $fileSource = array();

    /**
     * Returns the path associated with the $fileSource
     *
     * @param string $file
     *
     * @return string
     *
     * @throws \RuntimeException If file is not set
     */
    public function getPathByFileSource( $file )
    {
        if ( !isset( $this->fileSource[$file] ) )
        {
            throw new \RuntimeException( "Unknown file '{$file}'." );
        }

        return $this->fileSource[$file];

    }
}