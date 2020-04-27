/**
 * check the file preview supported by google
 * 
 * @param string $file_name
 * @return true/false
 */
if (!function_exists('is_google_preview_available')) {

    function is_google_preview_available($file_name = "") {
        $extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $image_files = array("pdf", "xls", "xlsx", "doc", "docx", "ppt", "pptx", "txt", "ai", "psd", "jpeg", "png", "gif", "tiff", "bmp", "zip", "rar", "eps", "ps", "xps", "pages", "css", "html", "php", "c", "cpp", "js", "webm", "mpeg4", "3gpp", "mov", "avi", "mpegps", "wmv", "flv");
        return (in_array($extension, $image_files)) ? true : false;
    }

}
