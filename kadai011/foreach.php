<?php
$commodity_datas = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
  
foreach ($commodity_datas as $key => $value) {
    echo "{$key} : {$value}<br>";
}
?>