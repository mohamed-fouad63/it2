<?php
$db = "g_shrkia";
?>
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset=utf-8>
    <title>اجهزه بقسم الدعم الفنى </title>
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
            border-radius: unset;

        }

        .dropdown .dropdown-menu {
            border: 1px solid var(--bs-teal);
        }

        .nav-link:hover,
        .nav-link:focus {
            color: unset;
        }

        /* */
        .filte_div {
            width: 30rem;
        }

        thead tr {
            background-color: #8fbc8f33;
        }

        tbody tr td:last-of-type button {
            float: left
        }

        .dataTables_info {
            display: inline-block
        }

        #imagePreview {}

        /* start upload file */
        .wrapper {
            width: 430px;
            background: #fff;
            border-radius: 5px;
            padding: 30px;
            box-shadow: 7px 7px 12px rgba(0, 0, 0, 0.05);
        }

        section .row {
            margin-bottom: 10px;
            background: #E9F0FF;
            list-style: none;
            padding: 15px 20px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        section .row i {
            color: #6990F2;
            font-size: 30px;
        }

        section .details span {
            font-size: 14px;
        }

        .progress-area1 .row .content {
            width: 100%;
            margin-left: 15px;
        }

        .progress-area1 .details {
            display: flex;
            align-items: center;
            margin-bottom: 7px;
            justify-content: space-between;
        }

        .progress-area1 .content .progress-bar {
            height: 6px;
            width: 100%;
            margin-bottom: 4px;
            background: #fff;
            border-radius: 30px;
        }

        .content .progress-bar .progress {
            height: 100%;
            width: 0%;
            background: #6990F2;
            border-radius: inherit;
        }

        .uploaded-area1 {
            max-height: 232px;
            overflow-y: scroll;
            gap: 5px;
        }

        .uploaded-area1.onprogress {
            max-height: 150px;
        }

        .uploaded-area1::-webkit-scrollbar {
            width: 0px;
        }

        .uploaded-area1 .row .content {
            display: flex;
            align-items: center;
        }

        .uploaded-area1 .row .details {
            display: flex;
            margin-left: 15px;
            flex-direction: column;
        }

        .uploaded-area1 .row .details .size {
            color: #404040;
            font-size: 11px;
        }

        .uploaded-area1 li {
            border: 1px solid var(--bs-teal);
            max-width: 50%;
        }

        .uploaded-area1 i.fa-check {
            font-size: 16px;
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
        </ul>
        <ul class="navbar-nav  ms-auto">
            <li>
                <?php include '..\layout\header\user.php';?>
            </li>
        </ul>
    </header>
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="d-flex mt-5">
                <div class="flex-grow-1">
                    <!-- start pc -->
                    <fieldset class="mb-3" id="dvice_office_pc_field" style="/* display:none */">
                        <legend>
                            <i class="bi bi-pc me-2 "></i>
                            <span class="count me-2" id="pc_office_count"></span>اجهزه
                        </legend>
                        <table class="table align-middle table-hover" id="dvice_office_pc" style="width:100%">
                            <thead>
                                <tr>
                                    <th>اسم المكتب </th>
                                    <th>نوع الجهاز </th>
                                    <th>السريال</th>
                                    <th>العطل</th>
                                    <th>ملاحظات</th>
                                    <th>عن طريق</th>
                                    <th>تاريخ الورود</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </fieldset>
                    <!-- end pc -->
                    <!-- srart monitor -->
                    <fieldset class="mb-3" id="dvice_office_monitor_field" style="/* display:none */">
                        <legend>
                            <i class="bi bi-display-fill me-2"></i>
                            <span class="count me-2" id="monitor_office_count"></span>شاشات
                        </legend>
                        <table id="dvice_office_monitor" class="table align-middle table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>اسم المكتب </th>
                                    <th>نوع الجهاز </th>
                                    <th>السريال</th>
                                    <th>العطل</th>
                                    <th>ملاحظات</th>
                                    <th>عن طريق</th>
                                    <th>تاريخ الورود</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </fieldset>
                    <!-- end montor -->
                    <!-- start printer -->
                    <fieldset class="mb-3" id="dvice_office_printer_field" style="/* display:none */">
                        <legend>
                            <i class="bi bi-printer-fill me-2"></i>
                            <span class="count me-2" id="printer_office_count"></span>طابعات
                        </legend>
                        <table id="dvice_office_printer" class="table align-middle table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>اسم المكتب </th>
                                    <th>نوع الجهاز </th>
                                    <th>السريال</th>
                                    <th>العطل</th>
                                    <th>ملاحظات</th>
                                    <th>عن طريق</th>
                                    <th>تاريخ الورود</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </fieldset>
                    <!-- end printer -->
                    <!-- start pos -->
                    <fieldset class="mb-3" id="dvice_office_pos_field" style="/* display:none */">
                        <legend>
                            <i class="bi bi-paypal me-2"></i>
                            <span class="count me-2" id="pos_office_count"></span>ماكينات نقاط بيع
                        </legend>
                        <table id="dvice_office_pos" class="table align-middle table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>اسم المكتب </th>
                                    <th>نوع الجهاز </th>
                                    <th>السريال</th>
                                    <th>العطل</th>
                                    <th>ملاحظات</th>
                                    <th>عن طريق</th>
                                    <th>تاريخ الورود</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </fieldset>
                    <!-- end pos -->
                    <!-- strat network -->
                    <fieldset class="mb-3" id="dvice_office_network_field" style="/* display:none */">
                        <legend>
                            <i class="bi bi-hdd-network-fill me-2"></i>
                            <span class="count me-2" id="network_office_count"></span>اجهزه شبكه
                        </legend>
                        <table id="dvice_office_network" class="table align-middle table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>اسم المكتب </th>
                                    <th>نوع الجهاز </th>
                                    <th>السريال</th>
                                    <th>العطل</th>
                                    <th>ملاحظات</th>
                                    <th>عن طريق</th>
                                    <th>تاريخ الورود</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </fieldset>
                    <!-- end network -->
                    <!-- start postal -->
                    <fieldset class="mb-3" id="dvice_office_postal_field" style="/* display:none */">
                        <legend>
                            <i class="bi bi-envelope-paper-fill"></i>
                            <span class="count me-2" id="postal_office_count"></span>اجهزه بوستال
                        </legend>
                        <table id="dvice_office_postal" class="table align-middle table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>اسم المكتب </th>
                                    <th>نوع الجهاز </th>
                                    <th>السريال</th>
                                    <th>العطل</th>
                                    <th>ملاحظات</th>
                                    <th>عن طريق</th>
                                    <th>تاريخ الورود</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </fieldset>
                    <!-- end postal -->
                    <!-- start other -->
                    <fieldset class="mb-3" id="dvice_office_other_field" style="/* display:none */">
                        <legend>
                            <i class="bi bi-question-square-fill"></i>
                            <span class="count me-2" id="other_office_count"></span>اخرى
                        </legend>
                        <table id="dvice_office_other" class="table align-middle table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>اسم المكتب </th>
                                    <th>نوع الجهاز </th>
                                    <th>السريال</th>
                                    <th>العطل</th>
                                    <th>ملاحظات</th>
                                    <th>عن طريق</th>
                                    <th>تاريخ الورود</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </fieldset>
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
        <?php include '../component/modals/edit_in_it_modal.html'?>
        <!-- end edit modal -->
        <!-- start to tts modal -->
        <?php include '../component/modals/to_tts_modal.php'?>
        <!-- end to tts modal -->
        <!-- start move to modal -->
        <?php include '../component/modals/move_to_modal.php'?>
        <!-- end move to modal -->
        <!-- start resend dvice modal -->
        <?php include '../component/modals/resend_to_office_modal.php'?>
        <!-- end resend dvice modal -->
        <!-- start delete_modal dvice modal -->
        <?php include '../component/modals/delete_modal.php'?>
        <!-- end delete_modal dvice modal -->
        <?php include '../component/modals/replace_pices_modal2.php'?>
        <?php include '../component/modals/replace_pices_modal.php'?>
    </div>
    <script src="../assets/js/plugins/jquery-3.6.0.js"></script>
    <script src="../assets/js/plugins/bootstrap5/popper.min.js"></script>
    <script src="../assets/js/plugins/bootstrap5/bootstrap.min.js"></script>
    <script src="../assets/js/pcoded.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/DataTables/jquery.dataTables.js"></script>
    <script src="../assets/DataTables/Buttons-2.2.3/js/dataTables.buttons.js"></script>
    <script src="../assets/DataTables/Buttons-2.2.3/js/buttons.print.js"></script>
    <script>
        /* start data table pc  */
        dvice_id = 'pc';
        var dvice_office_pc = $('#dvice_office_pc').DataTable({
            "ajax": {
                "url": '/it2/api/dvice/dvices_pc_in_it.php?dvice_id=pc',
                "dataSrc": '',
            },
            deferRender: true,
            columns: [
                { data: 'office_name' },
                { data: 'dvice_name' },
                { data: 'sn' },
                { data: 'damage' },
                { data: 'in_it_note' },
                { data: 'parcel_in_it' },
                { data: 'date_in_it' },
                {
                    data: '',
                    render: function (data, type, row) {
                        if (row.dvice_name == 'HP ProDesk 400 G5 MT') {
                            hp = `<li class="d-flex align-items-center">
                                <i class="bi bi-arrow-repeat"></i>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Replace_Pices_Modal2">
                                <label>استبدال قطع غيار</label>
                                </a>
                                </li>`
                        } else {
                            hp = `<li class="d-flex align-items-center">
                                <i class="bi bi-arrow-repeat"></i>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Replace_Pices_Modal">
                                <label>استبدال قطع غيار</label>
                                </a>
                                </li>`
                        };
                        return `
                            <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton1">
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-pencil-square"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Edit_In_It_Modal">
                                        <label>تعديل البيانات</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-truck"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#To_Tts_Modal">
                                        <label>صيانه بقطاع الدعم الفنى</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-reply-fill"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Resend_To_Office_Modal">
                                        <label>اعاده الجهاز للمكتب</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-arrows-move"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Move_To_Modal">
                                        <label>نقل لمكتب اخر</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-x-octagon-fill"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Delete_Modal">
                                        <label>استنزال العهده</label>
                                    </a>
                                </li>${hp}
                            </ul>
                        `;
                    }
                },
            ],
            dom: 'irt',
            paging: false,
            "language": {
                "zeroRecords": "لا يوجد اجهزه بقسم الدعم الفنى",
                "infoEmpty": "0",
                "info": "_TOTAL_",
            },
            "rowCallback": function (row, data) { },
            "initComplete": function () {
                $('#pc_office_count').append($('#dvice_office_pc_info'));
                $('#dvice_office_pc tbody').on('click', '.dropdown-item', function () {
                    var data_pc = dvice_office_pc.row($(this).parents('tr')).data();
                    $(".office_name").val(data_pc.office_name);
                    $(".dvice_name").val(data_pc.dvice_name);
                    $(".dvice_sn").val(data_pc.sn);
                    $(".parcel_in_it").val(data_pc.parcel_in_it);
                    $(".date_in_it").val(data_pc.date_in_it);
                    $(".damage").val(data_pc.damage);
                    $(".in_it_note").val(data_pc.in_it_note);
                    $(".dvice_type").val(data_pc.dvice_type);
                    $(".dvice_num").val(data_pc.num);
                    $(".sub_print_ticket").attr("href", '../views/auth_repair.php?dvice_num=' + data_pc.count_in_it + '');
                    return dvice_num = data_pc.count_in_it;
                });
            },
        })
            /* end data table pc  */
    </script>
    <script>
        /* start data table monitpr  */
        var dvice_office_monitor = $('#dvice_office_monitor').DataTable({
            "ajax": {
                "url": '/it2/api/dvice/dvices_pc_in_it.php?dvice_id=monitor',
                "dataSrc": '',
            },
            deferRender: true,
            columns: [
                { data: 'office_name' },
                { data: 'dvice_name' },
                { data: 'sn' },
                { data: 'damage' },
                { data: 'in_it_note' },
                { data: 'parcel_in_it' },
                { data: 'date_in_it' },
                {
                    data: '',
                    render: function () {
                        return `
                            <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton1">
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-pencil-square"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Edit_In_It_Modal">
                                        <label>تعديل البيانات</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-truck"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#To_Tts_Modal">
                                        <label>صيانه بقطاع الدعم الفنى</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-reply-fill"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Resend_To_Office_Modal">
                                        <label>اعاده الجهاز للمكتب</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-arrows-move"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Move_To_Modal">
                                        <label>نقل لمكتب اخر</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-x-octagon-fill"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Delete_Modal">
                                        <label>استنزال العهده</label>
                                    </a>
                                </li>
                            </ul>
                        `;
                    }
                },
            ],
            dom: 'irt',
            paging: false,
            "language": {
                "zeroRecords": "لا يوجد شاشات بقسم الدعم الفنى",
                "infoEmpty": "0",
                "info": "_TOTAL_",
            },
            "rowCallback": function (row, data) { },
            "initComplete": function () {
                $('monitor_office_count').append($('#dvice_office_monitor_info'));
                $('#dvice_office_monitor tbody').on('click', '.dropdown-item', function () {
                    var data_monitor = dvice_office_monitor.row($(this).parents('tr')).data();
                    $(".office_name").val(data_monitor.office_name);
                    $(".dvice_name").val(data_monitor.dvice_name);
                    $(".dvice_sn").val(data_monitor.sn);
                    $(".parcel_in_it").val(data_monitor.parcel_in_it);
                    $(".date_in_it").val(data_monitor.date_in_it);
                    $(".damage").val(data_monitor.damage);
                    $(".in_it_note").val(data_monitor.in_it_note);
                    $(".dvice_type").val(data_monitor.dvice_type);
                    $(".dvice_num").val(data_monitor.num);
                    $(".sub_print_ticket").attr("href", '../views/auth_repair.php?dvice_num=' + data_monitor.count_in_it + '');
                    return dvice_num = data_monitor.count_in_it;
                });
            },
        })
            /* end data table monitor  */
    </script>
    <script>
        /* start data table printer  */
        var dvice_office_printer = $('#dvice_office_printer').DataTable({
            "ajax": {
                "url": '/it2/api/dvice/dvices_pc_in_it.php?dvice_id=printer',
                "dataSrc": '',
            },
            deferRender: true,
            columns: [
                { data: 'office_name' },
                { data: 'dvice_name' },
                { data: 'sn' },
                { data: 'damage' },
                { data: 'in_it_note' },
                { data: 'parcel_in_it' },
                { data: 'date_in_it' },
                {
                    data: '',
                    render: function () {
                        return `
                            <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton1">
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-pencil-square"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Edit_In_It_Modal">
                                        <label>تعديل البيانات</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-truck"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#To_Tts_Modal">
                                        <label>صيانه بقطاع الدعم الفنى</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-reply-fill"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Resend_To_Office_Modal">
                                        <label>اعاده الجهاز للمكتب</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-arrows-move"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Move_To_Modal">
                                        <label>نقل لمكتب اخر</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-x-octagon-fill"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Delete_Modal">
                                        <label>استنزال العهده</label>
                                    </a>
                                </li>
                            </ul>
                        `;
                    }
                },
            ],
            dom: 'irt',
            paging: false,
            "language": {
                "zeroRecords": "لا يوجد طابعات بقسم الدعم الفنى",
                "infoEmpty": "0",
                "info": "_TOTAL_",
            },
            "rowCallback": function (row, data) { },
            "initComplete": function () {
                $('printer_office_count').append($('#dvice_office_printer_info'));
                $('#dvice_office_printer tbody').on('click', '.dropdown-item', function () {
                    var data_printer = dvice_office_printer.row($(this).parents('tr')).data();
                    $(".office_name").val(data_printer.office_name);
                    $(".dvice_name").val(data_printer.dvice_name);
                    $(".dvice_sn").val(data_printer.sn);
                    $(".parcel_in_it").val(data_printer.parcel_in_it);
                    $(".date_in_it").val(data_printer.date_in_it);
                    $(".damage").val(data_printer.damage);
                    $(".in_it_note").val(data_printer.in_it_note);
                    $(".dvice_type").val(data_printer.dvice_type);
                    $(".dvice_num").val(data_printer.num);
                    $(".sub_print_ticket").attr("href", '../views/auth_repair.php?dvice_num=' + data_printer.count_in_it + '');
                    return dvice_num = data_printer.count_in_it;
                });
            },
        })
            /* end data table printer  */
    </script>
    <script>
        /* start data table pos  */
        var dvice_office_pos = $('#dvice_office_pos').DataTable({
            "ajax": {
                "url": '/it2/api/dvice/dvices_pc_in_it.php?dvice_id=pos',
                "dataSrc": '',
            },
            deferRender: true,
            columns: [
                { data: 'office_name' },
                { data: 'dvice_name' },
                { data: 'sn' },
                { data: 'damage' },
                { data: 'in_it_note' },
                { data: 'parcel_in_it' },
                { data: 'date_in_it' },
                {
                    data: '',
                    render: function () {
                        return `
                            <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton1">
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-pencil-square"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Edit_In_It_Modal">
                                        <label>تعديل البيانات</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-reply-fill"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Resend_To_Office_Modal">
                                        <label>اعاده الجهاز للمكتب</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-arrows-move"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Move_To_Modal">
                                        <label>نقل لمكتب اخر</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-x-octagon-fill"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Delete_Modal">
                                        <label>استنزال العهده</label>
                                    </a>
                                </li>
                            </ul>
                        `;
                    }
                },
            ],
            dom: 'irt',
            paging: false,
            "language": {
                "zeroRecords": "لا يوجد ماكينات نقاط بيع بقسم الدعم الفنى",
                "infoEmpty": "0",
                "info": "_TOTAL_",
            },
            "rowCallback": function (row, data) { },
            "initComplete": function () {
                $('pos_office_count').append($('#dvice_office_pos_info'));
                $('#dvice_office_pos tbody').on('click', '.dropdown-item', function () {
                    var data_pos = dvice_office_pos.row($(this).parents('tr')).data();
                    $(".office_name").val(data_pos.office_name);
                    $(".dvice_name").val(data_pos.dvice_name);
                    $(".dvice_sn").val(data_pos.sn);
                    $(".parcel_in_it").val(data_pos.parcel_in_it);
                    $(".date_in_it").val(data_pos.date_in_it);
                    $(".damage").val(data_pos.damage);
                    $(".in_it_note").val(data_pos.in_it_note);
                    $(".dvice_type").val(data_pos.dvice_type);
                    $(".dvice_num").val(data_pos.num);
                    $(".sub_print_ticket").attr("href", '../views/auth_repair.php?dvice_num=' + data_pos.count_in_it + '');
                    return dvice_num = data_pos.count_in_it;
                });
            },
        })
            /* end data table pos  */
    </script>
    <script>
        /* start data table network  */
        var dvice_office_network = $('#dvice_office_network').DataTable({
            "ajax": {
                "url": '/it2/api/dvice/dvices_pc_in_it.php?dvice_id=network',
                "dataSrc": '',
            },
            deferRender: true,
            columns: [
                { data: 'office_name' },
                { data: 'dvice_name' },
                { data: 'sn' },
                { data: 'damage' },
                { data: 'in_it_note' },
                { data: 'parcel_in_it' },
                { data: 'date_in_it' },
                {
                    data: '',
                    render: function () {
                        return `
                            <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton1">
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-pencil-square"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Edit_In_It_Modal">
                                        <label>تعديل البيانات</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-reply-fill"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Resend_To_Office_Modal">
                                        <label>اعاده الجهاز للمكتب</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-arrows-move"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Move_To_Modal">
                                        <label>نقل لمكتب اخر</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-x-octagon-fill"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Delete_Modal">
                                        <label>استنزال العهده</label>
                                    </a>
                                </li>
                            </ul>
                        `;
                    }
                },
            ],
            dom: 'irt',
            paging: false,
            "language": {
                "zeroRecords": "لا يوجد اجهزه شبكه بقسم الدعم الفنى",
                "infoEmpty": "0",
                "info": "_TOTAL_",
            },
            "rowCallback": function (row, data) { },
            "initComplete": function () {
                $('network_office_count').append($('#dvice_office_network_info'));
                $('#dvice_office_network tbody').on('click', '.dropdown-item', function () {
                    var data_network = dvice_office_network.row($(this).parents('tr')).data();
                    $(".office_name").val(data_network.office_name);
                    $(".dvice_name").val(data_network.dvice_name);
                    $(".dvice_sn").val(data_network.sn);
                    $(".parcel_in_it").val(data_network.parcel_in_it);
                    $(".date_in_it").val(data_network.date_in_it);
                    $(".damage").val(data_network.damage);
                    $(".in_it_note").val(data_network.in_it_note);
                    $(".dvice_type").val(data_network.dvice_type);
                    $(".dvice_num").val(data_network.num);
                    return dvice_num = data_network.count_in_it;
                });
            },
        })
            /* end data table network  */
    </script>
    <script>
        /* start data table postal  */
        var dvice_office_postal = $('#dvice_office_postal').DataTable({
            "ajax": {
                "url": '/it2/api/dvice/dvices_pc_in_it.php?dvice_id=postal',
                "dataSrc": '',
            },
            deferRender: true,
            columns: [
                { data: 'office_name' },
                { data: 'dvice_name' },
                { data: 'sn' },
                { data: 'damage' },
                { data: 'in_it_note' },
                { data: 'parcel_in_it' },
                { data: 'date_in_it' },
                {
                    data: '',
                    render: function () {
                        return `
                            <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton1">
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-pencil-square"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Edit_In_It_Modal">
                                        <label>تعديل البيانات</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-truck"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#To_Tts_Modal">
                                        <label>صيانه بقطاع الدعم الفنى</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-reply-fill"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Resend_To_Office_Modal">
                                        <label>اعاده الجهاز للمكتب</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-arrows-move"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Move_To_Modal">
                                        <label>نقل لمكتب اخر</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-x-octagon-fill"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Delete_Modal">
                                        <label>استنزال العهده</label>
                                    </a>
                                </li>
                            </ul>
                        `;
                    }
                },
            ],
            dom: 'irt',
            paging: false,
            "language": {
                "zeroRecords": "لا يوجد اجهزه بوستال بقسم الدعم الفنى",
                "infoEmpty": "0",
                "info": "_TOTAL_",
            },
            "rowCallback": function (row, data) { },
            "initComplete": function () {
                $('postal_office_count').append($('#dvice_office_postal_info'));
                $('#dvice_office_postal tbody').on('click', '.dropdown-item', function () {
                    var data_postal = dvice_office_postal.row($(this).parents('tr')).data();
                    $(".office_name").val(data_postal.office_name);
                    $(".dvice_name").val(data_postal.dvice_name);
                    $(".dvice_sn").val(data_postal.sn);
                    $(".parcel_in_it").val(data_postal.parcel_in_it);
                    $(".date_in_it").val(data_postal.date_in_it);
                    $(".damage").val(data_postal.damage);
                    $(".in_it_note").val(data_postal.in_it_note);
                    $(".dvice_type").val(data_postal.dvice_type);
                    $(".dvice_num").val(data_postal.num);
                    $(".sub_print_ticket").attr("href", '../views/auth_repair.php?dvice_num=' + data_postal.count_in_it + '');
                    return dvice_num = data_postal.count_in_it;
                });
            },
        })
            /* end data table postal  */
    </script>
    <script>
        /* start data table other  */
        var dvice_office_other = $('#dvice_office_other').DataTable({
            "ajax": {
                "url": '/it2/api/dvice/dvices_pc_in_it.php?dvice_id=other',
                "dataSrc": '',
            },
            deferRender: true,
            columns: [
                { data: 'office_name' },
                { data: 'dvice_name' },
                { data: 'sn' },
                { data: 'damage' },
                { data: 'in_it_note' },
                { data: 'parcel_in_it' },
                { data: 'date_in_it' },
                {
                    data: '',
                    render: function () {
                        return `
                            <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton1">
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-pencil-square"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Edit_In_It_Modal">
                                        <label>تعديل البيانات</label>
                                    </a>
                                </li>

                                <li class="d-flex align-items-center">
                                    <i class="bi bi-truck"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#To_Tts_Modal">
                                        <label>صيانه بقطاع الدعم الفنى</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-reply-fill"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Resend_To_Office_Modal">
                                        <label>اعاده الجهاز للمكتب</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-arrows-move"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Move_To_Modal">
                                        <label>نقل لمكتب اخر</label>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-x-octagon-fill"></i>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Delete_Modal">
                                        <label>استنزال العهده</label>
                                    </a>
                                </li>
                            </ul>
                        `;
                    }
                },
            ],
            dom: 'irt',
            paging: false,
            "language": {
                "zeroRecords": "لا يوجد اجهزه اخرى بقسم الدعم الفنى",
                "infoEmpty": "0",
                "info": "_TOTAL_",
            },
            "rowCallback": function (row, data) { },
            "initComplete": function () {
                $('other_office_count').append($('#dvice_office_other_info'));
                $('#dvice_office_other tbody').on('click', '.dropdown-item', function () {
                    var data_other = dvice_office_other.row($(this).parents('tr')).data();
                    $(".office_name").val(data_other.office_name);
                    $(".dvice_name").val(data_other.dvice_name);
                    $(".dvice_sn").val(data_other.sn);
                    $(".parcel_in_it").val(data_other.parcel_in_it);
                    $(".date_in_it").val(data_other.date_in_it);
                    $(".damage").val(data_other.damage);
                    $(".in_it_note").val(data_other.in_it_note);
                    $(".dvice_type").val(data_other.dvice_type);
                    $(".dvice_num").val(data_other.num);
                    $(".sub_print_ticket").attr("href", '../views/auth_repair.php?dvice_num=' + data_other.count_in_it + '');
                    return dvice_num = data_other.count_in_it;
                });
            },
        })
            /* end data table postal  */
    </script>
    <script>
        $('#Edit_In_It_Modal .btn-success').click(function () {
            var formData = {
                damage: $("#damage").val(),
                date_in_it: $("#date_in_it").val(),
                parcel_in_it: $("#parcel_in_it").val(),
                in_it_note: $("#in_it_note").val(),
                dvice_num: dvice_num,
            };
            $.ajax({
                type: "POST",
                url: "../api/dvice/edit_pc_in_it.php",
                data: formData,
                success: function (result) {
                    if (result == 'done') {
                        $("#Edit_In_It_Modal").modal('hide');
                        $("#damage").val('');
                        $("#in_it_note").val('');
                        $("#parcel_in_it").val('');
                        datatable_ajax_reload();
                    } else {
                        alert('لم يتم التعديل')
                    }
                }
            })
        })
    </script>
    <script>
        $('#To_Tts_Modal .btn-success').click(function () {
            var formData = {
                date_auth_repair: $("#date_auth_repair").val(),
                auth_repair: $("#auth_repair").val(),
                dvice_num: dvice_num
            };
            $.ajax({
                type: "POST",
                url: "../api/dvice/to_tts.php",
                data: formData,
                success: function (result) {
                    if (result == 'done') {
                        $("#To_Tts_Modal").modal('hide');
                        $("#date_auth_repair").val('');
                        $("#auth_repair").val('');
                        datatable_ajax_reload();
                    } else {
                        alert('تعذر تسليم الجهاز ')
                    }
                }
            })
        })
    </script>
    <script>
        $('#Resend_To_Office_Modal .btn-success').click(function () {
            var formData = {
                resen_to_office_date: $("#resen_to_office_date").val(),
                resen_to_office_by: $("#resen_to_office_by").val(),
                dvice_num: dvice_num
            };
            $.ajax({
                type: "POST",
                url: "../api/dvice/resend_to_office.php",
                data: formData,
                success: function (result) {
                    if (result == 'done') {
                        $("#Resend_To_Office_Modal").modal('hide');
                        $("#resen_to_office_date").val('');
                        $("#resen_to_office_by").val('');
                        datatable_ajax_reload();
                    } else {
                        alert(result)
                    }
                }
            })
        })
    </script>
    <script>
        $('#Delete_Modal .btn-success').click(function () {
            var formData = {
                delete_by: $("#delete_by").val(),
                delete_date: $("#delete_date").val(),
                dvice_num: dvice_num
            };
            $.ajax({
                type: "POST",
                url: "../api/dvice/to_delete.php",
                data: formData,
                success: function (result) {
                    if (result == 'done') {
                        $("#Delete_Modal").modal('hide');
                        $("#delete_by").val('');
                        $("#delete_date").val('');
                        datatable_ajax_reload();
                    } else {
                        alert(result)
                    }
                }
            })
        })
    </script>
    <script>
        $('#Replace_Pices_Modal .btn-success').click(function () {
            var imgs = {};
            $('.uploaded-area .card img').each(function(i, o) {
                // imgs.push($(this).attr('alt'));
                imgs[i] = $(this).attr('alt');
            });
            // console.log(imgs);

            replace_Pices = {};
            $('.replace_Pices .card input[type=radio]:checked').each(function(i, o) {
                replace_Pices[$(this).attr('value')] = $(this).attr('value');
            })
            var formData = {
                office_name: $("#office_name").val(),
                dvice_name: $("#dvice_name").val(),
                dvice_sn: $("#dvice_sn").val(),
                date_replace_Pices: $("#date_replace_Pices").val(),
                dvice_num: dvice_num,
                replace_Pices: replace_Pices,
                imgs : imgs
            };
            // console.log(formData)
            $.ajax({
                type: "POST",
                url: "../api/dvice/add_replace_pices_dvice.php",
                data: formData,
                beforeSend: function () {
                    $('#Replace_Pices_Modal .btn-success').html('جارى معالجه البيانات')
                },
                success: function (result) {
                    $('#Replace_Pices_Modal').modal('hide');
                    $('.uploaded-area').html('');
                    $('.replace_Pices .card input[type=radio]').prop('checked', false);
                    // alert(result)
                },
                complete: function () {
                    $('#Replace_Pices_Modal .btn-success').html('استبدال')
                },
            })
        })
    </script>
    <script>
    $('#Replace_Pices_Modal').on('click', '.bi-x-lg', function () {
    el_index = $(this).index('.bi-x-lg');
    file_name = $(".uploaded-area .card img").eq(el_index).attr('alt');
    $.ajax({
                type: "POST",
                url: "../views/draftes/delete.php",
                data: {file_name:file_name},
                success: function (result) {
                    $(".uploaded-area .card").eq(el_index).remove();
                }
            })
})
    </script>
    <script>
        $('#Move_To_Modal #move_to_btn').click(function () {
            var formData = {
                office_name_to: $("#office_name_to").val(),
                move_by: $("#move_by").val(),
                move_note: $("#move_note").val(),
                move_like: $("#move_like").val(),
                move_to_date: $("#move_to_date").val(),
                dvice_num: dvice_num
            };
            console.log(formData)
            $.ajax({
                type: "POST",
                url: "../api/dvice/move_to_in_it.php",
                data: formData,
                success: function (result) {
                    if (result == 'done') {
                        datatable_ajax_reload();
                        $("#Move_To_Modal").modal('hide');
                    } else {
                        alert('تعذر نقل الجهاز ')
                    }
                }
            })
        })
    </script>
    <script>
        $('#Move_To_Modal #auth_move_to_btn').click(function () {
            f = $('#office_name').val();
            t = $('#office_name_to').val();
            p = $('#dvice_name').val();
            s = $('#dvice_sn').val();
            d = $('#move_to_date').val();
        $(this).attr("href", "auth_move_to.php?f="+f+"&t="+t+"&p="+p+"&s="+s+"&d="+d+""); // Set herf value
        })
    </script>
    <script>
        $('#move_like').click(function () {
            if ($(this).val() != '') {
                $('#move_to_btn').removeClass('disabled');
            } else {
                $('#move_to_btn').addClass('disabled');
            }
        })
    </script>
    <!-- <script>
    $('#dvice_office_pos tbody').on('click', 'tr', function () {
        var table = $('#dvice_office_pos').DataTable();
        $(this).toggleClass('table-primary');
       var rowtablecount = table.rows('.table-primary').data().length;
       var pos_report = {};
            $('#dvice_office_pos tbody .table-primary').each(function(i, o) {
                // imgs.push($(this).attr('alt'));
                pos_report[i] = table.rows('.table-primary').data()[i];
            });
            console.log(pos_report)
        // console.log(table.rows('.table-primary').data());
        // console.log(table.rows('.table-primary').data()[0].count_in_it);
        // alert(table.rows('.table-primary').data().length + ' row(s) selected');
    });
    $('#button').click(function () {
    });
    </script> -->
    <script>
        function dismiss_modal_check() {
            var checkBox = document.getElementById("chk_btn");
            var add_dvice_btn = document.getElementById("add_dvice_btn");
            if (checkBox.checked == true) {
                add_dvice_btn.dataset.bsDismiss = "";
            } else {
                add_dvice_btn.dataset.bsDismiss = "modal";
            }
        }
    </script>
    <script>
        function datatable_ajax_reload() {
            dvice_office_pc.ajax.reload();
            dvice_office_monitor.ajax.reload();
            dvice_office_printer.ajax.reload();
            dvice_office_pos.ajax.reload();
            dvice_office_network.ajax.reload();
            dvice_office_postal.ajax.reload();
            dvice_office_other.ajax.reload();
        }
    </script>
    <script>
        function reset_radio(e) {
            var ele = document.getElementsByName(e);
            for (var i = 0; i < ele.length; i++)
                ele[i].checked = false;
        }
    </script>
    <script>
        var Replace_Pices_Modal = document.getElementById('Replace_Pices_Modal')
        Replace_Pices_Modal.addEventListener('shown.bs.modal', function (event) {
            const form = document.querySelector("#form_att"),
                fileInput = document.querySelector(".file-input"),
                progressArea = document.querySelector(".progress-area"),
                uploadedArea = document.querySelector(".uploaded-area");

            // form click event
            form.addEventListener("click", () => {
                fileInput.click();
            });

            fileInput.onchange = ({ target }) => {
                let image_valid = '';
                let file = target.files[0]; //getting file [0] this means if user has selected multiple files then get first one only
                let filesize = file.size || file.fileSize;
                let filetype = file.type;
                console.log(file.type)
                var file_ext = file.name.split('.').pop().toLowerCase();
                var valid_ext = ["png", "jpg", "jpeg", "gif"];
                if ( valid_ext.includes(file_ext)) {

                    image_valid = '';
                } else {

                    image_valid += 'غير مسموح لهذا الامتداد\n';
                }

                if (filesize <= (1024 * 1024)) {
                    image_valid = '';
                } else {
                    image_valid += 'المرفق اكبر من 1 ميجا\n';
                }

                if (filetype == 'image/jpeg') {
                    image_valid = '';
                } else {
                    image_valid += 'المرفق ليس كصوره . او صوره تالفه\n';
                }
                if(image_valid == ''){
                let fileName = file.name; //getting file name
                if (fileName.length >= 20) {
                    //if file name length is greater than 12 then split it and add ...
                    let splitName = fileName.split(".");
                    fileName = splitName[0].substring(0, 20) + "... ." + splitName[1];
                }
                uploadFile(fileName, file.name);
            }
            else {
                alert(image_valid);
            };
            };

            // file upload function
            function uploadFile(name, fullname) {
                let xhr = new XMLHttpRequest(); //creating new xhr object (AJAX)

                xhr.upload.addEventListener(
                    "progress",
                    ({ loaded, total, lengthComputable }) => {
                        //file uploading progress event
                        let fileLoadedpercentage = Math.floor((loaded / total) * 100); //getting percentage of loaded file size
                        let fileTotal = Math.floor(total / 1024); //gettting total file size in KB from bytes
                        let fileLoaded = Math.floor(loaded / 1024); //gettting total file size in KB from bytes
                        let fileSize;
                        // if file size is less than 1024 then add only KB else convert this KB into MB
                        fileTotal < 1024
                            ? (fileSize = fileTotal + " KB")
                            : (fileSize = fileTotal + " MB");
                        // : (fileSize = (loaded / (1024 * 1024)).toFixed(2) + " MB");
                        // if file size is less than 1024 then add only KB else convert this KB into MB
                        fileLoaded < 1024
                            ? (fileLoadedSize = fileLoaded + " KB")
                            : (fileLoadedSize = fileLoaded + " MB");
                        // : (fileSize = (loaded / (1024 * 1024)).toFixed(2) + " MB");
                        let progressHTML = `
                            <div class="card flex-row" aria-hidden="true" style="width: 49%;">
                                <div class="card-header d-flex flex-column">
                                </div>
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <img src="..." class="placeholder col-4" alt="" style="max-width: 55px;">
                                    <div class="progress w-50">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: ${fileLoadedpercentage}%" aria-valuenow="${fileLoadedpercentage}" aria-valuemin="0" aria-valuemax="100">
                                            ${fileLoadedpercentage}%
                                        </div>
                                    </div>
                                    <span class="size">${fileLoadedSize}</span>
                                </div>
                        </div>
                        `;
                        // uploadedArea.innerHTML = ""; //uncomment this line if you don't want to show upload history
                        uploadedArea.classList.add("onprogress");
                        progressArea.innerHTML = progressHTML;
                    }
                );
                xhr.upload.addEventListener("loadend", ({ loaded, total, lengthComputable }) => {
                    let fileLoadedpercentage = Math.floor((loaded / total) * 100); //getting percentage of loaded file size
                    let fileTotal = Math.floor(total / 1024); //gettting total file size in KB from bytes
                    let fileLoaded = Math.floor(loaded / 1024); //gettting total file size in KB from bytes
                    let fileSize;
                    // if file size is less than 1024 then add only KB else convert this KB into MB
                    fileTotal < 1024
                        ? (fileSize = fileTotal + " KB")
                        : (fileSize = fileTotal + " MB");
                    // : (fileSize = (loaded / (1024 * 1024)).toFixed(2) + " MB");
                    // if file size is less than 1024 then add only KB else convert this KB into MB
                    fileLoaded < 1024
                        ? (fileLoadedSize = fileLoaded + " KB")
                        : (fileLoadedSize = fileLoaded + " MB");
                    progressArea.innerHTML = "";
                    let uploadedHTML = `
                                <div class="card flex-row" style="width: 49%;">
                                    <div class="card-header d-flex flex-column">
                                        <a class="bi bi-chevron-double-down" href="../views/draftes/<?php echo $db; ?>/replace_pices_dvice/${fullname}" download></a>
                                        <i class="bi bi-x-lg" id="../views/draftes/<?php echo $db; ?>/replace_pices_dvice/${fullname}"></i>
                                    </div>
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <img src="../views/draftes/<?php echo $db; ?>/replace_pices_dvice/${fullname}" alt="${fullname}" style="max-width: 55px;">
                                        <span class="name">${name}</span>
                                        <span class="size">${fileSize}</span>
                                    </div>
                                </div>
                          `;
                    uploadedArea.classList.remove("onprogress");
                    // uploadedArea.innerHTML = uploadedHTML; //uncomment this line if you don't want to show upload history
                    uploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML); //remove this line if you don't want to show upload history
                })
                let data = new FormData(form); //FormData is an object to easily send form data
                xhr.open("POST", "../views/draftes/upload.php"); //sending post request to the specified URL
                xhr.send(data); //sending form data
            }
        })
    </script>
</body>

</html>