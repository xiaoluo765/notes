<?php

    function getAddress($lng = '0', $lat = '0')
    {
        $ak = '2qLpQlzFUt4QKg7Fvazb3MuG';//百度地图
        $url  = "http://api.map.baidu.com/geocoder/v2/?location=" . $lat . "," . $lng . "&output=json&ak=" . $ak;//百度地图
        // $key = '5XPBZ-QIK3F-H5VJV-NPULI-CFWU3-Z5FD7';//腾讯地图
        // $url = 'http://apis.map.qq.com/ws/geocoder/v1/?location='.$lat.','.$lng.'&key=' . $key;//腾讯地图
        $json = file_get_contents($url);
        $data = json_decode($json);

        if ($data->status == 0) {
            return $data->result;
        } else {
            return false;
        }
    }

    function create()
    {
        $lat = 23.13;
        $lng = 113.37;
        $pcd = getAddress($lng , $lat);
        $address = $pcd->formatted_address;
        return $address;
    }   
    echo create();

    