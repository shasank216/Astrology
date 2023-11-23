listenClick('.visit-delete-btn', function (event) {
    let visitRecordId = $(event.currentTarget).data('id')
    deleteItem(route('visits.destroy', visitRecordId), Lang.get('messages.visits'))
})
