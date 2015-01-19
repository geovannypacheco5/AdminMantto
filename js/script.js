window.onload = principal;

function principal()
{
    var menu = document.getElementsByClassName("menu");
    menu[0].onclick = function(){window.location="index.php?action=salida";};
    menu[1].onclick = function(){window.location="index.php?action=entrada";};
    menu[2].onclick = function(){window.location="index.php?action=inicio";};
    document.getElementsByName("tipo")[0].onclick = function ()
    {
        document.getElementsByClassName("tipo")[0].classList.remove("comercial");
        document.getElementsByClassName("tipo")[1].classList.remove("comercial");
    };
    document.getElementsByName("tipo")[1].onclick = function ()
    {
        document.getElementsByClassName("tipo")[0].classList.add("comercial");
        document.getElementsByClassName("tipo")[1].classList.add("comercial");
    };
}