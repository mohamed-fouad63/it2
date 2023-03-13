<?php
session_start();
$db = $_SESSION['db'];
// if(!empty($_POST)){
include_once "../../../conn/conn.php";
$input_search = $_POST['input_search'];
// $input_search = "محمد فؤاد عبدالفتاح عثمان";
$query_v200t_users = "SELECT * FROM `bitel_users` WHERE stuff_name = '" . $input_search . "' AND stuff_name <> '' ";
$query_v200t_users_removing = "SELECT * FROM `bitel_users` WHERE stuff_name = '" . $input_search . "' AND stuff_action <> 'removing' AND stuff_name <> '' ";
$query_names = "SELECT * FROM `stuff_names` WHERE stuff_name = '" . $input_search . "' ";
$result_v200t_users = mysqli_query($conn, $query_v200t_users);
$row_count = mysqli_num_rows($result_v200t_users);
$result_names = mysqli_query($conn, $query_names);
$result_v200t_users_removing = mysqli_query($conn, $query_v200t_users_removing);
$row_count_names = mysqli_num_rows($result_names);
$row_count_users_removing = mysqli_num_rows($result_v200t_users_removing);

if ($row_count > 0) {
    while ($row_v200t_users = mysqli_fetch_assoc($result_v200t_users)) {
        $GLOBALS['z'] = $row_v200t_users['office_name'];
        $GLOBALS['m'] = $row_v200t_users['money_code'];
        $GLOBALS['n'] = $row_v200t_users['stuff_name'];
        $GLOBALS['id'] = $row_v200t_users['id'];
        $stuff_action = $row_v200t_users['stuff_action'];
        $dvice_name = $row_v200t_users['dvice_name'];
        if ($dvice_name == 'BITEL IC3600 PURCHASES') {
            $purchases_pos = 'purchases_pos';
        } else {
            $purchases_pos = '';
        }
        switch ($stuff_action) {
            case 'adding':
                $addint_btn = "bg-primary";
                $adding_text = " جارى الاضافه";
                $do_action_element = '<div class="p-1 ' . $addint_btn . ' text-white">' . $adding_text . '</div>';
                $option_action = "<option value='adding'>اضاف</option>";
                break;
            case 'resetting':
                $addint_btn = "bg-warning";
                $adding_text = " جارى الاستعاده";
                $do_action_element = '<div class="p-1 ' . $addint_btn . ' text-white">' . $adding_text . '</div>';
                $option_action = "<option value='resetting'>استعاده كلمه المرور</option>";
                break;
            case 'removing':
                $addint_btn = "bg-danger";
                $adding_text = " جارى الحذف";
                $do_action_element = '<div class="p-1 ' . $addint_btn . ' text-white">' . $adding_text . '</div>';
                $option_action = "<option value='removing'>حذف</option>";
                break;
            default:
                $addint_btn = "bg-success";
                $adding_text = "تقديم الطلب";
                $do_action_element = '<button type="button" class="btn btn-success">تقديم الطلب</button>';
                $option_action = '
                <option value="">
                </option><option value="removing">حذف</option>
                <option value="resetting">استعاده كلمه المرور</option>';
                break;
        }

        $row_read_dvice_json[] = array(
            'office_name' => '
                    <select class="form-select">
                        <option value="">' . $row_v200t_users['office_name'] . '</option>
                    </select>',
            'money_code' => $row_v200t_users['money_code'],
            'pos_terminal' => '
                    <select class="form-select ' . $purchases_pos . '">
                        <option data-bitel_type="' . $row_v200t_users['dvice_name'] . '">' . $row_v200t_users['pos_terminal'] . '</option>
                    </select>
                ',
            'sn' => $row_v200t_users['sn'],
            'names' => $row_v200t_users['stuff_name'],
            'auth' => '
                    <select class="form-select">
                        <option>' . $row_v200t_users['auth'] . '</option>
                    </select>
                ',
            'id' => $row_v200t_users['id'],
            'action' => '
                    <select class="form-select" aria-label="Default select example">
                        ' . $option_action . '
                    </select>
                ',
            'do_action' => $do_action_element,
        );
    }
    ;
    if ($row_count_users_removing == 0) {
        $select_office = 'select_office';
        $GLOBALS['m'] = '';
    } else {
        $select_office = '';
    }
    $row_read_dvice_json[] = array(
        'office_name' => '
                    <select class="form-select ' . $select_office . '">
                        <option value=' . $m . '>' . $z . '</option>
                    </select>',
        'money_code' => $m,
        'pos_terminal' => '
                    <select class="form-select select_bitel_terminal">
                        <option></option>
                    </select>
                ',
        'sn' => '',
        'names' => $n,
        'auth' => '
                    <select class="form-select">
                        <option></option>
                        <option value="pos_manager">مدير</option>
                        <option value="pos_stuff">موظف</option>
                        <option value="pos_manger_stuff">مدير + موظف</option>
                    </select>
                ',
        'id' => $id,
        'action' => '
                    <select class="form-select" aria-label="Default select example">
                        <option></option>
                        <option value="adding">اضاف</option>
                    </select>
                ',
        'do_action' => '
                <button type="button" class="btn btn-success">تقديم الطلب</button>
                ',
    );

    echo json_encode($row_read_dvice_json, JSON_UNESCAPED_UNICODE);
} elseif ($row_count_names == 1) {
    while ($row_names = mysqli_fetch_assoc($result_names)) {
        $row_read_dvice_json[] = [
            'office_name' => '
                    <select class="form-select select_office">
                    </select>',
            'money_code' => '',
            'pos_terminal' => '
                <select class="form-select select_bitel_terminal">
                </select>
                ',
            'sn' => '',
            'names' => $row_names['stuff_name'],
            'auth' => '
                    <select class="form-select">
                        <option></option>
                        <option value="pos_manager">مدير</option>
                        <option value="pos_stuff">موظف</option>
                        <option value="pos_manger_stuff">مدير + موظف</option>
                    </select>
                ',
            'id' => $row_names['id'],
            'action' => '
                    <select class="form-select">
                        <option></option>
                        <option value="adding">اضافه</option>
                    </select>
                ',
            'do_action' => '
                    <button type="button" class="btn btn-success">تقديم الطلب</button>
                ',
        ];
    }
    echo json_encode($row_read_dvice_json, JSON_UNESCAPED_UNICODE);
} else {
    $row_read_dvice_json[] = [
        'office_name' => '',
        'money_code' => '',
        'pos_terminal' => '',
        'sn' => '',
        'names' => '',
        'auth' => '',
        'id' => '',
        'action' => '',
        'do_action' => '',
    ];
    echo json_encode($row_read_dvice_json, JSON_UNESCAPED_UNICODE);
}
//             } else {
//      header('location:../../views');
// }