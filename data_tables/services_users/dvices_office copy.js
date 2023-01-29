function get_users_v200t_table() {
  var v200t = $("#v200t").DataTable({
    ajax: {
      url: "/it2/api/services_users/v200t_users.php",
      method: "post",
      data: {
        input_search: function () {
          var input_search = $("#input_user_search").val();
          return input_search;
        },
      },
      dataSrc: "",
    },
    deferRender: true,
    columns: [
      { data: "office_name" },
      { data: "money_code" },
      { data: "pos_terminal" },
      { data: "sn" },
      { data: "names" },
      { data: "auth" },
      { data: "id" },
      { data: "" },
      { data: "" },
    ],
    dom: "Bfrti",
    paging: false,
    destroy: true,
    autoWidth: false,
    language: {
      zeroRecords: "",
      infoEmpty: "0",
      info: "_TOTAL_",
    },
    rowCallback: function (row, data) {},
    fnDrawCallback: function () {},
    initComplete: function (settings, json) {},
  });
}
$("#addRow").on("click", function () {
  $("#v200t")
    .DataTable()
    .row.add({
      office_name: `<select class="form-select office_name_to" id="">
            </select>`,
      money_code: "System Architect",
      pos_terminal: "$3,120",
      sn: "2011/04/25",
      names: "Edinburgh",
      auth: "5421",
      id: "5421",
      "": "5421",
      "": "5421",
    })
    .draw();
  get_select_office_name();
});
function get_select_office_name() {
  var options_select_office_name_to = "<option></option>";
  $.getJSON("../api/office/selesct_office_name.php", function (data) {
    $.each(data, function (key, val) {
      options_select_office_name_to +=
        "<option style='' value='" +
        val.office_name +
        "'>" +
        val.office_name +
        "</option>";
    });
    $(".office_name_to").html(options_select_office_name_to);
  });
}

// v200t.ajax.reload(function () {});
