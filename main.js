/* la idea seria atajar el formulario y hacer validaciones javascript
para atajar el formulario, en el tag FORM metes un onsubmit="mi_funcion(); return false;"
y despues creas una funcion mi_funcion que levante parametros desde el html y se fije si estan vacios
si alguno esta vacio "return false"
(((en el onsubmit no va el return false, sino nunca se manda)))
la idea tambien seria que si algun campo este mal, javascript ponga display BLOCK sobre algun div escondido que diga "falta el nombre"
todo esto, en el html tenes que ponerlo en un tag <script> </script>
podes probar si funciona poniendo simplemente un alert("hola");  */

function isvalidPost()
{
    var a=document.forms["formPost"]["mensaje"].value;
    if (a==null || a==='')
    {
        alert("Por favor llena los campos vacios");
        return false;
    }else{
        return true;
    }

}
