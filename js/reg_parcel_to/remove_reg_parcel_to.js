$("#example tbody").on("click", ".btn-danger", function () {
  var data = table.row($(this).parents("tr")).data();
  $.ajax({
    url: "/it2/api/reg_parcel_to/reg_parcel_to_remove.php",
    method: "post",
    data: {
      id: data.id,
    },
    success: function (result) {
      result = result.replace(/^\s+|\s+$/gm, "");
      if (result == "done") {
        table.ajax.reload();
      }
    },
  });
});
