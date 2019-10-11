<?php


namespace App\Managers;


use App\User;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

/**
 * This class manages the uploads of files
 *
 * Class ImageManager
 * @package App\Managers
 */
class ImageManager
{
    public function uploadAvatar(Request $request, Authenticatable $user)
    {
        if ($user->avatar) {
            Storage::delete($user->userAvatar);
        }

        $uploadedFile = $request->avatar;

        // Create file name and path
        $filename = $this->getFileName($user, $uploadedFile);
        $destination = $this->getDestinationPath();

        $path = Storage::putFileAs($destination, $uploadedFile, $filename);

        $user->avatar = $path;
        $user->save();

    }

    protected function getFileName(User $user, UploadedFile $file)
    {
        return 'avatar'.$user->member_id .'_'.time().'.'.$file->extension();
    }

    protected function getDestinationPath()
    {
        return '/avatars/'.date('Y').'/'.date('m');
    }
}
