$("#add_reg_in_btn").click(function () {
  var formData = {
    send_to_by: $("#send_to_by").val(),
    czc: $("#czc").val(),
    hand: $("#hand").val(),
    date_reg_in: $("#date_reg_in").val(),
    name_reg_in: $("#name_reg_in").val(),
    sub_reg_in: $("#sub_reg_in").val(),
  };
  console.log(formData);
  $.ajax({
    type: "POST",
    url: "../api/reg_in/reg_in_add.php",
    data: formData,
    success: function (result) {
      result = result.replace(/^\s+|\s+$/gm, "");
      if (result == "done") {
        $("#czc").val("");
        $("#hand").val("");
        $("#name_reg_in").val("");
        $("#sub_reg_in").val("");
        $("#czc").focus();
        table.ajax.reload();
      } else {
        alert("لم يتم ادخال المسجل . وجود خانه / خانات فارغه");
      }
    },
  });
});
