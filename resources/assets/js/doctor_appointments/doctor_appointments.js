document.addEventListener('turbo:load', loadDoctorAppointmentFilterDate)

let doctorAppointmentFilterDate = '#doctorPanelAppointmentDate';

function loadDoctorAppointmentFilterDate () {
    if (!$(doctorAppointmentFilterDate).length) {
        return
    }
    let timeRange = $('#doctorPanelAppointmentDate');
    let doctorAppointmentStart = moment().startOf('week')
    let doctorAppointmentEnd = moment().endOf('week')

    function cb(doctorAppointmentStart, doctorAppointmentEnd) {
        $('#doctorPanelAppointmentDate').val(
            doctorAppointmentStart.format('YYYY-MM-DD') + ' - ' + doctorAppointmentEnd.format('YYYY-MM-DD'))
    }

    timeRange.daterangepicker({
        startDate: doctorAppointmentStart,
        endDate: doctorAppointmentEnd,
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
    }, cb);

    cb(doctorAppointmentStart, doctorAppointmentEnd)
}

listenChange('.doctor-appointment-status-change', function () {
    let doctorAppointmentStatus = $(this).val()
    let doctorAppointmentId = $(this).data('id')
    let doctorAppointmentCurrentData = $(this)

    $.ajax({
        url: route('doctors.change-status', doctorAppointmentId),
        type: 'POST',
        data: {
            appointmentId: doctorAppointmentId,
            appointmentStatus: doctorAppointmentStatus,
        },
        success: function (result) {
            $(doctorAppointmentCurrentData).
                children('option.booked').
                addClass('hide')
            livewire.emit('refresh')
            displaySuccessMessage(result.message)
        },
    })
})

listenChange('.doctor-apptment-change-payment-status', function () {
    let doctorApptmentPaymentStatus = $(this).val()
    let doctorApptmentAppointmentId = $(this).data('id')

    $('#doctorAppointmentPaymentStatusModal').modal('show').appendTo('body')

    $('#doctorAppointmentPaymentStatus').val(doctorApptmentPaymentStatus)
    $('#doctorAppointmentId').val(doctorApptmentAppointmentId)
})

listenSubmit('#doctorAppointmentPaymentStatusForm', function (event) {
    event.preventDefault()
    let paymentStatus = $('#doctorAppointmentPaymentStatus').val()
    let appointmentId = $('#doctorAppointmentId').val()
    let paymentMethod = $('#doctorPaymentType').val()

    $.ajax({
        url: route('doctors.change-payment-status', appointmentId),
        type: 'POST',
        data: {
            appointmentId: appointmentId,
            paymentStatus: paymentStatus,
            paymentMethod: paymentMethod,
            loginUserId: currentLoginUserId,
        },
        success: function (result) {
            if (result.success) {
                displaySuccessMessage(result.message)
                $('#doctorAppointmentPaymentStatusModal').modal('hide')
                location.reload()
            }
        },
        error: function (result) {
            displayErrorMessage(result.responseJSON.message)
        },
    })
})

listenChange('#doctorPanelAppointmentDate', function () {
    window.livewire.emit('changeDateFilter', $(this).val())
})

listenChange('#doctorPanelPaymentType', function () {
    window.livewire.emit('changeDateFilter',
        $('#doctorPanelAppointmentDate').val())
    window.livewire.emit('changePaymentTypeFilter', $(this).val())
})

listenChange('#doctorPanelAppointmentStatus', function () {
    window.livewire.emit('changeDateFilter', $('#doctorPanelAppointmentDate').val())
    window.livewire.emit('changeStatusFilter', $(this).val())
})

listenClick('#doctorPanelApptmentResetFilter', function () {
    $('#doctorPanelPaymentType').val(0).trigger('change')
    $('#doctorPanelAppointmentStatus').val(1).trigger('change')
    doctorAppointmentFilterDate.data('daterangepicker').
        setStartDate(moment().startOf('week').format('MM/DD/YYYY'))
    doctorAppointmentFilterDate.data('daterangepicker').
        setEndDate(moment().endOf('week').format('MM/DD/YYYY'))
    hideDropdownManually($('#doctorPanelApptFilterBtn'), $('.dropdown-menu'));
})

listenClick('#doctorPanelApptResetFilter', function () {
    $('#doctorPanelPaymentType').val(0).trigger('change')
    $('#doctorPanelAppointmentStatus').val(1).trigger('change')
    $('#doctorPanelAppointmentDate').data('daterangepicker').
        setStartDate(moment().startOf('week').format('MM/DD/YYYY'))
    $('#doctorPanelAppointmentDate').data('daterangepicker').
        setEndDate(moment().endOf('week').format('MM/DD/YYYY'))
    hideDropdownManually($('#doctorPanelApptFilterBtn'), $('.dropdown-menu'));
})

document.addEventListener('livewire:load', function () {
    window.livewire.hook('message.processed', () => {
        if ($('#doctorPanelPaymentType').length) {
            $('#doctorPanelPaymentType').select2()
        }
        if ($('#doctorPanelAppointmentStatus').length) {
            $('#doctorPanelAppointmentStatus').select2()
        }
        if ($('.appointment-status').length) {
            $('.appointment-status').select2()
        }
        if ($('.payment-status').length) {
            $('.payment-status').select2()
        }
    })
})
