<?php
    if ( ! function_exists('base_api')) {
        /**
         * Base API
         *
         * @return	string
         */
        function base_api() {
            $ci =& get_instance();
            return $ci->config->config['base_api'];
        }
    }
    
    if (!function_exists('call_api')) {
        function call_api($type = "GET", $url, $post = array()) {
            $res = array("status" => false, "message" => "", "data" => array());
            $ci = &get_instance();
    
            if (empty($url)) {
                $res["message"] = "Url is empty!";
                return $res;
            }
    
            $postData = array(
                'http' => array(
                    'method' => $type,
                    'header' => 'Content-Type: application/x-www-form-urlencoded',
                    'content' => http_build_query($post)
                )
            );
    
            $ctx = stream_context_create($postData);
            $data = @file_get_contents($url, false, $ctx);
            $temp = json_decode($data);
            if ($data === FALSE || empty($temp)) {
                $res["message"] = $data;
            } else {
                $res = $temp;
            }
    
            return $res;
        }
    }

    if (!function_exists('debug')) {
        function debug($var = "") {
            echo "<pre>";
            print_r($var);
            echo "</pre>";
            die;
        }
    }

    if (!function_exists('generateRandomString')){
        function generateRandomString($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
    }

    if (!function_exists('save_to_file')){
        function save_to_file($url, $file_name) {
            if($file = file_get_contents($url)) {
                $html_file_path = realpath(APPPATH.'../ui') . DIRECTORY_SEPARATOR . $file_name;
                file_put_contents($html_file_path, $file);
            }
        }
    }
?>