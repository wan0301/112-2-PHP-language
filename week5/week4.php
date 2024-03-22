<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>資管晚會報名表單</title>
</head>
<body>
    
    <?php
    if($_SESSION["check"]=="Yes"){
        echo "登入成功<br/>";
        echo "<a href='logout.php'>登出</a>";
    }else{
        header("location:fail.php");
    }   
    ?>

    <form method="post" action="week4_output.php">
         <h2>資管晚會報名表單</h2>
        姓名： <input type="text" name="sName" size="15" placeholder="請輸入姓名" required><br/>
        科系：
        <select name="sMajor">
            <optgroup label="管理學院">
                <option value="資訊管理學系" >資訊管理學系</option>
                <option value="金融管理學系" >金融管理學系</option>
                <option value="亞太工商管理學系" >亞太工商管理學系</option>
                <option value="應用經濟學系" >應用經濟學系</option>
            </optgroup>
            <optgroup label="法學院">
                <option value="LAW" >法律學系</option>
                <option value="EFL" >財經法律學系</option>
                <option value="GL" >政治法律學系</option>
            </optgroup>

        </select><br/>
        系級：
        <input type="radio" name="sLevel" value="113"/>113級
        <input type="radio" name="sLevel" value="114"/>114級
        <input type="radio" name="sLevel" value="115"/>115級
        <input type="radio" name="sLevel" value="116"/>116級<br/>
        性別：
        <input type="radio" name="sGender" value="生理男"/>生理男
        <input type="radio" name="sGender" value="生理女"/>生理女<br/>
        出生日期/時間：
        <input type="date" name="sDate" min="1990-01-01" max="2024-03-08">
        <input type="time" name="sTime"><br/>
        電子信箱：
        <input type="email" name="sEmail" pattern=".+@.+.com"><br/>
        上傳一張照片：
        <input type="file" nameaccept="image/*,.pdf"><br/>
        請輸入同行報名人數：
        <input type="number" name="sCoNumber" min="0" max="4"><br/>
        IG名稱
        <input type="text" name="sSocialName"><br/><br/>
        請輸入衣服顏色：
        <input type="color" name="sColor"><br/>
        衣服尺寸：
        <select name="sSize">
            <option value="S" >S</option>
            <option value="M" >M</option>
            <option value="L" >L</option>
            <option value="XL" >XL</option>
        </select><br/>
        想吃什麼：
        <input type="checkbox" name="sFood[]" value="比薩">比薩
        <input type="checkbox" name="sFood[]" value="火鍋">火鍋
        <input type="checkbox" name="sFood[]" value="烤肉">烤肉
        <input type="checkbox" name="sFood[]" value="漢堡">漢堡<br/>

        請輸入期待百分比：
        <input type="range" name="sRange" min="0" max="10"><br/>
        給我們的建議：
        <textarea name="sSuggest" row="1" cols="15"></textarea><br/><br/>

        <input type="image" src="給我錢.jpg" alt="Submit" width="400" height="300">
        <br/><br/>
        <input type="submit" value="送出回覆">
        <input type="reset" value="重新填寫">
    </form>
</body>
</html>    
