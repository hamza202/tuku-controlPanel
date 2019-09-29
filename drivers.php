<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>توكو || سائقين</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Tajawal:300,400,500,700,900"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->

    <!--begin::Global Theme Styles -->
    <!--<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />-->

    <link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css"/>
    <!--<link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />-->

    <link href="assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css"/>

    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->

    <link href="assets/vendors/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css"/>
    <!--end::Page Vendors Styles -->
    <link rel="shortcut icon" href="assets/images/icon.png"/>
    <link rel="stylesheet" href="assets/custome.css">
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- BEGIN: Header -->
    <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
        <div class="m-container m-container--fluid m-container--full-height">
            <div class="m-stack m-stack--ver m-stack--desktop">

                <!-- BEGIN: Brand -->
                <div class="m-stack__item m-brand  m-brand--skin-dark ">
                    <div class="m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-stack__item--middle m-brand__logo">
                            <a href="index.php" class="m-brand__logo-wrapper">
                                <img alt="" src="assets/images/inline-logo.png"/>
                            </a>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools">

                            <!-- BEGIN: Left Aside Minimize Toggle -->
                            <a href="javascript:;" id="m_aside_left_minimize_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
                                <span></span>
                            </a>

                            <!-- END -->

                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>

                            <!-- END -->


                            <!-- BEGIN: Topbar Toggler -->
                            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;"
                               class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                <i class="flaticon-more"></i>
                            </a>

                            <!-- BEGIN: Topbar Toggler -->
                        </div>
                    </div>
                </div>

                <!-- END: Brand -->
                <?php include 'top_bar.php' ?>
            </div>
        </div>
    </header>

    <!-- END: Header -->

    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <?php include 'menu.php' ?>

        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">

            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">المستخدمين</h3>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    السائقيين
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <a href="#" data-toggle="modal" data-target="#m_modal_6"
                               class="btn btn-success  m-btn m-btn--custom m-btn--icon d-block text-center mt-3">
                                    <span class="m-auto">
                                        <i class="fas fa-plus-circle"></i>
                                        <span> سائق جديد </span>
                                    </span>
                            </a>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="table-responsive">
                            <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered table-hover table-checkable"
                                   id="m_table_1">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>الأسم</th>
                                    <th>رقم هاتف</th>
                                    <th>الطلبات المنجزة</th>
                                    <th>تعطيل</th>
                                    <th>تفاصيل</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>حمزة ابو عيطة</td>
                                    <td>0591234567</td>
                                    <td>
                                        15
                                    </td>
                                    <td>
                                        <button type="button"
                                                data-toggle="modal" data-target="#m_modal_3"
                                                class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only">
                                            <i class="fa fa-power-off"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <a href="driver-details.php"
                                           class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--custom
                                       m-btn--pill m-btn--air">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>محمد عجور</td>
                                    <td>0591234567</td>
                                    <td>
                                        12
                                    </td>
                                    <td>
                                        <button type="button"
                                                data-toggle="modal" data-target="#m_modal_3"
                                                class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only">
                                            <i class="fa fa-power-off"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <a href="driver-details.php"
                                           class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>خالد الخالدي</td>
                                    <td>0591234567</td>
                                    <td>
                                        10
                                    </td>
                                    <td>
                                        <button type="button"
                                                data-toggle="modal" data-target="#m_modal_3"
                                                class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only">
                                            <i class="fa fa-power-off"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <a href="driver-details.php"
                                           class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
    </div>
    <!-- end:: Body -->
    <?php include 'footer.php' ?>
</div>

<!-- end:: Page -->


<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->
<div class="modal fade" id="m_modal_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="#" id="user_register_form" data-parsley-validate="" data-parsley-trigger="change">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">تسجيل سائق جديد</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row ">
                        <div class="col-lg-4">
                            <div class="form-group m-form__group mb-4">
                                <label>اسم السائق:</label>
                                <input required type="text" placeholder="الإسم"
                                       class="form-control m-input m-input--square">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group1 m-form__group">
                                <label for="exampleInputEmail1">المدينة</label>
                                <div></div>
                                <select class="custom-select form-control" required>
                                    <option selected="" value="">اختر مدينة</option>
                                    <option value="1">طولكرم</option>
                                    <option value="2">جنين</option>
                                    <option value="3">بيت لحم</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group m-form__group mb-4">
                                <label>بريد الكتروني</label>
                                <input required type="email" placeholder="info@hotmail.com"
                                       class="form-control m-input m-input--square">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group m-form__group mb-4">
                                <label>رقم هاتف:</label>
                                <input required minlength="7" type="number" placeholder="0595779004"
                                       class="form-control m-input m-input--square">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group m-form__group mb-4">
                                <label>نوع السيارة:</label>
                                <input required type="text" placeholder="Mercedes-Benz 2019"
                                       class="form-control m-input m-input--square">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group m-form__group mb-4">
                                <label>رقم السيارة:</label>
                                <input required type="text" placeholder="3-1860-95"
                                       class="form-control m-input m-input--square">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group m-form__group mb-4">
                                <label>كلمة المرور:</label>
                                <input minlength="6" required id="password" type="password" name="password"
                                       placeholder="كلمة المرور"
                                       value="" data-parsley-minlength-message="يجب ادخال 6 احرف على الأقل"
                                       class="form-control m-input m-input--square">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group m-form__group mb-4">
                                <label>تأكيد كلمة المرور:</label>
                                <input minlength="6" required type="password" id="password_again"
                                       data-parsley-equalto="#password" name="password_again"
                                       placeholder="تأكيد كلة المرور"
                                       value="" data-parsley-minlength-message="يجب ادخال 6 احرف على الأقل"
                                       class="form-control m-input m-input--square">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group m-form__group">
                                <label for="exampleInputEmail1">رخصة السائق:</label>
                                <div></div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">رخصة السائق</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group m-form__group">
                                <label for="InputEmail1">رخصة المركبة:</label>
                                <div></div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile1">
                                    <label class="custom-file-label" for="customFile1">رخصة المركبة</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-info">تسجيل</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--begin::Modal-->
<div class="modal fade" id="m_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تفعيل الحساب</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    هل انت متأكد من تفعيل هذا الحساب؟
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                <button type="button" class="btn btn-success">تأكيد</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="m_modal_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
     aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <form action="#">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">تعطيل الحساب</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        هل انت متأكد من تعطيل هذا الحساب؟
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-danger">تعطيل</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!--end::Modal-->


<!--begin::Global Theme Bundle -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->


<!--begin::Page Scripts -->
<script src="assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<script src="assets/demo/default/custom/crud/datatables/basic/headers.js" type="text/javascript"></script>
<script src="assets/js/parsley.min.js"></script>

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
