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

$('.mascara-data').mask('00/00/0000');
$('.mascara-data-curta').mask('00/0000');
//$('.mascara-dinheiro').mask('000.000.000.000,000.00', {reverse: true});
$('.mascara-dinheiro').mask('000000000000000,00', {reverse: true});
$('.mascara-dinheiro-2:not([readonly])').maskMoney({'thousands': '', 'decimal': ',', 'allowZero': true});
$('.mascara-dinheiro-2-forcar').maskMoney({'thousands': '', 'decimal': ',', 'allowZero': true});
$('.mascara-dinheiro-negativo').mask('#####,#0', {
    reverse: true,
    translation: {
        '#': {
            pattern: /-|\d/,
            recursive: true
        }
    },
    onChange: function(value, e) {
        var target = e.target,
            position = target.selectionStart; // Capture initial position

        target.value = value.replace(/(?!^)-/g, '').replace(/^,/, '').replace(/^-,/, '-');

        target.selectionEnd = position; // Set the cursor back to the initial position.
    }
});
$('.mascara-data-hora').mask('00/00/0000 00:00:00');
$('.mascara-hora').mask('00:00');
$('.mascara-cep').mask('00000-000');
$('.mascara-sem-espacos').mask('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', {'translation': {A: {pattern: /[A-Za-z0-9\\_]/}}});
$('.mascara-sem-espacos-2').mask('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', {'translation': {A: {pattern: /[A-Za-z0-9_.]/}}});
var SPMaskBehavior = function (val) {
        return val.length !== 16 ? '00(00) 00000-0009' : '00(00) 0000-00009';
    },
    spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };
$('.mascara-telefone-pais').mask(SPMaskBehavior, spOptions);
var SPMaskBehavior2 = function (val) {
        return val.length !== 14 ? '(00) 00000-0009' : '(00) 0000-00009';
    },
    spOptions2 = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior2.apply({}, arguments), options);
        }
    };
$('.mascara-celular').mask(SPMaskBehavior2, spOptions2);
$('.mascara-telefone').mask('(00) 0000-00009');
$('.mascara-cnpj').mask('00.000.000/0000-00', {reverse: true});
$('.mascara-percentual').mask('##0,00', {reverse: true});
$('.mascara-percentual-4').mask('#0,00', {reverse: true});
$('.mascara-cpf').mask('000.000.000-00', {reverse: true});
$('.mascara-numero').mask('0000000000');
$('.mascara-numero-2').mask('00');
$('.mascara-numero-3').mask('000');
$('.mascara-numero-4').mask('0000');
$('.mascara-numero-5').mask('00000');
$('.mascara-numero-6').mask('000000');
$('.mascara-numero-9').mask('000000000');
$('.mascara-numero-11').mask('00000000000');
$('.mascara-numero-20').mask('00000000000000000000');
$('.mascara-numero-30').mask('000000000000000000000000000000');
$('.mascara-numero-50').mask('00000000000000000000000000000000000000000000000000');
$('.mascara-numero-100').mask('0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000');
$('.mascara-matricula-obito').mask('00000000000000000000000000000000');
$('.mascara-cnae').mask('000000000000000');
$('.mascara-valor-virgula').mask("0,0000000");
$('.mascara-valor-virgula-d6').mask("0,000000");
$('.mascara-valor-virgula-4').mask("0000,0000");
$('.mascara-valor-virgula-3').mask("000,000");
$('.mascara-quantidade').mask("000000,000",  {reverse: true});
$('.mascara-ddi').mask('00');
$('.mascara-min').mask('000');
$('.mascara-ano').mask('0000');
$('.mascara-qtde-litros').mask('###0,000', {reverse: true});
$('.mascara-mes-ano').mask('00/0000');

    //OCULTAR TDs filhas de TR-ACAO para impressão
    $('table tr td:nth-child('+$("table th.tr-acao").index() + 1+')').addClass('hidden-print');

    ClassicEditor.create( document.querySelector( '.classic-editor' ), { removePlugins: [ "EasyImage", "Image", "ImageCaption", "ImageStyle", "ImageToolbar", "ImageUpload",  "MediaEmbed" ] }
).catch();

 });

function rem(){

    alertify.confirm('Você tem certeza que deseja realizar esta operação?', function(){ $('#remover').val('1'); $('form')[0].submit(); });

}

function duplicar(classeBase, alvoDestino){

    var $clone = $('.' + classeBase).clone();
    $clone.find('input').val('');

    $clone.removeClass(classeBase).appendTo('.' + alvoDestino);

}
function remover_duplicada(classeDestino){

    $('.' + classeDestino).children().last().remove();

}