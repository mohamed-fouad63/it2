$("#mission_lock_btn").click(function () {
  var formData = {
    it_id: $("#select_it_name").val(),
    // days_count: $("#example_info").text(),
    it_name: $("#select_it_name option:selected").text(),
    month_missin: $("#month_missin").val(),
  };
  console.log(formData);
  $.ajax({
    url: "/it2/api/misin_it/lock_mission.php",
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
