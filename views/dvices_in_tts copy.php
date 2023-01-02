<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset=utf-8>
    <title>اجهزه بقطاع الدعم الفنى </title>
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
                                    <th>التاريخ</th>
                                    <th>رقم الاذن</th>
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
                                    <th>التاريخ</th>
                                    <th>رقم الاذن</th>
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
                                    <th>التاريخ</th>
                                    <th>رقم الاذن</th>
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
                                    <th>التاريخ</th>
                                    <th>رقم الاذن</th>
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
                                    <th>التاريخ</th>
                                    <th>رقم الاذن</th>
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
                                    <th>التاريخ</th>
                                    <th>رقم الاذن</th>
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
                                    <th>التاريخ</th>
                                    <th>رقم الاذن</th>
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
        <?php include '../component/modals/edit_in_tts_modal.php'?>
        <!-- end edit modal -->
        <!-- start replace dvice modal -->
        <?php include '../component/modals/replace_pices_modal.php'?>
        <!-- end replace dvice modal -->
        <!-- start resend dvice modal -->
        <?php include '../component/modals/resend_to_it_modal.php'?>
        <!-- end resend dvice modal -->
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
                "url": '/it2/api/dvice/dvices_pc_in_tts.php?dvice_id=pc',
                "dataSrc": '',
            },
            deferRender: true,
            columns: [
                { data: 'office_name' },
                { data: 'dvice_name' },
                { data: 'sn' },
                { data: 'damage' },
                { data: 'in_it_note' },
                { data: 'date_auth_repair' },
                { data: 'auth_repair' },
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
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Edit_In_Tts_Modal">
                                <label>تعديل البيانات</label>
                                </a>
                                </li>
                                <li class="d-flex align-items-center">
                                <i class="bi bi-arrow-repeat"></i>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Replace_Pices_Modal">
                                <label>استبدال قطع غيار</label>
                                </a>
                                </li>
                                <li class="d-flex align-items-center">
                                <i class="bi bi-reply-fill"></i>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Resen_To_It_Modal">
                                <label>اعاده الجهاز لقسم الدعم الفنى</label>
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
                "zeroRecords": "لا يوجد اجهزه بقطاع الدعم الفنى",
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
                    $(".auth_repair").val(data_pc.auth_repair);
                    $(".date_auth_repair").val(data_pc.date_auth_repair);
                    $(".damage").val(data_pc.damage);
                    $(".in_it_note").val(data_pc.in_it_note);
                    $(".dvice_type").val(data_pc.dvice_type);
                    $(".dvice_num").val(data_pc.num);
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
                "url": '/it2/api/dvice/dvices_pc_in_tts.php?dvice_id=monitor',
                "dataSrc": '',
            },
            deferRender: true,
            columns: [
                { data: 'office_name' },
                { data: 'dvice_name' },
                { data: 'sn' },
                { data: 'damage' },
                { data: 'in_it_note' },
                { data: 'date_auth_repair' },
                { data: 'auth_repair' },
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
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Edit_In_Tts_Modal">
                                <label>تعديل البيانات</label>
                                </a>
                                </li>
                                <li class="d-flex align-items-center">
                                <i class="bi bi-reply-fill"></i>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Resen_To_It_Modal">
                                <label>اعاده الجهاز لقسم الدعم الفنى</label>
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
                "zeroRecords": "لا يوجد شاشات بقطاع الدعم الفنى",
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
                    $(".auth_repair").val(data_monitor.auth_repair);
                    $(".date_auth_repair").val(data_monitor.date_auth_repair);
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
                "url": '/it2/api/dvice/dvices_pc_in_tts.php?dvice_id=printer',
                "dataSrc": '',
            },
            deferRender: true,
            columns: [
                { data: 'office_name' },
                { data: 'dvice_name' },
                { data: 'sn' },
                { data: 'damage' },
                { data: 'in_it_note' },
                { data: 'date_auth_repair' },
                { data: 'auth_repair' },
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
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Edit_In_Tts_Modal">
                                <label>تعديل البيانات</label>
                                </a>
                                </li>
                                <li class="d-flex align-items-center">
                                <i class="bi bi-reply-fill"></i>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Resen_To_It_Modal">
                                <label>اعاده الجهاز لقسم الدعم الفنى</label>
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
                "zeroRecords": "لا يوجد طابعات بقطاع الدعم الفنى",
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
                    $(".auth_repair").val(data_printer.auth_repair);
                    $(".date_auth_repair").val(data_printer.date_auth_repair);
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
                "url": '/it2/api/dvice/dvices_pc_in_tts.php?dvice_id=pos',
                "dataSrc": '',
            },
            deferRender: true,
            columns: [
                { data: 'office_name' },
                { data: 'dvice_name' },
                { data: 'sn' },
                { data: 'damage' },
                { data: 'in_it_note' },
                { data: 'date_auth_repair' },
                { data: 'auth_repair' },
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
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Edit_In_Tts_Modal">
                                <label>تعديل البيانات</label>
                                </a>
                                </li>
                                <li class="d-flex align-items-center">
                                <i class="bi bi-reply-fill"></i>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Resen_To_It_Modal">
                                <label>اعاده الجهاز لقسم الدعم الفنى</label>
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
                "zeroRecords": "لا يوجد نقاط بيع بقطاع الدعم الفنى",
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
                    $(".auth_repair").val(data_pos.auth_repair);
                    $(".date_auth_repair").val(data_pos.date_auth_repair);
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
                "url": '/it2/api/dvice/dvices_pc_in_tts.php?dvice_id=network',
                "dataSrc": '',
            },
            deferRender: true,
            columns: [
                { data: 'office_name' },
                { data: 'dvice_name' },
                { data: 'sn' },
                { data: 'damage' },
                { data: 'in_it_note' },
                { data: 'date_auth_repair' },
                { data: 'auth_repair' },
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
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Edit_In_Tts_Modal">
                                <label>تعديل البيانات</label>
                                </a>
                                </li>
                                <li class="d-flex align-items-center">
                                <i class="bi bi-reply-fill"></i>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Resen_To_It_Modal">
                                <label>اعاده الجهاز لقسم الدعم الفنى</label>
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
                "zeroRecords": "لا يوجد اجهزه شبكه بقطاع الدعم الفنى",
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
                    $(".auth_repair").val(data_network.auth_repair);
                    $(".date_auth_repair").val(data_network.date_auth_repair);
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
                "url": '/it2/api/dvice/dvices_pc_in_tts.php?dvice_id=postal',
                "dataSrc": '',
            },
            deferRender: true,
            columns: [
                { data: 'office_name' },
                { data: 'dvice_name' },
                { data: 'sn' },
                { data: 'damage' },
                { data: 'in_it_note' },
                { data: 'date_auth_repair' },
                { data: 'auth_repair' },
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
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Edit_In_Tts_Modal">
                                <label>تعديل البيانات</label>
                                </a>
                                </li>
                                <li class="d-flex align-items-center">
                                <i class="bi bi-reply-fill"></i>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Resen_To_It_Modal">
                                <label>اعاده الجهاز لقسم الدعم الفنى</label>
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
                "zeroRecords": "لا يوجد اجهزه بوستال بقطاع الدعم الفنى",
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
                    $(".auth_repair").val(data_postal.auth_repair);
                    $(".date_auth_repair").val(data_postal.date_auth_repair);
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
                "url": '/it2/api/dvice/dvices_pc_in_tts.php?dvice_id=other',
                "dataSrc": '',
            },
            deferRender: true,
            columns: [
                { data: 'office_name' },
                { data: 'dvice_name' },
                { data: 'sn' },
                { data: 'damage' },
                { data: 'in_it_note' },
                { data: 'date_auth_repair' },
                { data: 'auth_repair' },
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
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Edit_In_Tts_Modal">
                                <label>تعديل البيانات</label>
                                </a>
                                </li>
                                <li class="d-flex align-items-center">
                                <i class="bi bi-reply-fill"></i>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Resen_To_It_Modal">
                                <label>اعاده الجهاز لقسم الدعم الفنى</label>
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
                "zeroRecords": "لا يوجد بقطاع الدعم الفنى",
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
                    $(".auth_repair").val(data_other.auth_repair);
                    $(".date_auth_repair").val(data_other.date_auth_repair);
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
        $('#Edit_In_Tts_Modal .btn-success').click(function () {
            var formData = {
                date_auth_repair: $("#date_auth_repair").val(),
                auth_repair: $("#auth_repair").val(),
                dvice_num: dvice_num,
            };
            console.log(formData)
            $.ajax({
                type: "POST",
                url: "../api/dvice/edit_pc_in_tts.php",
                data: formData,
                success: function (result) {
                    if (result == 'done') {
                        $("#Edit_In_Tts_Modal").modal('hide');
                        datatable_ajax_reload();
                    } else {
                        alert('لم يتم التعديل')
                    }
                }
            })
        })
    </script>
    <script>
        $('#Replace_Pices_Modal .btn-success').click(function () {
            var formData = {
                office_name: $("#office_name").val(),
                dvice_name: $("#dvice_name").val(),
                dvice_sn: $("#dvice_sn").val(),
                date_replace_Pices: $("#date_replace_Pices").val(),
                replace_Pices: {
                    motherboard: $("input[type=radio][name=Motherboard]:checked").val(),
                    processor: $("input[type=radio][name=Processor]:checked").val(),
                    power: $("input[type=radio][name=Powersupply]:checked").val(),
                    hard: $("input[type=radio][name=Hraddisk]:checked").val(),
                    ram: $("input[type=radio][name=Ram]:checked").val(),
                },
                dvice_num: dvice_num
            };
            $.ajax({
                type: "POST",
                url: "../api/dvice/add_replace_pices_dvice.php",
                data: formData,
                beforeSend: function () {
                    $('#Replace_Pices_Modal .btn-success').html('جارى معالجه البيانات')
                },
                success: function (result) {
                        $('#Replace_Pices_Modal').modal('hide');
                        $('input[type="radio"]').prop('checked', false);
                        // alert(result)
                },
                complete: function () {
                    $('#Replace_Pices_Modal .btn-success').html('استبدال')
                },
            })
        })
    </script>
        <script>
        function reset_radio(e) {
            var ele = document.getElementsByName(e);
            for (var i = 0; i < ele.length; i++)
                ele[i].checked = false;
        }
    </script>
    <script>
        $('#Resen_To_It_Modal .btn-success').click(function () {
            var formData = {
                date_from_auth_repair: $("#date_from_auth_repair").val(),
                by_from_auth_repair: $("#by_from_auth_repair").val(),
                dvice_num: dvice_num
            };
            $.ajax({
                type: "POST",
                url: "../api/dvice/resend_to_it.php",
                data: formData,
                success: function (result) {
                    if (result == 'done') {
                        $("#Resen_To_It_Modal").modal('hide');
                        datatable_ajax_reload();
                    } else {
                        alert(result)
                    }
                }
            })
        })
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
            // dvice_office_other.ajax.reload(function () {
            //     if (!dvice_office_other.data().count()) {
            //         $('#dvice_office_other_field').css('display', 'none');
            //     } else {
            //         $('#dvice_office_other_field').css('display', 'block')
            //     };
            // });
        }
    </script>
    <script>
        function reset_radio(e) {
            var ele = document.getElementsByName(e);
            for (var i = 0; i < ele.length; i++)
                ele[i].checked = false;
        }
    </script>
</body>

</html>