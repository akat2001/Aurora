function FiltroV()
{

    //Testa se conteúdo ta vazio
    if(document.exercicios.id_disciplina.value=="")
    {
        var Retorno = document.getElementById("Retorno");
        Retorno.innerText = "Campo disciplina vazio!";
        return false;
    }
    //Testa se respondida ta vazio
    else if(document.exercicios.conteudo.value=="")
    {
        var Retorno = document.getElementById("Retorno");
        Retorno.innerText = "Campo conteúdo vazio!";
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