document.addEventListener('turbo:load', loadLiveConsultationDate)

function loadLiveConsultationDate () {
    if (!$('#consultationDate').length) {
        return
    }
    let lang = $('.currentLanguage').val()
    $('#consultationDate').flatpickr({
        "locale": lang,
        enableTime: true,
        minDate: new Date(),
        dateFormat: 'Y-m-d H:i',
    })

    if (!$('.edit-consultation-date').length) {
        return
    }

    $('.edit-consultation-date').flatpickr({
        "locale": lang,
        enableTime: true,
        minDate: new Date(),
        dateFormat: 'Y-m-d H:i',
    })
}

let liveConsultationTableName = '#liveConsultationTable'


listenClick('#addLiveConsultationBtn', function () {
    resetModalForm('#addNewForm')
    $('#addDoctorID').trigger('change')

    let lang = $('.currentLanguage').val();
    $('#patientName').trigger('change')
    $('#consultationDate').flatpickr({
        "locale": lang,
        enableTime: true,
        minDate: new Date(),
        dateFormat: 'Y-m-d H:i',
        disableMobile: 'true',
    })
    $('#addModal').modal('show').appendTo('body')
})

listenSubmit('#addNewForm', function (event) {
    event.preventDefault()
    let loadingButton = jQuery(this).find('#btnSave')
    loadingButton.button('loading')
    setAdminBtnLoader(loadingButton)
    $.ajax({
        url: route('doctors.live-consultations.store'),
        type: 'POST',
        data: $(this).serialize(),
        success: function (result) {
            if (result.success) {
                displaySuccessMessage(result.message)
                $('#addModal').modal('hide')
                livewire.emit('refresh')
                setTimeout(function () {
                    loadingButton.button('reset')
                }, 2500)
            }
        },
        error: function (result) {
            displayErrorMessage(result.responseJSON.message)
            setTimeout(function () {
                loadingButton.button('reset')
            }, 2000)
        },
        complete: function () {
            setAdminBtnLoader(loadingButton)
        },
    })
})

listenClick('#liveConsultationResetFilter', function () {
    $('#statusArr').val(3).trigger('change')
})

listenChange('#statusArr', function () {
    window.livewire.emit('changeStatusFilter', $(this).val())
})

listenSubmit('#editForm', function (event) {
    event.preventDefault()
    let loadingButton = jQuery(this).find('#btnEditSave')
    loadingButton.button('loading')
    setAdminBtnLoader(loadingButton)
    let id = $('#liveConsultationId').val()
    $.ajax({
        url: route('doctors.live-consultations.destroy', id),
        type: 'PUT',
        data: $(this).serialize(),
        success: function (result) {
            if (result.success) {
                displaySuccessMessage(result.message)
                $('#editModal').modal('hide')
                livewire.emit('refresh')
            }
        },
        error: function (result) {
            displayErrorMessage(result.responseJSON.message)
        },
        complete: function () {
            setAdminBtnLoader(loadingButton)
            loadingButton.button('reset')
        },
    })
})

listenChange('.consultation-change-status', function (e) {
    e.preventDefault()
    let statusId = $(this).val()
    $.ajax({
        url: route('doctors.live.consultation.change.status'),
        type: 'POST',
        data: { statusId: statusId, id: $(this).data('id') },
        success: function (result) {
            if (result.success) {
                displaySuccessMessage(result.message)
                livewire.emit('refresh')
            }
        },
        error: function (result) {
            displayErrorMessage(result.responseJSON.message)
        },
    })
})

listenClick('.start-btn', function (event) {
    let StartLiveConsultationId = $(event.currentTarget).data('id')
    startRenderData(StartLiveConsultationId)
})

listenClick('.live-consultation-edit-btn', function (event) {
    let editLiveConsultationId = $(event.currentTarget).data('id')
    editRenderData(editLiveConsultationId)
})

