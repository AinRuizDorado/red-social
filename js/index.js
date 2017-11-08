function isvalidLog()
{
    var a=document.forms["formPost"]["usuario"].value;
    var a=document.forms["formPost"]["pw"].value;
    if (a==='' || b==='')
    {
        document.getElementById("isEmply").innerHTML = "Alguno de los campos estan vacios";
        return false;
    }else{
        return true;
    }


}

function isvalidReg()
{
    var a=document.forms["formPost"]["usuario"].value;
    var a=document.forms["formPost"]["pw"].value;
    if (a==='' || b==='')
    {
        document.getElementById("isEmply2").innerHTML = "Alguno de los campos estan vacios";
        return false;
    }else{
        return true;
    }


}

