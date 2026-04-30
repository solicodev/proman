<?php

use Carbon\Carbon;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Facades\Http;

function toCarbon($date)
{
    if (!$date) return null;

    if ($date instanceof Carbon) {
        return $date;
    }


    if (is_string($date) && preg_match('/^\d{4}-\d{2}-\d{2}/', $date)) {
        $year = (int)substr($date, 0, 4);

        if ($year < 1700) {
            return Verta::parse($date)->DateTime();
        }
    }

    return Carbon::parse($date);
}


if (!function_exists('permission_name')) {
    /**
     * Generate an asset path for the application.
     *
     * @param string $path
     * @param bool $secure
     * @return string
     */
    function permission_name($permission)
    {
        $permissions = [
            'manager_projectAdd' => 'افزودن پروژه',
            'manager_projectEdit' => 'ویرایش پروژه',
            'manager_projectShow' => 'نمایش پروژه',
            'manager_projectDelete' => 'حذف پروژه',
            'manager_projectOptionAdd' => 'افزودن آپشن پروژه',
            'manager_projectOptions' => 'نمایش آپشن پروژه',
            'manager_projectTotalInfo' => 'اطلاعات کلی پروژه',
            'manager_tasks' => 'تسک ها',
            'manager_taskAdd' => 'افزودن تسک',
            'manager_taskSubTaskAdd' => 'افزودن زیرتسک',
            'manager_taskShow' => 'نمایش تسک',
            'manager_taskDependency' => 'افزودن وابستگی تسک ها',
            'manager_taskStatusUpdate' => 'تغییر وضعیت تسک',
            'manager_files' => 'فایل ها',
            'manager_members' => 'اعضای پروژه',
            'manager_access' => 'دسترسی ها پروژه',
            'manager_tickets' => 'پشتیبانی',
            'manager_comments' => 'کامنت ها',
            'manager_reports' => 'گزارشات',
            'manager_TaskTimeLine' => 'گزارش وضعیت تسک ها',
            'manager_TaskArchive' => 'تسک های من',
            'manager_profile' => 'پروفایل',
            'manager_notification' => 'نوتیفیکیشن',


            'member_projectShow' => 'نمایش پروژه',
            'member_projectTotalInfo' => 'اطلاعات کلی پروژه',
            'member_tasks' => 'تسک ها',
            'member_taskShow' => 'نمایش تسک',
            'member_taskStatusUpdate' => 'تغییر وضعیت تسک',
            'member_tickets' => 'پشتیبانی',
            'member_comments' => 'کامنت ها',
            'member_members' => 'اعضای پروژه',
            'member_profile' => 'پروفایل',


            'assign_tasks' => 'تسک ها',
            'assign_taskShow' => 'نمایش تسک',
            'assign_taskStatusUpdate' => 'تغییر وضعیت تسک',
            'assign_tickets' => 'پشتیبانی',
            'assign_comments' => 'کامنت ها',
            'assign_profile' => 'پروفایل',
        ];
        return $permissions[$permission];
    }
}

if (!function_exists('public_html_path')) {
    function public_html_path($path){
        $base_path = str_replace('private_html', 'public_html', $_SERVER['DOCUMENT_ROOT']);

        return $base_path.'/'.$path;
    }
}

if (!function_exists('role_name')) {
    /**
     * Generate an asset path for the application.
     *
     * @param string $path
     * @param bool $secure
     * @return string
     */
    function role_name($role)
    {
        $roles = [
            'Super Admin' => 'مدیر کل', //پنل ادمین
            'Admin Panel' => 'ادمین', //پنل ادمین
            'Manager' => 'مدیر پروژه', //پنل مدیریت پروژه
            'Member' => 'اعضای پروژه', //پنل مدیریت پروژه
            'Assignee' => 'مسئول انجام تسک', //پنل مدیریت پروژه
            'User' => 'کاربر',
        ];
        return $roles[$role];
    }
}


if (!function_exists('custom_array_diff')) {
    /**
     * Generate an asset path for the application.
     *
     * @param string $path
     * @param bool $secure
     * @return string
     */
    function custom_array_diff($array1, $array2)
    {
        if (count($array1) != count($array2)){
            return true;
        }

        foreach ($array1 as $key => $item){
            if ($item != $array2[$key]){
                return true;
            }
        }

        return false;
    }
}

if (!function_exists('my_asset')) {
    /**
     * Generate an asset path for the application.
     *
     * @param string $path
     * @param bool $secure
     * @return string
     */
    function my_asset($path, $secure = null)
    {
        return app('url')->asset($path, $secure);
    }
}

if (!function_exists('ToTime')) {
    /**
     * Generate an asset path for the application.
     *
     * @param string $path
     * @param bool $secure
     * @return string
     */
    function ToTime($input) {
        // Check if the input matches the time format HH:MM
        if (preg_match('/^\d{1,2}:\d{2}$/', $input)) {
            return $input; // Return as-is if already in time format
        }

        // Otherwise, format the input as HH:00
        return sprintf("%02d:00", intval($input));
    }
}

