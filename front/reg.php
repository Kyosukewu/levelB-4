<h2 class="ct">會員註冊</h2>
<table class="all">
    <tr class="pp">
        <td class="ct tt">姓名</td>
        <td class="pp"><input type="text" name="name" id="name"></td>
    </tr>
    <tr class="pp">
        <td class="ct tt">帳號</td>
        <td class="pp"><input type="text"  name="acc" id="acc">
                <button onclick="chkAcc()">檢測帳號</button>
    </td>
    </tr>
    <tr class="pp">
        <td class="ct tt">密碼</td>
        <td class="pp"><input type="password"  name="pw" id="pw"></td>
    </tr>
    <tr class="pp">
        <td class="ct tt">電話</td>
        <td class="pp"><input type="text"  name="tel" id="tel"></td>
    </tr>
    <tr class="pp">
        <td class="ct tt">住址</td>
        <td class="pp"><input type="text"  name="attr" id="attr"></td>
    </tr>
    <tr class="pp">
        <td class="ct tt">電子信箱</td>
        <td class="pp"><input type="text"  name="email" id="email"></td>
    </tr>
</table>
<div class="ct">
    <button onclick="reg()">註冊</button>
    <button onclick="reset()">重置</button>
</div>