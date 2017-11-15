{include file="templates/header.tpl"}
{assign var="css" value='<LINK REL=StyleSheet HREF="css/index.css" TYPE="text/css">'}
{include file="templates/header.tpl" css=$css}
<div class="bg">
	<div class="header"><img src="images/logo.png" alt="imagen logo" class="img">
		<div class="padheader">	
			<form name="formPost" onsubmit="return isvalidLog()" action="login.php" method="post" >
 				Usuario: <input type="text" name="usuario">
				Contraseña: <input type="password" name="pw">
				
			  <input type="Submit" value=" ¡Logearse! ">
			  <div  id="isEmply"></div>
			</form>		
		
		</div>
	</div>
	<div>
		<div class="fix">
			<div class="titulo">
				Crea una cuenta
			</div>
			<div class="registro">
				<form name="formPost"  action="registro.php" method="post" >
 					<input type="text" name="usuario" placeholder="Usuario" class="pad">
					<input class="pad" type="password" name="pw" placeholder="Contraseña">
					  <input class="pad" type="Submit" value=" ¡Terminado! ">
					  <div id="isEmply2"></div>
				</form>	
			</div>
		</div>
	</div>
</div>

{include file="templates/footer.tpl"}