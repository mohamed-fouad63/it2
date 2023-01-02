<?php
include("../middleware/middleware_session.php");
session_login_auth('office_group');
?>
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset=utf-8>
    <title>مجموعات بريديه</title>
    <link rel="icon" href="../../../it2/assets/images/it1.svg" type="image/x-icon" />
    <link rel="stylesheet" href="../assets/css/plugins/bootstrap5/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="../assets/fonts/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/layout-rtl.css">
    <link rel="stylesheet" href="../assets/css/plugins/perfect-scrollbar.css">
    <style>
        /* */
        fieldset {
            text-align: center;
        }

        table {
            width: 100%
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

        tbody tr td:last-of-type button {
            float: left
        }

        .dataTables_info {
            display: inline-block
        }

        .btn:focus {
            outline: none;
            box-shadow: none;
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
        <ul class="navbar-nav ms-auto">
            <li>
                <div class="btn-group bt_div">
                    <button class="btn" tabindex="0" aria-controls="example" data-bs-toggle="modal"
                        data-placement="right" title="اضافه مجموعه بريديه" id="" data-bs-target="#Post_Group">
                        <label class="btn btn-primary">اضافه مجموعه جديده</label>
                    </button>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li>
                <?php include '..\layout\header\user.php';?>
            </li>
        </ul>
    </header>
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="mt-5">
                <div id="post_group" class="">
                </div>
            </div>
        </div>
        <?php include("../component/modals/office_group/del_office_group_modal.php") ?>
        <?php include("../component/modals/office_group/add_office_group_modal.php") ?>
        <?php include("../component/modals/office_group/add_post_office_modal.php") ?>
        <?php include("../component/modals/office_group/edit_post_office_modal.php") ?>
        <?php include("../component/modals/user_exit.php") ?>
        <?php include("../component/modals/user_password_change.php") ?>
    </div>
    <script src="../assets/js/plugins/jquery-3.6.0.js"></script>
    <script src="../assets/js/plugins/bootstrap5/popper.min.js"></script>
    <script src="../assets/js/plugins/bootstrap5/bootstrap.min.js"></script>
    <script src="../assets/js/pcoded.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/DataTables/jquery.dataTables.js"></script>
    <script src="../assets/DataTables/Buttons-2.2.3/js/dataTables.buttons.js"></script>
    <script src="../assets/DataTables/Buttons-2.2.3/js/buttons.print.js"></script>
        <script src="../js/log/change_password.js"></script>
    <script>
        var Settings = {
            auth_office_group: '<?= $_SESSION['office_group'] ?>',
            auth_add_office: '<?= $_SESSION['add_office'] ?>',
            auth_edit_office: '<?= $_SESSION['edit_office'] ?>',
        }
    </script>
    <script src="../data_tables/office_group.js"></script>
    <script src="../js/office/add_office_modal.js"></script>
    <script src="../js/office/del_group_modal.js"></script>
    <script src="../js/office/add_group.js"></script>
    <script src="../js/office/add_office.js"></script>
    <script src="../js/office/del_group.js"></script>
    <script src="../js/office/edit_office.js"></script>
    <script src="../js/global/dismiss_modal_check.js"></script>
</body>

</html>