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
                            <a href="index.html" class="m-brand__logo-wrapper">
                                <img alt="" src="assets/images/inline-logo-wight.png"/>
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
                        <h3 class="m-subheader__title ">تفاصيل المستخدمين</h3>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="m-portlet m-portlet--full-height  ">
                            <div class="m-portlet__body">

                                <div class="profile-btn-option">
                                    <a href="#"
                                       data-toggle="modal" data-target="#m_modal_6"
                                       class="btn btn-success  m-btn m-btn--custom m-btn--icon d-block text-center mt-3">
                                    <span class="m-auto">
                                        <i class="fas fa-donate"></i>
                                        <span> دفع المستحقات </span>
                                    </span>
                                    </a>
                                    <a href="#"
                                       data-toggle="modal" data-target="#m_modal_5"
                                       class="btn btn-brand  m-btn m-btn--custom m-btn--icon d-block text-center mt-3">
                                    <span class="m-auto">
                                       <i class="fas fa-coins"></i>
                                        <span> دفع جزئي </span>
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
                                                        <label>الإسم:</label>
                                                        <input type="text" disabled
                                                               class="form-control m-input m-input--square"
                                                               value="حمزة أبو عيطة">
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
                                                        <label>بريد الكتروني:</label>
                                                        <input type="text" disabled
                                                               class="form-control m-input m-input--square"
                                                               value="hamza@hotmail.com">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>اجمالي عدد الطلبات:</label>
                                                        <input type="text" disabled
                                                               class="form-control m-input m-input--square" value="15">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row ">
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>باقي مستحقات:</label>
                                                        <div class="input-group m-input-group">
                                                            <input type="text" disabled class="form-control m-input"
                                                                   value="1000" aria-describedby="basic-addon1">
                                                            <div class="input-group-append"><span
                                                                        class="input-group-text bg-dark text-white">₪</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>اجمالي قيمة الدفعات:</label>
                                                        <div class="input-group m-input-group">
                                                            <input type="text" disabled class="form-control m-input"
                                                                   value="5500" aria-describedby="basic-addon1">
                                                            <div class="input-group-append"><span
                                                                        class="input-group-text bg-dark text-white">₪</span>
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

<div class="modal fade" id="m_modal_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="#">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">دفع كامل المستحقات</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="form-group m-form__group mb-4">
                                <label class="fw-400">باقي مستحقات للدفع:</label>
                                <div class="input-group m-input-group">
                                    <input type="text" disabled class="form-control m-input"
                                           value="1000" name="list" aria-describedby="basic-addon1">
                                    <div class="input-group-append"><span
                                                class="input-group-text bg-dark text-white">₪</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <span class="m-section__sub mb-1 d-block fw-400">
									اختار نوع الخصم:
							</span>
                            <div class="m-radio-list">
                                <label class="m-radio d-inline-block m-radio--state-info pl-4 fw-400">
                                    <input type="radio" id="percent_check" checked name="example_2" value="1"> خصم بنسبة
                                    <span></span>
                                </label>
                                <label class="m-radio ml-4 d-inline-block m-radio--state-info pl-4 fw-400">
                                    <input type="radio" id="amount_check" name="example_2" value="2"> خصم مبلغ
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-12" id="percent_input" style="">
                            <div class="form-group m-form__group mb-4">
                                <label>خصم بنسبة:</label>
                                <div class="input-group m-input-group">
                                    <input type="number" class="form-control m-input"
                                           name="disc" aria-describedby="basic-addon1">
                                    <div class="input-group-append"><span
                                                class="input-group-text bg-dark text-white">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12" id="amount_input" style="display: none">
                            <div class="form-group m-form__group mb-4">
                                <label>خصم مبلغ:</label>
                                <div class="input-group m-input-group">
                                    <input type="number" class="form-control m-input disc"
                                           value="" aria-describedby="basic-addon1">
                                    <div class="input-group-append"><span
                                                class="input-group-text bg-dark text-white">₪</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="form-group m-form__group mb-4">
                                <label class="fw-400">اجمالي المبلغ بعد الخصم:</label>
                                <div class="input-group m-input-group">
                                    <input type="text" disabled class="form-control m-input"
                                           name="sale" aria-describedby="basic-addon1">
                                    <div class="input-group-append"><span
                                                class="input-group-text bg-dark text-white">₪</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-info">دفع كامل المستحقات</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="m_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="#">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">دفع جزئي من المستحقات</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="form-group m-form__group mb-4">
                                <label class="fw-400">باقي مستحقات للدفع:</label>
                                <div class="input-group m-input-group">
                                    <input type="text" disabled class="form-control m-input"
                                           value="1000" name="list" aria-describedby="basic-addon1">
                                    <div class="input-group-append"><span
                                                class="input-group-text bg-dark text-white">₪</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="form-group m-form__group mb-4">
                                <label>المبلغ المستلم:</label>
                                <div class="input-group m-input-group">
                                    <input type="number" class="form-control m-input disc"
                                           value="" aria-describedby="basic-addon1">
                                    <div class="input-group-append"><span
                                                class="input-group-text bg-dark text-white">₪</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="form-group m-form__group mb-4">
                                <label class="fw-400">المبلغ المتبقي:</label>
                                <div class="input-group m-input-group">
                                    <input type="text" disabled class="form-control m-input"
                                           name="sale" aria-describedby="basic-addon1">
                                    <div class="input-group-append"><span
                                                class="input-group-text bg-dark text-white">₪</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-info">دفع كامل المستحقات</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--end::Modal-->
