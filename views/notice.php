<?php
include("../middleware/middleware_session.php");
session_login_auth('notice');
?>
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset=utf-8>
    <title>سجل البلاغات</title>
    <link rel="icon" href="../../../it2/assets/images/it1.svg" type="image/x-icon" />
    <link rel="stylesheet" href="../assets/css/plugins/bootstrap5/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="../assets/DataTables/DataTables-1.12.1/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="../assets/fonts/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/plugins/easy-autocomplete.css">
    <link rel="stylesheet" href="../assets/css/style2.css">
    <link rel="stylesheet" href="../assets/css/layout-rtl2.css">
    <link rel="stylesheet" href="../assets/css/plugins/perfect-scrollbar.css">
    <style>
        #main {
            position: relative;
            top: 35px;
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


        /* */
        .filte_div {
            width: 30rem;
        }

        thead tr {
            background-color: #8fbc8f33;
        }

        tbody tr td:last-of-type button{
            float:left
        }
        .dataTables_info {
            display: inline-block
        }
        .dataTables_wrapper .dataTables_filter,
        .dataTables_wrapper .dt-buttons,
        table thead #filterboxrow {
            display: none
        }

        .form-control {
            border: 1px solid var(--bs-teal);
        }

        thead tr {
            /* background-color: #8fbc8f33; */
        }

        table tbody tr td:nth-child(1) {
            width: 20%;
        }

        table tr {
            text-align: center;
        }

        table tbody tr td:nth-child(3) {
            width: 20%;
        }

        .filte_div {
            width: 30rem;
        }

        .fixedTableHeader {
            position: sticky;
            top: 51px;
        }

        th.sorting.sorting_desc:before {
            content: "\F145";
            font-family: 'bootstrap-icons';
            position: relative;
            display: block;
            opacity: 1;
            right: 80%;
            line-height: 9px;
            font-size: .9em;
        }

        th.sorting.sorting_asc:after {
            content: "\F124";
            font-family: 'bootstrap-icons';
            position: relative;
            display: block;
            opacity: 1;
            right: 80%;
            line-height: 9px;
            font-size: .9em;
        }

        div.dataTables_processing {
            position: fixed;
            top: 0;
            left: 0;
            margin: 0;
            padding: 400px;
            background-color: #26212133;
            height: 100%;
            width: 100%;
            z-index: 1000
        }
        .easy-autocomplete{
            width: 32%!important;
            margin-left: 1rem!important;
        }
        
    </style>
</head>

<body>
    <div class="pcoded-navbar navbar-collapsed" id="pcoded-navba">
        <?php include '..\layout\aside\nav.php';?>
    </div>
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
        <?php include '..\layout\header\m-hader.html';?>
        <ul class="navbar-nav ">
            <li>
                <div class="d-flex filte_div" role="search"></div>
            </li>
        </ul>
        <ul class="navbar-nav">
                        <li class="info_div">
                <button class="btn" tabindex="0" aria-controls="example" data-bs-toggle="modal" data-placement="right" title="اضافه  الجهاز" id="add_dvice" data-bs-target="#Add_Notice_Modal">
                    <i class="btn btn-primary bi bi-plus"></i>
                </button>
            </li>
            <li class="btn-group bt_div">
                
            </li>
            <li class="p-2">
                <select class="form-select" id="select_year" aria-label="Default select example">
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                </select>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li>
                <?php include '..\layout\header\user.php';?>
            </li>
        </ul>
    </header>
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <div id="main">
                <table id="example" class="table table-hover" style="width:100%">
                    <thead id="tablehead">
                        <tr id="filterboxrow">
                            <th>التاريخ</th>
                            <th>الجهه</th>
                            <th>القائم بالبلاغ</th>
                            <th>متلقى البلاغ</th>
                            <th>نوع البلاغ</th>
                            <th>تفاصيل البلاغ</th>
                            <th>الاجراء</th>
                            <th></th>
                        </tr>
                        <tr id="controlPanel">
                            <th>التاريخ</th>
                            <th>الجهه</th>
                            <th>القائم بالبلاغ</th>
                            <th>متلقى البلاغ</th>
                            <th>نوع البلاغ</th>
                            <th>تفاصيل البلاغ</th>
                            <th>الاجراء</th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
                <!-- start user exit  modal -->
        <?php include '../component/modals/user_exit.php'?>
        <?php include '../component/modals/notice/add_notice_modal.php'?>
        <?php include '../component/modals/notice/edit_notice_modal.php'?>
        <?php include '../component/modals/notice/delete_notice_modal.php'?>
        <!-- end user exit modal -->
        <!-- start user password  modal -->
        <?php include '../component/modals/user_password_change.php'?>
        <!-- end user password modal -->
    </div>

    <script src="../assets/js/plugins/jquery.min.js"></script>
    <script src="../assets/js/plugins/bootstrap5/popper.min.js"></script>
    <script src="../assets/js/plugins/bootstrap5/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/jquery.easy-autocomplete.min.js"></script>
    <script src="../assets/js/pcoded.min2.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/DataTables/jquery.dataTables.js"></script>
    <script src="../assets/DataTables/Buttons-2.2.3/js/dataTables.buttons.js"></script>
    <script src="../assets/DataTables/Buttons-2.2.3/js/buttons.print.js"></script>
    <script src="../assets/DataTables/Buttons-2.2.3/js/buttons.html5.min.js"></script>
    <script src="../assets/DataTables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="../data_tables/all_notice.js"></script>
    <script src="../js/notice/add_notice.js"></script>
    <script src="../js/notice/edit_notice.js"></script>
    <script src="../js/notice/remove_notice.js"></script>
    <script src="../js/notice/easyAutocomplete.js"></script>
    <script src="../js/log/change_password.js"></script>
</body>

</html>