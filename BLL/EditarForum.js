function HabEdit()
{//1

    //document.getElementById('btnEdit').disabled = 0;
    //document.getElementById('btnCancelar').disabled = 0;

    //var btneditar = document.getElementById('btnEnviar');
    //btneditar.classList.add("hide");

    //var btnsalvar = document.getElementById('btnEdit');
    //btnsalvar.classList.remove("hide");

    //var btncancel = document.getElementById('btnCancelar');
    //btncancel.classList.remove("hide");

    //var txt_resp = document.getElementById('txt_resp');
    //txt_resp.classList.add("hide");

   //var txt_pergunta = document.getElementById('caixa_pergunta');
   //txt_pergunta.classList.remove("hide");

   //Aqui quando criar no editar da pergunta esconde o form que cria um tópico, desconsidere o que está acima

   var frm_criar = document.getElementById('form_criar');
   frm_criar.classList.add("hide");

   //Aqui mostra um outro formulário para editar
   var frm_edit = document.getElementById('form_edit');
   frm_edit.classList.remove("hide");


}//1

function CanEdit()
{//2

    //Aqui é para voltar ao normal, ativado quando clicado no cancelar do form de editar

    /*document.getElementById('btnCancelar').disabled = 1;
    document.getElementById('btnEnviar').disabled = 0;
    //document.getElementById('txt_pergunta').value = '';

    var btneditar = document.getElementById('btnEnviar');
    btneditar.classList.remove("hide");

    var btnsalvar = document.getElementById('btnEdit');
    btnsalvar.classList.add("hide");

    var btncancel = document.getElementById('btnCancelar');
    btncancel.classList.add("hide");

    var txt_resp = document.getElementById('txt_resp');
    txt_resp.classList.remove("hide");

    var txt_pergunta = document.getElementById('caixa_pergunta');
    txt_pergunta.classList.add("hide");*/

    var frm_criar = document.getElementById('form_criar');
    frm_criar.classList.remove("hide");

    var frm_edit = document.getElementByid('form_edit');
    frm_edit.classList.add("hide");
    
}//2