// Menu Toggle
$('#menu-toggle').click(function() {
  $('nav ul').slideToggle();
});

// Contact Form Submitted Confirmation
if (window.location.href.indexOf("#submitted") > -1) {
  $(".confirmation").fadeIn(1000).delay(4000).fadeOut(1000);
}

$("#dismiss-notification").click(function() {
  $('.confirmation').stop().fadeOut(500);
});

// FAQ tabs
$("ul#tabs li").click(function(e){
  if (!$(this).hasClass("active")) {
    var tabNum = $(this).index();
    var nthChild = tabNum+1;
    $("ul#tabs li.active").removeClass("active");
    $(this).addClass("active");
    $("ul#tab li.active").removeClass("active");
    $("ul#tab li:nth-child("+nthChild+")").addClass("active");
  }
});

// Blog Listing Categories
$("#tags").click(function() {
  $('.tag-list').slideToggle();
  $('.tag-dd-btn img').toggleClass('turn-around');
});

// Add .repeatable to .content-block(s) in Surreal
if (document.getElementsByClassName('is-cms').length) {
  $('.content-block').addClass('repeatable');
};
