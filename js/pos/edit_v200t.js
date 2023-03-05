$("#Edit_Pos_Modal .btn-success").click(function () {
  var formData = {
    sn: $("#pos_sn").data("pos_sn"),
    pos_terminal: $("#pos_terminal").val(),
    pos_merchant: $("#pos_merchant").val(),
    stuff_pos: $("#stuff_pos").val(),
  };
  $.ajax({
    type: "POST",
    url: "../api/pos/edit_v200t.php",
    data: formData,
    success: function (result) {
      result = result.replace(/^\s+|\s+$/gm, "");
      if (result == "done") {
        $("#Edit_Pos_Modal").modal("hide");
        v200t.ajax.reload();
      } else {
        alert(result);
      }
    },
  });
});
