//hamburger script

jQuery(document).ready(function ($) {
  /*when click on veggoburger, or..add or remove class */
  $(".toggle_btn").click(function () {
    $(".nav_mobile").toggleClass("open");
    $(".toggle_btn").toggleClass("clicked");
    $("body").toggleClass("no_scroll");
  });

  /*Desktop sub menu*/
  $(".nav_desktop ul li.menu-item-has-children").click(function (event) {
    event.stopPropagation(); /* to stop the 'document handler' from activating at the same time as the click event on class */
    $(this).children("ul").toggleClass("sub_menu_open");
  });
  /*remove class clicking anywhere on page*/
  $(document).click(function (event) {
    if (
      !$(event.target).closest(".nav_desktop ul li.menu-item-has-children ul")
        .length
    ) {
      $(".nav_desktop ul li.menu-item-has-children ul").removeClass(
        "sub_menu_open"
      );
    }
  });

  /*Mobile sub menu*/
  $(".nav_mobile ul li.menu-item-has-children").click(function (event) {
    event.stopPropagation(); /* to stop the 'document handler' from activating at the same time as the click event on class */
    $(this).children("ul").toggleClass("sub_menu_open");
  });
  $(document).click(function (event) {
    if (
      !$(event.target).closest(".nav_mobile ul li.menu-item-has-children ul")
        .length
    ) {
      $(".nav_mobile ul li.menu-item-has-children ul").removeClass(
        "sub_menu_open"
      );
    }
  });
}); //document.ready
