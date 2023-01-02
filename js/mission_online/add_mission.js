$("#example tbody").on("click", ".btn-success", function () {
  var data = table.row($(this).parents("tr")).data();
  console.log(data);
  $.ajax({
    url: "/it2/api/misin_it/mission_add.php",
    method: "post",
    data: {
      counter: data.counter,
      mission_table: data.mission_table,
      misin_day: data.misin_day,
      misin_date: data.misin_date,
      it_id: data.id,
      it_name: data.it_name,
      office_name: data.office_name,
      misin_type: data.misin_type,
      start_time: data.start_time,
      end_time: data.end_time,
      does: data.does,
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
