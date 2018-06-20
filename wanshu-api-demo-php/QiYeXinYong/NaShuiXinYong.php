<?php
    // 接口请求地址
    $url = 'https://api.253.com/open/entcredit/taxpaying-credit';
    $params = [
        'appId' => '', // appId,登录万数平台查看
        'appKey' => '', // appKey,登录万数平台查看
        'companyKey' => '', // 搜索关键字（公司全名、公司key）
		'keyType' => '', // 搜索关键字类型，1：公司名，2：公司key
    ];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    $result = curl_exec($ch);
    var_dump($result);
    exit;