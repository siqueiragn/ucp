$( document ).ready(function() {

$('.mascara-data').addClass('validate[custom[date]]');//Força validação de data em todos os campos com mascara data

$('[data-toggle="popover"]').popover({container: 'body'});
$('form').validationEngine({
    validateNonVisibleFields: true,
    onValidationComplete: function(form, status){

        ($('button[type="submit"]')).not('.manter').attr('disabled', true);

        if( status == false ){

            $('.alert-fixed-form').fadeIn();
            setTimeout(function(){ $('.alert-fixed-form').fadeOut(); }, 3000);
            $('button[type="submit"]').attr('disabled', false);

        }
        else {
            return true;
        }
    }
});
$('.fancybox').fancybox();
$('.alert:not(.alert-fixed)').delay(5000).fadeOut();
$('.datepicker').datetimepicker({useCurrent: false, format: 'DD/MM/YYYY',locale: 'pt-br',tooltips:{today: 'Ir para hoje', clear: 'Limpar', close: 'Fechar', selectMonth: 'Selecionar Mês', prevMonth: 'Mês Anterior', nextMonth: 'Próximo Mês', selectYear: 'Selecionar Ano', prevYear: 'Ano Anterior', nextYear: 'Próximo Ano', selectDecade: 'Selecionar Década', prevDecade: 'Década Anterior', nextDecade: 'Próxima Década'}});


    //OCULTAR TDs filhas de TR-ACAO para impressão
    $('table tr td:nth-child('+$("table th.tr-acao").index() + 1+')').addClass('hidden-print');

    ClassicEditor.create( document.querySelector( '.classic-editor' ), { removePlugins: [ "EasyImage", "Image", "ImageCaption", "ImageStyle", "ImageToolbar", "ImageUpload",  "MediaEmbed" ] }
).catch();

 });

function rem(){

    alertify.confirm('Você tem certeza que deseja realizar esta operação?', function(){ $('#remover').val('1'); $('form')[0].submit(); });

}

function mustBeEqual() {

    if ($('#pass').val() != '' && $('#confirmpass').val() != '') {
         if ($('#pass').val() != $('#confirmpass').val()) {
             alertify.alert("As senhas precisam ser idênticas!");
             $('#confirmpass').val('');
         }
    }
}