<?php
session_start();
$db = $_SESSION['db'];
// if(!empty($_POST)){
include_once "../../conn/conn.php";
// $input_search = $_POST['input_search'];
$input_search = "محمد فؤاد عبدالفتاح عثمان";
$query_v200t_users = "SELECT * FROM `v200t_users` WHERE names LIKE '".$input_search."' ";
$query_names = "SELECT * FROM `name` WHERE names LIKE '".$input_search."' ";
$result_v200t_users = mysqli_query($conn, $query_v200t_users);
$result_names = mysqli_query($conn, $query_names);
$row_count = mysqli_num_rows($result_v200t_users);
$row_count_names = mysqli_num_rows($result_names);

if($row_count > 0 ){
    while($row_v200t_users=mysqli_fetch_assoc($result_v200t_users)){
        $GLOBALS['z'] = $row_v200t_users['office_name'];
        $GLOBALS['m'] = $row_v200t_users['money_code'];
        $GLOBALS['n'] = $row_v200t_users['names'];
        $GLOBALS['id'] = $row_v200t_users['id'];
            $row_read_dvice_json[] = array(
                'office_name' => '
                    <select class="form-select">
                        <option value="">'.$row_v200t_users['office_name'].'</option>
                    </select>',
                'money_code' => $row_v200t_users['money_code'],
                'pos_terminal' =>'
                    <select class="form-select">
                        <option>'.$row_v200t_users['pos_terminal'].'</option>
                    </select>
                ',
                'sn' => $row_v200t_users['sn'],
                'names' => $row_v200t_users['names'],
                'auth' =>'
                    <select class="form-select">
                        <option>'.$row_v200t_users['auth'].'</option>
                    </select>
                ',
                'id' => $row_v200t_users['id'],
                'action' => '
                    <select class="form-select" aria-label="Default select example">
                        <option selected></option>
                        <option value="1">حذف</option>
                        <option value="2">استعاده كلمه المرور</option>
                    </select>
                ',
                'do_action' => '
                 <button type="button" class="btn btn-success">تقديم الطلب</button>
                ',
            );
            
        };
            $row_read_dvice_json[] = array(
                'office_name' => '
                    <select class="form-select">
                        <option selected value='.$m.'>'.$z.'</option>
                    </select>',
                'money_code' =>$m,
                'pos_terminal' =>'
                    <select class="form-select select_v200t_terminal">
                        <option></option>
                    </select>
                ',
                'sn' =>'',
                'names' =>$n,
                'auth' =>'
                    <select class="form-select">
                        <option></option>
                        <option>مدير</option>
                        <option value="1">موظف</option>
                        <option value="1">مدير + موظف</option>
                    </select>
                ',
                'id' =>$id,
                'action' => '
                    <select class="form-select" aria-label="Default select example">
                        <option selected></option>
                        <option value="1">اضاف</option>
                    </select>
                ',
                'do_action' => '
                <button type="button" class="btn btn-success">تقديم الطلب</button>
                ',
                );
        echo json_encode($row_read_dvice_json,JSON_UNESCAPED_UNICODE);
    }
    elseif ($row_count_names == 1 ){
            while($row_names=mysqli_fetch_assoc($result_names)){
            $row_read_dvice_json[] = [
                'office_name' => '
                    <select class="form-select select_office">
                    </select>',
                'money_code' => '',
                'pos_terminal' => '
                <select class="form-select select_v200t_terminal">
                </select>
                ',
                'sn' => '',
                'names' => $row_names['names'],
                'auth' => '
                    <select class="form-select">
                        <option></option>
                        <option>مدير</option>
                        <option value="1">موظف</option>
                        <option value="1">مدير + موظف</option>
                    </select>
                ',
                'id' => $row_names['id'],
                'action' => '
                    <select class="form-select">
                        <option></option>
                        <option value="1">اضافه</option>
                    </select>
                ',
                'do_action' => '
                    <button type="button" class="btn btn-success">تقديم الطلب</button>
                ',
        ];
        }
        echo json_encode($row_read_dvice_json,JSON_UNESCAPED_UNICODE);
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
        echo json_encode($row_read_dvice_json,JSON_UNESCAPED_UNICODE);
    }
//             } else {
//      header('location:../../views');
// }