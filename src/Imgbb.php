<?php

namespace GetThingsDone\Imgbb;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Http;

class Imgbb
{
    public static function getInstance()
    {
        return new self;
    }
    // Build your next great package.
    public function uploadByUrl(string $image): ?Image
    {
        $response = Http::asForm()->post("https://api.imgbb.com/1/upload?key=".config('imgbb.default.key'),[
            'image' => $image
        ])->json();

        if (!$response['success']) {
            return null;
        }

        return new Image($response['data']);
    }

    public function uploadByFile(UploadedFile $image): ?Image
    {
        $response = Http::attach(
            'image', $image->get(), $image->hashName()
        )->post("https://api.imgbb.com/1/upload?key=".config('imgbb.default.key'), [
            'name' => $image->hashName()
        ])->json();

        if (!$response['success']) {
            return null;
        }
        return new Image($response['data']);
    }
}
