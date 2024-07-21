require(['jquery', 'mage/url'], function ($, urlBuilder) {
    $(document).ready(function () {
        $('#quick-buy-button').on('click', function () {
            $('#quick-buy-form').toggle();
        });

        $('#submit-phone-number').on('click', function () {
            var phoneNumber = $('#phone-number').val();
            var sku = $('#quick-buy-button').data('sku');
            if (phoneNumber && sku) {
                $.ajax({
                    url: urlBuilder.build('quickbuy/index/save'),
                    type: 'POST',
                    data: {
                        phone_number: phoneNumber,
                        sku: sku
                    },
                    success: function (response) {
                        if (response.success) {
                            alert('Data saved successfully');
                            $('#quick-buy-form').hide();
                        } else {
                            alert('Error: ' + response.message);
                        }
                    },
                    error: function (e) {
                        alert('An error occurred while sending data');
                    }
                });
            } else {
                alert('Please enter a phone number');
            }
        });
    });
});
