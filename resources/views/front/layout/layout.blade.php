<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <title>Nordis</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Meddon%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%20Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CJost%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CJost%3A400%2C500%2C700%7CRoboto%3A400&#038;subset=latin%2Clatin-ext&#038;display=swap" />
    <style type="text/css" media="screen">
        #ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td a.ui-state-active,
        #ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td a.ui-state-active:hover,
        body #booked-profile-page input[type=submit].button-primary:hover,
        body .booked-list-view button.button:hover,
        body .booked-list-view input[type=submit].button-primary:hover,
        body table.booked-calendar input[type=submit].button-primary:hover,
        body .booked-modal input[type=submit].button-primary:hover,
        body table.booked-calendar th,
        body table.booked-calendar thead,
        body table.booked-calendar thead th,
        body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,
        body #booked-profile-page .booked-profile-header,
        body #booked-profile-page .booked-tabs li.active a,
        body #booked-profile-page .booked-tabs li.active a:hover,
        body #booked-profile-page .appt-block .google-cal-button>a:hover,
        #ui-datepicker-div.booked_custom_date_picker .ui-datepicker-header {
            background: #62becf !important;
        }

        body #booked-profile-page input[type=submit].button-primary:hover,
        body table.booked-calendar input[type=submit].button-primary:hover,
        body .booked-list-view button.button:hover,
        body .booked-list-view input[type=submit].button-primary:hover,
        body .booked-modal input[type=submit].button-primary:hover,
        body table.booked-calendar th,
        body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,
        body #booked-profile-page .booked-profile-header,
        body #booked-profile-page .appt-block .google-cal-button>a:hover {
            border-color: #62becf !important;
        }

        body table.booked-calendar tr.days,
        body table.booked-calendar tr.days th,
        body .booked-calendarSwitcher.calendar,
        body #booked-profile-page .booked-tabs,
        #ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar thead,
        #ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar thead th {
            background: #000000 !important;
        }

        body table.booked-calendar tr.days th,
        body #booked-profile-page .booked-tabs {
            border-color: #000000 !important;
        }

        #ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a,
        #ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a:hover,
        body #booked-profile-page input[type=submit].button-primary,
        body table.booked-calendar input[type=submit].button-primary,
        body .booked-list-view button.button,
        body .booked-list-view input[type=submit].button-primary,
        body .booked-list-view button.button,
        body .booked-list-view input[type=submit].button-primary,
        body .booked-modal input[type=submit].button-primary,
        body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button,
        body #booked-profile-page .booked-profile-appt-list .appt-block.approved .status-block,
        body #booked-profile-page .appt-block .google-cal-button>a,
        body .booked-modal p.booked-title-bar,
        body table.booked-calendar td:hover .date span,
        body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,
        body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover,
        .booked-ms-modal .booked-book-appt

        /* Multi-Slot Booking */
            {
            background: #fea7b2;
        }

        body #booked-profile-page input[type=submit].button-primary,
        body table.booked-calendar input[type=submit].button-primary,
        body .booked-list-view button.button,
        body .booked-list-view input[type=submit].button-primary,
        body .booked-list-view button.button,
        body .booked-list-view input[type=submit].button-primary,
        body .booked-modal input[type=submit].button-primary,
        body #booked-profile-page .appt-block .google-cal-button>a,
        body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button,
        body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,
        body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover {
            border-color: #fea7b2;
        }

        body .booked-modal .bm-window p i.fa,
        body .booked-modal .bm-window a,
        body .booked-appt-list .booked-public-appointment-title,
        body .booked-modal .bm-window p.appointment-title,
        .booked-ms-modal.visible:hover .booked-book-appt {
            color: #fea7b2;
        }

        .booked-appt-list .timeslot.has-title .booked-public-appointment-title {
            color: inherit;
        }
    </style>
    <meta name='robots' content='max-image-preview:large' />
    <style>
        .loading {
            overflow: hidden;
            background: #141315;
        }

        .loading>.nordis {
            visibility: hidden;
            opacity: 0;
        }

        .loading>.preloader {
            display: block;
        }

        .preloader {
            display: none;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            width: 100px;
            height: 100px;
            perspective: 780px;
            z-index: 100;
        }

        .pix-loading {
            width: 50px;
            height: 50px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        .pix-loading.m {
            width: 32px;
            height: 32px;
        }

        .pix-loading:before,
        .pix-loading:after {
            content: '';
            display: block;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background-color: var(--accent);
            opacity: 0.75;
            position: absolute;
            top: 0;
            left: 0;
            -webkit-animation: pix-loading 2.0s infinite ease-in-out;
            animation: pix-loading 2.0s infinite ease-in-out
        }

        .pix-loading.m:before,
        .pix-loading.m:after {
            width: 50%;
            height: 50%;
            top: calc(50% - 7px);
            left: calc(50% - 7px);
        }

        .pix-loading:after {
            -webkit-animation-delay: -1.0s;
            animation-delay: -1.0s
        }

        @-webkit-keyframes pix-loading {

            0%,
            100% {
                transform: scale(0);
                -webkit-transform: scale(0)
            }

            50% {
                transform: scale(1);
                -webkit-transform: scale(1)
            }
        }

        @keyframes pix-loading {

            0%,
            100% {
                transform: scale(0);
                -webkit-transform: scale(0)
            }

            50% {
                transform: scale(1);
                -webkit-transform: scale(1)
            }
        }
    </style>
 
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
 <link rel='stylesheet' id='sbi_styles-css' href='{{asset('front/wp-content/plugins/instagram-feed/css/sbi-styles.min9b2d.css?ver=6.1')}}' type='text/css' media='all' />
 <link rel='stylesheet' id='wp-block-library-css' href='{{asset('front/wp-includes/css/dist/block-library/style.min6a4d.css?ver=6.1.1')}}' type='text/css' media='all' />
 <link rel='stylesheet' id='nk-awb-css' href='{{asset('front/wp-content/plugins/advanced-backgrounds/assets/awb/awb.minfc6b.css?ver=1.10.0')}}' type='text/css'
     media='all' />
 <link rel='stylesheet' id='wc-blocks-vendors-style-css' href='{{asset('front/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style1da8.css?ver=8.9.2')}}'
     type='text/css' media='all' />
 <link rel='stylesheet' id='wc-blocks-style-css' href='{{asset('front/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style1da8.css?ver=8.9.2')}}'
     type='text/css' media='all' />
 <link rel='stylesheet' id='classic-theme-styles-css' href='{{asset('front/wp-includes/css/classic-themes.min68b3.css?ver=1')}}' type='text/css' media='all' />
 
 <link rel='stylesheet' id='booked-icons-css' href='{{asset('front/wp-content/plugins/booked/assets/css/icons25b6.css?ver=2.3.5')}}' type='text/css' media='all' />
 <link rel='stylesheet' id='booked-tooltipster-css' href='{{asset('front/wp-content/plugins/booked/assets/js/tooltipster/css/tooltipster9b70.css?ver=3.3.0')}}' type='text/css'
     media='all' />
 <link rel='stylesheet' id='booked-tooltipster-theme-css' href='{{asset('front/wp-content/plugins/booked/assets/js/tooltipster/css/themes/tooltipster-light9b70.css?ver=3.3.0')}}'
     type='text/css' media='all' />
 <link rel='stylesheet' id='booked-animations-css' href='{{asset('front/wp-content/plugins/booked/assets/css/animations25b6.css?ver=2.3.5')}}' type='text/css' media='all' />
 <link rel='stylesheet' id='booked-css-css' href='{{asset('front/wp-content/plugins/booked/dist/booked25b6.css?ver=2.3.5')}}' type='text/css' media='all' />
 <link rel='stylesheet' id='contact-form-7-css' href='{{asset('front/wp-content/plugins/contact-form-7/includes/css/stylesa78f.css?ver=5.7.1')}}' type='text/css'
     media='all' />
 <link rel='stylesheet' id='woocommerce-layout-css' href='{{asset('front/wp-content/themes/nordis_v2/assets/css/woocommerce-layoutcb57.css?ver=7.2.2')}}' type='text/css'
     media='all' />
 <link rel='stylesheet' id='woocommerce-smallscreen-css' href='{{asset('front/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreencb57.css?ver=7.2.2')}}' type='text/css'
     media='only screen and (max-width: 768px)' />
 <link rel='stylesheet' id='woocommerce-general-css' href='{{asset('front/wp-content/themes/nordis_v2/assets/css/woocommercecb57.css?ver=7.2.2')}}' type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='pix-styles-css' href='{{asset('front/wp-content/plugins/pix-settings/assets/css/pix-styles6a4d.css?ver=6.1.1')}}' type='text/css'
    media='all' />
<link rel='stylesheet' id='nordis-style-css' href='{{asset('front/wp-content/themes/nordis_v2/style8a54.css?ver=1.0.0')}}' type='text/css' media='all' />

<link rel='stylesheet' id='fontawesome-css' href='{{asset('front/wp-content/themes/nordis_v2/assets/css/fontawesome6a4d.css?ver=6.1.1')}}' type='text/css' media='all' />
<link rel='stylesheet' id='nordis-main-css' href='{{asset('front/wp-content/themes/nordis_v2/assets/css/main8a54.css?ver=1.0.0')}}' type='text/css' media='screen, all' />
<link rel='stylesheet' id='nordis-dynamic-styles-css'
    href='{{asset('front/wp-admin/admin-ajax74f2.css?action=dynamic_styles&amp;pageID=76&amp;ver=6.1.1')}}' type='text/css'
    media='all' />
<link rel='stylesheet' id='booked-wc-fe-styles-css' href='{{asset('front/wp-content/plugins/booked/includes/add-ons/woocommerce-payments/css/frontend-style6a4d.css?ver=6.1.1')}}'
    type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css' href='{{asset('front/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min91ce.css?ver=5.16.0')}}'
    type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='{{asset('front/wp-content/plugins/elementor/assets/css/frontend-lite.min2e46.css?ver=3.9.2')}}' type='text/css'
    media='all' />
<link rel='stylesheet' id='elementor-post-2308-css' href='{{asset('front/post-2308.css')}}' type='text/css'
    media='all' />
    {{-- https://nordis.true-emotions.studio/wp-content/uploads/sites/21/elementor/css/post-3a4c2.css?ver=1672222741 --}}
<link rel='stylesheet' id='elementor-post-76-css' href='{{asset('front/post-76.css')}}' type='text/css'
    media='all' />

<link rel='stylesheet' id='elementor-icons-shared-0-css' href='{{asset('front/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3')}}'
    type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-brands-css' href='{{asset('front/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3')}}'
    type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css' href='{{asset('front/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3')}}' type='text/css'
    media='all' />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<script type='text/javascript' src='{{asset('front/wp-includes/js/jquery/jquery.mina7a0.js?ver=3.6.1')}}'
    id='jquery-core-js'></script>
<script type='text/javascript' src='{{asset('front/wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2')}}'
    id='jquery-migrate-js'></script>
<script type='text/javascript' src='{{asset('front/wp-content/plugins/pix-settings/assets/js/pix-script.js')}}'
    id='pix-script-js'>
</script>
<script type='text/javascript' id='booked-wc-fe-functions-js-extra'>
    /* <![CDATA[ */
var booked_wc_variables = {"prefix":"booked_wc_","ajaxurl":"{{asset('front\/wp-admin\/admin-ajax.php')}}","i18n_confirm_appt_edit":"Are you sure you want to change the appointment date? By doing so, the appointment date will need to be approved again.","i18n_pay":"Are you sure you want to add the appointment to cart and go to checkout?","i18n_mark_paid":"Are you sure you want to mark this appointment as \"Paid\"?","i18n_paid":"Paid","i18n_awaiting_payment":"Awaiting Payment","checkout_page":"https:\/\/nordis.true-emotions.studio\/v2\/checkout\/"};
/* ]]> */
</script>
<script type='text/javascript' src='{{asset('front/wp-content/plugins/booked/includes/add-ons/woocommerce-payments/js/frontend-functions6a4d.js?ver=6.1.1')}}'
    id='booked-wc-fe-functions-js'></script>
<link rel="https://api.w.org/" href="{{asset('front/wp-json/index.html')}}" />
<link rel="alternate" type="application/json" href="{{asset('front/wp-json/wp/v2/pages/76.json')}}" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 6.1.1" />
<meta name="generator" content="WooCommerce 7.2.2" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='index.html' />
<link rel="alternate" type="application/json+oembed"
    href="{{asset('front/wp-json/oembed/1.0/embedb731.json?url=https%3A%2F%2Fnordis.true-emotions.studio%2Fv2%2F')}}" />
<link rel="alternate" type="text/xml+oembed"
    href="{{asset('front/wp-json/oembed/1.0/embedd218?url=https%3A%2F%2Fnordis.true-emotions.studio%2Fv2%2F&amp;format=xml')}}" />


</head>

<body>
    @yield('body')
</body>

</html>
<script>
    window.RS_MODULES = window.RS_MODULES || {};
    window.RS_MODULES.modules = window.RS_MODULES.modules || {};
    window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
    window.RS_MODULES.defered = true;
    window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
    window.RS_MODULES.type = 'compiled';
</script>
<!-- Instagram Feed JS -->
<script type="text/javascript">
    var sbiajaxurl = "https://nordis.true-emotions.studio/wp-admin/admin-ajax.php";
</script>

<div class="popup__wrapper pix-quick-view-popup">
    <div class="popup__closer"></div>
    <div class="popup"><a class="popup__close" href="#"></a>
        <div class="popup__product-container">
        </div>
    </div>
</div>

<link rel='stylesheet' id='elementor-post-1673-css'
    href='{{asset('front/post-1673.css?ver=1672407910')}}' type='text/css' media='all' />
<link rel='stylesheet' id='e-animations-css'
    href='{{asset('front/wp-content/plugins/elementor/assets/lib/animations/animations.min2e46.css?ver=3.9.2')}}' type='text/css'
    media='all' />
<link rel='stylesheet' id='elementor-icons-fa-regular-css'
    href='{{asset('front/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min52d5.css?ver=5.15.3')}}' type='text/css'
    media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'
    href='{{asset('front/wp-content/plugins/revslider/public/assets/css/rs6be51.css?ver=6.5.19')}}' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
    #rs-demo-id {}
</style>
<script type='text/javascript' src='{{asset('front/wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2')}}' id='jquery-ui-core-js'>
</script>
<script type='text/javascript' src='{{asset('front/wp-includes/js/jquery/ui/datepicker.min3f14.js?ver=1.13.2')}}'
    id='jquery-ui-datepicker-js'></script>
<script type='text/javascript' id='jquery-ui-datepicker-js-after'>
    jQuery(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type='text/javascript' src='{{asset('front/wp-content/plugins/booked/assets/js/spin.min7406.js?ver=2.0.1')}}'
    id='booked-spin-js-js'></script>
<script type='text/javascript' src='{{asset('front/wp-content/plugins/booked/assets/js/spin.jquery7406.js?ver=2.0.1')}}'
    id='booked-spin-jquery-js'></script>
<script type='text/javascript'
    src='{{asset('front/wp-content/plugins/booked/assets/js/tooltipster/js/jquery.tooltipster.min9b70.js?ver=3.3.0')}}'
    id='booked-tooltipster-js'></script>

    <script type='text/javascript' src='{{asset('front/wp-content/plugins/booked/assets/js/functions25b6.js?ver=2.3.5')}}'
    id='booked-functions-js'></script>
<script type='text/javascript'
    src='{{asset('front/wp-content/plugins/advanced-backgrounds/assets/vendor/jarallax/dist/jarallax.min4c71.js?ver=2.1.3')}}'
    id='jarallax-js'></script>
<script type='text/javascript'
    src='{{asset('front/wp-content/plugins/advanced-backgrounds/assets/vendor/jarallax/dist/jarallax-video.min4c71.js?ver=2.1.3')}}'
    id='jarallax-video-js'></script>
<script type='text/javascript' id='nk-awb-js-extra'>
    /* <![CDATA[ */
var AWBData = {"settings":{"disable_parallax":[],"disable_video":[],"full_width_fallback":true}};
/* ]]> */
</script>
<script type='text/javascript' src='{{asset('front/wp-content/plugins/advanced-backgrounds/assets/awb/awb.minfc6b.js?ver=1.10.0')}}'
    id='nk-awb-js'></script>
<script type='text/javascript' src='{{asset('front/wp-content/plugins/contact-form-7/includes/swv/js/indexa78f.js?ver=5.7.1')}}'
    id='swv-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
    /* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/nordis.true-emotions.studio\/v2\/wp-json\/","namespace":"contact-form-7\/v1"},"cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='{{asset('front/wp-content/plugins/contact-form-7/includes/js/indexa78f.js?ver=5.7.1')}}'
    id='contact-form-7-js'></script>
<script type='text/javascript' src='{{asset('front/wp-content/plugins/revslider/public/assets/js/rbtools.min8331.js?ver=6.5.18')}}' defer
    async id='tp-tools-js'></script>
<script type='text/javascript' src='{{asset('front/wp-content/plugins/revslider/public/assets/js/rs6.minbe51.js?ver=6.5.19')}}' defer async
    id='revmin-js'></script>
<script type='text/javascript'
    src='{{asset('front/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min8bd8.js?ver=2.7.0-wc.7.2.2')}}'
    id='jquery-blockui-js'></script>


    <script type='text/javascript' src='{{asset('front/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.mincb57.js?ver=7.2.2')}}'
    id='wc-add-to-cart-js'></script>
<script type='text/javascript'
    src='{{asset('front/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min5f13.js?ver=2.1.4-wc.7.2.2')}}' id='js-cookie-js'>
</script>

<script type='text/javascript' src='{{asset('front/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.mincb57.js?ver=7.2.2')}}'
    id='woocommerce-js'></script>
    <script type='text/javascript'
    src='{{asset('front/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.mincb57.js?ver=7.2.2')}}'
    id='wc-cart-fragments-js'></script>

<script type='text/javascript'
    src='{{asset('front/wp-content/plugins/booked/includes/add-ons/frontend-agents/js/functions25b6.js?ver=2.3.5')}}'
    id='booked-fea-js-js'></script>
<script type='text/javascript' src='{{asset('front/wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4')}}' id='imagesloaded-js'></script>
<script type='text/javascript' src='{{asset('front/wp-content/themes/nordis_v2/assets/js/bootstrap.min.js')}}' id='bootstrap-js'></script>
<script type='text/javascript' src='{{asset('front/wp-content/themes/nordis_v2/assets/js/swiper.min.js')}}' id='swiper-js'></script>
<script type='text/javascript' id='nordis-swiper-options-js-extra'>
    /* <![CDATA[ */
var nordis_swiper_options = {"lg":"1025","md":"768"};
/* ]]> */
</script>

<script type='text/javascript' src='{{asset('front/wp-content/themes/nordis_v2/assets/js/swiper-options8a54.js?ver=1.0.0')}}'
    id='nordis-swiper-options-js'></script>
<script type='text/javascript' src='{{asset('front/wp-content/themes/nordis_v2/assets/js/ion.rangeSlider.min.js')}}'
    id='ion-rangeSlider-js'></script>
<script type='text/javascript' src='{{asset('front/wp-content/themes/nordis_v2/assets/js/fancybox.min.js')}}' id='fancybox-js'></script>
<script type='text/javascript' src='{{asset('front/wp-content/themes/nordis_v2/assets/js/isotope.min.js')}}' id='isotope-masonry-js'>
</script>
<script type='text/javascript' src='{{asset('front/wp-content/themes/nordis_v2/assets/js/SmoothScroll8a54.js?ver=1.0.0')}}'
    id='SmoothScroll-js'></script>
<script type='text/javascript' src='{{asset('front/wp-content/themes/nordis_v2/assets/js/main8a54.js?ver=1.0.0')}}' id='nordis-main-js'>
</script>
<script type='text/javascript' id='nordis-main-js-after'>
    jQuery("head").append("<style> .pix_video_798993378{background: url(https://nordis.true-emotions.studio/wp-content/uploads/2021/10/health1-1024x683.jpg) no-repeat 50% 50%;display:grid;position:relative;height:350px}.pix_video_798993378 .pix-video{background-color:}</style>");
</script>
<script type='text/javascript' id='nordis-custom-js-extra'>
    /* <![CDATA[ */
var nordisAjax = {"url":"https:\/\/nordis.true-emotions.studio\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='{{asset('front/wp-content/themes/nordis_v2/assets/js/custom8a54.js?ver=1.0.0')}}'
    id='nordis-custom-js'></script>
<script type='text/javascript' src='{{asset('front/wp-content/themes/nordis_v2/assets/js/woo-custom8a54.js?ver=1.0.0')}}'
    id='nordis-woo-custom-js'></script>
<script type='text/javascript' src='{{asset('front/wp-includes/js/comment-reply.min6a4d.js?ver=6.1.1')}}' id='comment-reply-js'></script>
<script type='text/javascript'
    src='{{asset('front/wp-content/themes/nordis_v2/elementor/assets/js/widgets/widgets-carousel8a54.js?ver=1.0.0')}}'
    id='nordis-widgets-carousel-js'></script>
<script type='text/javascript'
    src='{{asset('front/wp-content/themes/nordis_v2/elementor/assets/js/widgets/widgets-projects-filter8a54.js?ver=1.0.0')}}'
    id='nordis-widgets-projects-filter-js'></script>
<script type='text/javascript'
    src='{{asset('front/wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min3958.js?ver=0.2.1')}}'
    id='jquery-numerator-js'></script>
<script type='text/javascript' id='sbi_scripts-js-extra'>
    /* <![CDATA[ */
var sb_instagram_js_options = {"font_method":"svg","resized_url":"https:\/\/nordis.true-emotions.studio\/wp-content\/uploads\/sb-instagram-feed-images\/","placeholder":"https:\/\/nordis.true-emotions.studio\/wp-content\/plugins\/instagram-feed\/img\/placeholder.png","ajax_url":"https:\/\/nordis.true-emotions.studio\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='{{asset('front/wp-content/plugins/instagram-feed/js/sbi-scripts.min9b2d.js?ver=6.1')}}'
    id='sbi_scripts-js'></script>
<script type='text/javascript' src='{{asset('front/wp-includes/js/underscore.mind584.js?ver=1.13.4')}}' id='underscore-js'></script>
<script type='text/javascript' id='wp-util-js-extra'>
    /* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type='text/javascript' src='{{asset('front/wp-includes/js/wp-util.min6a4d.js?ver=6.1.1')}}' id='wp-util-js'></script>
<script type='text/javascript' id='wc-add-to-cart-variation-js-extra'>
    /* <![CDATA[ */
var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_make_a_selection_text":"Please select some product options before adding this product to your cart.","i18n_unavailable_text":"Sorry, this product is unavailable. Please choose a different combination."};
/* ]]> */
</script>
<script type='text/javascript'
    src='{{asset('front/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.mincb57.js?ver=7.2.2')}}'
    id='wc-add-to-cart-variation-js'></script>
<script type='text/javascript' src='{{asset('front/wp-content/plugins/elementor/assets/js/webpack.runtime.min2e46.js?ver=3.9.2')}}'
    id='elementor-webpack-runtime-js'></script>
<script type='text/javascript' src='{{asset('front/wp-content/plugins/elementor/assets/js/frontend-modules.min2e46.js?ver=3.9.2')}}'
    id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='{{asset('front/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2')}}'
    id='elementor-waypoints-js'></script>
<script type='text/javascript' id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.9.2","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"a11y_improvements":true,"additional_custom_breakpoints":true,"e_import_export":true,"e_hidden_wordpress_widgets":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true,"kit-elements-defaults":true},"urls":{"assets":"https:\/\/nordis.true-emotions.studio\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":76,"title":"Nordis%20%E2%80%93%20Medical%20WordPress%20Template","excerpt":"","featuredImage":false}};
</script>
<script type='text/javascript' src='{{asset('front/wp-content/plugins/elementor/assets/js/frontend.min2e46.js?ver=3.9.2')}}'
    id='elementor-frontend-js'></script>
<script id="rs-initialisation-scripts">
    var	tpj = jQuery;

		var	revapi7;

		if(window.RS_MODULES === undefined) window.RS_MODULES = {};
		if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
		RS_MODULES.modules["revslider71"] = {once: RS_MODULES.modules["revslider71"]!==undefined ? RS_MODULES.modules["revslider71"].once : undefined, init:function() {
			window.revapi7 = window.revapi7===undefined || window.revapi7===null || window.revapi7.length===0  ? document.getElementById("rev_slider_7_1") : window.revapi7;
			if(window.revapi7 === null || window.revapi7 === undefined || window.revapi7.length==0) { window.revapi7initTry = window.revapi7initTry ===undefined ? 0 : window.revapi7initTry+1; if (window.revapi7initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider71"].init()}); return;}
			window.revapi7 = jQuery(window.revapi7);
			if(window.revapi7.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_7_1"); return;}
			revapi7.revolutionInit({
					revapi:"revapi7",
					sliderType:"hero",
					DPR:"dpr",
					sliderLayout:"fullwidth",
					duration:"6000ms",
					visibilityLevels:"1240,1024,778,480",
					gridwidth:"1300,1024,778,480",
					gridheight:"870,870,870,720",
					lazyType:"smart",
					perspective:600,
					perspectiveType:"local",
					editorheight:"870,870,870,720",
					responsiveLevels:"1240,1024,778,480",
					progressBar:{disableProgressBar:true},
					navigation: {
						onHoverStop:false
					},
					viewPort: {
						global:true,
						globalDist:"-200px",
						enable:false,
						visible_area:"20%"
					},
					fallbacks: {
						allowHTML5AutoPlayOnAndroid:true
					},
			});
			
		}} // End of RevInitScript

		if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
</script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {

            for (let i = 0; i < document.forms.length; ++i) {
                let form = document.forms[i];
				if ($(form).attr("method") != "get") { $(form).append('<input type="hidden" name="_evOSjG-NU" value="pzuh_9qH7jS" />'); }
if ($(form).attr("method") != "get") { $(form).append('<input type="hidden" name="OzaKMf" value="Fxu[pVe3Ky" />'); }
            }

            $(document).on('submit', 'form', function () {
				if ($(this).attr("method") != "get") { $(this).append('<input type="hidden" name="_evOSjG-NU" value="pzuh_9qH7jS" />'); }
if ($(this).attr("method") != "get") { $(this).append('<input type="hidden" name="OzaKMf" value="Fxu[pVe3Ky" />'); }
                return true;
            });

            jQuery.ajaxSetup({
                beforeSend: function (e, data) {

                    if (data.type !== 'POST') return;

                    if (typeof data.data === 'object' && data.data !== null) {
						data.data.append("_evOSjG-NU", "pzuh_9qH7jS");
data.data.append("OzaKMf", "Fxu[pVe3Ky");
                    }
                    else {
                        data.data = data.data + '&_evOSjG-NU=pzuh_9qH7jS&OzaKMf=Fxu[pVe3Ky';
                    }
                }
            });

        });
</script>