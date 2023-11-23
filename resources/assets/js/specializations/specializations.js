
listenClick('#createSpecialization', function () {
    $('#createSpecializationModal').modal('show').appendTo('body')
})

listen('hidden.bs.modal', '#createSpecializationModal', function () {
    resetModalForm('#createSpecializationForm',
        '#createSpecializationValidationErrorsBox')
})

listen('hidden.bs.modal', '#editSpecializationModal', function () {
    resetModalForm('#editSpecializationForm',
        '#editSpecializationValidationErrorsBox')
})

listenClick('.specialization-edit-btn', function (event) {
    let editSpecializationId = $(event.currentTarget).data('id')
    renderData(editSpecializationId)
})

function renderData (id) {
    $.ajax({
        url: route('specializations.edit', id),
        type: 'GET',
        success: function (result) {
            $('#specializationID').val(result.data.id)
            $('#editName').val(result.data.name)
            $('#editSpecializationModal').modal('show')
        },
    })
}

listenSubmit('#createSpecializationForm', function (e) {
    e.preventDefault()
    $.ajax({
        url: route('specializations.store'),
        type: 'POST',
        data: $(this).serialize(),
        success: function (result) {
            if (result.success) {
                displaySuccessMessage(result.message)
                $('#createSpecializationModal').modal('hide')
                livewire.emit('refresh')
            }
        },
        error: function (result) {
            displayErrorMessage(result.responseJSON.message)
        },
    })
})

listenSubmit('#editSpecializationForm', function (e) {
    e.preventDefault()
    let updateSpecializationId = $('#specializationID').val()
    $.ajax({
        url: route('specializations.update', updateSpecializationId),
        type: 'PUT',
        data: $(this).serialize(),
        success: function (result) {
            $('#editSpecializationModal').modal('hide')
            displaySuccessMessage(result.message)
            livewire.emit('refresh')
        },
        error: function (result) {
            displayErrorMessage(result.responseJSON.message)
        },
    })
})

listenClick('.specialization-delete-btn', function (event) {
    let specializationRecordId = $(event.currentTarget).data('id')
    deleteItem(route('specializations.destroy', specializationRecordId), Lang.get('messages.specializations'))
})
