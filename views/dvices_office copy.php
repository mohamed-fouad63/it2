<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset=utf-8>
    <title>اجهزه مكتب </title>
      <link rel="icon" href="../../../it2/assets/images/it1.svg" type="image/x-icon" />
    <link rel="stylesheet" href="../assets/css/plugins/bootstrap5/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="../assets/fonts/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/plugins/easy-autocomplete.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/layout-rtl.css">
    <link rel="stylesheet" href="../assets/css/plugins/perfect-scrollbar.css">
    <style>
        /* */
        fieldset {
            text-align: center;
        }
        .input-group-text {
            background-color: var(--bs-teal);
            border: 1px solid var(--bs-teal);
        }
        .form-control {
    border: 1px solid var(--bs-teal);
        }

        .modal-content {
    border: 1px solid var(--bs-teal);
    border-radius:unset;

}
.dropdown .dropdown-menu{
    border: 1px solid var(--bs-teal);
}

.nav-link:hover, .nav-link:focus {
    color: unset;
}
/* */
.filte_div {
    width: 30rem;
}
thead tr {
    background-color: #8fbc8f33;
}
thead tr:last-of-type th:last-of-type{
    text-align:left;
    display:none
}
tbody tr td:last-of-type{
    display:none
}
    </style>
</head>

<body>
    <div class="pcoded-navbar navbar-collapsed">
        <?php include '..\layout\aside\nav.php';?>
    </div>
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
        <?php include '..\layout\header\m-hader.html';?>
        <ul class="navbar-nav ">
    <li>
        <?php include '..\component\search.html';?>
    </li>
</ul>
        <ul class="navbar-nav ">
        <li>
        <div class="btn-group bt_div">
            <button class="btn" tabindex="0" aria-controls="example"  data-bs-toggle="modal" data-placement="right" title="اضافه  الجهاز" data-bs-target="#Add_dvice_Modal">
                <i class="btn btn-primary bi bi-plus"></i>
            </button>
            <a class="btn" href="../../it/grd/?office_name=العدليه" target="blank" tabindex="0" aria-controls="example"  data-placement="right" title="طباعه جرد المكتب">
                <i class="btn btn-warning bi bi-printer"></i>
            </a>
        </div>
    </li>
