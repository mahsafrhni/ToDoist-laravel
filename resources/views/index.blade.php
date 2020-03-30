@extends('layouts.app' ,['title' =>$page_title])
@section('content')
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>کاربر</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="#">
        <!-- Bootstrap core CSS -->
        <link href="dist/css/lib/bootstrap.min.css" type="text/css" rel="stylesheet">
        <!-- Diff core CSS -->
        <link href="dist/css/diff.min.css" type="text/css" rel="stylesheet">
        <!-- Favicon -->
        <link href="dist/img/favicon.png" type="image/png" rel="icon">
    </head>
    <body>
    <!-- Start of Main -->
    <div class="main">
        <!-- Start of Hero -->
        <div class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>تعقیب کنراد</h1>
                        <p dir="rtl">لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                    </div>
                </div>
                <ul class="nav" role="tablist">
                    <li><a href="#teams" class="active" data-toggle="tab" role="tab" aria-controls="teams"
                           aria-selected="true">تیم ها</a></li>
                    <li><a href="#projects" data-toggle="tab" role="tab" aria-controls="projects" aria-selected="true">پروژه
                            ها</a></li>
                    <li><a href="#tasks" data-toggle="tab" role="tab" aria-controls="tasks" aria-selected="false"
                           class="">وظایف</a></li>
                </ul>
            </div>
        </div>
        <!-- End of Hero -->
        <div class="tab-content">
            <!-- Start of Teams -->
            <div class="teams tab-pane fade show active" id="teams" role="tabpanel">
                <div class="container">
                    <div class="titr">
                        <h3>تیم ها</h3>
                        <form dir="rtl" class="search">
                            <input type="search" class="form-control" placeholder="فیلتر تیم ها">
                            <button type="button" class="btn prepend">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-filter">
                                    <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="rectangles">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item">
                                    <div class="top">
                                        <a href="team.html"><h5>طرح</h5></a>
                                        <div class="dropdown">
                                            <button type="button" class="btn" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-left">
                                                <button type="button" class="dropdown-item">ویرایش</button>
                                                <button type="button" class="dropdown-item">اشتراک گذاری</button>
                                                <button type="button" class="dropdown-item">حذف</button>
                                            </div>
                                        </div>
                                    </div>
                                    <p dir="rtl">لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                                    <div class="meta">
                                        <ul class="avatars">
                                            <li><a href="#"><img src="dist/img/avatars/avatar-male-1.jpg" alt="avatar"></a>
                                            </li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-male-2.jpg" alt="avatar"></a>
                                            </li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-3.jpg"
                                                                 alt="avatar"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item">
                                    <div class="top">
                                        <a href="team.html"><h5>پکسل</h5></a>
                                        <div class="dropdown">
                                            <button type="button" class="btn" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-left">
                                                <button type="button" class="dropdown-item">ویرایش</button>
                                                <button type="button" class="dropdown-item">اشتراک گذاری</button>
                                                <button type="button" class="dropdown-item">حذف</button>
                                            </div>
                                        </div>
                                    </div>
                                    <p dir="rtl">لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                                    <div class="meta">
                                        <ul class="avatars">
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-1.jpg"
                                                                 alt="avatar"></a></li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-2.jpg"
                                                                 alt="avatar"></a></li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-male-3.jpg" alt="avatar"></a>
                                            </li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-4.jpg"
                                                                 alt="avatar"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item">
                                    <div class="top">
                                        <a href="team.html"><h5>چرخش خاکستری</h5></a>
                                        <div class="dropdown">
                                            <button type="button" class="btn" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-left">
                                                <button type="button" class="dropdown-item">ویرایش</button>
                                                <button type="button" class="dropdown-item">اشتراک گذاری</button>
                                                <button type="button" class="dropdown-item">حذف</button>
                                            </div>
                                        </div>
                                    </div>
                                    <p dir="rtl">لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                                    <div class="meta">
                                        <ul class="avatars">
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-5.jpg"
                                                                 alt="avatar"></a></li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-male-4.jpg" alt="avatar"></a>
                                            </li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-6.jpg"
                                                                 alt="avatar"></a></li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-male-5.jpg" alt="avatar"></a>
                                            </li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-male-6.jpg" alt="avatar"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item">
                                    <div class="top">
                                        <a href="team.html"><h5>تفاوت</h5></a>
                                        <div class="dropdown">
                                            <button type="button" class="btn" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-left">
                                                <button type="button" class="dropdown-item">ویرایش</button>
                                                <button type="button" class="dropdown-item">اشتراک گذاری</button>
                                                <button type="button" class="dropdown-item">حذف</button>
                                            </div>
                                        </div>
                                    </div>
                                    <p dir="rtl">لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                                    <div class="meta">
                                        <ul class="avatars">
                                            <li><a href="#"><img src="dist/img/avatars/avatar-male-3.jpg" alt="avatar"></a>
                                            </li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-1.jpg"
                                                                 alt="avatar"></a></li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-3.jpg"
                                                                 alt="avatar"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item">
                                    <div class="top">
                                        <a href="team.html"><h5>ساختگی</h5></a>
                                        <div class="dropdown">
                                            <button type="button" class="btn" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-left">
                                                <button type="button" class="dropdown-item">ویرایش</button>
                                                <button type="button" class="dropdown-item">اشتراک گذاری</button>
                                                <button type="button" class="dropdown-item">حذف</button>
                                            </div>
                                        </div>
                                    </div>
                                    <p dir="rtl">لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                                    <div class="meta">
                                        <ul class="avatars">
                                            <li><a href="#"><img src="dist/img/avatars/avatar-male-6.jpg" alt="avatar"></a>
                                            </li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-5.jpg"
                                                                 alt="avatar"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item">
                                    <div class="top">
                                        <a href="team.html"><h5>کشیدن</h5></a>
                                        <div class="dropdown">
                                            <button type="button" class="btn" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-left">
                                                <button type="button" class="dropdown-item">ویرایش</button>
                                                <button type="button" class="dropdown-item">اشتراک گذاری</button>
                                                <button type="button" class="dropdown-item">حذف</button>
                                            </div>
                                        </div>
                                    </div>
                                    <p dir="rtl">لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                                    <div class="meta">
                                        <ul class="avatars">
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-6.jpg"
                                                                 alt="avatar"></a></li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-3.jpg"
                                                                 alt="avatar"></a></li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-1.jpg"
                                                                 alt="avatar"></a></li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-male-5.jpg" alt="avatar"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Teams -->
            <!-- Start of Projects -->
            <div class="projects tab-pane fade" id="projects" role="tabpanel">
                <div class="container">
                    <div class="titr">
                        <h3>پروژه ها</h3>
                        <button type="button" class="btn round" data-toggle="modal" data-target="#new-project">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-plus">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                        </button>
                        <form dir="rtl" class="search">
                            <input type="search" class="form-control" placeholder="فیلتر پروژه ها">
                            <button type="button" class="btn prepend">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-filter">
                                    <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="rectangles">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 40%"
                                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="top">
                                        <a dir="rtl" href="project.html">
                                            <h5>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-circle blue">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                </svg>
                                                طراحی مجدد نام تجاری
                                            </h5>
                                        </a>
                                        <div class="dropdown">
                                            <button type="button" class="btn" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-left">
                                                <button type="button" class="dropdown-item">ویرایش</button>
                                                <button type="button" class="dropdown-item">اشتراک گذاری</button>
                                                <button type="button" class="dropdown-item">حذف</button>
                                            </div>
                                        </div>
                                    </div>
                                    <p dir="rtl">لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                                    <div class="meta">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                   viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                   class="feather feather-check-square"><polyline
                                                    points="9 11 12 14 22 4"></polyline><path
                                                    d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>4/10</span>
                                        <ul class="avatars">
                                            <li><a href="#"><img src="dist/img/avatars/avatar-male-1.jpg" alt="avatar"></a>
                                            </li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-male-2.jpg" alt="avatar"></a>
                                            </li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-3.jpg"
                                                                 alt="avatar"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item">
                                    <div class="progress">
                                        <div class="progress-bar bg-yellow" role="progressbar" style="width: 20%"
                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="top">
                                        <a dir="rtl" href="project.html">
                                            <h5>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-circle yellow">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                </svg>
                                                دروازه سرور
                                            </h5>
                                        </a>
                                        <div class="dropdown">
                                            <button type="button" class="btn" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-left">
                                                <button type="button" class="dropdown-item">ویرایش</button>
                                                <button type="button" class="dropdown-item">اشتراک گذاری</button>
                                                <button type="button" class="dropdown-item">حذف</button>
                                            </div>
                                        </div>
                                    </div>
                                    <p dir="rtl">لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                                    <div class="meta">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                   viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                   class="feather feather-check-square"><polyline
                                                    points="9 11 12 14 22 4"></polyline><path
                                                    d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>1/8</span>
                                        <ul class="avatars">
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-1.jpg"
                                                                 alt="avatar"></a></li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-2.jpg"
                                                                 alt="avatar"></a></li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-male-3.jpg" alt="avatar"></a>
                                            </li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-4.jpg"
                                                                 alt="avatar"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item">
                                    <div class="progress">
                                        <div class="progress-bar bg-green" role="progressbar" style="width: 70%"
                                             aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="top">
                                        <a dir="rtl" href="project.html">
                                            <h5>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-circle green">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                </svg>
                                                به روز رسانی نرم افزار
                                            </h5>
                                        </a>
                                        <div class="dropdown">
                                            <button type="button" class="btn" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-left">
                                                <button type="button" class="dropdown-item">ویرایش</button>
                                                <button type="button" class="dropdown-item">اشتراک گذاری</button>
                                                <button type="button" class="dropdown-item">حذف</button>
                                            </div>
                                        </div>
                                    </div>
                                    <p dir="rtl">لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                                    <div class="meta">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                   viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                   class="feather feather-check-square"><polyline
                                                    points="9 11 12 14 22 4"></polyline><path
                                                    d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>3/5</span>
                                        <ul class="avatars">
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-5.jpg"
                                                                 alt="avatar"></a></li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-male-4.jpg" alt="avatar"></a>
                                            </li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-6.jpg"
                                                                 alt="avatar"></a></li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-male-5.jpg" alt="avatar"></a>
                                            </li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-male-6.jpg" alt="avatar"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item">
                                    <div class="progress">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 40%"
                                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="top">
                                        <a dir="rtl" href="project.html">
                                            <h5>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-circle purple">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                </svg>
                                                تعمیر و نگهداری شبکه
                                            </h5>
                                        </a>
                                        <div class="dropdown">
                                            <button type="button" class="btn" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-left">
                                                <button type="button" class="dropdown-item">ویرایش</button>
                                                <button type="button" class="dropdown-item">اشتراک گذاری</button>
                                                <button type="button" class="dropdown-item">حذف</button>
                                            </div>
                                        </div>
                                    </div>
                                    <p dir="rtl">لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                                    <div class="meta">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                   viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                   class="feather feather-check-square"><polyline
                                                    points="9 11 12 14 22 4"></polyline><path
                                                    d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>3/6</span>
                                        <ul class="avatars">
                                            <li><a href="#"><img src="dist/img/avatars/avatar-male-3.jpg" alt="avatar"></a>
                                            </li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-1.jpg"
                                                                 alt="avatar"></a></li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-3.jpg"
                                                                 alt="avatar"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item">
                                    <div class="progress">
                                        <div class="progress-bar bg-red" role="progressbar" style="width: 10%"
                                             aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="top">
                                        <a dir="rtl" href="project.html">
                                            <h5>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-circle red">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                </svg>
                                                تغییر مسیر نقشه
                                            </h5>
                                        </a>
                                        <div class="dropdown">
                                            <button type="button" class="btn" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-left">
                                                <button type="button" class="dropdown-item">ویرایش</button>
                                                <button type="button" class="dropdown-item">اشتراک گذاری</button>
                                                <button type="button" class="dropdown-item">حذف</button>
                                            </div>
                                        </div>
                                    </div>
                                    <p dir="rtl">لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                                    <div class="meta">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                   viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                   class="feather feather-check-square"><polyline
                                                    points="9 11 12 14 22 4"></polyline><path
                                                    d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>1/11</span>
                                        <ul class="avatars">
                                            <li><a href="#"><img src="dist/img/avatars/avatar-male-6.jpg" alt="avatar"></a>
                                            </li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-5.jpg"
                                                                 alt="avatar"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item">
                                    <div class="progress">
                                        <div class="progress-bar bg-pink" role="progressbar" style="width: 30%"
                                             aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="top">
                                        <a dir="rtl" href="project.html">
                                            <h5>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-circle pink">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                </svg>
                                                انتشار اولیه
                                            </h5>
                                        </a>
                                        <div class="dropdown">
                                            <button type="button" class="btn" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-left">
                                                <button type="button" class="dropdown-item">ویرایش</button>
                                                <button type="button" class="dropdown-item">اشتراک گذاری</button>
                                                <button type="button" class="dropdown-item">حذف</button>
                                            </div>
                                        </div>
                                    </div>
                                    <p dir="rtl">لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                                    <div class="meta">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                   viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                   class="feather feather-check-square"><polyline
                                                    points="9 11 12 14 22 4"></polyline><path
                                                    d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>2/9</span>
                                        <ul class="avatars">
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-6.jpg"
                                                                 alt="avatar"></a></li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-3.jpg"
                                                                 alt="avatar"></a></li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-female-1.jpg"
                                                                 alt="avatar"></a></li>
                                            <li><a href="#"><img src="dist/img/avatars/avatar-male-5.jpg" alt="avatar"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Projects -->
            <!-- Start of Tasks -->
            <div class="tasks tab-pane fade" id="tasks" role="tabpanel">
                <div class="container">
                    <div class="titr">
                        <h3>وظایف</h3>
                        <button type="button" class="btn round" data-toggle="modal" data-target="#new-project">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-plus">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                        </button>
                        <form dir="rtl" class="search">
                            <input type="search" class="form-control" placeholder="فیلتر وظایف">
                            <button type="button" class="btn prepend">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-filter">
                                    <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="list">
                        <h4>اجرا</h4>
                        <div class="item">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="content">
                                <a href="task.html"><h5>تکرار کامپوننت تقویم</h5></a>
                                <p dir="rtl">لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                            </div>
                            <div class="meta">
                                <span class="order-md-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                              viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                              stroke-width="2" stroke-linecap="round"
                                                              stroke-linejoin="round"
                                                              class="feather feather-check-square"><polyline
                                            points="9 11 12 14 22 4"></polyline><path
                                            d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>4/10</span>
                                <ul class="avatars order-md-1">
                                    <li><a href="#"><img src="dist/img/avatars/avatar-male-1.jpg" alt="avatar"></a></li>
                                    <li><a href="#"><img src="dist/img/avatars/avatar-male-2.jpg" alt="avatar"></a></li>
                                    <li><a href="#"><img src="dist/img/avatars/avatar-female-3.jpg" alt="avatar"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-more-vertical">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="12" cy="5" r="1"></circle>
                                        <circle cx="12" cy="19" r="1"></circle>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <button type="button" class="dropdown-item">ویرایش</button>
                                    <button type="button" class="dropdown-item">اشتراک</button>
                                    <button type="button" class="dropdown-item">حذف</button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%"
                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="content">
                                <a dir="rtl" href="task.html"><h5>دیدار با Dev. تیم</h5></a>
                                <p dir="rtl">لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                            </div>
                            <div class="meta">
                                <span class="order-md-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                              viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                              stroke-width="2" stroke-linecap="round"
                                                              stroke-linejoin="round"
                                                              class="feather feather-check-square"><polyline
                                            points="9 11 12 14 22 4"></polyline><path
                                            d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>1/8</span>
                                <ul class="avatars order-md-1">
                                    <li><a href="#"><img src="dist/img/avatars/avatar-female-1.jpg" alt="avatar"></a>
                                    </li>
                                    <li><a href="#"><img src="dist/img/avatars/avatar-female-2.jpg" alt="avatar"></a>
                                    </li>
                                    <li><a href="#"><img src="dist/img/avatars/avatar-male-3.jpg" alt="avatar"></a></li>
                                    <li><a href="#"><img src="dist/img/avatars/avatar-female-4.jpg" alt="avatar"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-more-vertical">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="12" cy="5" r="1"></circle>
                                        <circle cx="12" cy="19" r="1"></circle>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <button type="button" class="dropdown-item">ویرایش</button>
                                    <button type="button" class="dropdown-item">اشتراک</button>
                                    <button type="button" class="dropdown-item">حذف</button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="progress">
                                <div class="progress-bar bg-green" role="progressbar" style="width: 60%"
                                     aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="content">
                                <a href="task.html"><h5>ترفند مکالمه</h5></a>
                                <p dir="rtl">لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                            </div>
                            <div class="meta">
                                <span class="order-md-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                              viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                              stroke-width="2" stroke-linecap="round"
                                                              stroke-linejoin="round"
                                                              class="feather feather-check-square"><polyline
                                            points="9 11 12 14 22 4"></polyline><path
                                            d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>3/5</span>
                                <ul class="avatars order-md-1">
                                    <li><a href="#"><img src="dist/img/avatars/avatar-female-5.jpg" alt="avatar"></a>
                                    </li>
                                    <li><a href="#"><img src="dist/img/avatars/avatar-male-4.jpg" alt="avatar"></a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-more-vertical">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="12" cy="5" r="1"></circle>
                                        <circle cx="12" cy="19" r="1"></circle>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <button type="button" class="dropdown-item">ویرایش</button>
                                    <button type="button" class="dropdown-item">اشتراک</button>
                                    <button type="button" class="dropdown-item">حذف</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list">
                        <h4>طرح ها</h4>
                        <div class="item">
                            <div class="progress">
                                <div class="progress-bar bg-purple" role="progressbar" style="width: 40%"
                                     aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="content">
                                <a href="task.html"><h5>گزارش بررسی طراحی</h5></a>
                                <p dir="rtl">لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                            </div>
                            <div class="meta">
                                <span class="order-md-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                              viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                              stroke-width="2" stroke-linecap="round"
                                                              stroke-linejoin="round"
                                                              class="feather feather-check-square"><polyline
                                            points="9 11 12 14 22 4"></polyline><path
                                            d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>3/6</span>
                                <ul class="avatars order-md-1">
                                    <li><a href="#"><img src="dist/img/avatars/avatar-male-3.jpg" alt="avatar"></a></li>
                                    <li><a href="#"><img src="dist/img/avatars/avatar-female-1.jpg" alt="avatar"></a>
                                    </li>
                                    <li><a href="#"><img src="dist/img/avatars/avatar-female-3.jpg" alt="avatar"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-more-vertical">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="12" cy="5" r="1"></circle>
                                        <circle cx="12" cy="19" r="1"></circle>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <button type="button" class="dropdown-item">ویرایش</button>
                                    <button type="button" class="dropdown-item">اشتراک</button>
                                    <button type="button" class="dropdown-item">حذف</button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="progress">
                                <div class="progress-bar bg-red" role="progressbar" style="width: 10%"
                                     aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="content">
                                <a href="task.html"><h5>ایجاد طرح راهنمای سبک</h5></a>
                                <p dir="rtl">لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                            </div>
                            <div class="meta">
                                <span class="order-md-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                              viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                              stroke-width="2" stroke-linecap="round"
                                                              stroke-linejoin="round"
                                                              class="feather feather-check-square"><polyline
                                            points="9 11 12 14 22 4"></polyline><path
                                            d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>1/11</span>
                                <ul class="avatars order-md-1">
                                    <li><a href="#"><img src="dist/img/avatars/avatar-male-6.jpg" alt="avatar"></a></li>
                                    <li><a href="#"><img src="dist/img/avatars/avatar-female-5.jpg" alt="avatar"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-more-vertical">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="12" cy="5" r="1"></circle>
                                        <circle cx="12" cy="19" r="1"></circle>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <button type="button" class="dropdown-item">ویرایش</button>
                                    <button type="button" class="dropdown-item">اشتراک</button>
                                    <button type="button" class="dropdown-item">حذف</button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="progress">
                                <div class="progress-bar bg-pink" role="progressbar" style="width: 30%"
                                     aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="content">
                                <a href="task.html"><h5>حل معادلات سیستم</h5></a>
                                <p dir="rtl">لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                            </div>
                            <div class="meta">
                                <span class="order-md-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                              viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                              stroke-width="2" stroke-linecap="round"
                                                              stroke-linejoin="round"
                                                              class="feather feather-check-square"><polyline
                                            points="9 11 12 14 22 4"></polyline><path
                                            d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>2/9</span>
                                <ul class="avatars order-md-1">
                                    <li><a href="#"><img src="dist/img/avatars/avatar-female-6.jpg" alt="avatar"></a>
                                    </li>
                                    <li><a href="#"><img src="dist/img/avatars/avatar-female-3.jpg" alt="avatar"></a>
                                    </li>
                                    <li><a href="#"><img src="dist/img/avatars/avatar-female-1.jpg" alt="avatar"></a>
                                    </li>
                                    <li><a href="#"><img src="dist/img/avatars/avatar-male-5.jpg" alt="avatar"></a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-more-vertical">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="12" cy="5" r="1"></circle>
                                        <circle cx="12" cy="19" r="1"></circle>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <button type="button" class="dropdown-item">ویرایش</button>
                                    <button type="button" class="dropdown-item">اشتراک</button>
                                    <button type="button" class="dropdown-item">حذف</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list">
                        <h4>شکل</h4>
                        <div class="item">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="35"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="content">
                                <a href="task.html"><h5>علامت چوب را جمع کن</h5></a>
                                <p dir="rtl">لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                            </div>
                            <div class="meta">
                                <span class="order-md-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                              viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                              stroke-width="2" stroke-linecap="round"
                                                              stroke-linejoin="round"
                                                              class="feather feather-check-square"><polyline
                                            points="9 11 12 14 22 4"></polyline><path
                                            d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>1/3</span>
                                <ul class="avatars order-md-1">
                                    <li><a href="#"><img src="dist/img/avatars/avatar-male-2.jpg" alt="avatar"></a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-more-vertical">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="12" cy="5" r="1"></circle>
                                        <circle cx="12" cy="19" r="1"></circle>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <button type="button" class="dropdown-item">ویرایش</button>
                                    <button type="button" class="dropdown-item">اشتراک</button>
                                    <button type="button" class="dropdown-item">حذف</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Tasks -->
        </div>
        <!-- Start of New Team -->
        <div class="modal fade" id="new-team" tabindex="-1" role="dialog" aria-labelledby="new-team" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>تیم جدید</h5>
                        <button type="button" class="btn round" data-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="new">
                            <form>
                                <div class="form-group">
                                    <label>نام</label>
                                    <input dir="rtl" type="text" class="form-control" placeholder="نام تیم">
                                </div>
                                <div class="form-group">
                                    <label>توضیحات</label>
                                    <textarea dir="rtl" class="form-control" placeholder="توضیحات تیم"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>اعضا</label>
                                    <input dir="rtl" type="text" class="form-control"
                                           placeholder="اعضای تیم را اضافه کنید ( با , جدا کنید)">
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="col-lg-6">
                                        <div dir="rtl" class="form-group">
                                            <h5>تیم خصوصی</h5>
                                            <p>لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round mode"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div dir="rtl" class="alert">
                                                <h5>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-alert-triangle">
                                                        <path
                                                            d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                                                        <line x1="12" y1="9" x2="12" y2="13"></line>
                                                        <line x1="12" y1="17" x2="12" y2="17"></line>
                                                    </svg>
                                                    هشدار
                                                </h5>
                                                <p>لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn primary">ایجاد تیم</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of New Team -->
        <!-- Start of New Project -->
        <div class="modal fade" id="new-project" tabindex="-1" role="dialog" aria-labelledby="new-project"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>پروژه جدید</h5>
                        <button type="button" class="btn round" data-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="new">
                            <form>
                                <div class="form-group">
                                    <label>نام</label>
                                    <input dir="rtl" type="text" class="form-control" placeholder="نام پروژه">
                                </div>
                                <div class="form-group">
                                    <label>توضیحات</label>
                                    <textarea dir="rtl" class="form-control" placeholder="توضیحات پروژه"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>اعضا</label>
                                    <input dir="rtl" type="text" class="form-control"
                                           placeholder="اعضای تیم را اضافه کنید ( با , جدا کنید)">
                                </div>
                                <div class="form-row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>تاریخ شروع</label>
                                            <input dir="rtl" class="form-control" placeholder="سال/ماه/روز">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>تاریخ اتمام</label>
                                            <input dir="rtl" class="form-control" placeholder="سال/ماه/روز">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>فایلهای شروع</label>
                                    <div class="upload">
                                        <label>
                                            <input type="file">
                                            <span dir="rtl">فایلهای مورد نظر خود را انتخاب کنید.</span>
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="col-lg-6">
                                        <div dir="rtl" class="form-group">
                                            <h5>تیم خصوصی</h5>
                                            <p>لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round mode"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div dir="rtl" class="alert">
                                                <h5>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-alert-triangle">
                                                        <path
                                                            d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                                                        <line x1="12" y1="9" x2="12" y2="13"></line>
                                                        <line x1="12" y1="17" x2="12" y2="17"></line>
                                                    </svg>
                                                    هشدار
                                                </h5>
                                                <p>لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn primary">ایجاد پروژه</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of New Project -->
        <!-- Start of New Task -->
        <div class="modal fade" id="new-task" tabindex="-1" role="dialog" aria-labelledby="new-task" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>وظیفه جدید</h5>
                        <button type="button" class="btn round" data-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="new">
                            <form>
                                <div class="form-group">
                                    <label>نام</label>
                                    <input dir="rtl" type="text" class="form-control" placeholder="نام وظیفه">
                                </div>
                                <div class="form-group">
                                    <label>توضیحات</label>
                                    <textarea dir="rtl" class="form-control" placeholder="توضیحات وظیفه"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>اعضا</label>
                                    <input dir="rtl" type="text" class="form-control"
                                           placeholder="اعضای تیم را اضافه کنید ( با , جدا کنید)">
                                </div>
                                <div class="form-row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>تاریخ شروع</label>
                                            <input dir="rtl" class="form-control" placeholder="سال/ماه/روز">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>تاریخ اتمام</label>
                                            <input dir="rtl" class="form-control" placeholder="سال/ماه/روز">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>فایلهای شروع</label>
                                    <div class="upload">
                                        <label>
                                            <input type="file">
                                            <span dir="rtl">فایلهای مورد نظر خود را انتخاب کنید.</span>
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="col-lg-6">
                                        <div dir="rtl" class="form-group">
                                            <h5>تیم خصوصی</h5>
                                            <p>لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round mode"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div dir="rtl" class="alert">
                                                <h5>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-alert-triangle">
                                                        <path
                                                            d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                                                        <line x1="12" y1="9" x2="12" y2="13"></line>
                                                        <line x1="12" y1="17" x2="12" y2="17"></line>
                                                    </svg>
                                                    هشدار
                                                </h5>
                                                <p>لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn primary">ایجاد وظیفه</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of New Task -->
    </div>
    <!-- End of Main -->
    <!-- Layout Nav Side -->
    <script src="dist/js/vendor/jquery-slim.min.js"></script>
    <script src="dist/js/vendor/popper.min.js"></script>
    <script src="dist/js/vendor/feather.min.js"></script>
    <script src="dist/js/vendor/bootstrap.min.js"></script>
    <script src="dist/js/diff.min.js"></script>
    </body>
    </html>
@endsection
