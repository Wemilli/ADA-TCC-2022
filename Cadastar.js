var email1 = document.forms['form']['email1'];
var senha1 = document.forms['form']['senha1'];
var senha2 = document.forms['form']['senha1'];

var email_erro = document.getElementById('email_erro');
var senha_erro = document.getElementById('senha_erro');


email1.addEventListener('textInput', email_Verify);
senha1.addEventListener('textInput', pass_Verify);
senha2.addEventListener('textInput', pass_Verify);

function validated(){
	if (email1
	.value.length < 9) {
		email1
	.style.border = "1px solid green";
		email_erro.style.display = "block";
		email1
	.focus();
		return false;
	}
	if (senha1
	.value.length < 6) {
		senha1
	.style.border = "1px solid blue";
		senha_erro.style.display = "block";
		senha1
	.focus();
		return false;
	}

}
function email_Verify(){
	if (email1
	.value.length >= 8) {
		email1
	.style.border = "1px solid red";
		email_erro.style.display = "none";
		return true;
	}
}
function pass_Verify(){

	if(senha1 == "" || senha1.length <=10){
		alert ('Preencha o campo com mínimo 6 caracteres');
		formuser.senha.focus();
		return false;
	}
}