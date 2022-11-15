document.addEventListener('DOMContentLoaded', loadFrontSettingContactData)

function loadFrontSettingContactData() {
    if (!$('#general').length) {
        return
    }

    $('#general').selectize();

}

listenSubmit('#enquiryCreateForm', function (e) {
    e.preventDefault();
    let response = '';
    if ($('#error-msg').text() !== '') {
        $('.phoneNumber').focus();
        return false;
    }
    $.ajax({
        url: $('#frontInquiryUrl').val(),
        type: 'POST',
        data: $(this).serialize(),
        success: function (result) {

            if (result.success) {
                displaySuccessMessage(result.message)
                setTimeout(function () {
                    location.reload()
                    $('#enquiryCreateForm')[0].reset()
                    grecaptcha.reset()
                }, 5000);

            } else {
                displayErrorMessage(result.message);
                setTimeout(function () {
                    $('#enquiryCreateForm')[0].reset();
                    grecaptcha.reset();
                }, 5000);
            }
        },
        error: function (result) {
            displayErrorMessage(result.responseJSON.message);
            grecaptcha.reset();
        },
        complete: function () {
        },
    });
});
