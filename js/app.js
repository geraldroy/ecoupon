$(document).ready(function(){
  $("#submit-code").click(function(){
    var base_url = window.location.origin;
    window.location.replace(base_url + "/choose");
  });
});


