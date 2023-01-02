function reg_sub_del(el) {
  $(el).parent().remove();
  var reg_to_sub = [];
  $(".reg_to_sub").each(function (i, elem) {
    reg_to_sub.push($(elem).text());
  });
  $.ajax({
    type: "POST",
    url: "../api/json/reg_to_sub.php",
    data: { reg_to_sub: reg_to_sub },
  });
}
