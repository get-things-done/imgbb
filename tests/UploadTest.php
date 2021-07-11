<?php
namespace GetThingsDone\Imgbb\Tests;

use GetThingsDone\Imgbb\Image;
use GetThingsDone\Imgbb\Imgbb;
use Illuminate\Http\UploadedFile;

class UploadTest extends TestCase
{
    /** @test */
    public function can_upload_by_url()
    {
        $imgBB = new Imgbb;

        $image = $imgBB->uploadByUrl('https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png');
        
        $this->assertInstanceOf(Image::class, $image);
    }

    /** @test */
    public function can_upload_by_file()
    {
        $imgBB = new Imgbb;

        $image = $imgBB->uploadByFile(UploadedFile::fake()->image('photo1.jpg'),);
        
        $this->assertInstanceOf(Image::class, $image);
    }
}