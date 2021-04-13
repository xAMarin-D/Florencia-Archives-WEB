{
function preguntarSiNo (){
    alertify.confirm('Eliminar Mensaje', 'Está seguro de eliminar este mensaje?',
     function(){ alertify.success('Ok') }
                , function(){ alertify.error('Cancel')});

}

}