if (!function_exists('tax_calculator')) {
    /**
     * Generate an asset path for the application.
     *
     * @param string $path
     * @param bool $secure
     * @return string
     */
    function tax_calculator($amount, $tax = 10)
    {
        return $amount * ($tax / 100);
    }
}

function base64($file,$path)
{
    $image_parts = explode(';base64,', $file);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_base64 = base64_decode($image_parts[1]);
    $imageName = uniqid() . '.png';
    $imageFullPath = $path . $imageName;
    file_put_contents($imageFullPath, $image_base64);
    return $imageFullPath;
}


if (!function_exists('file_store')) {
    function file_store($u_file, $u_path, $u_prefix)
    {
        $array = array('gif', 'jpg', 'png', 'jpeg', 'pdf', 'mp4', 'webp','xlsx','ico');
        $extension = $u_file->getClientOriginalExtension();
        if (in_array(strtolower($extension), $array)) {
            $file = $u_file;
            $originalName = $u_file->getClientOriginalName();
            $destinationPath = $u_path;
            $extension = $file->getClientOriginalExtension();
            $fileName = $u_prefix . md5(time() . uniqid() . '-' . $originalName) . '.' . $extension;
//            copy($file->getRealPath(), $destinationPath . $fileName);
            $file->move($destinationPath, $fileName);
            $f_path = $destinationPath . "" . $fileName;

//            if (isImage($f_path)) {
//                $f_path = str_replace('assets/', '', $f_path);
//            }

            return $f_path;
        }
        return null;
    }
}

if (!function_exists('file_dep_store')) {
    function file_dep_store($u_file, $u_path, $u_prefix)
    {
        $array = array('gif', 'jpg', 'png', 'jpeg', 'pdf', 'mp4', 'webp','xlsx');
        $extension = $u_file->getClientOriginalExtension();
        if (in_array(strtolower($extension), $array)) {
            $file = $u_file;
            $originalName = $u_file->getClientOriginalName();
            $destinationPath = $u_path;
            $extension = $file->getClientOriginalExtension();
            $fileName = $u_prefix . $originalName;
            $file->move($destinationPath, $fileName);
            $f_path = $destinationPath . "" . $fileName;
            return $f_path;
        }
        return null;
    }
}

if (!function_exists('my_date')) {
    function my_date($date)
    {
        $date = explode('-', $date);

        require_once 'jdf.php';

        $date = jalali_to_gregorian($date[0], $date[1], $date[2], '-');

        return $date;
    }
}

if (!function_exists('my_jdate')) {
    function my_jdate($date, $type)
    {
        $timestamp = (strtotime($date));

        require_once 'jdf.php';

        $jalali_date = jdate($type, $timestamp);

        return $jalali_date;
    }
}

if (!function_exists('isImage')) {
    function isImage($path)
    {

        $a = getimagesize($path);
        if (!$a) {
            return false;
        }
        $image_type = $a[2];

        if (in_array($image_type, array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP, IMAGETYPE_WEBP))) {
            return true;
        }
        return false;
    }
}


if (!function_exists('new_sms')) {

    function sendSms($phone, $otp): false|string
    {
        $url = env('SMS_URL');
        $username = env('SMS_USERNAME');
        $password = env('SMS_PASSWORD');

        $payload = [
            'phonenumber' => $phone,
            'message' => $otp,
        ];
        $response = Http::withHeaders([
            'Content-Type' => 'text/plain',
            'Authorization' => 'Basic ' . base64_encode("{$username}:{$password}"),
        ])->withOptions([
            'verify' => false,
        ])->post($url, $payload);

        if ($response->successful()) {
            return $response->body();
        } else {
            \Log::error('SMS ارسال نشد', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);
            return false;
        }






//        $url = env('SMS_URL');
//        $username = env('SMS_USERNAME');
//        $password = env('SMS_PASSWORD');
//
//        $payload = [
//            'phonenumber' => $phone,
//            'message' => $otp,
//        ];
//
//        try {
//            $request = Http::withHeaders([
//                'Authorization' => 'Basic ' . base64_encode("{$username}:{$password}"),
//            ])->withOptions([
//                'verify' => env('SMS_VERIFY_SSL', false),
//            ]);
//
//            $response = $asForm
//                ? $request->asForm()->post($url, $payload)
//                : $request->post($url, $payload);
//            if ($response->successful()) {
//                return $response->body();
//            }
//
//
//            \Log::error('SMS ارسال نشد', [
//                'phone' => $phone,
//                'payload' => $payload,
//                'status' => $response->status(),
//                'body' => $response->body(),
//            ]);
//
//            return false;
//
//        } catch (\Throwable $e) {
//            \Log::error('SMS Exception', [
//                'message' => $e->getMessage(),
//                'phone' => $phone,
//                'payload' => $payload,
//            ]);
//            return false;
//        }
    }


}


