$(".1").click(function() {
    $('html,body').animate( {
        scrollTop: $(".info__main").offset().top},
        'slow');
});

$(".2").click(function() {
    $('html,body').animate( {
        scrollTop: $(".price").offset().top},
        'slow');
});

$(".3").click(function() {
    $('html,body').animate( {
        scrollTop: $(".contact__wrapper").offset().top},
        'slow');
});

var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
  });