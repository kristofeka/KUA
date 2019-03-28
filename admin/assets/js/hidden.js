$(function() {
  var checkbox = $("#trigger");
  var cari  =  $("#hidden_fields");
  var cari2  =  $("#hidden_fields2");
  var cari3 = $("#hidden_fields3");
  var cari4 = $("#hidden_fields1");

  cari.show();
  cari2.show();
  cari3.show();
  cari4.show();
  checkbox.change(function() {
    if (checkbox.is(':checked')) {
      cari.hide();
      cari2.hide();
      cari3.hide();
      cari4.hide();

    } else { 
      cari.show();
      cari2.show();
      cari3.show();
      cari4.show();


    }
  });
});