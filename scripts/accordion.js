$(document).ready(function () {
  $('#header1').on('click', function() {
    if ($('#content1').hasClass('accessible-hidden')) {
      $('#content1').removeClass('accessible-hidden');
      $('#icon1').text('−');
    } else {
      $('#content1').addClass('accessible-hidden');
      $('#icon1').text('+');
    }
  });
});

$(document).ready(function () {
  $('#header2').on('click', function() {
    if ($('#content2').hasClass('accessible-hidden')) {
      $('#content2').removeClass('accessible-hidden');
      $('#icon2').text('−');
    } else {
      $('#content2').addClass('accessible-hidden');
      $('#icon2').text('+');
    }
  });
});


$(document).ready(function () {
  $('#header3').on('click', function() {
    if ($('#content3').hasClass('accessible-hidden')) {
      $('#content3').removeClass('accessible-hidden');
      $('#icon3').text('−');
    } else {
      $('#content3').addClass('accessible-hidden');
      $('#icon3').text('+');
    }
  });
});

$(document).ready(function () {
  $('#header4').on('click', function() {
    if ($('#content4').hasClass('accessible-hidden')) {
      $('#content4').removeClass('accessible-hidden');
      $('#icon4').text('−');
    } else {
      $('#content4').addClass('accessible-hidden');
      $('#icon4').text('+');
    }
  });
});

$(document).ready(function () {
  $('#header5').on('click', function() {
    if ($('#content5').hasClass('accessible-hidden')) {
      $('#content5').removeClass('accessible-hidden');
      $('#icon5').text('−');
    } else {
      $('#content5').addClass('accessible-hidden');
      $('#icon5').text('+');
    }
  });
});
