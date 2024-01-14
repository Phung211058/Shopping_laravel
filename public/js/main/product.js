$(document).ready(function() {
    var minusButton = $('.minus');
            var plusButton = $('.plus');
            var quantityInput = $('.qty');

            // Add click event for the plus button
            plusButton.on('click', function() {
                // Increase the value of the quantity field
                quantityInput.val(parseInt(quantityInput.val()) + 1);
            });

            minusButton.on('click', function() {
                // Get the current value of the quantity field
                var currentValue = parseInt(quantityInput.val());

                // Ensure the value does not go below 1
                if (currentValue > 1) {
                    quantityInput.val(currentValue - 1);
                }
            });
});