listenClick('#addState', function () {
    $('#addStateModal').modal('show').appendTo('body')
})

listenSubmit('#addStateForm', function (e) {
    e.preventDefault()
    $.ajax({
        url: route('states.store'),
        type: 'POST',
        data: $(this).serialize(),
        success: function (result) {
            if (result.success) {
                displaySuccessMessage(result.message)
                $('#addStateModal').modal('hide')
                livewire.emit('refresh')
            }
        },
        error: function (result) {
            displayErrorMessage(result.responseJSON.message)
        },
    })
})

listenClick('.state-edit-btn', function (event) {
    $('#editStateModal').modal('show').appendTo('body')
    let editStateId = $(event.currentTarget).data('id')
    $('#editStateId').val(editStateId)

    $.ajax({
        url: route('states.edit', editStateId),
        type: 'GET',
        success: function (result) {
            if (result.success) {
                $('#editStateName').val(result.data.name)
                $('#selectCountry').
                    val(result.data.country_id).
                    trigger('change')
            }
        },
        error: function (result) {
            displayErrorMessage(result.responseJSON.message)
        },
    })
})

listenSubmit('#editStateForm', function (event) {
    event.preventDefault()
    let updateStateId = $('#editStateId').val()

    $.ajax({
        url: route('states.update', updateStateId),
        type: 'PUT',
        data: $(this).serialize(),
        success: function (result) {
            if (result.success) {
                displaySuccessMessage(result.message)
                $('#editStateModal').modal('hide')
                livewire.emit('refresh')
            }
        },
        error: function (result) {
            displayErrorMessage(result.responseJSON.message)
        },
    })
})

listen('hidden.bs.modal', '#addStateModal', function (e) {
    $('#addStateForm')[0].reset()
    $('#countryState').val(null).trigger('change')
})

listenClick('.state-delete-btn', function (event) {
    let stateRecordId = $(event.currentTarget).data('id')
    deleteItem(route('states.destroy', stateRecordId), Lang.get('messages.common.state'))
})
