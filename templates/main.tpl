{assign var="css" value='<LINK REL=StyleSheet HREF="css/main.css" TYPE="text/css">'}
{include file="templates/header.tpl" css=$css}
<div class="main">
    <div>

        <div class="supheader">
            <div>
                Logo
            </div>
            {if !empty($smarty.session.usuario)}
            <div class="logout">Bienvenido {$smarty.session.usuario}
            <a href="logout.php"> Log out</a>
            </div>
            {/if}
        </div>
  

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
            {foreach $posteos as $post}
            <div class="container">
                <div class="foto">foto</div>
                <div class="contenido"> <textarea readonly class="transparent" name="" id="" cols="65" rows="5">{$post}</textarea></div>
            </div>
            {/foreach}
            <div class="container">
                <div class="foto">foto</div>
                <div class="contenido">post aqui</div>
            </div>
        </div>
    </div>


</div>

{include file="templates/footer.tpl"}