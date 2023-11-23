listenClick('#enquiryResetFilter', function () {
    let allEnquiry = $('#allEnquiry').val();
    $('#enquiriesStatus').val(allEnquiry).trigger('change')
    hideDropdownManually($('#enquiryFilterBtn'), $('.dropdown-menu'));
})

listenChange('#enquiriesStatus', function () {
    window.livewire.emit('changeStatusFilter', $(this).val())
})

listenClick('.enquiry-delete-btn', function () {
    let enquiryRecordId = $(this).attr('data-id')
    deleteItem(route('enquiries.destroy', enquiryRecordId), Lang.get('messages.web.enquiry'))
})
