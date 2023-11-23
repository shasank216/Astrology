document.addEventListener('turbo:load', loadDoctorShowApptmentFilterDate)

let doctorShowApptmentFilterDate = $('#doctorShowAppointmentDateFilter')

function loadDoctorShowApptmentFilterDate () {
    if (!$('#doctorShowAppointmentDateFilter').length) {
        return
    }

    let doctorShowApptmentStart = moment().startOf('week')
    let doctorShowApptmentEnd = moment().endOf('week')

    function cb (start, end) {
        $('#doctorShowAppointmentDateFilter').html(
            start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'))
    }

    $('#doctorShowAppointmentDateFilter').daterangepicker({
        startDate: doctorShowApptmentStart,
        endDate: doctorShowApptmentEnd,
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

    cb(doctorShowApptmentStart, doctorShowApptmentEnd)
}

listenClick('.doctor-show-apptment-delete-btn', function (event) {
    let doctorShowApptmentRecordId = $(event.currentTarget).data('id')
    let doctorShowApptmentUrl = !isEmpty($('#patientRoleDoctorDetail').val()) ? route(
        'patients.appointments.destroy',
        doctorShowApptmentRecordId) : route('appointments.destroy',
        doctorShowApptmentRecordId)
    deleteItem(doctorShowApptmentUrl, 'Appointment')
})

listenChange('.doctor-show-apptment-status', function () {
    let doctorShowAppointmentStatus = $(this).val()
    let doctorShowAppointmentId = $(this).data('id')
    let currentData = $(this)

    $.ajax({
        url: route('change-status', doctorShowAppointmentId),
        type: 'POST',
        data: {
            appointmentId: doctorShowAppointmentId,
            appointmentStatus: doctorShowAppointmentStatus,
        },
        success: function (result) {
            $(currentData).children('option.booked').addClass('hide')
            livewire.emit('refresh')
            displaySuccessMessage(result.message)
        },
    });
});

listenChange('#doctorShowAppointmentDateFilter', function () {
    window.livewire.emit('changeDateFilter', $(this).val())
})

listenChange('#doctorShowAppointmentStatus', function () {
    window.livewire.emit('changeDateFilter', $('#doctorShowAppointmentDateFilter').val())
    window.livewire.emit('changeStatusFilter', $(this).val())
})

listenClick('#doctorShowApptmentResetFilter', function () {
    $('#doctorShowAppointmentStatus').val(1).trigger('change')
    $('#doctorShowAppointmentDateFilter').
        val(moment().startOf('week').format('MM/DD/YYYY') + ' - ' +
            moment().endOf('week').format('MM/DD/YYYY')).
        trigger('change')
    livewire.emit('refresh')
})

document.addEventListener('livewire:load', function () {
    window.livewire.hook('message.processed', () => {
        if ($('#doctorShowAppointmentStatus').length) {
            $('#doctorShowAppointmentStatus').select2()
        }
        if ($('.doctor-show-apptment-status').length) {
            $('.doctor-show-apptment-status').select2()
        }
    })
})
