<?php

namespace App\Helper\Utility;

class StoreFileUtility
{
    public static function save($file, $path, $fileNameWithExtension)
    {
        return $file->storeAs($path, $fileNameWithExtension);
    }

    public static function getFileExtension($file)
    {
       return $file->getClientOriginalExtension();
    }

}
