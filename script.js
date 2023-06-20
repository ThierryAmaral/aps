function FinalizarPedido(form){
    if(form.Nome.value==""){
        alert("Favor observar o campo Nome.")
        form.Nome.focus();
        return;
    }
    if(form.Email.value=="" || form.Email.value.indexOf("@") == -1 || form.Email.value.indexOf(".") == -1){
        alert("Favor observar o campo E-mail.")
        form.Email.focus();
        return;
    }
    if(form.Contato.value=="" || form.Contato.value.length < 8 || form.Contato.value.length > 11){
        alert("Favor observar o campo Contato.")
        form.Contato.focus();
        return;
    }
    form.submit();
}