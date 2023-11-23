listenClick('.doctor-visit-delete-btn', function (event) {
    let visitDoctorRecordId = $(event.currentTarget).data('id')
    deleteItem(route('doctors.visits.destroy', visitDoctorRecordId), Lang.get('messages.visits'))
})
