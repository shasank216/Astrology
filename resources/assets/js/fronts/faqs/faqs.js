listenClick('.faq-delete-btn', function (event) {
    let faqRecordId = $(event.currentTarget).data('id')
    deleteItem(route('faqs.destroy', faqRecordId), Lang.get('messages.faqs'))
})