<!--begin::Global Theme Bundle -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<script>
    const calculateSale = (listPrice, discount) => {
        listPrice = parseFloat(listPrice);
        discount = parseFloat(discount);
        return (listPrice - (listPrice * discount / 100)) // Sale price
    }
    const calculateDiscount = (listPrice, salePrice) => {
        listPrice = parseFloat(listPrice);
        salePrice = parseFloat(salePrice);
        return 100 - (salePrice * 100 / listPrice); // Discount percentage
    }

    // Our use case
    const $list = $('input[name="list"]'),
        $disc = $('input[name="disc"]'),
        $sale = $('input[name="sale"]');

    $list.add($disc).on('input', () => { // List and Discount inputs events
        let sale = $list.val();              // Default to List price
        if ($disc.val().length) {          // if value is entered- calculate sale price
            sale = calculateSale($list.val(), $disc.val());
        }
        $sale.val(sale);
    });

    $sale.on('input', () => {      // Sale input events
        let disc = 0;                // Default to 0%
        if ($sale.val().length) {  // if value is entered- calculate the discount
            disc = calculateDiscount($list.val(), $sale.val());
        }
        $disc.val(disc);
    });

    // Init!
    $list.trigger('input');


    $(document).on("input", ".disc", function () {
        var amd = $('input[name="list"]').val();
        var disc = $(this).val();
        if (disc != '' && amd != '') {
            $('input[name="sale"]').val((parseInt(amd)) - (parseInt(disc)));
        } else {
            $('input[name="sale"]').val(parseInt(amd));
        }
    });

    $(function () {
        $("input[name='example_2']").click(function () {
            if ($("#percent_check").is(":checked")) {
                $("#percent_input").show();
                $("#amount_input").hide();
            }
            if ($("#amount_check").is(":checked")) {
                $("#amount_input").show();
                $("#percent_input").hide();
            }
            $('#amount_input input').val('');
            $('#percent_input input').val('');
            $('input[name="sale"]').val($('input[name="list"]').val());
        });
    });
    $('.modal').on('hidden.bs.modal', function () {
        $('#amount_input input').val('');
        $('#percent_input input').val('');
        $('input.disc').val('');
        $('input[name="sale"]').val($('input[name="list"]').val());
    });
</script>
<!--end::Global Theme Bundle -->

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
