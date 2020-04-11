$(window).scroll(function (e) {
  parallax();
  navbarSticky();
});

function navbarSticky() {
  let element = document.getElementsByTagName("nav")[0];
  console.log(document.getElementsByTagName("nav")[0]);
  let smallClass = "small";
  console.log(this.scrollY);
  let threshold = 7;
  if (document.body.clientWidth <= 600) {
    threshold = 146;
  }
  // check if classList already contains the small class
  if (element.classList) {
    if (window.scrollY > threshold) {
      element.classList.add(smallClass);
    }
    else {
      element.classList.remove(smallClass);
    }
  }
}

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
