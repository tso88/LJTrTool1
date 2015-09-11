//http://www.malot.fr/bootstrap-datetimepicker/
/*
$('#ljtrtool_registrationbundle_event_startTime').datetimepicker(
    {   format: 'dd.mm.yyyy hh:ii',
        minuteStep: 15,
        weekStart:1,
        autoclose: true
    });

$('#ljtrtool_registrationbundle_event_endTime').datetimepicker(
    {   format: 'dd.mm.yyyy hh:ii',
        minuteStep: 15,
        weekStart:1,
        autoclose: true
    });
*/

var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

var checkin = $('#ljtrtool_registrationbundle_event_startTime').datetimepicker({
    startDate: nowTemp,
    format: 'dd.mm.yyyy hh:ii',
    language: 'de',
    minuteStep: 15,
    weekStart:1,
    autoclose: true
}).on('changeDate', function(ev) {
    if (ev.date.valueOf() > checkout.date.valueOf()) {
        $('#ljtrtool_registrationbundle_event_endTime').datetimepicker('setStartDate', ev.date);
    }
    checkin.hide();
    $('#ljtrtool_registrationbundle_event_endTime')[0].focus();
}).data('datetimepicker');

var checkout = $('#ljtrtool_registrationbundle_event_endTime').datetimepicker({
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