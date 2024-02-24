<!DOCTYPE html>
<html dir="rtl">

<head>
    <!-- Other meta tags and stylesheets -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add the Bootstrap CSS link above your own custom CSS links -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Pavo is a mobile app Tailwind CSS HTML template created to help you present benefits, features and information about mobile apps in order to convince visitors to download them" />
    <meta name="author" content="Your name" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image" /> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>مدونة المقالات والأخبار</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet" />
    <link href="css/fontawesome-all.css" rel="stylesheet" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link href="css/swiper.css" rel="stylesheet" />
    <link href="css/magnific-popup.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Tajawal' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />


    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png" />
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Navigation -->
    <nav class="navbar fixed-top">
        <div class="container flex flex-wrap items-center justify-between sm:px-4 lg:flex-nowrap lg:px-8">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!--<a class="text-gray-800 font-semibold text-3xl leading-4 no-underline page-scroll" href="index.html">Pavo</a>-->

            <!-- Image Logo -->
            <a class="inline-block mr-4 py-0.5 text-xl whitespace-nowrap hover:no-underline focus:no-underline"
                href="index.html">
                <img src="images/logo.png" alt="alternative" class="h-8" id="LOGO" />
            </a>

            <button
                class="background-transparent rounded text-xl leading-none hover:no-underline focus:no-underline lg:hidden lg:text-gray-400"
                type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon inline-block w-8 h-8 align-middle"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow lg:items-center"
                id="navbarsExampleDefault">
                <ul class="pl-0 mt-3 mb-2 ml-auto flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row">
                    <li>
                        <a class="nav-link page-scroll" href="index.html#header">الرئيسية <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a class="nav-link page-scroll" href="index.html#training_programs">البرامج التدريبية</a>
                    </li>
                    <li>
                        <a class="nav-link page-scroll" href="index.html#Trainers">المدربين</a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="direction: rtl;">المزيد </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item page-scroll" href="aboutus.html">من نحن</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll active" href="blog.html">مدونة المقالات والأخبار</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="article.html">الجهات المعتمدة</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="contactus.html">تواصل معنا</a>
                            <div class="dropdown-divider"></div>
                            <!-- <a class="dropdown-item page-scroll" href="imageslib.html">مكتبة الصور</a>
                    <div class="dropdown-divider"></div>-->
                            <a class="dropdown-item page-scroll" href="privacy.html">سياسة الخصوصية</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="complaints and suggestions.html">الشكاوي
                                والاقتراحات</a>
                        </div>
                    </li>

                </ul>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header class="ex-header bg-gray">
        <div class="container px-4 sm:px-8 xl:px-4">
            <h1 class="xl:ml-24">المعاملات في منصة جهات</h1>
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <style>
        ul.breadcrumb {
            padding: 10px 16px;
            list-style: none;
            background-color: #ffffff;
        }

        /* Display list items side by side */
        ul.breadcrumb li {
            display: inline;
            font-size: 18px;
        }

        /* Add a slash symbol (/) before/behind each list item */
        ul.breadcrumb li+li:before {
            padding: 8px;
            color: #005461;
            content: "/\00a0";
        }

        /* Add a color to all links inside the list */
        ul.breadcrumb li a {
            color: #ffffff;
            text-decoration: none;
        }

        /* Add a color on mouse-over */
        ul.breadcrumb li a:hover {
            color: #ffffff;
            text-decoration: underline;
        }
    </style>
    <ul class="breadcrumb">
        <li><a href="index.html" style="color: #2882C5;"><i class="pe-7s-home"></i>
                الرئيسية</a></li>
        <li><a href="blog.html" style="color: #2882C5;">مدونة المقالات والأخبار</a></li>
        <li id="item_title_">المعاملات في منصة جهات</li>
    </ul>

    <div class="ex-basic-1 py-12">
        <div class="container mx-auto px-4 sm:px-8 xl:max-w-5xl xl:px-12">
            <div class="ex-basic-1 py-12">
                <div class="container mx-auto px-4 sm:px-8 xl:max-w-5xl xl:px-12">
                    <h3 class="mt-12 mb-4">المعاملات</h3>
                    <p class="mb-12" style="font-weight: 1000;">

                        تعتبر المعاملات في الجهات هي طريقة مبتكرة ومتطورة لتوثيق المهام من خلالها، حيث تُمكن المستخدم من
                        إدراج
                        المعاملات مع إمكانية التعديل عليها أو اسنادها لموظف او متدرب آخر.
                        <br>
                        في هذا المقال، سنتعرف أكثر عن مميزات المعاملات، وكيفية إضافتها، والتعديل عليها، أو حتى إسنادها.
                    </p>
                </div>
                <div class="text-box mb-12">
                    <h3 class="mb-2">أهمية المعاملات</h3> <br>
                    <ul class="list-unstyled space-y-2 mb-4">
                        <li class="flex">
                            <i class="fas fa-square"></i>
                            <div class="flex-1 ml-2">
                                <strong> تساعد المتدرب أو الموظف في توثيق المهام المكلف بها، وتعزيزها بملفات او
                                    صور.</strong>
                        </li>
                        <li class="flex">
                            <i class="fas fa-square"></i>
                            <div class="flex-1 ml-2">
                                <strong> إمكانية التعديل عليها في حال كانت المهمة مقسمة إلى عدة مراحل، أو
                                    مستمرة.</strong>
                            </div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-square"></i>
                            <div class="flex-1 ml-2">
                                <strong>تساعد المدرب في متابعة سير المهام المكلفة للمتدرب، وتقييمه على بالرجوع إليها.</strong>
                            </div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-square"></i>
                            <div class="flex-1 ml-2">
                                <strong>ضمان سير العمل الفردي أو الجماعي، من خلال توثيق كافة التفاصيل في شرح المهمة.</strong>
                            </div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-square"></i>
                            <div class="flex-1 ml-2">
                                <strong>مراجعة المهام، والتأكد منها وتوزيعها بشكل دقيق، والمتابعة المستمرة لها.</strong>
                            </div>
                        </li>
                    </ul>
                </div> <!-- end of text-box -->
                <div class="container mx-auto px-4 sm:px-8 xl:max-w-5xl xl:px-12">
                    <h3 class="mt-12 mb-4">كيفية إضافة المعاملات</h3>
                    <p class="mb-12">

                        بعد انشاء حساب على <a href="https://portal.jehat.sa/client_login" style="color: #2882C5;"
                            target="_blank">منصة
                            جهات</a>
                        يقوم المتدرب بتسجيل دخوله إلى حسابه الخاص، وثم النقر على أيقونة مكتبي
                        <br><br>
                        <img src="images/1re.png" class="center">
                        <style>
                            .center {
                                display: block;
                                margin-left: auto;
                                margin-right: auto;
                                width: 100%;
                            }
                        </style>
                        <br>
                        ثم الانتقال من خلال قائمة يمين الشاشة إلى خانة المعاملات " ايقونة التكت " ثم الضغط على اضافة طلب
                        <br><br>
                        <img src="images/2re.png" class="center" style="width: 30%;">
                        <br><br>
                        هنا ستظهر الشاشة المخصصة للمعاملة، يجب تحديد القسم والجهات، ونوع الطلب، وكافة البيانات التي تطلب
                        من المستخدم إدخالها والمشار إليها بالنجمة.
                        <br>
                        أما عند الموظف، يتم تحديد اسم المتدرب الذي سيرفع هذه المعاملة.
                        <br><br>
                        <img src="images/3re.png" class="center">
                        <br>
                        <h8 class="center"><mark>تنبيه: البيانات قد تتغير وليست ثابتة</mark></h8>
                        <br><br>
                        وفي القسم السفلي من الصفحة سيُطلب من المتدرب كتابة عنوان للمعاملة، ويجب أن يكون خاص ويشرح هذه
                        المعاملة، وعند التفاصيل يجب أن يكتب المتدرب كافة تفاصيل المهمة، بكل النقاط والمهام المنجزة خلال
                        هذه المهمة، بأدق التفاصيل وأنسب التعابير.
                        <br>
                        وعند المستندات، يجب على المتدرب ارفاق صورة أو ملف للمهمة، وهذا مطلب أساسي في المعاملة، وتكون هي
                        المرجع للتقييم.
                        <br><br><br>
                        <img src="images/4re.png" class="center">
                        <br><br>
                        بالنقر على ايقونة حفظ يتم حفظ المعاملة.
                    </p>
                </div>
                <div class="container mx-auto px-4 sm:px-8 xl:max-w-5xl xl:px-12">
                    <h3 class="mt-12 mb-4">كيفية التعديل على المعاملة</h3>
                    <p class="mb-12">
                        من خلال التوجه إلى صفحة المستخدم الخاصة " مكتبي " واختيار المعاملة التي سيجري المتدرب التغيير
                        عليها، ثم في اسفل الصفحة، سنجد خانة مشابهة لخانة التفاصيل في صفحة المعاملات، يقوم المتدرب بتعبئة
                        هذه التفاصيل من خلال كتابة التعديلا او مهام الاضافية التي تم العمل عليها في هذه المهمة.
                        <br><br>
                        <img src="images/5re.png" class="center">
                        <style>
                            .center {
                                display: block;
                                margin-left: auto;
                                margin-right: auto;
                                width: 100%;
                            }
                        </style>
                        <br><br><br>
                        ثم اختيار اسم المشرف في قسم المتدرب من قائمة يسند إلى، مع ضرورة اضافة المرفقات.
                        <br><br><br><br><br>
                        <img src="images/6re.png" class="center">
                        <br><br><br>
                        يجب تسجيل رقم المعاملة، حيث سيتم استخدامه في حال اراد المتدرب التعديل على المعاملة مرة اخرى،
                        وبهذه الحالة، يتم البحث عن المعاملة من زر البحث الموجود في أعلى الصفحة من خلال البحث بالرقم
                        الخاص بالمعاملة.
                        <br><br>
                        <img src="images/7re.png" class="center">
                        <br><br>
                        ثم من النتائج يتم اختيار المعاملة الخاصة بالمتدرب، بعدها في اسفل الصفحة، سنجد صفحة مشابهة تمامًا
                        لما سبق، اما هنا سيتم اختيار اسم المتدرب من قائمة " يسند إلى " وستصبح المعاملة في قائمة المتدرب،
                        ويستطيع الاضافة عليها.
                        <br><br><br>
                        <img src="images/8re.png" class="center">
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="ex-basic-1 py-12">
        <div class="container mx-auto px-4 sm:px-8 xl:max-w-5xl xl:px-12">
            <h5 class="mt-12 mb-4">بحال وجود أي مشكلة تقنية او فنية، يرجى التواصل معنا عبر الرقم المخصص او بسؤال مسؤول
                القسم.
            </h5>
        </div>
    </div>


    <br><br><br>


    <!-- Footer -->
    <div class="footer" style="text-align: center;">
        <div class="container px-4 sm:px-8" style="text-align: center;">
            <h4 class="mb-8 lg:max-w-3xl lg:mx-auto">ابدأ خطتك التدريبية التعليمية مع نخبة من المدربين وبرامج
                بمختلف
                المجالات.
                <br>
                لمزيد من المعلومات تواصل معنا <a class="text-indigo-600 hover:text-gray-500" href="training@jehat.sa"
                    style="text-align: center;">training@jehat.sa</a>
            </h4>
            <br>
            <div class="social-container mb-8 lg:max-w-3xl lg:mx-auto" style="text-align: center;">
                <span class="fa-stack">
                    <a href="https://www.facebook.com/profile.php?id=100084844831017" target="_blank">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="https://twitter.com/jehat_Platform" target="_blank">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="https://www.linkedin.com/in/jehat-platform-729a5025b/" target="_blank">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-linkedin fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="https://instagram.com/jehat_platform?igshid=OGQ5ZDc2ODk2ZA==" target="_blank">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-instagram fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="https://www.youtube.com/channel/UCfwE7stMZzQlurXJN2eQvIQ" target="_blank">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-youtube fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="https://t.snapchat.com/rzhK079O" target="_blank">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-snapchat fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="https://www.tiktok.com/@jehatplatform?lang=ar" target="_blank">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-tiktok fa-stack-1x"></i>
                    </a>
                </span>
            </div> <!-- end of social-container -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->



    <!-- Copyright -->
    <div class="copyright">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-3">
            <ul class="mb-4 list-unstyled p-small" style="text-align: center;">
                <li class="mb-2"><a href="aboutus.html">من نحن</a></li>
                <li class="mb-2"><a href="privacy.html">سياسة الخصوصية</a></li>
                <li class="mb-2"><a href="contactus.html">تواصل معنا</a></li>
            </ul>
            <p class="pb-2 p-small statement" style="text-align: center;">2023 ©
                <a href="index.html" class="no-underline">Jehat</a>
            </p>


        </div>

        <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for JavaScript plugins -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>