<?php
define('IN_PICSHOJO', TRUE);
header('Content-Type: text/html; charset=UTF-8');
//开启跨域Ajax支持
header('Access-Control-Allow-Origin:*');
//参数传递
$id = $_GET['id'];
//ID开始
$id_min = 1;
//ID结束
$id_max = 120;
//随机 - 判断数字
if (!$id == NULL && is_numeric($id))
{
    //判断大小
    if ($id >= $id_min && $id <= $id_max)
    {
        $number = $id;
    }
    else
    {
        $number = rand($id_min,$id_max);
    }
}
else
{
    $number = rand($id_min,$id_max);
}
$url = 'https://cdn.jimmyho.top/resource/img/picshojo/' . $number . '.jpg';
echo $url;
header('Location:' . $url);
