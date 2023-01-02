<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset=utf-8>
    <title>اجهزه بقسم الدعم الفنى تحت  الصيانه </title>
      <link rel="icon" href="../../../it2/assets/images/it1.svg" type="image/x-icon" />
    <link rel="stylesheet" href="../assets/css/plugins/bootstrap5/bootstrap.rtl.css">
    <link rel="stylesheet" href="../assets/fonts/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/layout-rtl.css">
    <!-- <link rel="stylesheet" href="../assets/DataTables/FixedHeader-3.2.3/css/fixedHeader.dataTables.css"> -->
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
tbody tr td:last-of-type{
    text-align:left
}
.autocomplete {
  /*the container must be positioned relative:*/
  position: relative;
  display: inline-block;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
  width:100%
}
.autocomplete-items div {
  cursor: pointer;
  background-color: #fff;
  border-bottom: 1px solid #d4d4d4;
  color: #373a3c;
  padding:0 45px;
}
.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #1abc9c;
}
.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: #1abc9c !important;
  color: #ffffff;
}
    </style>
</head>

<body>
    <div class="pcoded-navbar">
        <?php include '..\layout\aside\nav.php';?>
    </div>
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
        <?php include '..\layout\header\m-hader.html';?>
        <ul class="navbar-nav ">
        </ul>
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
            <div id="main">
                <div class="msg" dir="rtl">
                    <!-- am -->
                    <!-- start office deatails -->
                    <div class="office_head">
                        <div class="post_offce_manager"></div>
                    </div>
                    <!-- start pc -->
                    <fieldset class="mb-3">
                        <legend>
                            <i class="bi bi-pc me-2 "></i>
                            <span class="count me-2">2</span>اجهزه
                        </legend>
                        <table id="pc_table" class="table align-middle table-hover">
                            <thead>
                                <tr>
                                    <th>اسم المكتب</th>
                                    <th>نوع الجهاز</th>
                                    <th>السريال</th>
                                    <th>العطل</th>
                                    <th>ملاحظات</th>
                                    <th>تاريخ الورود</th>
                                    <th>عن طريق</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="table-success">
                                <tr>
                                    <td>كفر الحصر</td>
                                    <td>FUJITSU ESPRIMO P2540</td>
                                    <td>YKQB137582</td>
                                    <td>فاصل باور</td>
                                    <td>بددون مستلزمات</td>
                                    <td>2021-10-26</td>
                                    <td>CP123456789EG</td>
                                    <td>
                                        <div class="dropdown">
                                            <?php include '../component/in_it_dropdown.html'?>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </fieldset>
                    <!-- end pc -->
                    <!-- srart monitor -->
                    <fieldset class="mb-3">
                        <legend>
                            <i class="bi bi-display-fill me-2"></i>
                            <span class="count me-2">2</span>شاشات
                        </legend>
                        <table id="monitor_table" class="table align-middle table-hover">
                        <thead>
                                <tr>
                                    <th>اسم المكتب</th>
                                    <th>نوع الجهاز</th>
                                    <th>السريال</th>
                                    <th>العطل</th>
                                    <th>ملاحظات</th>
                                    <th>تاريخ الورود</th>
                                    <th>عن طريق</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="table-success">
                                <tr>
                                    <td>كفر الحصر</td>
                                    <td>FUJITSU ESPRIMO P2540</td>
                                    <td>YKQB137582</td>
                                    <td>فاصل باور</td>
                                    <td>بددون مستلزمات</td>
                                    <td>2021-10-26</td>
                                    <td>CP123456789EG</td>
                                    <td>
                                        <div class="dropdown">
                                            <?php include '../component/in_it_dropdown.html'?>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </fieldset>
                    <!-- end montor -->
                    <!-- start printer -->
                    <fieldset class="mb-3">
                        <legend>
                            <i class="bi bi-printer-fill me-2"></i>
                            <span class="count me-2">1</span>طابعه ليزر
                        </legend>
                        <table id="printer_table" class="table align-middle table-hover">
                        <thead>
                                <tr>
                                    <th>اسم المكتب</th>
                                    <th>نوع الجهاز</th>
                                    <th>السريال</th>
                                    <th>العطل</th>
                                    <th>ملاحظات</th>
                                    <th>تاريخ الورود</th>
                                    <th>عن طريق</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="table-success">
                                <tr>
                                    <td>كفر الحصر</td>
                                    <td>FUJITSU ESPRIMO P2540</td>
                                    <td>YKQB137582</td>
                                    <td>فاصل باور</td>
                                    <td>بددون مستلزمات</td>
                                    <td>2021-10-26</td>
                                    <td>CP123456789EG</td>
                                    <td>
                                        <div class="dropdown">
                                            <?php include '../component/in_it_dropdown.html'?>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </fieldset>
                    <!-- end printer -->
                    <!-- start pos -->
                    <fieldset class="mb-3">
                        <legend>
                            <i class="bi bi-paypal me-2"></i>
                            <span class="count me-2">4</span>نقاط بيع
                        </legend>
                        <table id="pos_table" class="table table align-middle table-hover">
                        <thead>
                                <tr>
                                    <th>اسم المكتب</th>
                                    <th>نوع الجهاز</th>
                                    <th>السريال</th>
                                    <th>العطل</th>
                                    <th>ملاحظات</th>
                                    <th>تاريخ الورود</th>
                                    <th>عن طريق</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="table-success">
                                <tr>
                                    <td>كفر الحصر</td>
                                    <td>FUJITSU ESPRIMO P2540</td>
                                    <td>YKQB137582</td>
                                    <td>فاصل باور</td>
                                    <td>بددون مستلزمات</td>
                                    <td>2021-10-26</td>
                                    <td>CP123456789EG</td>
                                    <td>
                                        <div class="dropdown">
                                            <?php include '../component/in_it_dropdown.html'?>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </fieldset>
                    <!-- end pos -->
                    <!-- strat network -->
                    <fieldset class="mb-3">
                        <legend>
                            <i class="bi bi-hdd-network-fill me-2"></i>
                            <span class="count me-2">2</span>اجهزه شبكه
                        </legend>
                        <table id="network_table" class="table align-middle table-hover">
                        <thead>
                                <tr>
                                    <th>اسم المكتب</th>
                                    <th>نوع الجهاز</th>
                                    <th>السريال</th>
                                    <th>العطل</th>
                                    <th>ملاحظات</th>
                                    <th>تاريخ الورود</th>
                                    <th>عن طريق</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="table-success">
                                <tr>
                                    <td>كفر الحصر</td>
                                    <td>FUJITSU ESPRIMO P2540</td>
                                    <td>YKQB137582</td>
                                    <td>فاصل باور</td>
                                    <td>بددون مستلزمات</td>
                                    <td>2021-10-26</td>
                                    <td>CP123456789EG</td>
                                    <td>
                                        <div class="dropdown">
                                            <?php include '../component/in_it_dropdown.html'?>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </fieldset>
                    <!-- end network -->
                    <!-- strat postal -->
                    <fieldset class="mb-3">
                        <legend>
                            <i class="bi bi-box2-fill me-2"></i>
                            <span class="count me-2">5</span>اجهزه بوستال
                        </legend>
                        <table id="postal_table" class="table align-middle table-hover">
                        <thead>
                                <tr>
                                    <th>اسم المكتب</th>
                                    <th>نوع الجهاز</th>
                                    <th>السريال</th>
                                    <th>العطل</th>
                                    <th>ملاحظات</th>
                                    <th>تاريخ الورود</th>
                                    <th>عن طريق</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="table-success">
                                <tr>
                                    <td>كفر الحصر</td>
                                    <td>FUJITSU ESPRIMO P2540</td>
                                    <td>YKQB137582</td>
                                    <td>فاصل باور</td>
                                    <td>بددون مستلزمات</td>
                                    <td>2021-10-26</td>
                                    <td>CP123456789EG</td>
                                    <td>
                                        <div class="dropdown">
                                            <?php include '../component/in_it_dropdown.html'?>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
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
            <?php include '../component/modals/edit_in_it_modal.html'?>
        <!-- end edit modal -->
        <!-- start to it modal -->
            <?php include '../component/modals/to_tts_modal.html'?>
        <!-- end to it modal -->
        <!-- start move to modal -->
            <?php include '../component/modals/move_to_modal.html'?>
        <!-- end move to modal -->
        <!-- start resend to office modal -->
            <?php include '../component/modals/resend_to_office_modal.html'?>
        <!-- end resend to office modal -->
        <!-- start resend to office modal -->
            <?php include '../component/modals/delete_modal.html'?>
        <!-- end resend to office modal -->
        <!-- start resend to office modal -->
            <?php include '../component/modals/replace_pices_modal.html'?>
        <!-- end resend to office modal -->
        <!-- start add dvice modal -->
            <?php include '../component/modals/add_dvice_modal.html'?>
        <!-- end add dvice modal -->
    </div>
    <script src="../assets/js/plugins/jquery-3.6.0.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/plugins/bootstrap5/bootstrap.js"></script>
    <script src="../assets/js/pcoded.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script>
        var country = ["الغار", "التلين", "الميساه"];
        function autocomplete(inp, arr) {
            /*the autocomplete function takes two arguments,
            the text field element and an array of possible autocompleted values:*/
            var currentFocus;
            /*execute a function when someone writes in the text field:*/
            inp.addEventListener("input", function (e) {
                var a, b, i, val = this.value;
                /*close any already open lists of autocompleted values*/
                closeAllLists();
                if (!val) { return false; }
                currentFocus = -1;
                /*create a DIV element that will contain the items (values):*/
                a = document.createElement("DIV");
                a.setAttribute("id", this.id + "autocomplete-list");
                a.setAttribute("class", "autocomplete-items");
                /*append the DIV element as a child of the autocomplete container:*/
                this.parentNode.appendChild(a);
                /*for each item in the array...*/
                for (i = 0; i < arr.length; i++) {
                    /*check if the item starts with the same letters as the text field value:*/
                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                        /*create a DIV element for each matching element:*/
                        b = document.createElement("DIV");
                        /*make the matching letters bold:*/
                        b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                        b.innerHTML += arr[i].substr(val.length);
                        /*insert a input field that will hold the current array item's value:*/
                        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                        /*execute a function when someone clicks on the item value (DIV element):*/
                        b.addEventListener("click", function (e) {
                            /*insert the value for the autocomplete text field:*/
                            inp.value = this.getElementsByTagName("input")[0].value;
                            /*close the list of autocompleted values,
                            (or any other open lists of autocompleted values:*/
                            closeAllLists();
                        });
                        a.appendChild(b);
                    }
                }
            });
            inp.addEventListener("focus", function (e) {
                var a, b, i, val = this.value;
                /*close any already open lists of autocompleted values*/
                closeAllLists();
                if (!val) { return false; }
                currentFocus = -1;
                /*create a DIV element that will contain the items (values):*/
                a = document.createElement("DIV");
                a.setAttribute("id", this.id + "autocomplete-list");
                a.setAttribute("class", "autocomplete-items");
                /*append the DIV element as a child of the autocomplete container:*/
                this.parentNode.appendChild(a);
                /*for each item in the array...*/
                for (i = 0; i < arr.length; i++) {
                    /*check if the item starts with the same letters as the text field value:*/
                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                        /*create a DIV element for each matching element:*/
                        b = document.createElement("DIV");
                        /*make the matching letters bold:*/
                        b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                        b.innerHTML += arr[i].substr(val.length);
                        /*insert a input field that will hold the current array item's value:*/
                        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                        /*execute a function when someone clicks on the item value (DIV element):*/
                        b.addEventListener("click", function (e) {
                            /*insert the value for the autocomplete text field:*/
                            inp.value = this.getElementsByTagName("input")[0].value;
                            /*close the list of autocompleted values,
                            (or any other open lists of autocompleted values:*/
                            closeAllLists();
                        });
                        a.appendChild(b);
                    }
                }
            });
            /*execute a function presses a key on the keyboard:*/
            inp.addEventListener("keydown", function (e) {
                var x = document.getElementById(this.id + "autocomplete-list");
                if (x) x = x.getElementsByTagName("div");
                if (e.keyCode == 40) {
                    /*If the arrow DOWN key is pressed,
                    increase the currentFocus variable:*/
                    currentFocus++;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 38) { //up
                    /*If the arrow UP key is pressed,
                    decrease the currentFocus variable:*/
                    currentFocus--;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 13) {
                    /*If the ENTER key is pressed, prevent the form from being submitted,*/
                    e.preventDefault();
                    if (currentFocus > -1) {
                        /*and simulate a click on the "active" item:*/
                        if (x) x[currentFocus].click();
                    }
                }
            });
            function addActive(x) {
                /*a function to classify an item as "active":*/
                if (!x) return false;
                /*start by removing the "active" class on all items:*/
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                /*add class "autocomplete-active":*/
                x[currentFocus].classList.add("autocomplete-active");
            }
            function removeActive(x) {
                /*a function to remove the "active" class from all autocomplete items:*/
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove("autocomplete-active");
                }
            }
            function closeAllLists(elmnt) {
                /*close all autocomplete lists in the document,
                except the one passed as an argument:*/
                var x = document.getElementsByClassName("autocomplete-items");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }

            /*execute a function when someone clicks in the document:*/
            document.addEventListener("click", function (e) {
                closeAllLists(e.target);
            });
        }
        autocomplete(document.getElementById("input_search"), country);
    </script>
<script>
    setTimeout(myGreeting, 1000);
    function myGreeting(){
       $('.pcoded-navbar').addClass('navbar-collapsed')
    }
</script>
</body>

</html>