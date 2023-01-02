$("#Replace_Pices_Modal2 .btn-success").click(function () {
  var imgs = {};
  $(".uploaded-area .card img").each(function (i, o) {
    // imgs.push($(this).attr('alt'));
    imgs[i] = $(this).attr("alt");
  });
  // console.log(imgs);

  replace_Pices = {};
  $(".replace_Pices .card input[type=radio]:checked").each(function (i, o) {
    replace_Pices[$(this).attr("value")] = $(this).attr("value");
  });
  var formData = {
    office_name: office_name_from,
    dvice_name: $("#dvice_name2").val(),
    dvice_sn: $("#dvice_sn2").val(),
    date_replace_Pices: $("#date_replace_Pices2").val(),
    dvice_num: dvice_num,
    replace_Pices: replace_Pices,
    imgs: imgs,
  };
  // console.log(formData)
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
      $(".uploaded-area").html("");
      $(".replace_Pices .card input[type=radio]").prop("checked", false);
      // alert(result)
    },
    complete: function () {
      $("#Replace_Pices_Modal2 .btn-success").html("استبدال");
    },
  });
});

$("#Replace_Pices_Modal2").on("click", ".bi-x-lg", function () {
  el_index = $(this).index(".bi-x-lg");
  file_name = $(".uploaded-area .card img").eq(el_index).attr("alt");
  $.ajax({
    type: "POST",
    url: "../views/draftes/delete.php",
    data: { file_name: file_name },
    success: function (result) {
      $(".uploaded-area .card").eq(el_index).remove();
    },
  });
});
