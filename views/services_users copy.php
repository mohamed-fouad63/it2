<?php
include("../middleware/middleware_session.php");
session_login_auth('all_misin');
?>
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset=utf-8>
    <title>مستخدمين الخدمات</title>
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

        .dataTables_wrapper .dataTables_filter,
        .dataTables_wrapper .dt-buttons,
        table thead #filterboxrow {
            display: none
        }

        .form-control {
            border: 1px solid var(--bs-teal);
        }

        table tr {
            text-align: center;
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
        <ul class="navbar-nav ml-auto">
            <li>
                <?php include '..\layout\header\user.php';?>
            </li>
        </ul>
    </header>
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <div id="main">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item w-50" role="presentation">
                        <button class="nav-link w-100 active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">
                            تعديل صلاحيات مستخدم
                        </button>
                    </li>
                    <li class="nav-item w-50" role="presentation">
                        <button class="nav-link w-100" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">مستخدمين مكتب</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="mx-auto w-25">
                            <input type="search" class="form-control" id="input_user_search" placeholder="">
                        </div>
                        <fieldset class="mb-3" id="">
                            <legend>
                                <span class="count me-2" id=""></span>التجزئه الماليه
                            </legend>
                            <table class="table align-middle table-hover" id="" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>اسم المكتب</th>
                                        <th>كود مالى</th>
                                        <th>اسم المستخدم</th>
                                        <th>رقم الملف</th>
                                        <th>الرقم القومى</th>
                                        <th>الصلاحيه</th>
                                        <th>رقم المحمول</th>
                                        <th>تاريخ اعطاء الصلاحيه</th>
                                    </tr>
                                </thead>
                            </table>
                        </fieldset>
                        <!-- end pc -->
                        <!-- srart monitor -->
                        <fieldset class="mb-3" id="">
                            <legend>
                                <span class="count me-2" id=""></span>الحوالات و التحصيل

                            </legend>
                            <table id="" class="table align-middle table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>اسم المكتب</th>
                                        <th>الكود المالى</th>
                                        <th>اسم الموظف</th>
                                        <th>الصلاحيه</th>
                                        <th>رقم الملف</th>
                                        <th>الرقم القومى</th>
                                        <th>الاجراء</th>
                                    </tr>
                                </thead>
                            </table>
                        </fieldset>
                        <!-- end montor -->
                        <!-- start printer -->
                        <fieldset class="mb-3" id="">
                            <legend>
                                <span class="count me-2" id=""></span>pos Bitel
                            </legend>
                            <table id="" class="table align-middle table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>اسم المكتب</th>
                                        <th>الكود المالى</th>
                                        <th>رقم الماكينه</th>
                                        <th>s / n</th>
                                        <th>الاسم رباعى</th>
                                        <th>صلاحيه</th>
                                        <th>رقم الملف</th>
                                        <th>الاجراء</th>
                                    </tr>
                                </thead>
                            </table>
                        </fieldset>
                        <!-- end printer -->
                        <!-- start pos -->
                        <fieldset class="mb-3" id="">
                            <legend>
                                <span class="count me-2" id=""></span>pos verifone
                            </legend>
                            <button id="add_v200t_row">Add new row</button>
                            <table id="v200t" class="table align-middle table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>اسم المكتب</th>
                                        <th>الكود المالى</th>
                                        <th>رقم الماكينه</th>
                                        <th>s / n</th>
                                        <th>الاسم رباعى</th>
                                        <th>صلاحيه</th>
                                        <th>رقم الملف</th>
                                        <th>الاجراء</th>
                                        <th></th>
                                    </tr>
                                </thead>
                            </table>
                        </fieldset>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        ...</div>
                </div>
            </div>
        </div>
        <!-- start user exit  modal -->
        <?php include '../component/modals/user_exit.php'?>
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
    <script src="../js/dvices_office/live_search.js"></script>
    <script src="../js/tbl_user/services_users_search_live.js"></script>
    <script src="../js/log/change_password.js"></script>
    <script src="../data_tables/services_users/user_services_auth.js"></script>
    <script>

    </script>
</body>

</html>