<h2 class="ct">編輯會員資料</h2>
<?php
$mem=$Mem->find($_GET['id'])

?>
<form action="api/edit_mem.php" method="post">
<table class="all">
    <tr class="pp">
        <td class="ct tt">帳號</td>
        <td class="pp"><?=$mem['acc'];?></td>
    </tr>
    <tr class="pp">
        <td class="ct tt">密碼</td>
        <td class="pp"><?=str_repeat("*",strlen($mem['pw']));?>
    </td>
    </tr>
    <tr class="pp">
        <td class="ct tt">姓名</td>
        <td class="pp"><input type="text"  name="name" id="name" value="<?=$mem['name'];?>"></td>
    </tr>
    <tr class="pp">
        <td class="ct tt">電話</td>
        <td class="pp"><input type="text"  name="tel" id="tel" value="<?=$mem['tel'];?>"></td>
    </tr>
    <tr class="pp">
        <td class="ct tt">住址</td>
        <td class="pp"><input type="text"  name="attr" id="attr" value="<?=$mem['attr'];?>"></td>
    </tr>
    <tr class="pp">
        <td class="ct tt">電子信箱</td>
        <td class="pp"><input type="text"  name="email" id="email" value="<?=$mem['email'];?>"></td>
    </tr>
</table>
<div class="ct">
    <input type="hidden" name="id" value="<?=$mem['id'];?>">
    <input type="submit" value="編輯">
    <input type="reset" value="重置">
    <input type="button" value="取消" onclick="lof('?do=mem')">
</div>
</form>