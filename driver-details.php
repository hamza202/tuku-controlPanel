<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>توكو || تفاصبل المستخدمين</title>
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
                        <div class="m-stack__item m-stack__item--middle m-brand__tools justify-content">

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
        <div class="m-grid__item m-grid__item--fluid m-wrapper my-profile">

            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">تفاصيل السائق</h3>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="m-portlet m-portlet--full-height  ">
                            <div class="m-portlet__body">
                                <div class="m-card-profile">
                                    <div class="m-card-profile__pic">
                                        <div class="m-card-profile__pic-wrapper mt-0">
                                            <img src="assets/app/media/img/users/user4.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-btn-option">
                                    <a href="#"
                                       data-toggle="modal" data-target="#m_modal_3"
                                       class="btn btn-danger  m-btn m-btn--custom m-btn--icon d-block text-center mt-3">
                                    <span class="m-auto">
                                       <i class="fa fa-power-off"></i>
                                        <span> تعطيل </span>
                                    </span>
                                    </a>
                                </div>

                                <div class="m-portlet__body-separator"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                            <div class="tab-content">
                                <div class="tab-pane active" id="m_user_profile_tab_1">
                                    <form class="m-form m-form--fit m-form--label-align-right">
                                        <div class="m-portlet__body">
                                            <div class="row ">
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>اسم السائق:</label>
                                                        <input type="text" disabled
                                                               class="form-control m-input m-input--square"
                                                               value="حمزة أبو عيطة">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>المدينة:</label>
                                                        <input type="text" disabled
                                                               class="form-control m-input m-input--square"
                                                               value="رام الله">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>بريد الكتروني:</label>
                                                        <input type="text" disabled
                                                               class="form-control m-input m-input--square"
                                                               value="hamza@hotmail.com">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>رقم هاتف:</label>
                                                        <input type="text" disabled
                                                               class="form-control m-input m-input--square"
                                                               value="0595779004">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-lg-6">

                                                    <div class="form-group m-form__group mb-4">
                                                        <label>نوع السيارة:</label>
                                                        <input type="text" disabled
                                                               class="form-control m-input m-input--square"
                                                               value="Mercedes-Benz 2019">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">

                                                    <div class="form-group m-form__group mb-4">
                                                        <label>رقم السيارة:</label>
                                                        <input type="text" disabled
                                                               class="form-control m-input m-input--square"
                                                               value="Me3-1860-95">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">

                                                    <div class="form-group m-form__group mb-4">
                                                        <label>عدد الطلبات المنجزة:</label>
                                                        <input type="text" disabled
                                                               class="form-control m-input m-input--square"
                                                               value="15">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="m-widget4 ">
                                                        <div class="m-widget4__item pl-5 pr-5 bg-light">
                                                            <div class="m-widget4__img m-widget4__img--icon">
                                                                <img src="assets/app/media/img/files/jpg.svg" alt="">
                                                            </div>
                                                            <div class="m-widget4__info">
                                                                        <span class="m-widget4__text">
                                                                            رخصة السائق
                                                                        </span>
                                                            </div>
                                                            <div class="m-widget4__ext">
                                                                <a href="#" class="m-widget4__icon">
                                                                    <i class="la la-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <div class="m-widget4 mb-0">
                                                        <div class="m-widget4__item pl-5 pr-5 bg-light">
                                                            <div class="m-widget4__img m-widget4__img--icon">
                                                                <img src="assets/app/media/img/files/jpg.svg" alt="">
                                                            </div>
                                                            <div class="m-widget4__info">
                                                                        <span class="m-widget4__text">
                                                                            رخصة المركبة
                                                                        </span>
                                                            </div>
                                                            <div class="m-widget4__ext">
                                                                <a href="#" class="m-widget4__icon">
                                                                    <i class="la la-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="m-portlet">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon">
													<i class="flaticon-graphic-2"></i>
												</span>
                                        <h3 class="m-portlet__head-text">
                                            احصائيات طلبات السائق
                                        </h3>
                                    </div>
                                </div>

                            </div>
                            <div class="m-portlet__body">
                                <div class="row m-row--no-padding m-row--col-separator-xl">
                                    <div class="col-md-12 col-lg-12 col-xl-4">

                                        <!--begin:: Widgets/Stats2-1 -->
                                        <div class="m-widget1">
                                            <div class="m-widget1__item">
                                                <a href="#" class="d-block">
                                                    <div class="row m-row--no-padding align-items-center">
                                                        <div class="col">
                                                            <h3 class="m-widget1__title">المقبوله</h3>
                                                        </div>
                                                        <div class="col-auto m--align-right">
                                                            <span class="m-widget1__number m--font-success">110</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="m-widget1__item">
                                                <a href="#" class="d-block">
                                                    <div class="row m-row--no-padding align-items-center">
                                                        <div class="col">
                                                            <h3 class="m-widget1__title">تم استلمها من المرسل </h3>
                                                        </div>
                                                        <div class="col-auto m--align-right">
                                                            <span class="m-widget1__number m--font-info">90</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <!--end:: Widgets/Stats2-1 -->
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-4">

                                        <!--begin:: Widgets/Stats2-2 -->
                                        <div class="m-widget1">
                                            <div class="m-widget1__item">
                                                <a href="#" class="d-block">
                                                    <div class="row m-row--no-padding align-items-center">
                                                        <div class="col">
                                                            <h3 class="m-widget1__title">سلمها للمستلم</h3>
                                                        </div>
                                                        <div class="col-auto m--align-right">
                                                            <span class="m-widget1__number m--font-brand">20</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="m-widget1__item">
                                                <a href="#" class="d-block">
                                                    <div class="row m-row--no-padding align-items-center">
                                                        <div class="col">
                                                            <h3 class="m-widget1__title">جميع الطلبات</h3>
                                                        </div>
                                                        <div class="col-auto m--align-right">
                                                            <span class="m-widget1__number m--font-success">200</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                        <!--begin:: Widgets/Stats2-2 -->
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-4">

                                        <!--begin:: Widgets/Stats2-3 -->
                                        <div class="m-widget1">
                                            <div class="m-widget1__item">
                                                <a href="#" class="d-block">
                                                    <div class="row m-row--no-padding align-items-center">
                                                        <div class="col">
                                                            <h3 class="m-widget1__title">تم استلام تحصيلها من
                                                                السائق </h3>
                                                        </div>
                                                        <div class="col-auto m--align-right">
                                                            <span class="m-widget1__number m--font-warning">50</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="m-widget1__item">
                                                <a href="#" class="d-block">
                                                    <div class="row m-row--no-padding align-items-center">
                                                        <div class="col">
                                                            <h3 class="m-widget1__title">لم يتم استلام تحصيلاتها من
                                                                السائق</h3>
                                                        </div>
                                                        <div class="col-auto m--align-right">
                                                            <span class="m-widget1__number m--font-danger">10</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <!--begin:: Widgets/Stats2-3 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="m-portlet">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">

                                        <h3 class="m-portlet__head-text">
                                            المقبولة
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <button data-toggle="modal" data-target="#m_modal_2"
                                            class="btn btn-warning m-btn m-btn--custom fw-600">
                                    <span class="m-auto">
                                        <span> تحصيل </span>
                                    </span>
                                    </button>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="table-responsive">
                                    <!--begin: Datatable -->
                                    <table class="table table-striped- table-bordered table-hover table-checkable no-nowrap"
                                           id="m_table_2">
                                        <thead>
                                        <tr>
                                            <th>
                                                <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                    <input type="checkbox" value="" class="m-checkable main-check">
                                                    <span></span>
                                                </label>
                                            </th>
                                            <th>ID</th>
                                            <th>رقم الطلب</th>
                                            <th>نوع المستخدم</th>
                                            <th> اسم صاحب الطلب</th>
                                            <th>مكان الإستلام</th>
                                            <th>عنوان الإستلام</th>
                                            <th>رقم المستلم</th>
                                            <th>مكان التسليم</th>
                                            <th>عنوان التسليم</th>
                                            <th>نوع الطرد</th>
                                            <th>عدد الطرود</th>
                                            <th>الوزن</th>
                                            <th>تفاصيل اضافية</th>
                                            <th>سعر التوصيل</th>
                                            <th>سعر الطرد</th>
                                            <th>السعر الإجمالي</th>
                                            <th>وقت الإنشاء</th>
                                            <th>عمليات</th>
                                            <th>تفاصيل</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                    <input type="checkbox" value="" class="m-checkable">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>1</td>
                                            <td>رقم الطلب</td>
                                            <td>شركة</td>
                                            <td> حمزة خميس</td>
                                            <td>مكان الإستلام</td>
                                            <td>عنوان الإستلام</td>
                                            <td>رقم المستلم</td>
                                            <td>مكان التسليم</td>
                                            <td>عنوان التسليم</td>
                                            <td>صندوق هدايا</td>
                                            <td>عدد الطرود</td>
                                            <td>الوزن</td>
                                            <td>تفاصيل اضافية</td>
                                            <td>سعر التوصيل</td>
                                            <td>سعر الطرد</td>
                                            <td>السعر الإجمالي</td>
                                            <td>وقت الإنشاء</td>
                                            <td>
                                     <span class="dropdown user-option">
                                        <a href="#"
                                           class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                           data-toggle="dropdown"
                                           aria-expanded="true"><i class="la la-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left user-option">
                                            <a class="dropdown-item" href="#m_modal_5" data-toggle="modal"
                                               data-target="#m_modal_5"><i
                                                    class="la la-check"></i> قبول الطلب  </a>


                                               <a class="dropdown-item" href="#m_modal_3" data-toggle="modal"
                                                  data-target="#m_modal_3">
                                                   <i class="la la-power-off"></i> رفض الطلب</a>
                                        </div>
                                    </span>
                                            </td>
                                            <td>
                                                <a href="existing-requests-details.php"
                                                   class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--custom
                                       m-btn--pill m-btn--air">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                    <input type="checkbox" value="" class="m-checkable">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>2</td>
                                            <td>رقم الطلب</td>
                                            <td>فرد</td>
                                            <td> فوزي نوفل</td>
                                            <td>مكان الإستلام</td>
                                            <td>عنوان الإستلام</td>
                                            <td>رقم المستلم</td>
                                            <td>مكان التسليم</td>
                                            <td>عنوان التسليم</td>
                                            <td>باقة ورد</td>
                                            <td>عدد الطرود</td>
                                            <td>الوزن</td>
                                            <td>تفاصيل اضافية</td>
                                            <td>سعر التوصيل</td>
                                            <td>سعر الطرد</td>
                                            <td>السعر الإجمالي</td>
                                            <td>وقت الإنشاء</td>
                                            <td>
                                     <span class="dropdown user-option">
                                        <a href="#"
                                           class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                           data-toggle="dropdown"
                                           aria-expanded="true"><i class="la la-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left user-option">
                                            <a class="dropdown-item" href="#m_modal_5" data-toggle="modal"
                                               data-target="#m_modal_5"><i
                                                    class="la la-check"></i> قبول الطلب  </a>


                                               <a class="dropdown-item" href="#m_modal_3" data-toggle="modal"
                                                  data-target="#m_modal_3">
                                                   <i class="la la-power-off"></i> رفض الطلب</a>
                                        </div>
                                    </span>
                                            </td>
                                            <td>
                                                <a href="existing-requests-details.php"
                                                   class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--custom
                                       m-btn--pill m-btn--air">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                    <input type="checkbox" value="" class="m-checkable">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>2</td>
                                            <td>رقم الطلب</td>
                                            <td>فرد</td>
                                            <td> وسيم برزق</td>
                                            <td>مكان الإستلام</td>
                                            <td>عنوان الإستلام</td>
                                            <td>رقم المستلم</td>
                                            <td>مكان التسليم</td>
                                            <td>عنوان التسليم</td>
                                            <td>اخرى</td>
                                            <td>عدد الطرود</td>
                                            <td>الوزن</td>
                                            <td>تفاصيل اضافية</td>
                                            <td>سعر التوصيل</td>
                                            <td>سعر الطرد</td>
                                            <td>السعر الإجمالي</td>
                                            <td>وقت الإنشاء</td>
                                            <td>
                                     <span class="dropdown user-option">
                                        <a href="#"
                                           class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                           data-toggle="dropdown"
                                           aria-expanded="true"><i class="la la-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left user-option">
                                            <a class="dropdown-item" href="#m_modal_5" data-toggle="modal"
                                               data-target="#m_modal_5"><i
                                                    class="la la-check"></i> قبول الطلب  </a>


                                               <a class="dropdown-item" href="#m_modal_3" data-toggle="modal"
                                                  data-target="#m_modal_3">
                                                   <i class="la la-power-off"></i> رفض الطلب</a>
                                        </div>
                                    </span>
                                            </td>
                                            <td>
                                                <a href="existing-requests-details.php"
                                                   class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--custom
                                       m-btn--pill m-btn--air">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
