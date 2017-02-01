<!doctype html>
<html lang="pt-BR">
<head>
<title>Drº Qualidade - Segurança de Alimentos</title>
<link rel="icon" type="image/png" sizes="96x96" href="assets/img/icone.png">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'>
<!-- /font files -->
<!-- css files -->
<link href="assets/css/animate-custom.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->
<script language="JavaScript" type="text/javascript" src="assets/js/jquery-1.10.2.js"></script> 
 
<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
function somenteNumeros(num) {
        var er = /[^0-9.-]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }

</script>
</head>
<body>	
<h1 class="w3ls"></h1>			
<div id="container_demo" >
    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>
    <div id="wrapper">
        <div id="login" class="animate form">
			<form action="login"  method="post" autocomplete="on"> 
                <!--action="login"-->
                <h2><img src="assets/img/logoDr.png" width="200px"></h2>
                
                <p> 
					<label for="username" class="uname" data-icon="u" ><span>Seu CPF</span></label>
                    <input id="username" name="cpf" required="required" type="text" placeholder="apenas números"/>
                </p>
                <p> 
                    <label for="password" class="youpasswd" data-icon="p"><span>Sua senha</span></label>
                    <input id="password" name="senha" required="required" type="password" placeholder="" /> 
                </p>
                
                <p class="login button"> 
                    <input type="submit"  value="Entrar" /> 
				</p>
                <p class="change_link">
					<span>Não faz parte ?</span>
					<a href="#toregister" class="to_register">Cadastre-se</a>
				</p>
            </form>
        </div>
		<div id="register" class="animate form">
            <form action="cadastrocliente"  method="post" autocomplete="on"> 
                <!--action="cadastrocliente"-->
                <h2> Cadastro </h2> 
                <p> 
					<label for="usernamesignup" class="uname" data-icon="u"><span>Seu nome</span></label>
                    <input id="usernamesignup" name="nome" required="required" type="text" placeholder="" />
                </p>
                <p> 
                    <label for="emailsignup" class="youmail" data-icon="e" ><span>Seu e-mail</span></label>
                    <input id="emailsignup" name="email" required="required" type="email" placeholder=""/> 
                </p>
                <p> 
                    <label for="passwordsignup"  class="youpasswd" data-icon="p"><span>Seu CPF</span></label>
                    <input id="cpf" maxlength="14" onkeyup="somenteNumeros(this);" OnKeyPress="formatar('###.###.###-##', this)" name="cpf" required="required" type="text" placeholder="apenas números"/>
				</p>
                <p> 
                    <label for="passwordsignup" class="youpasswd" data-icon="p"><span>Escolha uma senha</span></label>
                    <input id="passwordsignup" name="senha" required="required" type="password" placeholder=""/>
				</p>
				
                <p class="signin button"> 
					<input type="submit"  value="Cadastrar"/> 
				</p>
                <p class="change_link">  
					<span>Já faz parte ?</span>
					<a href="#tologin" class="to_register">Login</a>
				</p>
            </form>
        </div>
	</div>
</div>
<p class="agileits">© 2016 Drº Qualidade | MMVA</p>  
</body>
</html>
