function showDropDownMenu(o) {
  $(o).children(0).slideDown();
  hideDropDownMenu();
}
function hideDropDownMenu() {
  var t;
  clearTimeout();
  t = setTimeout("$('.menu_drop').slideUp()",3000);
}