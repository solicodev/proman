<?php

use Illuminate\Support\Facades\Http;

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
            'dep_projects' => 'پروژه ها',
            'dep_tasks' => 'تسک ها',
            'dep_departments' => 'دپارتمان ها',
            'dep_category' => 'دسته بندی ها',
            'dep_files' => 'فایل ها',
            'dep_members' => 'اعضای پروژه',
            'dep_managers' => 'مدیر پروژه',
            'dep_reports' => 'گزارشات',
            'dep_access' => 'افزودن عضو پروژه',
            'dep_messages' => 'اطلاعیه',
            'dep_tickets' => 'پشتیبانیه',
            'dep_comments' => 'کامنت ها',

            'manager_projects' => 'پروژه ها',
            'manager_tasks' => 'تسک ها',
            'manager_departments' => 'دپارتمان ها',
            'manager_category' => 'دسته بندی ها',
            'manager_files' => 'فایل ها',
            'manager_members' => 'اعضای پروژه',
            'manager_managers' => 'مدیر پروژه',
            'manager_reports' => 'گزارشات',
            'manager_access' => 'افزودن عضو پروژه',
            'manager_messages' => 'اطلاعیه',
            'manager_tickets' => 'پشتیبانی',
            'manager_comments' => 'کامنت ها',

            'member_projects' => 'پروژه ها',
            'member_tasks' => 'تسک ها',
            'member_departments' => 'دپارتمان ها',
            'member_category' => 'دسته بندی ها',
            'member_files' => 'فایل ها',
            'member_members' => 'اعضای پروژه',
            'member_managers' => 'مدیر پروژه',
            'member_reports' => 'گزارشات',
            'member_access' => 'افزودن عضو پروژه',
            'member_messages' => 'اطلاعیه',
            'member_tickets' => 'پشتیبانی',
            'member_comments' => 'کامنت ها',


            'assign_projects' => 'پروژه ها',
            'assign_tasks' => 'تسک ها',
            'assign_departments' => 'دپارتمان ها',
            'assign_category' => 'دسته بندی ها',
            'assign_files' => 'فایل ها',
            'assign_members' => 'اعضای پروژه',
            'assign_managers' => 'مدیر پروژه',
            'assign_reports' => 'گزارشات ',
            'assign_access' => 'افزودن عضو پروژه',
            'assign_messages' => 'اطلاعیه',
            'assign_tickets' => 'پشتیبانی',
            'assign_comments' => 'کامنت ها',
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
            'Super Admin' => 'مدیر کل',
            'manager' => 'مدیر پروژه',
            'member' => 'اعضای پروژه',
            'assignee' => 'مسئول انجام تسک',
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
    function sendSms($phone, $otp)
    {
        $url = env('SMS_URL');
        $username = env('SMS_USERNAME');
        $password = env('SMS_PASSWORD');

        $payload = [
            'phone_number' => $phone,
            'message' => 'کد ورود :' . $otp,
        ];
        $response = Http::withHeaders([
            'Content-Type' => 'text/plain',
            'Authorization' => 'Basic ' . base64_encode("{$username}:{$password}"),
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
    }
    function send_sms($phone, $otp)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://sms.soit.ir/api.php',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode(array('phonenumber' => $phone, 'message' => 'کد ورود:' . $otp)),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: text/plain',
                'Authorization: Basic ' . base64_encode("solico:V`@wL2)Yt9?hv6{E")
            ),
        ));
        $response = curl_exec($curl);

        curl_close($curl);
        //echo $response;
    }
}