window.editRenderData = function (id) {
    $.ajax({
        url: route('doctors.live-consultations.edit',id),
        type: 'GET',
        success: function (result) {
            if (result.success) {
                let liveConsultation = result.data
                $('#liveConsultationId').val(liveConsultation.id)
                $('.edit-consultation-title').val(liveConsultation.consultation_title)
                $('.edit-consultation-date').val(moment(liveConsultation.consultation_date).format('YYYY-MM-DD H:mm'))
                $('.edit-consultation-duration-minutes').val(liveConsultation.consultation_duration_minutes)
                $('.edit-patient-name').
                    val(liveConsultation.patient_id).
                    trigger('change')
                $('.edit-doctor-name').
                    val(liveConsultation.doctor_id).
                    trigger('change')
                $('.host-enable,.host-disabled').prop('checked', false)
                if (liveConsultation.host_video == 1) {
                    $(`input[name="host_video"][value=${liveConsultation.host_video}]`).
                        prop('checked', true)
                } else {
                    $(`input[name="host_video"][value=${liveConsultation.host_video}]`).
                        prop('checked', true)
                }
                $('.client-enable,.client-disabled').prop('checked', false)
                if (liveConsultation.participant_video == 1) {
                    $(`input[name="participant_video"][value=${liveConsultation.participant_video}]`).
                        prop('checked', true)
                } else {
                    $(`input[name="participant_video"][value=${liveConsultation.participant_video}]`).
                        prop('checked', true)
                }
                $('.edit-consultation-type').
                    val(liveConsultation.type).
                    trigger('change')
                $('.edit-consultation-type-number').
                    val(liveConsultation.type_number).
                    trigger('change')
                $('.edit-description').val(liveConsultation.description)
                $('#editModal').appendTo('body').modal('show')
            }
        },
        error: function (result) {
            manageAjaxErrors(result)
        },
    })
}

window.startRenderData = function (id) {
    $.ajax({
        url: $('#doctorRole').val()
            ? route('doctors.live.consultation.get.live.status', id)
            : route('patients.live.consultation.get.live.status', id),
        type: 'GET',
        success: function (result) {
            if (result.success) {
                let liveConsultation = result.data
                $('#startLiveConsultationId').
                    val(liveConsultation.liveConsultation.id)
                $('.start-modal-title').text(
                    liveConsultation.liveConsultation.consultation_title)
                $('.host-name').
                    text(liveConsultation.liveConsultation.user.full_name)
                $('.date').
                    text(moment(
                        liveConsultation.liveConsultation.consultation_date).
                        format('LT') + ', ' + moment(
                        liveConsultation.liveConsultation.consultation_date).
                        format('Do MMM, Y'))
                $('.minutes').text(
                    liveConsultation.liveConsultation.consultation_duration_minutes)
                $('#startModal').find('.status').append((liveConsultation.zoomLiveData.data.status ===
                    'started') ? $('.status').text('Started') : $(
                    '.status').text('Awaited'))
                $('.start').attr('href', ($('#patientRole').val())
                    ? liveConsultation.liveConsultation.meta.join_url
                    : ((liveConsultation.zoomLiveData.data.status ===
                        'started')
                        ? $('.start').addClass('disabled')
                        : liveConsultation.liveConsultation.meta.start_url),
                )
                $('#startModal').appendTo('body').modal('show')
            }
        },
        error: function (result) {
            manageAjaxErrors(result)
        },
    })
}

listenClick('.live-consultation-delete-btn', function (event) {
    let liveConsultationId = $(event.currentTarget).data('id')
    deleteItem(route('doctors.live-consultations.destroy',liveConsultationId), Lang.get('messages.live_consultations'))
})

listenClick('.consultation-show-data', function (event) {
    let consultationId = $(event.currentTarget).data('id')
    $.ajax({
        url: $('#doctorRole').val() ? route('doctors.live-consultations.show',
            consultationId) : route('patients.live-consultations.show',
            consultationId),
        type: 'GET',
        success: function (result) {
            if (result.success) {
                let liveConsultation = result.data.liveConsultation
                let showModal = $('#showModal')
                $('#startLiveConsultationId').val(liveConsultation.id)
                $('#consultationTitle').
                    text(liveConsultation.consultation_title)
                $('#consultationDates').
                    text(moment(liveConsultation.consultation_date).
                            format('LT') + ', ' +
                        moment(liveConsultation.consultation_date).
                            format('Do MMM, Y'))
                $('#consultationDurationMinutes').
                    text(liveConsultation.consultation_duration_minutes)
                $('#consultationPatient').
                    text(liveConsultation.patient.user.full_name)
                $('#consultationDoctor').
                    text(liveConsultation.doctor.user.full_name);
                (liveConsultation.host_video === 0) ? $(
                    '#consultationHostVideo').text('Disable') : $(
                    '#consultationHostVideo').text('Enable');
                (liveConsultation.participant_video === 0) ? $(
                    '#consultationParticipantVideo').text('Disable') : $(
                    '#consultationParticipantVideo').text('Enable')
                isEmpty(liveConsultation.description) ? $(
                    '#consultationDescription').text('N/A') : $(
                    '#consultationDescription').
                    text(liveConsultation.description)
                showModal.modal('show').appendTo('body')
            }
        },
        error: function (result) {
            manageAjaxErrors(result)
        },
    })
})

listenClick('#doctorLiveConsultantResetFilter', function () {
    $('#doctorLiveConsultantStatus').val(3).trigger('change')
    hideDropdownManually($('#doctorLiveConsultantFilterBtn'), $('.dropdown-menu'));
})
