<h2 class="ct">新增管理者帳號</h2>
<form method="post" action="api/save_admin.php">
<table class="all">
    <tr>
        <td class="tt">帳號</td>
        <td class="pp"><input type="text" name="acc"></td>
    </tr>
    <tr>
        <td class="tt">密碼</td>
        <td class="pp"><input type="password" name="pw"></td>
    </tr>
    <tr>
        <td class="tt">權限</td>
        <td class="pp">
        <div>
            <div><input type="checkbox" name="pr[]" value="1">商品分類與管理</div>
            <div><input type="checkbox" name="pr[]" value="2">訂單管理</div>
            <div><input type="checkbox" name="pr[]" value="3">會員管理</div>
            <div><input type="checkbox" name="pr[]" value="4">頁尾版權區管理</div>
            <div><input type="checkbox" name="pr[]" value="5">最新消息管理</div>
        </div>
        </td>
    </tr>
</table>
<div class="ct">
<input type="submit" value="新增">
<input type="reset" value="重置">
</div>
</form>