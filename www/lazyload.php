<?php

// оборачиваем в html
function styleObject($list) {
    $html = '';
    foreach($list as $item) {
        if (!isset($item["state"])) $item["state"] = "on";

        if($item["state"] !== "off") {
            $html .= "<li class='app-item'>
                        <a href='" . $item["url"] . "'>
                            <img src='/images/space.png' data-original='" . $item["img"] . "' class='lazy' height='256' width='256' alt='" . $item["alt"] . "' />
                            <h3>" . $item["name"] . "</h3>
                        </a>
                        <span class='developer'>" . $item["dev"] . "</span>
                      </li>";
        }
    }

    return $html;
}
// выбираем данные
function getObjects($params) {
    $params = explode(",", $params);
    $start = $params[0];
    $amount = $params[1];
    $end = $start + $amount;

    // забираем json
//    $list = json_decode(, true);
    $list = json_decode(iconv("windows-1251", "UTF-8", file_get_contents("objects.json")), true);

    // отбираем нужное нам количество
    $ret = array();
    $i = 0;
    foreach($list as $item) {
        if($item["state"] === "off") {$end++; $start++;}
        if($i >= $start && $i < $end) {
            $ret[$i] = $item;
        }
        $i++;
    }

    return iconv("UTF-8", "windows-1251", styleObject($ret));
};
