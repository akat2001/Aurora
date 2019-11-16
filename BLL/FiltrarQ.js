function FiltroV()
{
    var ContQ = document.getElementById("conteudo").value;
    var RespQ = document.getElementById("respq").value;

    //Testa se conteúdo ta vazio
    if(ContQ == "")
    {
        var Retorno = document.getElementById("Retorno");
        Retorno.innerText = "Campo conteúdo vazio!";
        return false;
    }
    //Testa se respondida ta vazio
    else if(RespQ != "Não" || RespQ != "Sim")
    {
        var Retorno = document.getElementById("Retorno");
        Retorno.innerText = "Campo dificuldade vazio!";
        return false;
    }
    else
    {
        document.exercicios.submit();
    }
}

function AbrirQ(Quest){
    document.getElementById("questaoesc").value = Quest;
    document.questao.submit();
}