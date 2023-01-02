$("#Replace_Pices_Modal2 .btn-success").click(function () {
  var formData = {
    office_name: $("#office_name").val(),
    dvice_name: $("#dvice_name").val(),
    dvice_sn: $("#dvice_sn").val(),
    date_replace_Pices: $("#date_replace_Pices").val(),
    replace_Pices: {
      Motherboard: $("input[type=radio][name=Motherboard]:checked").val(),
      Processor: $("input[type=radio][name=Processor]:checked").val(),
      PowerSupply: $("input[type=radio][name=Powersupply]:checked").val(),
      HradDisk: $("input[type=radio][name=Hraddisk]:checked").val(),
      Ram: $("input[type=radio][name=Ram]:checked").val(),
    },
    dvice_num: dvice_num,
  };
  $.ajax({
    type: "POST",
    url: "../api/dvice/add_replace_pices_dvice.php",
    data: formData,
    beforeSend: function () {
      $("#Replace_Pices_Modal2 .btn-success").html("جارى معالجه البيانات");
    },
    success: function (result) {
      result = result.replace(/^\s+|\s+$/gm, "");
      $("#Replace_Pices_Modal2").modal("hide");
      $('input[type="radio"]').prop("checked", false);
    },
    complete: function () {
      $("#Replace_Pices_Modal2 .btn-success").html("استبدال");
    },
  });
});
