function RespostaQ()
{
    var Q = document.getElementById("resposta").value;

    if(Q=="A"||Q=="B"||Q=="C"||Q=="D"||Q=="E")
    {    
        document.responder.submit();
    }
    else
    {
        Retorno.innerText = "Alternativa não escolhida!";
        return false;
    }
}

function CorAltA(Alt)
{
    var A = document.getElementById("A");
    var B = document.getElementById("B");
    var C = document.getElementById("C");
    var D = document.getElementById("D");
    var E = document.getElementById("E");
    A.className += " active purple";
    B.className = "collection-item";
    C.className = "collection-item";
    D.className = "collection-item";
    E.className = "collection-item";
    document.getElementById("resposta").value = "A";
    document.getElementById("Alt").value = Alt;
}
function CorAltB(Alt)
{
    var A = document.getElementById("A");
    var B = document.getElementById("B");
    var C = document.getElementById("C");
    var D = document.getElementById("D");
    var E = document.getElementById("E");
    B.className += " active purple";
    A.className = "collection-item";
    C.className = "collection-item";
    D.className = "collection-item";
    E.className = "collection-item";
    document.getElementById("resposta").value = "B";
    document.getElementById("Alt").value = Alt;
}
function CorAltC(Alt)
{
    var A = document.getElementById("A");
    var B = document.getElementById("B");
    var C = document.getElementById("C");
    var D = document.getElementById("D");
    var E = document.getElementById("E");
    C.className += " active purple";
    B.className = "collection-item";
    A.className = "collection-item";
    D.className = "collection-item";
    E.className = "collection-item";
    document.getElementById("resposta").value = "C";
    document.getElementById("Alt").value = Alt;
}
function CorAltD(Alt)
{
    var A = document.getElementById("A");
    var B = document.getElementById("B");
    var C = document.getElementById("C");
    var D = document.getElementById("D");
    var E = document.getElementById("E");
    D.className += " active purple";
    B.className = "collection-item";
    C.className = "collection-item";
    A.className = "collection-item";
    E.className = "collection-item";
    document.getElementById("resposta").value = "D";
    document.getElementById("Alt").value = Alt;
}
function CorAltE(Alt)
{
    var A = document.getElementById("A");
    var B = document.getElementById("B");
    var C = document.getElementById("C");
    var D = document.getElementById("D");
    var E = document.getElementById("E");
    E.className += " active purple";
    B.className = "collection-item";
    C.className = "collection-item";
    D.className = "collection-item";
    A.className = "collection-item";
    document.getElementById("resposta").value = "E";
    document.getElementById("Alt").value = Alt;
}