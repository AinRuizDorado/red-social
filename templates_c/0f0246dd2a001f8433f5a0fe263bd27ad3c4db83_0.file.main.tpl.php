<?php
/* Smarty version 3.1.30, created on 2017-11-08 12:53:18
  from "C:\wamp\www\red-social\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a031a5e17ea26_64851644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f0246dd2a001f8433f5a0fe263bd27ad3c4db83' => 
    array (
      0 => 'C:\\wamp\\www\\red-social\\templates\\main.tpl',
      1 => 1510152785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5a031a5e17ea26_64851644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('css', '<LINK REL=StyleSheet HREF="css/main.css" TYPE="text/css">');
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('css'=>$_smarty_tpl->tpl_vars['css']->value), 0, false);
?>

<div class="main">
    <div>

        <div class="supheader">
            <div>
                Logo
            </div>
        </div>
        <?php if (!empty($_SESSION['usuario'])) {?>
        <div class="logout">Bienvenido <?php echo $_SESSION['usuario'];?>
;
        <a href="logout.php"> Log out</a> </div>

        <?php }?>
    </div>
    <div>
        <div class="centerpost">
            <div class="spamtable">
                <span>
                    <a href="">Post</a>
                </span>
                <span>
                    <a href="">fotos</a>
                </span>
            </div>
            <div class="containerheader">
                <form action="post.php" method="post" name="formPost" onsubmit="return isvalidPost()">
                    <textarea name="mensaje" cols="65" rows="5" placeholder="Post Here" maxlength="140" onkeyup="textCounter(this,'counter',140);"
                        id="message"></textarea>
                    <input type="Submit" value="post" class="btn btn-primary" id="boton">
                    <input disabled class="botonlength" maxlength="140" size="3" value="140" id="counter">
                    <div id="isEmply"></div>
                </form>
            </div>
            <div class="container">
                <div class="foto">foto</div>
                <div class="contenido">post aqui</div>
            </div>
        </div>
    </div>


</div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
