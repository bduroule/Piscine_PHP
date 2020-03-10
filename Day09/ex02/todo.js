var tab = [];
var index = 0;
var index_bis = 0;
var flag = 0;


function add(elem)
{

    var ntask = 0;

    if (flag === 0)
        ntask = prompt("add new task");
    else
        ntask = elem;
    if (ntask)
    {
        var lst = document.getElementById("ft_list");
        var e = document.createElement("div");
        e.setAttribute("class", "newelem");
        e.setAttribute("onclick", "suppr(this)")
        e.setAttribute("index", index);
        var textnode = document.createTextNode(ntask);
        tab[index] = ntask;
        index++;
        e.appendChild(textnode);
        lst.insertBefore(e, lst.childNodes[0]);
        if (flag == 0){
            cookies_dans_le_sac();
        }
    }
}

function suppr(elem)
{
    if (confirm("are you sure to delete this task") == true){
        var i = elem.getAttribute("index");
        tab.splice(i, 1);
        elem.parentNode.removeChild(elem);
        cookies_dans_le_sac();
    }
}

function cookies_dans_le_sac()
{
    var str = JSON.stringify(tab);
    document.cookie = "ntask=" + str;
}

window.onload = function()
{
    if (document.cookie)
    {
        flag = 1;
        var cook = document.cookie;
        var new_el = cook.split("=");
        var t = JSON.parse(new_el[1]);
        for (elem in t){
            add(t[elem]);
        }
        flag = 0;
    }
}