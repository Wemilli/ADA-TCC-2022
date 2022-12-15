function logar(){
    var login = getElementById('login').value;
    var senha = getElementById('senha').value;

    if(login == "" && senha ==""){
      alert('sucesso');
      location.href = "Modulos.html";
    } else{
        alert(`Usuario ou senha incorretos`);
    }
 }