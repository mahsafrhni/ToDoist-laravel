@extends('layouts.app' , ['title' => $page_title])

@section('content')
    <div class="settings">
        <div class="container">
            <h3>تنظیمات</h3>
            <div class="row">
                <!-- Start of Sidebar -->
                <div class="col-md-4">
                    <ul class="nav" role="tablist">
                        <li><a href="#account" class="active" data-toggle="tab" role="tab" aria-controls="account" aria-selected="true">اکانت من</a></li>
                        <li><a href="#privacy" data-toggle="tab" role="tab" aria-controls="privacy" aria-selected="true">حریم خصوصی و ایمنی</a></li>
                    </ul>
                </div>
                <!-- End of Sidebar -->
                <!-- Start of Content -->
                <div class="col-md-8">
                    <div class="tab-content">
                        <!-- My Account -->
                        <div class="item tab-pane fade show active" id="account" role="tabpanel">
                            <form method="" action="{{ route("account.update")  }}">
                                @method('POST')
                                @csrf
                                <input type="file" >
                                <div class="avatar">
                                    <label>
                                        <input type="file">
                                        <img src="dist/img/avatars/avatar-male-1.jpg" alt="avatar">
                                    </label>
                                </div>
                                <div class="form-row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>نام</label>
                                            <input dir="rtl" type="text" value="{{$user->first_name}}" class="form-control" placeholder="نام خود را وارد کنید">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>نام خانوادگی</label>
                                            <input dir="rtl" type="text" value="{{$user->last_name}}" class="form-control" placeholder="نام خانوادگی را وارد کنید">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>آدرس ایمیل</label>
                                    <input dir="rtl" type="email" value="{{$user->email}}" class="form-control" placeholder="ایمیل خود را وارد کنید">
                                </div>
                                <div class="form-group">
                                    <label>موقعیت شغلی</label>
                                    <input dir="rtl" type="text" value="{{$user->job}}" class="form-control" placeholder="موقعیت شغلی شما چیست؟">
                                </div>
                                <div class="form-group">
                                    <label>زندگی نامه</label>
                                    <textarea dir="rtl" class="form-control" placeholder="زندگی نامه را بنویسید.">
                                        {{$user->bio}}
                                    </textarea>
                                </div>
                                <button type="submit" class="btn primary">ذخیره تنظیمات</button>
                            </form>
                        </div>
                        <!-- My Account -->
                        <!-- Privacy & Safety -->
                        <div class="item tab-pane fade" id="privacy" role="tabpanel">
                            <form>
                                <div class="form-group">
                                    <label>کلمه عبور فعلی</label>
                                    <input dir="rtl" type="password" class="form-control" placeholder="کلمه عبور فعلی را وارد کنید.">
                                </div>
                                <div class="form-row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>کلمه عبور جدید</label>
                                            <input dir="rtl" type="password" class="form-control" placeholder="کلمه عبور جدید را وارد کنید.">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>تایید کلمه عبور</label>
                                            <input dir="rtl" type="password" class="form-control" placeholder="تایید کلمه عبور جدید">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn primary">تغییر کلمه عبور</button>
                            </form>
                        </div>
                        <!-- Privacy & Safety -->
                    </div>
                </div>
                <!-- End of Content -->
            </div>
        </div>
    </div>
    <!-- End of Settings -->
    <!-- Start of New Team -->
    <div class="modal fade" id="new-team" tabindex="-1" role="dialog" aria-labelledby="new-team" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>تیم جدید</h5>
                    <button type="button" class="btn round" data-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
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
                                <input dir="rtl" type="text" class="form-control" placeholder="اعضای تیم را اضافه کنید ( با , جدا کنید)">
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
                                            <h5><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12" y2="17"></line></svg>هشدار</h5>
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
    <div class="modal fade" id="new-project" tabindex="-1" role="dialog" aria-labelledby="new-project" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>پروژه جدید</h5>
                    <button type="button" class="btn round" data-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
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
                                <input dir="rtl" type="text" class="form-control" placeholder="اعضای تیم را اضافه کنید ( با , جدا کنید)">
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
                                            <h5><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12" y2="17"></line></svg>هشدار</h5>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
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
                                <input dir="rtl" type="text" class="form-control" placeholder="اعضای تیم را اضافه کنید ( با , جدا کنید)">
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
                                            <h5><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12" y2="17"></line></svg>هشدار</h5>
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
@endsection