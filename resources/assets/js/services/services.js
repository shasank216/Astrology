
listenClick('#serviceResetFilter', function () {
    $('#servicesStatus').val($('#allServices').val()).trigger('change')
})

listenChange('#servicesStatus', function () {
    window.livewire.emit('changeStatusFilter', $(this).val())
})

listenClick('.service-delete-btn', function (event) {
    let serviceRecordId = $(event.currentTarget).data('id')
    deleteItem(route('services.destroy', serviceRecordId), Lang.get('messages.common.service'))
})

listenClick('.service-statusbar', function (event) {
    let recordId = $(event.currentTarget).data('id')

    $.ajax({
        type: 'PUT',
        url: route('service.status'),
        data: { id: recordId },
        success: function (result) {
            displaySuccessMessage(result.message)
        },
    })
})

