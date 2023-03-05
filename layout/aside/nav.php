<?php
 
?>
<div class="navbar-wrapper">
    <div class="navbar-content scroll-div ">
        <div style="height:50px">
        </div>
        <ul class="nav pcoded-inner-navbar ">
            <?php if($_SESSION['office_group'] == 1){?>
            <li class="nav-item pcoded-hasmenu">
                <a href="#!" class="nav-link ">
                    <span class="pcoded-micon"><i class="bi bi-building"></i></span>
                    <span class="pcoded-mtext">المكاتب</span>
                </a>
                <ul class="pcoded-submenu">
                    <li><a href="/it2/views/office_group.php">مجموعه بريديه</a></li>
                </ul>
            </li>
            <?php } ?>
            <?php if($_SESSION['post'] == 1 ||
                     $_SESSION['in_it'] == 1 ||
                     $_SESSION['in_tts'] == 1 ||
                     $_SESSION['move'] == 1){?>
            <li class="nav-item pcoded-hasmenu">
                <a href="#!" class="nav-link ">
                    <span class="pcoded-micon"><i class="bi bi-pc-display"></i></span>
                    <span class="pcoded-mtext">الاجهزه</span>
                </a>
                <ul class="pcoded-submenu">
                <?php if($_SESSION['post'] == 1){?>
                    <li><a href="/it2/views/dvices_office.php">اجهزه مكتب</a></li>
                    <?php } ?>
                    <?php if($_SESSION['in_it'] == 1){?>
                    <li><a href="/it2/views/dvices_in_it.php">اجهزه بقسم الدعم الفنى</a></li>
                    <?php } ?>
                    <?php if($_SESSION['in_tts'] == 1){?>
                    <li><a href="/it2/views/dvices_in_tts.php">اجهزه مسحوبه</a></li>
                    <?php } ?>
                    <?php if($_SESSION['move'] == 1){?>
                    <li><a href="/it2/views/temp_moved.php">اجهزه منقوله مؤقتا</a></li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>
            <?php if($_SESSION['all_dvices'] == 1 ||
                     $_SESSION['Incoming'] == 1 ||
                     $_SESSION['move_dvices'] == 1 ||
                     $_SESSION['replace_dvices'] == 1 ||
                     $_SESSION['deleted_dvices'] == 1 ||
                     $_SESSION['notice'] == 1 ||
                     $_SESSION['move_dvices'] == 1 ||
                     $_SESSION['all_misin'] == 1 ){?>
            <li class="nav-item pcoded-hasmenu">
                <a href="#!" class="nav-link ">
                    <span class="pcoded-micon"><i class="bi bi-journal-bookmark"></i></span>
                    <span class="pcoded-mtext">السجلات</span>
                </a>
                <ul class="pcoded-submenu">
                    
                    <?php if($_SESSION['all_dvices'] == 1){?>
                    <li><a href="/it2/views/all_dvices.php">سجل الاجهزه</a></li>
                    <?php } ?>
                    <?php if($_SESSION['Incoming'] == 1){?>
                    <li><a href="/it2/views/repair_dvices.php">سجل الصيانه</a></li>
                    <?php } ?>
                    <?php if($_SESSION['move_dvices'] == 1){?>
                    <li><a href="/it2/views/moveing_dvices.php">سجل المنقول</a></li>
                    <?php } ?>
                    <?php if($_SESSION['replace_dvices'] == 1){?>
                    <li><a href="/it2/views/replace_dvices.php"> سجل تغيير مكونات الاجهزه</a></li>
                    <?php } ?>
                    <?php if($_SESSION['deleted_dvices'] == 1){?>
                    <li><a href="/it2/views/deleted_dvices.php">سجل استنزال العهد</a></li>
                    <?php } ?>
                    <?php if($_SESSION['notice'] == 1){?>
                    <li><a href="/it2/views/notice.php">سجل البلاغات</a></li>
                    <?php } ?>
                    <?php if($_SESSION['all_misin'] == 1){?>
                    <li><a href="/it2/views/all_mission.php">سجل التحركات</a></li>
                    <li><a href="/it2/views/vacation.php">سجل الاجازات</a></li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>
            <?php if($_SESSION['my_misin'] == 1 || $_SESSION['misins'] == 1 ){?>
            <li class="nav-item pcoded-hasmenu">
                <a href="#!" class="nav-link ">
                    <span class="pcoded-micon"><i class="bi bi-briefcase"></i></span>
                    <span class="pcoded-mtext">الماموريات</span>
                </a>
                <ul class="pcoded-submenu">
                    <?php if($_SESSION['my_misin'] == 1){?>
                    <li><a href="/it2/views/my_mission.php">مامورياتى</a></li>
                    <?php } ?>
                    <?php if($_SESSION['misins'] == 1){?>
                    <li><a href="/it2/views/mission_online.php">ماموريات تحت الانتظار</a></li>
                    <li><a href="/it2/views/mission.php">الخطط الشهريه</a></li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>
            <?php if($_SESSION['reg_to'] == 1 ||
                     $_SESSION['to_filter'] == 1 ||
                     $_SESSION['reg_in'] == 1 ||
                     $_SESSION['in_filter'] == 1 ||
                     $_SESSION['reg_parcel_to'] == 1 ||
                     $_SESSION['parcel_to_filter'] == 1 ){?>
            <li class="nav-item pcoded-hasmenu">
                <a href="#!" class="nav-link ">
                    <span class="pcoded-micon"><i class="bi bi-envelope"></i></span>
                    <span class="pcoded-mtext">المراسلات</span>
                </a>
                <ul class="pcoded-submenu">
                    <?php if($_SESSION['reg_to'] == 1){?>
                    <li><a href="/it2/views/reg_to.php">تسجيل الصادر</a></li>
                    <?php } ?>
                    <?php if($_SESSION['to_filter'] == 1){?>
                    <li><a href="/it2/views/reg_to_search.php">استعلام الصادر</a></li>
                    <?php } ?>
                    <?php if($_SESSION['reg_in'] == 1){?>
                    <li><a href="/it2/views/reg_in.php">تسجيل الوارد</a></li>
                    <?php } ?>
                    <?php if($_SESSION['in_filter'] == 1){?>
                    <li><a href="/it2/views/reg_in_search.php">استعلام الوارد</a></li>
                    <?php } ?>
                    <?php if($_SESSION['reg_parcel_to'] == 1){?>
                    <li><a href="/it2/views/reg_parcel_to.php">تسجيل الطرود الصادره</a></li>
                    <?php } ?>
                    <?php if($_SESSION['parcel_to_filter'] == 1){?>
                    <li><a href="/it2/views/reg_parcel_to_search.php">استعلام الطرود الصادره</a></li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>
            <?php if($_SESSION['users'] == 1){?>
            <li class="nav-item pcoded-hasmenu">
                <a href="#!" class="nav-link ">
                    <span class="pcoded-micon"><i class="bi bi-people-fill"></i></span>
                    <span class="pcoded-mtext">المستخدمين</span>
                </a>
                <ul class="pcoded-submenu">
                    <?php if($_SESSION['users'] == 1){?>
                    <li><a href="/it2/views/users_auth.php">صلاحيات المستخدمين</a></li>
                    <?php } ?>
                    <?php if($_SESSION['db'] == "g_shrkia"){?>
                    <li><a href="/it2/views/services_users.php">مستخدمين الخدمات</a></li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>
            <li class="nav-item pcoded-hasmenu">
                <a href="#!" class="nav-link ">
                    <span class="pcoded-micon"><i class="bi bi-people-fill"></i></span>
                    <span class="pcoded-mtext">اداره ماكينات نقاط البيع</span>
                </a>
                <ul class="pcoded-submenu">
                    <li><a href="/it2/views/V200T.php">ماكينات V200T</a></li>
                    <li><a href="/it2/views/BITEL.php">ماكينات BITEL</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>