</ul>
        <ul class="navbar-nav  ms-auto">
            <li>
                <?php include '..\layout\header\user.php';?>
            </li>
        </ul>
    </header>
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <div id="main">
                <div class="msg" dir="rtl">
                    <!-- am -->
                    <!-- start office deatails -->
                    <div class="office_head">
                        <div class="post_offce_manager"></div>
                    </div>
                    <fieldset class="mb-3" id="office_fieldset" >
                        <legend><i class="fas fa-info-circle"></i><span class="count me-2"></span></legend>
                        <table id="details_offfice" class="table align-middle table-hover" style="display:none;width:100%">
                            <thead>
                                <tr>
                                    <th colspan='7' class='fs-5'></th>
                                </tr>
                                <tr>
                                    <th>الكود المالى</th>
                                    <th>الكود البريدى</th>
                                    <th> كود بوستال</th>
                                    <th>مجموعه بريد</th>
                                    <th> منظومه الطوابع</th>
                                    <th> اسم الدومين</th>
                                    <th>رقم التليفون</th>
                                </tr>
                            </thead>
                        </table>
                    </fieldset>
                    <!-- start pc -->
                    <fieldset class="mb-3" id="dvice_office_pc_field" style="display:none;width:100%">
                        <legend>
                            <i class="bi bi-pc me-2 "></i>
                            <span class="count me-2" id="pc_office_count"></span>اجهزه
                        </legend>
                        <table  class="table align-middle table-hover" id="dvice_office_pc" style="width:100%">
                            <thead>
                                <tr>
                                    <th>نوعه</th>
                                    <th>سريال</th>
                                    <th>IP</th>
                                    <th>Domain Name</th>
                                    <th>موقفه</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </fieldset>
                    <!-- end pc -->
                    <!-- srart monitor -->
                    <fieldset class="mb-3" id="dvice_office_monitor_field" style="display:none;width:100%">
                        <legend>
                            <i class="bi bi-display-fill me-2"></i>
                            <span class="count me-2" id="monitor_office_count"></span>شاشات
                        </legend>
                        <table id="dvice_office_monitor" class="table align-middle table-hover" style="width:100%">
                            <thead>
                            <tr>
                                    <th>نوعه</th>
                                    <th>سريال</th>
                                    <th>IP</th>
                                    <th>Domain Name</th>
                                    <th>موقفه</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </fieldset>
                    <!-- end montor -->
                    <!-- start printer -->
                    <fieldset class="mb-3" id="dvice_office_printer_field" style="display:none;width:100%">
                        <legend>
                        <i class="bi bi-printer-fill me-2"></i>
                            <span class="count me-2" id="printer_office_count"></span>طابعات
                        </legend>
                        <table id="dvice_office_printer" class="table align-middle table-hover" style="width:100%">
                            <thead>
                            <tr>
                                    <th>نوعه</th>
                                    <th>سريال</th>
                                    <th>IP</th>
                                    <th>Domain Name</th>
                                    <th>موقفه</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </fieldset>
                    <!-- end printer -->
                    <!-- start pos -->
                    <fieldset class="mb-3" id="dvice_office_pos_field" style="display:none;width:100%">
                        <legend>
                        <i class="bi bi-paypal me-2"></i>
                            <span class="count me-2" id="pos_office_count"></span>ماكينات نقاط بيع
                        </legend>
                        <table id="dvice_office_pos" class="table align-middle table-hover" style="width:100%">
                            <thead>
                            <tr>
                                    <th>نوعه</th>
                                    <th>سريال</th>
                                    <th>IP</th>
                                    <th>Domain Name</th>
                                    <th>موقفه</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </fieldset>
                    <!-- end pos -->
                    <!-- strat network -->
                    <fieldset class="mb-3" id="dvice_office_network_field" style="display:none;width:100%">
                        <legend>
                        <i class="bi bi-hdd-network-fill me-2"></i>
                            <span class="count me-2" id="network_office_count"></span>اجهزه شبكه
                        </legend>
                        <table id="dvice_office_network" class="table align-middle table-hover" style="width:100%">
                            <thead>
                            <tr>
                                    <th>نوعه</th>
                                    <th>سريال</th>
                                    <th>IP</th>
                                    <th>Domain Name</th>
                                    <th>موقفه</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </fieldset>
                    <!-- end network -->
                    <!-- strat postal -->
                    <fieldset class="mb-3" id="dvice_office_postal_field" style="display:none;width:100%">
                        <legend>
                        <i class="bi bi-upc-scan me-2"></i>
                            <span class="count me-2" id="postal_office_count"></span>اجهزه بوستال
                        </legend>
                        <table id="dvice_office_postal" class="table align-middle table-hover" style="width:100%">
                            <thead>
                            <tr>
                                    <th>نوعه</th>
                                    <th>سريال</th>
                                    <th>IP</th>
                                    <th>Domain Name</th>
                                    <th>موقفه</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </fieldset>
                    <!-- end postal -->
                    <!-- start other -->
                    <!-- end other -->
                    <div class="clearfix"></div>
                    <!-- start footer -->
                    <!--<footer>-->
                </div>
            </div>
        </div>
    </div>
    <div>
        <!-- start edit modal -->
            <?php include '../component/modals/edit_modal_pc.html'?>
        <!-- end edit modal -->
        <!-- start to it modal -->
            <?php include '../component/modals/to_it_modal.php'?>
        <!-- end to it modal -->
        <!-- start move to modal -->
            <?php include '../component/modals/move_to_modal.php'?>
        <!-- end move to modal -->
        <!-- start add dvice modal -->
            <?php include '../component/modals/add_dvice_modal.html'?>
        <!-- end add dvice modal -->
    </div>
    <script src="../assets/js/plugins/jquery-3.6.0.js"></script>
    <script src="../assets/js/plugins/bootstrap5/popper.min.js"></script>
    <script src="../assets/js/plugins/bootstrap5/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/jquery.easy-autocomplete.js"></script>
    <script src="../assets/js/pcoded.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/DataTables/jquery.dataTables.js"></script>
    <script src="../assets/DataTables/Buttons-2.2.3/js/dataTables.buttons.js"></script>
    <script src="../assets/DataTables/Buttons-2.2.3/js/buttons.print.js"></script>
    <script>


    </script>
