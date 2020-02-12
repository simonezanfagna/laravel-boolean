require('./bootstrap');

var $ = require('jquery');

$(document).ready(function () {
  $('.header-right button').click(function() {
    $('.mobile').show();
  });

  $('i.fa-times').click(function () {
    $('.mobile').hide();
  });

  $('i.fa-plus').click(function () {
    $('i.fa-plus').show();
    $('i.fa-minus').hide();
    $('i.fa-plus').parent('h3').siblings('p').hide();
    $(this).hide();
    $(this).siblings('i.fa-minus').show();
    $(this).parent('h3').siblings('p').show();
  })

  $('i.fa-minus').click(function () {
    $(this).parent('h3').siblings('p').hide();
    $(this).hide();
    $(this).siblings('i.fa-plus').show();
  })

})
