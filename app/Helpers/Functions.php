<?php

namespace App\Helpers;
class Functions {
    public function SaveImageProfile($img)
    {

        $img_url = '';
        if($img->getClientOriginalExtension() == 'jpeg' || $img->getClientOriginalExtension() == 'jpg' || $img->getClientOriginalExtension() == 'png'){
            $img_file_name = time().str_random(10).'.'.$img->getClientOriginalExtension();
            $path = $img->move(public_path("/images"), $img_file_name);
            $img_url = url('/images/'.$img_file_name);
        }

        return $img_url;
    }
}
?>
