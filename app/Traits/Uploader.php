<?php namespace App\Traits;

use Carbon;

use Storage;

use Image;

trait Uploader {
  function store_file($file, $path)
    {

      $type = $file->getMimeType();

      $name = sha1(Carbon::now());
      $extension = $file->guessExtension();
      $url = Storage::putFileAs($path, $file, $name.'.'.$extension);
      return $name.'.'.$extension;

  }
}
