$(document).ready(function () {
    // Initialize datepickers
    var displayDateFormat = "mm-dd-yy",
        apiDateFormat = "yy-mm-dd";

    // Initialize the "Check-out" date input as disabled
    $("#checkout").prop('disabled', true);

    // Function to update the position of the datepicker
    function updateDatepickerPosition(input) {
        // Get input position and height
        var inputOffset = $(input).offset();
        var inputHeight = $(input).outerHeight();

        // Set new position
        var newOffset = {
            left: inputOffset.left,
            top: inputOffset.top + inputHeight // Position below the input
        };

        return newOffset;
    }

    // Function to determine the number of months to display
    function getNumberOfMonths() {
        return $(window).width() < 768 ? 1 : 2; // 1 month for screens smaller than 768px, otherwise 2
    }

    // Function to show error message next to the dropdown
    function showErrorMessage(message) {
        var errorMessageSpan = $('.error-message');
        errorMessageSpan.text(message).show();
        formMessageSpan.hide();
    }

    // Function to hide error message
    function hideErrorMessage() {
        var errorMessageSpan = $('.error-message');
        errorMessageSpan.hide();
    }

    // Initialize datepickers with a variable number of months
    var displayDateFormat = "mm-dd-yy",
        apiDateFormat = "yy-mm-dd",
        numberOfMonths = getNumberOfMonths(), // Call the function here
        from = $("#checkin")
            .datepicker({
                defaultDate: "+2d",
                changeMonth: true,
                numberOfMonths: numberOfMonths, // Use the variable here
                minDate: "+2d",
                dateFormat: displayDateFormat,
                altField: "#api_checkin",
                altFormat: apiDateFormat,
                beforeShow: function (input, inst) {
                    if ($(window).width() < 768) {
                        setTimeout(function () {
                            inst.dpDiv.css(updateDatepickerPosition(input));
                        }, 0);
                    }
                },
                onSelect: function (dateText, inst) {
                    // When a date is selected, enable the "Check-out" date input
                    $("#checkout").prop('disabled', false);
                
                    // Calculate 7 days after the selected "Check-in" date
                    var minCheckoutDate = $(this).datepicker('getDate');
                    minCheckoutDate.setDate(minCheckoutDate.getDate() + 1);
                
                    // Set the "Check-out" datepicker's minDate to 7 days after the "Check-in" date
                    $("#checkout").datepicker("option", "minDate", minCheckoutDate);
                }
                
            })
            .on("change", function () {
                to.datepicker("option", "minDate", getDate(this));
            }),
        to = $("#checkout").datepicker({
            defaultDate: "+7d", // Set default date to 7 days from today
            changeMonth: true,
            numberOfMonths: numberOfMonths,
            minDate: "+7d", // Set minimum date to 7 days from today
            dateFormat: displayDateFormat,
            altField: "#api_checkout",
            altFormat: apiDateFormat,
            beforeShow: function (input, inst) {
                if ($(window).width() < 768) {
                    setTimeout(function () {
                        inst.dpDiv.css(updateDatepickerPosition(input));
                    }, 0);
                }
            }
        })
            .on("change", function () {
                from.datepicker("option", "maxDate", getDate(this));
            });

    // Function to parse the date format from the datepicker
    function getDate(element) {
        var date;
        try {
            date = $.datepicker.parseDate(displayDateFormat, element.value);
        } catch (error) {
            date = null;
        }
        return date;
    }

    // Reinitialize the datepickers on window resize
    $(window).resize(function () {
        var numberOfMonths = getNumberOfMonths();
        $("#checkin, #checkout").datepicker("option", "numberOfMonths", numberOfMonths);
    });


    // Event delegation to handle click event on dynamically created dropdown items
    $('.dropdown-content a').on('click', function (e) {
        e.preventDefault();
        var apartmentId = $(this).data('value');
        var apartmentText = $(this).text();

        // Set the value and update the button text
        $('#selected-apartment-id').val(apartmentId); // Assuming you have this hidden field
        $('.dropbtn span').text(apartmentText).addClass('selected-text'); // Add class when text is selected

        // Hide the dropdown
        $("#myDropdown").removeClass('show');
    });

    // Handle form submission
    $('#checkavailibilityBTN').on('click', function (e) {
        e.preventDefault();

        // Assume you have a hidden field to store the selected apartment ID
        var apartmentId = $('#selected-apartment-id').val(),
            checkin = $('#api_checkin').val(),
            checkout = $('#api_checkout').val(),
            adults = parseInt($('#adults').val(), 10),
            children = parseInt($('#children').val(), 10) || 0; // Default to 0 if not provided

        // Hide any previous error messages
        hideErrorMessage();

        // Validate the fields
        if (!apartmentId) {
            showErrorMessage('Please select an apartment category.');
            return;
        }

        if (!checkin) {
            showErrorMessage('Please fill in Check-in Date.');
            return;
        }

        if (!checkout) {
            showErrorMessage('Please fill in Check-out Date.');
            return;
        }

        if (adults <= 0) {
            showErrorMessage('The number of adults must be at least 1.');
            return;
        }

        // Construct the redirect URL
        var redirectUrl = "https://app.mews.com/distributor/63c1028b-e611-405d-bc62-af3500786b74" +
            "?mewsStart=" + encodeURIComponent(checkin) +
            "&mewsEnd=" + encodeURIComponent(checkout) +
            "&mewsAdultCount=" + encodeURIComponent(adults) +
            "&mewsChildCount=" + encodeURIComponent(children) +
            "&mewsRoute=rates" +
            "&mewsRoom=" + encodeURIComponent(apartmentId);

        // Redirect the user
        window.location.href = redirectUrl;
    });

    // Increment and decrement adults
    $('#increase-adults').on('click', function () {
        var adults = parseInt($('#adults').val(), 10);
        $('#adults').val(adults + 1);
    });

    $('#decrease-adults').click(function () {
        var value = parseInt($('#adults').val());
        if (value > 1) { // Prevent going below 1
            $('#adults').val(value - 1);
        }
    });

    // Increment and decrement children
    $('#increase-children').on('click', function () {
        var children = parseInt($('#children').val(), 10);
        $('#children').val(children + 1);
    });

    $('#decrease-children').click(function () {
        var value = parseInt($('#children').val());
        if (value > 0) { // Prevent going below 0
            $('#children').val(value - 1);
        }
    });

    // Toggle dropdown
    $('.dropbtn').on('click', function () {
        $("#myDropdown").toggleClass("show");
        $(this).toggleClass("active"); // Toggle the active class on the button
    });

    // Close dropdown when clicking outside
    $(document).on('click', function (event) {
        // Check if the clicked area is not the dropdown or the button
        if (!$(event.target).closest('.custom-dropdown').length) {
            // If it is outside, close the dropdown
            $('.dropdown-content').removeClass('show');
            $('.dropbtn').removeClass('active');
        }
    });

    document.addEventListener('DOMContentLoaded', function () {
        var form = document.getElementById('myForm');
        form.noValidate = true; // Disable HTML5 default validation

        form.addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the default form submit

            var isValid = form.checkValidity();
            var errorMessageSpan = document.querySelector('.error-message');
            var selectField = document.getElementById('apartment-category');

            // Clear any existing messages
            errorMessageSpan.textContent = '';

            if (!isValid) {
                if (!selectField.value) {
                    errorMessageSpan.textContent = 'Please select an apartment category.';
                    selectField.focus(); // Focus on the field with the error
                }
                // You can add more conditions for other fields here
            } else {
                form.submit(); // Submit the form if valid
            }
        });
    });

});


