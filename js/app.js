$(document).ready(function(){
  $("#submit-code").click(function(){
    var base_url = window.location.origin;
	var base_url = "localhost/ecoupon/index.php"
    window.location.replace("index.php/choose");
  });

  $(".plant").click(function(){
    $('.ui.modal').modal('show');
  });
});


