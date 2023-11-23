document.addEventListener('turbo:load', loadAppointmentFilterDate)

let appointmentFilterDate = $('#appointmentDateFilter')

function loadAppointmentFilterDate () {
    if (!$('#appointmentDateFilter').length) {
        return
    }

    let appointmentStart = moment().startOf('week')
    let appointmentEnd = moment().endOf('week')

    function cb (start, end) {
        $('#appointmentDateFilter').val(
            start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'))
    }

    $('#appointmentDateFilter').daterangepicker({
        startDate: appointmentStart,
        endDate: appointmentEnd,
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

    cb(appointmentStart, appointmentEnd)
}

listenClick('#appointmentResetFilter', function () {
    $('#paymentStatus').val(0).trigger('change')
    $('#appointmentStatus').val(1).trigger('change')
    $('#appointmentDateFilter').data('daterangepicker').setStartDate(moment().startOf('week').format('MM/DD/YYYY'))
    $('#appointmentDateFilter').data('daterangepicker').setEndDate(moment().endOf('week').format('MM/DD/YYYY'))
    hideDropdownManually($('#apptmentFilterBtn'), $('.dropdown-menu'));
})

listenClick('#doctorApptResetFilter', function () {
    $('#doctorApptPaymentStatus').val(1).trigger('change')
    $('#appointmentDateFilter').data('daterangepicker').setStartDate(moment().startOf('week').format('MM/DD/YYYY'))
    $('#appointmentDateFilter').data('daterangepicker').setEndDate(moment().endOf('week').format('MM/DD/YYYY'))
    hideDropdownManually($('#doctorAptFilterBtn'), $('.dropdown-menu'));
})

listenClick('.appointment-delete-btn', function (event) {
    let recordId = $(event.currentTarget).data('id')
    deleteItem(route('appointments.destroy', recordId), Lang.get('messages.web.appointment'))
})

listenChange('.appointment-status-change', function () {
    let appointmentStatus = $(this).val()
    let appointmentId = $(this).data('id')
    let currentData = $(this)

    $.ajax({
        url: route('change-status', appointmentId),
        type: 'POST',
        data: {
            appointmentId: appointmentId,
            appointmentStatus: appointmentStatus,
        },
        success: function (result) {
            $(currentData).children('option.booked').addClass('hide')
            Turbo.visit(window.location.href);
            displaySuccessMessage(result.message)
        },
    });
});

listenChange('.appointment-change-payment-status', function () {
    let paymentStatus = $(this).val()
    let appointmentId = $(this).data('id')

    $('#paymentStatusModal').modal('show').appendTo('body')

    $('#paymentStatus').val(paymentStatus)
    $('#appointmentId').val(appointmentId)
})

listenChange('#appointmentDateFilter', function () {
    window.livewire.emit('changeDateFilter', $(this).val())
    window.livewire.emit('changeStatusFilter', $('#appointmentStatus').val())
    window.livewire.emit('changePaymentTypeFilter', $('#paymentStatus').val())
})

listenChange('#paymentStatus', function () {
    window.livewire.emit('changeDateFilter', $('#appointmentDateFilter').val())
    window.livewire.emit('changeStatusFilter', $('#appointmentStatus').val())
    window.livewire.emit('changePaymentTypeFilter', $(this).val())
})

listenChange('#doctorApptPaymentStatus', function () {
    window.livewire.emit('changeDateFilter', $('#appointmentDateFilter').val())
    window.livewire.emit('changeStatusFilter', $(this).val())
})

listenChange('#appointmentStatus', function () {
    window.livewire.emit('changeDateFilter', $('#appointmentDateFilter').val())
    window.livewire.emit('changeStatusFilter', $(this).val())
    window.livewire.emit('changePaymentTypeFilter', $('#paymentStatus').val())
})

listenSubmit('#appointmentPaymentStatusForm', function (event) {
    event.preventDefault()
    let paymentStatus = $('#paymentStatus').val()
    let appointmentId = $('#appointmentId').val()
    let paymentMethod = $('#paymentType').val()

    $.ajax({
        url: route('change-payment-status', appointmentId),
        type: 'POST',
        data: {
            appointmentId: appointmentId,
            paymentStatus: paymentStatus,
            paymentMethod: paymentMethod,
            loginUserId: currentLoginUserId,
        },
        success: function (result) {
            if (result.success) {
                displaySuccessMessage(result.message);
                $('#paymentStatusModal').modal('hide');
                location.reload();
            }
        },
        error: function (result) {
            displayErrorMessage(result.responseJSON.message);
        },
    });
});
