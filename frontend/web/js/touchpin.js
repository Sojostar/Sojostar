$(document).ready(function() {
  $('#titulo').html("Bootstrap TouchSpin");

  $("input[name='touchspin']").TouchSpin({
    min: -1000,
    max: 1000,
    step: 50,
    maxboostedstep: 10000000,
    prefix: '$',
    buttondown_class: "btn btn-link",
    buttonup_class: "btn btn-link",
    initval: 200,
  });
});