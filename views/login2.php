<!doctype html>
<html lang="ar">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>تسجيل الدخول</title>
  <link rel="icon" href="../../../it2/assets/images/it1.svg" type="image/x-icon" />
  <link rel="stylesheet" href="../assets/css/plugins/bootstrap5/bootstrap.rtl.min.css">
  <meta name="theme-color" content="#7952b3">
  <style>
    body {
      background: #e9e9e9;
    }

    .input-group-text {
      background-color: var(--bs-teal);
      border: 1px solid var(--bs-teal);
    }

    .form-control {
      border: 1px solid var(--bs-teal);
    }

    .all {
      display: flex;
      height: 100vh;
    }

    .div1 {
      height: 100%;
      width: 40%;
      display: flex;
      align-items: center;
      justify-content: center;
      direction: rtl;
    }

    .div2 {
      height: 100%;
      width: 60%;
      align-items: center;
      justify-content: center;
      display: flex;
      background-color: #2c3e50;
    }
  </style>
</head>

<body>
  <div class="all">
    <div class="div2">
      <div>
        <img src="../../../it2/assets/images/it1.svg" style="height:50vh" class="logo">
      </div>
    </div>
    <div class="div1">
      <div>
        <!-- <h3 class="mb-5">اداره اعمال الدعم الفنى ( فنيا و اداريا )</h3> -->
        <div class="input-group flex-nowrap mb-3">
          <span class="input-group-text col-sm-5" id="addon-wrapping">منطقه بريد</span>
          <select class="form-control" name="db" id="db">
            <option></option>
            <?php
              $string = file_get_contents("http://localhost/it2/jsons/all_area.json");
              $dream11Arr = json_decode($string, true);
              foreach ($dream11Arr as $key => $value) {?>
            <option value="<?php echo $key ?>">
              <?php echo $value; ?>
            </option>
            <?php } ?>
          </select>
        </div>
        <div class="input-group flex-nowrap mb-3">
          <span class="input-group-text col-sm-5" id="addon-wrapping">اسم المستخدم</span>
          <input type="text" class="form-control" placeholder="Username" aria-label="Username"
            aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap mb-3">
          <span class="input-group-text col-sm-5" id="addon-wrapping">كلمه المرور </span>
          <input type="text" class="form-control" placeholder="Password" aria-label="Password"
            aria-describedby="addon-wrapping">
        </div>
        <div class="d-flex justify-content-center">
          <button type="button" class="btn input-group-text">دخول</button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>