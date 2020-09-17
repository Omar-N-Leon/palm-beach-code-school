$("#cart_form").submit(function(e) {

  e.preventDefault(); // avoid to execute the actual submit of the form.

  var form = $(this);
  var url = form.attr('action');

  $.ajax({
    type: "POST",
    url: url,
    dataType: "json",
    data: form.serialize(), // serializes the form's elements.
    success: function(data) {
      $('#item_modal').modal('hide');
      $('#success_modal').modal('show');
      $('#cart').html(data.count);
    }
  });


});