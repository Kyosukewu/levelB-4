<h2 class="ct">修改商品</h2>
<form method="post" action="api/add_goods.php">
    <table class="all">
        <tr>
            <td class="tt">所屬大分類</td>
            <td class="pp"><select name="big" id="big"></select></td>
        </tr>
        <tr>
            <td class="tt">所屬中分類</td>
            <td class="pp"><select name="mid" id="mid"></select></td>
        </tr>
        <tr>
            <td class="tt">商品編號</td>
            <td class="pp"><input type="text" name="num" id=""></td>
        </tr>
        <tr>
            <td class="tt">商品名稱</td>
            <td class="pp"><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td class="tt">商品價格</td>
            <td class="pp"><input type="text" name="price" id=""></td>
        </tr>
        <tr>
            <td class="tt">規格</td>
            <td class="pp"><input type="text" name="spec" id=""></td>
        </tr>
        <tr>
            <td class="tt">庫存量</td>
            <td class="pp"><input type="number" name="quota" id=""></td>
        </tr>
        <tr>
            <td class="tt">商品圖片</td>
            <td class="pp"><input type="file" name="img" id=""></td>
        </tr>
        <tr>
            <td class="tt">商品介紹</td>
            <td class="pp"><textarea name="intro" style="width:90%;height:50%;"></textarea></td>
        </tr>
    </table>
    <div class="ct">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
        <input type="button" value="返回" onclick="history.go(-1)">
    </div>
</form>