<!-- Modal -->

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

<div class="modal fade" id="m_modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <form action="catch-receipt.php">

        <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تحصيل</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="m-widget1">
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">عدد الطلبات المحصلة </h3>
                                        </div>
                                        <div class="col-auto m--align-right">
                                            <span class="m-widget1__number m--font-primary">10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">اجمالي المبلغ المحصل</h3>
                                        </div>
                                        <div class="col-auto m--align-right">
                                            <span class="m-widget1__number m--font-success">200 ₪</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-primary">تحصيل</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!--end::Modal-->
<!--begin::Global Theme Bundle -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<script src="assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<script>
    var DatatablesBasicHeaders = {
        init: function () {
            var table = $("#m_table_2");
            table.DataTable({
                responsive: true,
                initComplete: function () {

                }
            });

            $('.filter-column1').on('keyup change', function () {
                table.dataTable().fnFilter(this.value, 3);
            });
            $('.filter-column2').on('keyup change', function () {
                table.dataTable().fnFilter(this.value, 9);
            });

        }
    };
    jQuery(document).ready(function () {
        DatatablesBasicHeaders.init()
    });

</script>
<script>
    $('.main-check').on('change', function () {
        if ($(this).is(":checked")) {
            $('tbody .m-checkable').prop("checked", 1)
        } else {
            $('tbody .m-checkable').prop("checked", !1)
        }
    })
</script>
<!--end::Global Theme Bundle -->

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