<script>
var options = {

url: function(phrase) {
  return "../api/dvice/office_name.php";
},

getValue: function(element) {
  return element.office_name;
},

ajaxSettings: {
  dataType: "json",
  method: "GET",
  data: {
    dataType: "json"
  }
},

preparePostData: function(data) {
  data.phrase = $("#input_search").val();
  return data;
},
list: {
    maxNumberOfElements: 10,
		onClickEvent: function() {
            /* start data table office details */
            var details_offfice = $('#details_offfice').DataTable({
                "ajax": {
                    "url": '/it2/api/dvice/details_offfice.php',
                    "method":"post",
                    data: function(d){
                        d.input_search = $("#input_search").val();
                        },
                    "dataSrc": '',
                },
                columns: [
                    { data: 'money_code' },
                    { data: 'post_code' },
                    { data: 'postal_code' },
                    { data: 'post_group' },
                    { data: 'Stamps' },
                    { data: 'domain_name' },
                    { data: 'tel' },
                ],
                paging: false,
                dom: 'rt',
                destroy: true,
                "initComplete": function () {
                    $('#details_offfice thead tr:first-of-type th').text(details_offfice.row().data().office_name);
                    $('#details_offfice').css('display','table')
                },
        })
            /* end data table office details */
            /* start data table pc  */
            var dvice_office_pc = $('#dvice_office_pc').DataTable({
                "ajax": {
                    "url": '/it2/api/dvice/dvice_office_pc.php',
                    "method":"post",
                    data: function(d){
                        d.input_search = $("#input_search").val();
                        },
                    "dataSrc": '',
                },
                columns: [
                    { data: 'dvice_name' },
                    { data: 'sn' },
                    { data: 'ip' },
                    { data: 'pc_doman_name' },
                    { data: '',
                        render: function (data, type, row) {
                            return row.note+""+row.note_move_to
                        }
                    },
                    { data: '',
                        render: function (data, type, row) {
                                if(row.note != "" || row.note_move_to != ""){
                                    return ''
                            }
                            else {
                                return `
                                    <div class="dropdown">
                                            <?php include '../component/dropdown_dvieces_office.html'?>
                                    </div>
                                `;
                            }
                        }
                    },
                    { data: 'num' },
                ],
                "columnDefs": [
    {"visible": true, "targets": 6}],
                paging: false,
                dom: 'rt',
                destroy: true,
                "initComplete": function() {
                    if(dvice_office_pc.rows().count() == 0 ){
                        $('#dvice_office_pc_field').css('display','none');
                    } else {
                        $('#pc_office_count').text(dvice_office_pc.data().count());
                        $('#dvice_office_pc_field').css('display','block');
                        $('#dvice_office_pc tbody').on( 'click', '.dropdown-item', function () {
                            console.log( dvice_office_pc.row($(this).parents('tr')).data().sn );
                            var data_pc = dvice_office_pc.row($(this).parents('tr')).data();
                            $(".office_name").val(data_pc.office_name);
                            $(".dvice_name").val(data_pc.dvice_name);
                            $(".dvice_sn").val(data_pc.sn);
                            $(".dvice_ip").val(data_pc.ip);
                            $(".pc_domian_name").val(data_pc.pc_doman_name);
                            $(".dvice_num").val(data_pc.num);
                            $(".dvice_id").val(data_pc.id);
                            $(".dvice_type").val(data_pc.dvice_type);
                            return pc_num = data_pc.num;
                        });
                }
            },
        })
            /* end data table pc  */

            /* start data table monitor  */
            var dvice_office_monitor = $('#dvice_office_monitor').DataTable({
                "ajax": {
                    "url": '/it2/api/dvice/dvice_office_monitor.php',
                    "method":"post",
                    data: function(d){
                        d.input_search = $("#input_search").val();
                        },
                    "dataSrc": '',
                },
                columns: [
                    { data: 'dvice_name' },
                    { data: 'sn' },
                    { data: 'ip' },
                    { data: 'pc_doman_name' },
                    { data: 'note' },
                    { data: 'num',
                        render: function (data, type, row) {
                                if(row.note == "بقسم الدعم الفنى"){
                                    return ''
                            }
                            else {
                                return `
                                    <div class="dropdown">
                                            <?php include '../component/dropdown_dvieces_office.html'?>
                                    </div>
                                `;
                            }
                        }
                    }
                ],
                paging: false,
                dom: 'rt',
                destroy: true,
                "initComplete": function () {
                    if(dvice_office_monitor.data().count() == 0 ){
                        $('#dvice_office_monitor_field').css('display','none');
                    } else {
                        $('#monitor_office_count').text(dvice_office_monitor.data().count());
                    $('#dvice_office_monitor_field').css('display','block');
                    }
                },
        })
            /* end data table monitor  */

            /* start data table printer  */
                var dvice_office_printer = $('#dvice_office_printer').DataTable({
                "ajax": {
                    "url": '/it2/api/dvice/dvice_office_printer.php',
                    "method":"post",
                    data: function(d){
                        d.input_search = $("#input_search").val();
                        },
                    "dataSrc": '',
                },
                columns: [
                    { data: 'dvice_name' },
                    { data: 'sn' },
                    { data: 'ip' },
                    { data: 'pc_doman_name' },
                    { data: 'note' },
                    { data: 'num',
                        render: function (data, type, row) {
                                if(row.note == "بقسم الدعم الفنى"){
                                    return ''
                            }
                            else {
                                return `
                                    <div class="dropdown">
                                            <?php include '../component/dropdown_dvieces_office.html'?>
                                    </div>
                                `;
                            }
                        }
                    }
                ],
                paging: false,
                dom: 'rt',
                destroy: true,
                "initComplete": function () {
                    if(dvice_office_printer.data().count() == 0 ){
                        $('#dvice_office_printer_field').css('display','none');
                    } else {
                        $('#printer_office_count').text(dvice_office_printer.data().count());
                    $('#dvice_office_printer_field').css('display','block');
                    }
                },
        })
            /* end data table printer  */
            /* start data table pos  */
                var dvice_office_pos = $('#dvice_office_pos').DataTable({
                "ajax": {
                    "url": '/it2/api/dvice/dvice_office_pos.php',
                    "method":"post",
                    data: function(d){
                        d.input_search = $("#input_search").val();
                        },
                    "dataSrc": '',
                },
                columns: [
                    { data: 'dvice_name' },
                    { data: 'sn' },
                    { data: 'ip' },
                    { data: 'pc_doman_name' },
                    { data: 'note' },
                    { data: 'num',
                        render: function (data, type, row) {
                                if(row.note == "بقسم الدعم الفنى"){
                                    return ''
                            }
                            else {
                                return `
                                    <div class="dropdown">
                                            <?php include '../component/dropdown_dvieces_office.html'?>
                                    </div>
                                `;
                            }
                        }
                    }
                ],
                paging: false,
                dom: 'rt',
                destroy: true,
                "initComplete": function () {
                    if(dvice_office_pos.data().count() == 0 ){
                        $('#dvice_office_pos_field').css('display','none');
                    } else {
                        $('#pos_office_count').text(dvice_office_pos.data().count());
                    $('#dvice_office_pos_field').css('display','block');
                    };
                },
        })
            /* end data table pos  */
            /* start data table network  */
                var dvice_office_network = $('#dvice_office_network').DataTable({
                "ajax": {
                    "url": '/it2/api/dvice/dvice_office_network.php',
                    "method":"post",
                    data: function(d){
                        d.input_search = $("#input_search").val();
                        },
                    "dataSrc": '',
                },
                columns: [
                    { data: 'dvice_name' },
                    { data: 'sn' },
                    { data: 'ip' },
                    { data: 'pc_doman_name' },
                    { data: 'note' },
                    { data: 'num',
                        render: function (data, type, row) {
                                if(row.note == "بقسم الدعم الفنى"){
                                    return ''
                            }
                            else {
                                return `
                                    <div class="dropdown">
                                            <?php include '../component/dropdown_dvieces_office.html'?>
                                    </div>
                                `;
                            }
                        }
                    }
                ],
                paging: false,
                dom: 'rt',
                destroy: true,
                "initComplete": function () {
                    if(dvice_office_network.data().count() == 0 ){
                        $('#dvice_office_network_field').css('display','none');
                    } else {
                        $('#network_office_count').text(dvice_office_network.data().count());
                    $('#dvice_office_network_field').css('display','block');
                    }
                },
        })
            /* end data table network  */
            /* start data table postal  */
                        var dvice_office_postal = $('#dvice_office_postal').DataTable({
                "ajax": {
                    "url": '/it2/api/dvice/dvice_office_postal.php',
                    "method":"post",
                    data: function(d){
                        d.input_search = $("#input_search").val();
                        },
                    "dataSrc": '',
                },
                columns: [
                    { data: 'dvice_name' },
                    { data: 'sn' },
                    { data: 'ip' },
                    { data: 'pc_doman_name' },
                    { data: 'note' },
                    { data: 'num',
                        render: function (data, type, row) {
                                if(row.note == "بقسم الدعم الفنى"){
                                    return ''
                            }
                            else {
                                return `
                                    <div class="dropdown">
                                            <?php include '../component/dropdown_dvieces_office.html'?>
                                    </div>
                                `;
                            }
                        }
                    }
                ],
                paging: false,
                dom: 'rt',
                destroy: true,
                "initComplete": function () {
                    if(dvice_office_postal.data().count() == 0 ){
                        $('#dvice_office_postal_field').css('display','none');
                    } else {
                        $('#postal_office_count').text(dvice_office_postal.data().count());
                    $('#dvice_office_postal_field').css('display','block');
                }
            },

        })
            /* end data table postal  */
		}
	}
};
$("#input_search").easyAutocomplete(options);
</script>
<script>
function test() {
var table = document.getElementById("dvice_office_pc"), rIndex;
for(var i = 1; i < table.rows.length; i++){
table.rows[i].onclick = function()
{
rIndex = this.rowIndex;
//   console.log(rIndex);

};}}


