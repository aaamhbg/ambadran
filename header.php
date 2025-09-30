<?php
// جلب اسم الملف الذي يتم تنفيذه حالياً (مثلاً: index.php)
$currentFile = basename($_SERVER['PHP_SELF']);

// 2. تعريف مجموعة ملفات قسم "الخدمات"
$servicePages = [
    'liquidation_companies.php', // (تأكد من استخدام الامتداد .php)
    'judicial_guards.php',
    'establishing_companies.php',
    'administrative_organization.php',
    'economic.php',
    'scope_review.php',
    'commercial_disputes.php'
];

// 3. التحقق مما إذا كان الملف الحالي ضمن المجموعة
$isServiceActive = in_array($currentFile, $servicePages);

// $isServiceActive ستكون إما TRUE (صحيح) أو FALSE (خطأ)

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="محاسب قانوني,جدة,مراجع حسابات,ميزانيات معتمدة," />
    <meta name="description"
        content="نعمل في شركة البدران المهنية على تقديم خدمات المراجعة والتدقيق بحرفية من خلال كوادر مهنية ذات خبرة وتأهيل عالي لتلبية احتياجات عملائنا ومساعدتهم في تحقيق أهدافهم" />
    <meta name="author" content="شركة البدران الهنية AMBadran" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        @font-face {
            font-family: 'Almarai-Font';
            src: url('fonts/Almarai-Font.ttf') format('truetype');
            font-weight: bold;
            font-style: normal;
        }

        @font-face {
            font-family: 'Almarai-Font';
            src: url('fonts/Almarai-Font.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        html,
        body,
        p,
        h1,
        h2,
        h3,
        h4,
        h4s,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        header,
        .full_page_photo,
        .section_header {
            font-family: 'Almarai-Font';
        }
    </style>
    <!-- Title -->
    <title>شركة البدران محاسبون ومراجعون قانونيون AMBadran</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/icon.png" />

    <!-- inject css start -->

    <!--== theme plugin -->
    <link href="css/theme-plugin.css" rel="stylesheet" type="text/css" />

    <!--== style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <!--== responsive -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />

    <!--== color-customizer -->
    <link href="#" data-style="styles" rel="stylesheet">
    <link href="css/color-customize/color-customizer.css" rel="stylesheet" type="text/css" />

    <!-- inject css end -->
    <!-- meta tags -->
    <meta charset="utf-8">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-90385115XX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-90385115XX');
    </script>


</head>

<body>

    <!-- page wrapper start -->

    <div class="page-wrapper">

        <!-- preloader start -->

        <div id="ht-preloader">
            <div class="clear-loader"> <img id="logo-img" class="img-center" src="images/icon.png" style="width: 100px;"
                    alt=""> </div>
        </div>
        <header id="site-header" class="header">

            <div class="header-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 d-flex align-items-center justify-content-between"> <a
                                class="navbar-brand logo" href="index.php"> <img id="logo-img" class="img-center"
                                    src="images/logo.png" alt=""> </a>
                            <div class="d-none d-sm-flex justify-content-between">
                                <div class="topbar-link d-flex align-items-center">
                                    <div class="d-flex align-items-center ml-4"> <i class="flaticon-email"></i>
                                        <div>
                                            <h6>البريد الإلكتروني</h6>
                                            <a href="mailto:info@ambadran.com">info@ambadran.com</a>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-flex align-items-center ml-3"> <i
                                            class="flaticon-phone"></i>
                                        <div>
                                            <h6>مكالمة</h6>
                                            <a href="tel:0555588401">0555588401</a>
                                        </div>
                                    </div>
                                    <div class="d-none d-lg-flex align-items-center"> <i class="flaticon-24-hours"></i>
                                        <div>
                                            <h6>ساعات العمل</h6>
                                            <p class="mb-0">من 8 صباحًا 5 مساءً</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="header-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Navbar -->
                            <nav class="navbar navbar-expand-lg">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNavDropdown" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span></span> <span></span> <span></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <ul class="navbar-nav ml-auto">
                                        <!-- Home -->
                                        <li class="nav-item" data-toggle="hover"> <a
                                                class="nav-link <?php echo ($currentFile == 'index.php') ? 'active' : ''; ?>"
                                                href="index.php">الصفحة
                                                الرئيسية</a>
                                        </li>
                                        <li class="nav-item"> <a
                                                class="nav-link <?php echo ($currentFile == 'about.php') ? 'active' : ''; ?> "
                                                href="about.php">من نحن</a></li>
                                        <li class="nav-item" data-toggle="hover"> <a
                                                class="nav-link <?php echo ($currentFile == 'office_components.php') ? 'active' : ''; ?>"
                                                href="office_components.php">مقـومـات
                                                المكتـب</a></li>
                                        <li class="nav-item dropdown" data-toggle="hover"> <a
                                                class="nav-link <?php echo $isServiceActive ? 'active' : ''; ?> dropdown-toggle"
                                                href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">خدمات</a>
                                            <div class="dropdown-menu">
                                                <ul class="list-unstyled">
                                                    <li><a href="scope_review.php">مجال المراجعة والتدقيق</a> </li>
                                                    <li><a href="administrative_organization.php"> دراسة نظام الرقابة
                                                            الداخلية
                                                        </a> </li>
                                                    <li><a href="commercial_disputes.php"> القضايا والمنازعات التجارية
                                                        </a>
                                                    </li>
                                                    <li><a href="establishing_companies.php"> تأسيـس الشركات </a> </li>
                                                    <li><a href="judicial_guards.php">الحراسات القضائية </a> </li>
                                                    <li><a href="liquidation_companies.php">تصفية الشركات والتركات </a>
                                                    </li>
                                                    <li><a href="economic.php"> دراسات الجدوى الإقتصادية </a> </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item" data-toggle="hover"> <a
                                                class="nav-link <?php echo ($currentFile == 'contact.php') ? 'active' : ''; ?>"
                                                href="contact.php"> طلب عرض سعر</a></li>
                                        <li class="nav-item" data-toggle="hover"> <a
                                                class="nav-link <?php echo ($currentFile == 'Employment.php') ? 'active' : ''; ?>"
                                                href="Employment.php">التـوظيف</a></li>
                                        <!--<li data-toggle="hover"> <a class="nav-link" href="calculate.html"> حسابات </a></li>-->

                                    </ul>
                                </div>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="search-input" id="search-input-box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search-input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="flaticon-close" id="close-search" title="Close Search"></span>
                </form>
            </div>
        </div>

        <!--header end-->