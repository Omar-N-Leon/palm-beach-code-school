function my_fx_to_get_inventory(sku){
    $.ajax({
      method: "GET",
      url: "get_inventory_by_id.php",
      cache: false,
      data: { id: sku },
      dataType: "json"
    })
      .done(function( data ) {
       console.log(data);
       $( "#inventoryTitle" ).html( data.title );
       $("#unit_price").html( '$' + data.unit_price );
       $("#description").html(data.description)
       $("#sku").val(sku);
       $("#quantity").val(1)
        // whatever other values u want to rest
      });

    }
