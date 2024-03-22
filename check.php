
    <meta charset="UTF-8">
    <?php
    session_start();
    ?>
    <?php
    $sId="nuk";
    $sPwd="0000";

    $uId=$_POST["uId"];
    $uPwd=$_POST["uPwd"];

    if($uId==$sId && $uPwd==$sPwd){
        $_SESSION["check"]="Yes";
        header("location:week4.php");
    }elseif($uId!=$sId || $uPwd!=$sPwd){
        $_SESSION["check"]="No";
        header("location:fail.php");
    }else{
        echo "非法進入網頁";
        echo "3秒後回到登入頁面";
        header("Refresh:3;url=login.php");
    }   
    ?>