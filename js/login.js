console.log('login.js loaded');
function login() {
	let dados = serializeArray(document.forms["frmLogin"]);
	$.post('./login', {
		data:dados
	}, function(data) {
		let obj = JSON.parse(data);
		if (typeof obj === undefined || obj.erro !== "") {
			alert('Login ou senha incorretos, verifique');
			$('#txtLogin').focus();
			return;
		}
		
	});
}