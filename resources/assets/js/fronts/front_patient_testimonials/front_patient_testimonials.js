listenClick('.front-testimonial-delete-btn', function (event) {
    let testimonialRecordId = $(event.currentTarget).data('id')
    deleteItem(route('front-patient-testimonials.destroy', testimonialRecordId),
        Lang.get('messages.front_patient_testimonials'))
})
