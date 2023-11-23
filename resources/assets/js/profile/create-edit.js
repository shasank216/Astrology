listenSubmit('#profileForm', function () {
    if ($('#error-msg').text() !== '') {
        $('#phoneNumber').focus()
        displayErrorMessage(`Contact number is ` + $('#error-msg').text())
        return false
    }
})

listenClick('.removeAvatarIcon', function () {
    $('#bgImage').css('background-image', '')
    $('#bgImage').css('background-image', 'url(' + backgroundImg + ')')
    $('#removeAvatar').addClass('hide')
    $('#tooltip287851').addClass('hide')
})
