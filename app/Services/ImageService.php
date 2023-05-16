<?php

namespace App\Services;

use Illuminate\Support\Facades\File;

class ImageService
{
    public function checkAndCreateDirectory(string $dirPath): void
    {
        if (!File::exists($dirPath)) {
            File::makeDirectory($dirPath, 0777, true);
        }
    }

    public function getImageName(mixed $image): string
    {
        return time() . '.' . $image->getClientOriginalExtension();
    }

    public function uploadFileToDirectory(mixed $image, string $dirPath, string $imageName): void
    {
        $image->move($dirPath, $imageName);
    }

    public function getImagePath(string $imageName): string
    {
        return 'images/uploads/' . $imageName;
    }

    public function checkAndDeleteImage(string $imagePath): void
    {
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
    }
}
