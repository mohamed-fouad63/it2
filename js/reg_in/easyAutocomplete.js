var options = {
  url: function (phrase) {
    return "../api/office/office_name.php";
  },

  getValue: function (element) {
    return element.office_name;
  },

  ajaxSettings: {
    dataType: "json",
    method: "GET",
    data: {
      dataType: "json",
    },
  },

  preparePostData: function (data) {
    data.phrase = $("#name_reg_in").val();
    return data;
  },
};
$("#name_reg_in").easyAutocomplete(options);
