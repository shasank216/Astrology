document.addEventListener('turbo:load',
    loadPatientPanelAppointmentFilterData)

function loadPatientPanelAppointmentFilterData () {
    if (!$('#patientAppointmentDate').length) {
        return
    }

    let patientPanelApptmentStart = moment().startOf('week')
    let patientPanelApptmentEnd = moment().endOf('week')

    function cb (start, end) {
        $('#patientAppointmentDate').val(
            start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'))
    }

    $('#patientAppointmentDate').daterangepicker({
        startDate: patientPanelApptmentStart,
        endDate: patientPanelApptmentEnd,
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

    cb(patientPanelApptmentStart, patientPanelApptmentEnd)
}

listenClick('#patientPanelApptmentResetFilter', function () {
    livewire.emit('refresh')
    $('#patientPaymentStatus').val(0).trigger('change')
    $('#patientAppointmentStatus').val(1).trigger('change')
    $('#patientAppointmentDate').data('daterangepicker').setStartDate(moment().startOf('week').format('MM/DD/YYYY'))
    $('#patientAppointmentDate').data('daterangepicker').setEndDate(moment().endOf('week').format('MM/DD/YYYY'))
    hideDropdownManually($('#patientPanelApptFilterBtn'), $('.dropdown-menu'));
})

listenChange('#patientAppointmentDate', function () {
    window.livewire.emit('changeDateFilter', $(this).val())
})

listenChange('#patientPaymentStatus', function () {
    window.livewire.emit('changeDateFilter', $('#patientAppointmentDate').val())
    window.livewire.emit('changePaymentTypeFilter', $(this).val())
})

listenChange('#patientAppointmentStatus', function () {
    window.livewire.emit('changeDateFilter', $('#patientAppointmentDate').val())
    window.livewire.emit('changeStatusFilter', $(this).val())
})

document.addEventListener('livewire:load', function () {
    window.livewire.hook('message.processed', () => {
        if ($('#patientPaymentStatus').length) {
            $('#patientPaymentStatus').select2()
        }
        if ($('#patientAppointmentStatus').length) {
            $('#patientAppointmentStatus').select2()
        }
    })
})

listenClick('.patient-panel-apptment-delete-btn', function (event) {
    let userRole = $('#userRole').val();
    let patientPanelApptmentRecordId = $(event.currentTarget).data('id')
    let patientPanelApptmentRecordUrl = !isEmpty(userRole) ? route(
        'patients.appointments.destroy',
        patientPanelApptmentRecordId) : route('appointments.destroy',
        patientPanelApptmentRecordId)
    deleteItem(patientPanelApptmentRecordUrl, 'Appointment')
})

listenClick('.patient-cancel-appointment', function (event) {
    let appointmentId = $(event.currentTarget).data('id')
    cancelAppointment(route('patients.cancel-status'), Lang.get('messages.web.appointment'),
        appointmentId)
})

window.cancelAppointment = function (url, header, appointmentId) {
    swal({
        title: Lang.get('messages.common.cancelled_appointment'),
        text: Lang.get('messages.common.are_you_sure_cancel') + header + ' ?',
        type: 'warning',
        icon: 'warning',
        showCancelButton: true,
        closeOnConfirm: false,
        confirmButtonColor: '#266CB0',
        showLoaderOnConfirm: true,
        buttons: {
            confirm:Lang.get('messages.common.yes'),
            cancel: Lang.get('messages.common.no'),
        },
    }).then(function (result) {
        if (result) {
            deleteItemAjax(url, header, appointmentId)
        }
    });
};

function deleteItemAjax (url, header, appointmentId) {

    $.ajax({
        url: route('patients.cancel-status'),
        type: 'POST',
        data: { appointmentId: appointmentId },
        success: function (obj) {
            if (obj.success) {
                livewire.emit('refresh')
            }
            swal({
                title: Lang.get('messages.common.cancelled_appointment'),
                text: header + Lang.get('messages.common.has_cancel'),
                icon: 'success',
                confirmButtonColor: '#266CB0',
                timer: 2000,
            });
        },
        error: function (data) {
            swal({
                title: 'Error',
                icon: 'error',
                text: data.responseJSON.message,
                type: 'error',
                confirmButtonColor: '#266CB0',
                timer: 5000,
            });
        },
    });
}

listenClick('#submitBtn', function (event) {
    event.preventDefault();
    let paymentGatewayType = $('#paymentGatewayType').val()
    if(isEmpty(paymentGatewayType)){
        displayErrorMessage(Lang.get('messages.flash.select_payment'));
        return false;
    }
    let stripeMethod = 2;
    let paystackMethod = 3;
    let paypalMethod = 4;
    let razorpayMethod = 5;
    let authorizeMethod = 6;
    let paytmMethod = 7;
    
    let appointmentId = $('#patientAppointmentId').val()
    let btnSubmitEle = $("#patientPaymentForm").find('#submitBtn')
    setAdminBtnLoader(btnSubmitEle)

    if (paymentGatewayType == stripeMethod) {
        $.ajax({
            url: route('patients.appointment-payment'),
            type: 'POST',
            data: { appointmentId: appointmentId },
            success: function (result) {
                let sessionId = result.data.sessionId;
                stripe.redirectToCheckout({
                    sessionId: sessionId,
                }).then(function (result) {
                    manageAjaxErrors(result);
                });
            },
        });
    }
   
    if (paymentGatewayType == paytmMethod) {
        window.location.replace(route('paytm.init', { 'appointmentId': appointmentId }));
    }

    if (paymentGatewayType == paystackMethod) {

        window.location.replace(route('paystack.init', { 'appointmentData': appointmentId }));
    }

    if (paymentGatewayType == authorizeMethod) {

        window.location.replace(route('authorize.init',{'appointmentId': appointmentId}));
    }

    if (paymentGatewayType == paypalMethod) {
        $.ajax({
            type: 'GET',
            url: route('paypal.init'),
            data: { 'appointmentId': appointmentId},
            success: function (result) {
                if (result.status == 200) {
                    
                    let redirectTo = '';
                    location.href = result.link
                    // $.each(result.result.links,
                    //     function (key, val) {
                    //         if (val.rel == 'approve') {
                    //             redirectTo = val.href;
                    //         }
                    //     });
                    // location.href = redirectTo;
                }
            },
            error: function (result) {
            },
            complete: function () {
            },
        });
    }

    if (paymentGatewayType == razorpayMethod) {
        $.ajax({
            type: 'POST',
            url: route('razorpay.init'),
            data: {'appointmentId': appointmentId },
            success: function (result) {
                if (result.success) {
                    let { id, amount, name, email, contact } = result.data

                    options.amount = amount
                    options.order_id = id
                    options.prefill.name = name
                    options.prefill.email = email
                    options.prefill.contact = contact
                    options.prefill.appointmentID = appointmentId

                    let razorPay = new Razorpay(options)
                    razorPay.open()
                    razorPay.on('payment.failed', storeFailedPayment)
                }
            },
            error: function (result) {
            },
            complete: function () {
            },
        })
    }

    return false;
});

function storeFailedPayment (response) {
    $.ajax({
        type: 'POST',
        url: route('razorpay.failed'),
        data: {
            data: response,
        },
        success: function (result) {
            if (result.success) {
                displaySuccessMessage(result.message);
            }
        },
        error: function () {
        },
    });
}   

listenClick('.payment-btn', function (event) {
    let appointmentId = $(this).data('id')
    $('#paymentGatewayModal').modal('show').appendTo('body')
    $('#patientAppointmentId').val(appointmentId)
})

listen('hidden.bs.modal', '#paymentGatewayModal', function (e) {
    $('#patientPaymentForm')[0].reset();
    $('#paymentGatewayType').val(null).trigger('change');
});
