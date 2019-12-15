$(document).ready(function () {
    $('.mask-date, .datepicker').mask('00/00/0000');
    $('.mask-time').mask('00:00:00');
    $('.mask-date-time').mask('00/00/0000 00:00:00');
    $('.mask-cep').mask('00000-000');
    $('.mask-phone').mask('(00) 00000-0000');
    $('.mask-cpf').mask('000.000.000-00', { reverse: true });
    $('.mask-cnpj').mask('00.000.000/0000-00', { reverse: true });
    $('.mask-money').mask("#.##0,00", { reverse: true });
});