</script>

<script>
    $('#EditModalPC .btn-success').click(function(){
        var dvice_office_pc = new DataTable('#dvice_office_pc');
        var formData = {
                pc_sn: $("#dvice_sn").val(),
                pc_ip: $("#dvice_ip").val(),
                pc_domian_name: $("#pc_domian_name").val(),
                dvice_num: pc_num,
                };
                $.ajax({
                    type: "POST",
                    url: "../api/dvice/edit_pc_office.php",
                    data: formData,
                    success: function( result ) {
                        if(result == 'done'){
                            dvice_office_pc.ajax.reload();
                            $("#EditModalPC").modal('hide');
                            } else {
                                alert('لم يتم التعديل')
                            }
                        }
                })
    })
</script>
<script>
    $('#To_It_Modal .btn-success').click(function(){
        var dvice_office_pc = new DataTable('#dvice_office_pc');
        var formData = {
            to_it_by: $("#to_it_by").val(),
            to_it_date: $("#to_it_date").val(),
            damage: $("#damage").val(),
            in_it_note: $("#in_it_note").val(),
            dvice_num: pc_num
                };
                // console.log(formData);
                $.ajax({
                    type: "POST",
                    url: "../api/dvice/to_it.php",
                    data: formData,
                    success: function( result ) {
                        if(result == 'done'){
                            dvice_office_pc.ajax.reload();
                            $("#To_It_Modal").modal('hide');
                            } else {
                                alert('تعذر استلام الجهاز للصيانه')
                            }
                        }
                })
    })
</script>
<script>
    $('#Move_To_Modal #move_to_btn ').click(function(){
        var dvice_office_pc = new DataTable('#dvice_office_pc');
        var formData = {
            office_name_to: $("#office_name_to").val(),
            move_by: $("#move_by").val(),
            move_note: $("#move_note").val(),
            move_like: $("#move_like").val(),
            move_to_date: $("#move_to_date").val(),
            dvice_num: pc_num
                };
                console.log(formData);
                $.ajax({
                    type: "POST",
                    url: "../api/dvice/move_to.php",
                    data: formData,
                    success: function( result ) {
                        if(result == 'done'){
                            dvice_office_pc.ajax.reload();
                            $("#Move_To_Modal").modal('hide');
                            } else {
                                alert('تعذر نقل الجهاز ')
                            }
                        }
                })
    })
</script>
<script>
    $('#move_like').click(function(){
        if($(this).val() != ''){
            $('#move_to_btn').removeClass('disabled');
        } else {
            $('#move_to_btn').addClass('disabled');
        }
    })
</script>
</body>

</html>