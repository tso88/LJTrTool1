//http://www.bootstrap-switch.org/options.html
$("#ljtrtool_registrationbundle_roleapproval_showRole").bootstrapSwitch({
    onText:'aktiv', offText:'deaktiv', size:'small'
});

var nowTemp = new Date();

var checkin = $('#ljtrtool_registrationbundle_roleapproval_registration_startTime').datetimepicker({
    format: 'dd.mm.yyyy hh:ii',
    language: 'de',
    minuteStep: 15,
    weekStart:1,
    autoclose: true
}).on('changeDate', function(ev) {
    if (ev.date.valueOf() > checkout.date.valueOf()) {
        $('#ljtrtool_registrationbundle_roleapproval_registration_endTime').datetimepicker('setStartDate', ev.date);
    }
    checkin.hide();
    $('#ljtrtool_registrationbundle_roleapproval_registration_endTime')[0].focus();
}).data('datetimepicker');

var checkout = $('#ljtrtool_registrationbundle_roleapproval_registration_endTime').datetimepicker({
    format: 'dd.mm.yyyy hh:ii',
    language: 'de',
    minuteStep: 15,
    weekStart:1,
    autoclose: true,
    onRender: function(date) {
        return '';
    }
}).on('changeDate', function(ev) {
    checkout.hide();
}).data('datetimepicker');