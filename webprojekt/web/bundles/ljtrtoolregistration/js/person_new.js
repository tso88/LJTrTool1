$( "#person_new_showAddress" ).click(function() {
    $('.no_address').hide(2000);
    $('.address').show(2000);
    $('#person_new_hideAddress').show(20);
    $('#person_new_showAddress').hide(20);
});


$( "#person_new_hideAddress" ).click(function() {
    $('.address').hide(2000);
    $('.no_address').show(2000);
    $('.address').find(':input').val('');
    $('#person_new_hideAddress').hide(20);
    $('#person_new_showAddress').show(20);
});

$('#ljtrtool_registrationbundle_person_birthday').datetimepicker(
    {   format: 'dd.mm.yyyy',
        language: 'de',
        startView: 4,
        minView: 2,
        weekStart:1,
        autoclose: true
    });



