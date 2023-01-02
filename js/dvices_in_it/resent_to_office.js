$("#Resend_To_Office_Modal .btn-success").click(function () {
  var formData = {
    resen_to_office_date: $("#resen_to_office_date").val(),
    resen_to_office_by: $("#resen_to_office_by").val(),
    dvice_num: dvice_num,
  };
  if (
    formData.resen_to_office_by != "" &&
    formData.resen_to_office_date != ""
  ) {
    $.ajax({
      type: "POST",
      url: "../api/dvice/resend_to_office.php",
      data: formData,
      success: function (result) {
        result = result.replace(/^\s+|\s+$/gm, "");
        if (result == "done") {
          $("#Resend_To_Office_Modal").modal("hide");
          $("#resen_to_office_by").val("");
          datatable_ajax_reload();
        } else {
          alert(result);
        }
      },
    });
  } else {
    alert("يجب تحديد تاريخ و طريقه ارسال الجهاز للمكتب");
  }
});
