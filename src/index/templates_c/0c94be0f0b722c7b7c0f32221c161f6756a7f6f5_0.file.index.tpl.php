<?php
/* Smarty version 3.1.30, created on 2017-11-08 12:18:43
  from "C:\wamp\www\red-social\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a031243766aa8_66865932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c94be0f0b722c7b7c0f32221c161f6756a7f6f5' => 
    array (
      0 => 'C:\\wamp\\www\\red-social\\templates\\index.tpl',
      1 => 1510150721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../templates/header.tpl' => 1,
    'file:../../templates/footer.tpl' => 1,
  ),
),false)) {
function content_5a031243766aa8_66865932 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="bg">
	<div class="header"><img src="../../images/logo.png" alt="imagen logo" class="img">
		<div class="padheader">	
			<form name="formPost" onsubmit="return isvalidLog()" action="../log/login.php" method="post" >
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
				<form name="formPost"  action="../log/registro.php" method="post" >
 					<input type="text" name="usuario" placeholder="Usuario" class="pad">
					<input class="pad" type="password" name="pw" placeholder="Contraseña">
					  <input class="pad" type="Submit" value=" ¡Terminado! ">
					  <div id="isEmply2"></div>
				</form>	
			</div>
		</div>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:../../templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
