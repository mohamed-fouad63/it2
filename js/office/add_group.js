$("#Post_Group .btn-primary").click(function () {
  addgroupname = $("#post_group_input").val();
  $.ajax({
    type: "POST",
    url: "../api/office/add_group_name.php",
    data: { addgroupname: addgroupname },
    success: function (result) {
      result = result.replace(/^\s+|\s+$/gm, "");
      if (result == "done") {
        $("#Post_Group").modal("hide");
        $("#post_group").html("");
        load_post_group_tables();
      } else {
        $("#post_group_error").text("موجود بالفعل");
      }
    },
  });
});
