$(document).ready(function() {
  $('.tour').on('click', 'button', function() {
    var tour = $(this).closest('.tour');
    var discount = tour.data('discount');
    var message = $('<span>Call 1-555-jquery-air for a $'+discount+' discount.</span>');
    tour.append(message);
    $(this).remove();
  });
});
