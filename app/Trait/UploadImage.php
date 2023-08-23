<?php

namespace App\Trait;

trait UploadImage
{
    public function uploadImage($start, $request, $path)
    {
        if ($request) {

            $type = explode('.', $request->getClientOriginalName());
            $fileName = $start . '.' . $type[count($type) - 1];
            $request->move(public_path($path), $fileName);
            return $fileName;
        }
    }
}
