$("#example tbody").on("click", ".btn-danger", function () {
  var data = table.row($(this).parents("tr")).data();
  $.ajax({
    url: "/it2/api/misin_it/mission_remove.php",
    method: "post",
    data: {
      counter: data.counter,
      mission_table: data.mission_table,
    },
    success: function (result) {
      result = result.replace(/^\s+|\s+$/gm, "");
      console.log(result);
      if (result == "done") {
        table.ajax.reload();
      }
    },
  });
});
