$("#To_It_Modal .btn-success").click(function () {
  var formData = {
    to_it_by: $("#to_it_by").val(),
    to_it_date: $("#to_it_date").val(),
    damage: $("#damage").val(),
    in_it_note: $("#in_it_note").val(),
    dvice_num: divce_num,
  };
  // console.log(formData);
  $.ajax({
    type: "POST",
    url: "../api/dvice/to_it.php",
    data: formData,
    success: function (result) {
      result = result.replace(/^\s+|\s+$/gm, "");
      if (result == "done") {
        datatable_ajax_reload();
        $("#To_It_Modal").modal("hide");
      } else {
        alert("تعذر استلام الجهاز للصيانه");
      }
    },
  });
});
