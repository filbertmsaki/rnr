<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

if (!function_exists('isLocalhost')) {
    function isLocalhost()
    {
        $whitelist = array('127.0.0.1', "::1");
        if (!in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
            return false;
        } else {
            return true;
        }
    }
}

if (!function_exists('upload_file')) {
    function upload_file($file, $path = "images", $disk = "public")
    {


        $path = unique_slug(config('app.name')) . '/' . $path;
        if (isLocalhost()) {
            $path =  "test/" . $path;
        }

        if (request()->has("base64")) {
            if (request()->has($file)) {

                return $files = request()->input($file);
                $files = request()->input($file);
                $fileName = [];
                if (array($files)) {
                    foreach ($files as $file) {
                        $file_ = unique_token() . '.webp';
                        list($baseType, $b64image) = explode(';', $file);
                        list(, $b64image) = explode(',', $b64image);
                        $b64image = base64_decode($b64image);
                        $image = Image::make($b64image)->encode('webp', 90);
                        $filepath = $path . '/' .  $file_;
                        $storagesDisk = Storage::disk($disk);
                        $storagesDisk->put($filepath, (string)$image, 'public');
                        if ($disk == 's3') {
                            $fileName[] = $storagesDisk->url($filepath);
                        } else {
                            $fileName[] = $filepath;
                        }
                    }
                } else {
                    $file_ = unique_token() . '.webp';
                    list($baseType, $b64image) = explode(';', $file);
                    list(, $b64image) = explode(',', $b64image);
                    $b64image = base64_decode($b64image);
                    $image = Image::make($b64image)->encode('webp', 90);
                    $filepath = $path . '/' .  $file_;
                    $storagesDisk = Storage::disk($disk);
                    $storagesDisk->put($filepath, (string)$image, 'public');
                    if ($disk == 's3') {
                        $fileName = $storagesDisk->url($filepath);
                    } else {
                        $fileName = $filepath;
                    }
                }
                return $fileName;
            }
            return null;
        }
        if (request()->file($file)) {
            if (is_array(request()->file($file))) {
                $fileName = [];
                foreach (request()->file($file) as $singleFile) {
                    $file_ = unique_token() . '.webp';
                    $image = Image::make($singleFile)->encode('webp', 90);
                    $filepath = $path . '/' .  $file_;
                    $storagesDisk = Storage::disk($disk);
                    $storagesDisk->put($filepath, (string)$image, 'public');
                    if ($disk == 's3') {
                        $fileName[] = $storagesDisk->url($filepath);
                    } else {
                        $fileName[] = $filepath;
                    }
                }

                return $fileName;
            } else {
                $file_ = unique_token() . '.webp';
                $image = Image::make(request()->file($file))->encode('webp', 90);
                $filepath = $path . '/' .  $file_;
                $storagesDisk = Storage::disk($disk);
                $storagesDisk->put($filepath, (string)$image, 'public');
                if ($disk == 's3') {
                    $fileName = $storagesDisk->url($filepath);
                } else {
                    $fileName = $filepath;
                }
                return $fileName;
            }
        }
        return null;
    }
}
if (!function_exists('delete_file')) {
    function delete_file($file, $disk = "public")
    {

        if ($disk == 's3') {
            $url = parse_url($file);
            $u = ($url['scheme'] ?? "") . "://" . ($url['host'] ?? "") . "/";
            $path = str_replace($u, "", $file);
        } else {
            $path = $file;
        }

        if (Storage::disk($disk)->exists($path)) {
            Storage::disk($disk)->delete($path);
        }
    }
}
if (!function_exists('file_exist')) {
    function file_exist($file, $disk = "public")
    {
        if ($disk == 's3') {
            $url = parse_url($file);
            $u = ($url['scheme'] ?? "") . "://" . ($url['host'] ?? "") . "/";
            $path = str_replace($u, "", $file);
        } else {
            $path = $file;
        }
        if (Storage::disk($disk)->exists($path)) {
            return true;
        }
        return false;
    }
}

if (!function_exists('unique_token')) {
    function unique_token()
    {
        $string = Str::random(10);
        return md5($string . time());
    }
}
if (!function_exists('unique_slug')) {
    function unique_slug($string)
    {
        $string = clear($string);
        $string = remove_special_characters($string);
        $string = strtolower($string);
        return $string;
    }
}

if (!function_exists('lowercase')) {
    function lowercase($string)
    {
        $string = preg_replace('/\s+/', ' ', $string);
        $string = trim($string);
        $string = strtolower($string);
        return $string;
    }
}
if (!function_exists('uppercase')) {
    function uppercase($string)
    {
        $string = preg_replace('/\s+/', ' ', $string);
        $string = trim($string);
        $string = strtoupper($string);
        return $string;
    }
}

if (!function_exists('capitalize ')) {
    function capitalize($string)
    {
        $string = preg_replace('/\s+/', ' ', $string);
        $string = trim($string);
        $string = strtolower($string);
        $string = ucwords($string);
        return $string;
    }
}

if (!function_exists('clear')) {
    function clear($string)
    {
        $string = preg_replace('/\s+/', ' ', $string);
        $string = preg_replace('/[^A-Za-z0-9-& ]/', '', $string);
        $string = preg_replace('/-+/', '-', $string);
        $string = trim($string);
        return $string;
    }
}
if (!function_exists('remove_space')) {
    function remove_space($string)
    {
        return str_replace(' ', '-', $string);
    }
}
if (!function_exists('remove_special_characters')) {
    function remove_special_characters($string)
    {
        $string = str_replace(' ', '-', $string);
        $string = str_replace('&', 'and', $string);
        $string = preg_replace('/[^A-Za-z0-9-]/', '', $string);
        $string = preg_replace('/-+/', '-', $string);
        return $string;
    }
}
