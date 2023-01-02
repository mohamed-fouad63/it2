$("#Edit_In_Tts_Modal .btn-success").click(function () {
  var formData = {
    date_auth_repair: $("#date_auth_repair").val(),
    auth_repair: $("#auth_repair").val(),
    dvice_num: dvice_num,
  };
  console.log(formData);
  $.ajax({
    type: "POST",
    url: "../api/dvice/edit_pc_in_tts.php",
    data: formData,
    success: function (result) {
      result = result.replace(/^\s+|\s+$/gm, "");
      if (result == "done") {
        $("#Edit_In_Tts_Modal").modal("hide");
        datatable_ajax_reload();
      } else {
        alert("لم يتم التعديل");
      }
    },
  });
});
