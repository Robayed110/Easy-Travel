$(document).ready(function() {
    $('.seat').click(function() {
        var seatNumber = $(this).data('seat');

        // Send an AJAX request to the server to select the seat
        $.ajax({
            url: '/seats/select',
            type: 'POST',
            data: {
                seat_number: seatNumber,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                // Redirect to the updated seats page
                window.location.href = '{{ route("seats.index") }}';
            }
        });
    });
});
