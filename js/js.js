// JavaScript Document
function lof(x)
{
	location.href=x
}


function login(table) {
	let acc = $('#acc').val()
	let pw = $('#pw').val()
	let ans = $('#anc').val()

	$.get('api/ans.php', {
		ans
	}, function(res) {
		if (parseInt(res)) {
			$.get('api/login.php', {
				table,
				acc,
				pw
			}, function(r) {
				if (parseInt(r)) {
					switch (table) {
						case "mem":
							location.href="index.php"
							break;
						case "admin":
							location.href="backend.php"
							break;
					}
				} else {
					alert("帳號或密碼錯誤")
				}
			})
		} else {
			alert("對不起，您輸入的驗證碼有誤，請您重新登入")
		}
	})
}