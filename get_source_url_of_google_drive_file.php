/**
 * Get google drive files source url
 * @param string $file_id
 * @return source url
 */
if (!function_exists("get_source_url_of_google_drive_file")) {

    function get_source_url_of_google_drive_file($file_id = "", $view_type = "", $show_full_size_thumbnail = false) {
        if ($view_type == "thumbnail" || ($view_type != "thumbnail")) {
            //show thumnail url as preview url, if the google viewer is disabled
            $size = $show_full_size_thumbnail ? "2000" : "700";
            return "https://drive.google.com/thumbnail?id=$file_id&sz=s$size";
        } else {
            //preview
            return "https://drive.google.com/file/d/$file_id/preview";
        }
    }

}
