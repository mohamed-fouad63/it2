function del_group_name(e) {
  var delgroupname = $(e).data("delgroupname");
  delkey = $(e).data("key");
  // $("#Del_Office_Group").modal("hide");
  $.ajax({
    type: "POST",
    url: "../api/office/del_group_name.php",
    data: { delgroupname: delgroupname },
    success: function (result) {
      $("#Del_Office_Group").modal("hide");
      $("#" + delkey + "fieldset").remove();
    },
  });
}
