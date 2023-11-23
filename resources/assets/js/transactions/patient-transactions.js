document.addEventListener('turbo:load', loadPatientTransactionTable)

let patientTransactionTableName = '#patientTransactionsTable'

function loadPatientTransactionTable () {

    if (!$(patientTransactionTableName).length) {
        return
    }
    let patientTransactionTbl = $(patientTransactionTableName).DataTable({
        processing: true,
        serverSide: true,
        searchDelay: 500,
        'language': {
            'lengthMenu': 'Show _MENU_',
        },
        'order': [[0, 'desc']],
        ajax: {
            url: route('patients.transactions'),
        },
        columnDefs: [
            {
                'targets': [0],
                'width': '50%',
            },
            {
                'targets': [1],
                'width': '18%',
            },
            {
                'targets': [3],
                'orderable': false,
                'searchable': false,
                'className': 'text-center',
                'width': '8%',
            },
        ],
        columns: [
            {
                data: function (row) {
                    return `<span class="badge badge-light-info">${moment.parseZone(
                        row.created_at).format('Do MMM, Y h:mm A')}</span>`;
                },
                name: 'created_at',
            },
            {
                data: function (row) {
                    if (row.type == manuallyMethod){
                        return manually;
                    }
                    if (row.type == stripeMethod){
                        return stripe;
                    }
                    if (row.type == paystckMethod){
                        return paystck;
                    }
                    if (row.type == paypalMethod){
                        return paypal;
                    }
                    if (row.type == razorpayMethod){
                        return razorpay;
                    }
                    if (row.type == authorizeMethod){
                        return authorize;
                    }
                    if (row.type == paytmMethod){
                        return paytm;
                    }
                    return '';
                },
                name: 'type',
            },
            {
                data: function (row) {
                    return currencyIcon + ' ' + getFormattedPrice(row.amount);
                },
                name: 'amount',
            },
            {
                data: function (row) {
                    let patientTransactionData = [
                        {
                            'id': row.id,
                            'showUrl': route('patients.transactions.show',
                                row.id),
                        },
                    ]

                    return prepareTemplateRender('#transactionsTemplate',
                        patientTransactionData)
                },
                name: 'id',
            },
        ],
    });
    handleSearchDatatable(patientTransactionTbl)


}
listenClick('.transaction-statusbar', function (event) {
    let recordId = $(event.currentTarget).data('id')
    let acceptPaymentUserId = currentLoginUserId;

    $.ajax({
        type: 'PUT',
        url: route('transaction.status'),
        data: {id: recordId, acceptPaymentUserId: acceptPaymentUserId},
        success: function (result) {

            if (result.success) {
                livewire.emit('refresh')
                displaySuccessMessage(result.message)
            }
        },
        error: function error(result) {
            livewire.emit('refresh')
            displayErrorMessage(result.responseJSON.message);
        },
    })
})

