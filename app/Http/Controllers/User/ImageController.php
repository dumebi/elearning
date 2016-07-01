<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public static function random_color_part()
    {
        return str_pad(dechex(mt_rand(0, 255)), 2, '0', STR_PAD_LEFT);
    }

    public static function random_color()
    {
        return self::random_color_part() . self::random_color_part() . self:: random_color_part();
    }

    public function index($fileName)
    {
        $pathName = storage_path() . sprintf('\websiteImage');
        $path = storage_path() . '/websiteImage/' . $fileName;
        if (!File::exists($path)) {
            $img = Image::canvas(640, 480, self::random_color());
            $img->text(strtoupper(substr($fileName, 0, 1)), 320, 240, function ($font) {
                $font->file('fonts/Lato-Regular.ttf');
                $font->size(400);
                $font->color('#ffffff');
                $font->align('center');
                $font->valign('center');
            });
            $img->save(storage_path() . '/websiteImage/' . substr($fileName, 0, 1) . '.jpg');
        }
        $file = File::get($path);
        $type = File::mimeType($path);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
        return $response;
    }

    public function thumbnail(Request $request)
    {
        $pathName = storage_path() . sprintf('\websiteImage');
        $i = 4;
        foreach ($request->file('image') as $image) {
            $fileName = 'product' . $i++ . '.' . $image->guessClientExtension();
            $img = Image::make($image)->resize(242, 200)->save($pathName . '/' . $fileName);
        }
    }

}
