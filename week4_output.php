<?php
    echo "<b>基本資料</b><br/>";

    $_sName = $_POST["sName"];
    echo "你的名字： ".$_sName."<br/>";

    $_sMajor = $_POST["sMajor"];
    echo "你的科系： ".$_sMajor."<br/>";

    $sLevel = $_POST["sLevel"];
    echo "你的系級：".$sLevel."<br/>";

    $sGender = $_POST["sGender"];
    echo "你的性別：".$sGender."<br/>";

    $sDate = $_POST["sDate"];
    $sTime = $_POST["sTime"];
    echo "出生日期+時間是：".$sDate." ".$sTime."<br/>";

    $sEmail = $_POST["sEmail"];
    echo "您的email是:".$sEmail."<br/>";

    $sCoNumber = $_POST["sCoNumber"];
    echo "同行人數：".$sCoNumber."<br/>";

    $sSocialName = $_POST["sSocialName"];
    echo "IG名稱：".$sSocialName."<br/>";

    $sColor = $_POST["sColor"];
    echo "衣服顏色：".$sColor."<br/>";

    $sSize = $_POST["sSize"];
    echo "衣服尺寸：".$sSize."<br/>";

    $sFood = $_POST["sFood"];
    echo "想吃的東西：";
    foreach($sFood as $value){
        echo $value."  ";
    }
    echo "<br/>";

    $sRange = $_POST["sRange"];
    echo "1-10期待分數為：".$sRange."<br/>";

?>