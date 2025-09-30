<?php

// include يحاول تحميل الرأس
include_once 'header.php';


?>
<!--page title start-->

<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-12">
        <h1> التنظيم الإداري </h1>
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">الصفحة الرئيسية</a> </li>
            <li class="breadcrumb-item"><a href="#">خدمات</a> </li>
            <li class="breadcrumb-item active" aria-current="page"> التنظيم الإداري </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<!--page title end-->

<!--body content start-->

<div class="page-content">

  <!--section start-->

  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <h2 class="title mb-3"> التنظيم الإداري </h2>
          <p class="mb-0">شركتنا تدرس وتقترح الهياكل التنظيمية وتطورها لجميع الجهات التي تطلب ذلك منا وتعمل على
            دراسة المستويات الوظيفية واقتراح الوصف الوظيفي وربط ذلك بتحقيق الرقابة الداخلية السليمة والتأكد من عدم
            تضارب الصلاحيات أو تداخلها بما يحقق الأداء الأفضل وتوفير الجهد والمال . </p>
          <img class="img-fluid w-100 rounded box-shadow my-4" src="images/case-studies/04.jpg" alt="">
        </div>
        <div class="col-lg-4 col-md-12 sidebar md-mt-5">
          <div class="widget mb-5">
            <div class="sidebar-links">
              <ul class="list-unstyled">
                <li><a href="scope_review.php"><span class="link-icon link-arrow"></span>
                    <p class="link-text">مجال المراجعة والتدقيق</p>
                  </a> </li>
                <li class="active"><a href="administrative_organization.php"><span class="link-icon link-arrow"></span>
                    <p class="link-text"> التنظيم الإداري</p>
                  </a> </li>
                <li><a href="commercial_disputes.php"><span class="link-icon link-arrow"></span>
                    <p class="link-text"> القضايا والمنازعات التجارية </p>
                  </a> </li>
                <li><a href="establishing_companies.php"><span class="link-icon link-arrow"></span>
                    <p class="link-text"> تأسيـس الشركات </p>
                  </a> </li>
                <li><a href="judicial_guards.php"><span class="link-icon link-arrow"></span>
                    <p class="link-text">الحراسات القضائية</p>
                  </a> </li>
                <li><a href="liquidation_companies.php"><span class="link-icon link-arrow"></span>
                    <p class="link-text">تصفية الشركات والتركات </p>
                  </a> </li>
                <li><a href="economic.php"><span class="link-icon link-arrow"></span>
                    <p class="link-text">دراسات الجدوى اإلقتصادية</p>
                  </a> </li>
              </ul>
            </div>
          </div>
          <div class="widget">
            <div class="widget-contact px-5 py-5 xs-px-2 xs-py-2 text-white" data-bg-img="images/bg/03.jpg"
              data-overlay="8">
              <h4 class="text-white text-capitalize">اتصل بنا للحصول على المساعدة؟</h4>
              <p>اتصل بنا على مركز الاستشارات الأقرب إليك أو أرسل استفسارًا عبر الإنترنت.</p>
              <a class="btn" href="contact.php"><span>جهات الاتصال</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--section end-->

</div>

<!--body content end-->

<?php
// محتوى التذييل للصفحة

include_once 'footer.php';

?>