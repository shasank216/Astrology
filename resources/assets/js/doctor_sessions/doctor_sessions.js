listenClick('.doctor-session-delete-btn', function (event) {
    let doctorSessionRecordId = $(event.currentTarget).data('id')
    let doctorSessionUrl = $('#doctorSessionUrl').val();
    deleteItem((doctorSessionUrl + '/' + doctorSessionRecordId), Lang.get('messages.doctor_session.doctor_session'))
})
