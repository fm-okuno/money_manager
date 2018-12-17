<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>収支の編集</title>
</head>
<body>

<?php //現在年月日を取得し、現在時刻をcur_yer,cur_mon,cur_day,cur_hou,cur_minの5つに分けてセット（年以外はそのうち使います）
$cur_yer = date ("Y"); 
$cur_mon = date ("m");
$cur_day = date ("d");
$cur_hou = date ("H");
$cur_min = date ("i");
session_start();
?>

<!--年月日の入力フォームを作成-->
<form method="POST" action="add_process.php">

    登録日時：<select name="year"><!--年を生成(1900~現在まで)-->
        <?php for($i = 1900; $i <= $cur_yer; $i++) { ?>
            <option> <?php echo $i?> </option>
        <?php } ?>
    </select>

    年

    <select name="month"><!--月を生成(1~12月)-->
    <?php for($i = 1; $i <= 12; $i++) { ?>
            <option> <?php echo $i?> </option>
        <?php } ?>
    </select>

    月

    <select name="day"><!--日を生成(1~31日)-->
    <?php for($i = 1; $i <= 31; $i++) { ?>
            <option> <?php echo $i?> </option>
        <?php } ?>
    </select>

    日

    <select name="hour"><!--時を生成(0~23時)-->
    <?php for($i = 0; $i <= 23; $i++) { ?>
            <option> <?php echo $i?> </option>
        <?php } ?>
    </select>

    時

    <select name="min"><!--分を生成(0~59分)-->
    <?php for($i = 0; $i <= 59; $i++) { ?>
            <option> <?php echo $i?> </option>
        <?php } ?>
    </select>

    分

    <br/>

    金額：<input type="text" name="price" size="10" maxlength="10"> <br/>
    カテゴリ：<select name="category">
                <option value="0">食費</option>
                <option value="1">交際費</option>
                <option value="2">ゲーム</option>
                <option value="3">収入</option>
            </select><br/>

    支出：<input type="radio" name="exp_inc" value="1"> 
    収入：<input type="radio" name="exp_inc" value="2"><br/>

    備考：<input type="text" name="remarks" size="10" maxlength="20"><br/>
    <input type="submit" name="登録する">
</form>
</body>
</html>