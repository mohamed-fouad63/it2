$("#example tbody").on("click", ".btn-success", function () {
  var data = table.row($(this).parents("tr")).data();
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

$("#add_mission_btn").click(function () {
  var formData = {
    it_id: $("#select_it_name").val(),
    it_name: $("#select_it_name option:selected").text(),
    office_name: $("#select_office_name").val(),
    mission_date_start: $("#mission_date_start").val(),
    mission_date_end: $("#mission_date_end").val(),
    mission_type: $("#mission_type").val(),
    misin_cairo_type: $("#misin_cairo_type").val(),
    mission_time_start: $("#mission_time_start").val(),
    mission_time_end: $("#mission_time_end").val(),
  };
  console.log(formData);
  $.ajax({
    url: "/it2/api/misin_it/mission_add2.php",
    method: "post",
    data: formData,
    success: function (result) {
      result = result.replace(/^\s+|\s+$/gm, "");
      console.log(result);
      if (result == "done") {
        table.ajax.reload();
      }
    },
  });
});
