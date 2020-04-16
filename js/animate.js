$(window).scroll(function (e) {
  parallax();
  navbarSticky();
});

function navbarSticky() {
  // get nav element
  let element = document.getElementsByTagName("nav")[0];
  let smallClass = "small";
  // threshold for normal layout
  let threshold = 10;
  if (document.body.clientWidth <= 600) {
    // threshold for small devices
    threshold = 146;
  }
  if (element.classList) {
    if (window.scrollY > threshold) {
      element.classList.add(smallClass);
    }
    else {
      element.classList.remove(smallClass);
    }
  }
}

// jquery function for parallax effect
function parallax() {
  var scroll = $(window).scrollTop();
  var screenHeight = $(window).height();

  $(".parallax").each(function () {
    var offset = $(this).offset().top;
    var distanceFromBottom = offset - scroll - screenHeight;

    if (offset > screenHeight && offset) {
      $(this).css(
        "background-position",
        "center " + distanceFromBottom * 0.2 + "px"
      );
    } else {
      $(this).css("background-position", "center " + -scroll * 0.2 + "px");
    }
  });
}
