document.addEventListener('turbo:load', loadPatientShowAppointmentDate)

let patientShowApptmentFilterDate = $('#patientShowPageAppointmentDate')

function loadPatientShowAppointmentDate () {
    if (!$('#patientShowPageAppointmentDate').length) {
        return
    }

    let patientShowApptmentStart = moment().startOf('week')
    let patientShowApptmentEnd = moment().endOf('week')

    function cb (start, end) {
        $('#patientShowPageAppointmentDate').val(
            start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'))
    }

    $('#patientShowPageAppointmentDate').daterangepicker({
        startDate: patientShowApptmentStart,
        endDate: patientShowApptmentEnd,
        opens: 'left',
        showDropdowns: true,
        locale: {
            customRangeLabel: Lang.get('messages.common.custom'),
            applyLabel:Lang.get('messages.common.apply'),
            cancelLabel: Lang.get('messages.common.cancel'),
            fromLabel:Lang.get('messages.common.from'),
            toLabel: Lang.get('messages.common.to'),
            monthNames: [
                Lang.get('messages.months.jan'),
                Lang.get('messages.months.feb'),
                Lang.get('messages.months.mar'),
                Lang.get('messages.months.apr'),
                Lang.get('messages.months.may'),
                Lang.get('messages.months.jun'),
                Lang.get('messages.months.jul'),
                Lang.get('messages.months.aug'),
                Lang.get('messages.months.sep'),
                Lang.get('messages.months.oct'),
                Lang.get('messages.months.nov'),
                Lang.get('messages.months.dec')
            ],

            daysOfWeek: [
                Lang.get('messages.weekdays.sun'),
                Lang.get('messages.weekdays.mon'),
                Lang.get('messages.weekdays.tue'),
                Lang.get('messages.weekdays.wed'),
                Lang.get('messages.weekdays.thu'),
                Lang.get('messages.weekdays.fri'),
                Lang.get('messages.weekdays.sat')],
        },
        ranges: {
            [Lang.get('messages.datepicker.today')]: [moment(), moment()],
            [Lang.get('messages.datepicker.yesterday')]: [
                moment().subtract(1, 'days'),
                moment().subtract(1, 'days')],
            [Lang.get('messages.datepicker.this_week')]: [moment().startOf('week'), moment().endOf('week')],
            [Lang.get('messages.datepicker.last_30_days')]: [moment().subtract(29, 'days'), moment()],
            [Lang.get('messages.datepicker.this_month')]: [moment().startOf('month'), moment().endOf('month')],
            [Lang.get('messages.datepicker.last_month')]: [
                moment().subtract(1, 'month').startOf('month'),
                moment().subtract(1, 'month').endOf('month')],
        },
    }, cb)

    cb(patientShowApptmentStart, patientShowApptmentEnd)
}

listenClick('.patient-show-apptment-delete-btn', function (event) {
    let patientShowApptmentRecordId = $(event.currentTarget).data('id')
    let patientShowApptmentUrl = !isEmpty($('#patientRolePatientDetail').val()) ? route(
        'patients.appointments.destroy',
        patientShowApptmentRecordId) : route('appointments.destroy',
        patientShowApptmentRecordId)
    deleteItem(patientShowApptmentUrl, 'Appointment')
})

listenChange('.patient-show-apptment-status-change', function () {
    let patientShowAppointmentStatus = $(this).val()
    let patientShowAppointmentId = $(this).data('id')
    let currentData = $(this)

    $.ajax({
        url: route('change-status', patientShowAppointmentId),
        type: 'POST',
        data: {
            appointmentId: patientShowAppointmentId,
            appointmentStatus: patientShowAppointmentStatus,
        },
        success: function (result) {
            $(currentData).children('option.booked').addClass('hide')
            livewire.emit('refresh')
            displaySuccessMessage(result.message)
        },
    })
})

listenClick('#patientAppointmentResetFilter', function () {
    $('#patientShowPageAppointmentStatus').val(1).trigger('change')
    $('#patientShowPageAppointmentDate').
        val(moment().startOf('week').format('MM/DD/YYYY') + ' - ' +
            moment().endOf('week').format('MM/DD/YYYY')).
        trigger('change')
})

listenChange('#patientShowPageAppointmentDate', function () {
    window.livewire.emit('changeDateFilter', $(this).val())
})

listenChange('#patientShowPageAppointmentStatus', function () {
    window.livewire.emit('changeDateFilter',
        $('#patientShowPageAppointmentDate').val())
    window.livewire.emit('changeStatusFilter', $(this).val())
})

document.addEventListener('livewire:load', function () {
    window.livewire.hook('message.processed', () => {
        if ($('#patientShowPageAppointmentStatus').length) {
            $('#patientShowPageAppointmentStatus').select2()
        }
        if ($('.patient-show-apptment-status-change').length) {
            $('.patient-show-apptment-status-change').select2()
        }
    })
})
