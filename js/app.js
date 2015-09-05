$(document).ready(function(){
  $("#submit-code").click(function(){
    var base_url = window.location.origin;
    window.location.replace(base_url + "/choose");
  });

  $(".plant").click(function(){
    $('.ui.modal').modal('show');
  });
});


