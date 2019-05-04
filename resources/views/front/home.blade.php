@extends('front.layout')
@section('title')
  {{ trans('front.title') }}
@endsection

@section('content')
    <section id="content">
      <section id="home-hero">
      <div class="row">
        <div class="col-4 earth">
        <img src="admin_ui/assets/hero/Earth.png" alt="">
        </div>
        <div class="col-8">
          <div class="d-flex">
            <img src="admin_ui/assets/hero/Group405.svg" alt="">
            <img src="admin_ui/assets/hero/Group406.svg" alt="">
          </div>
          <div>
            <h3><span>EAP </span> for Consultancy & Training</h3>
          </div>
          <div>
            <img src="admin_ui/assets/hero/Group407.svg" alt="">
          </div>
        </div>
      </div>
      </section>
      <section id="home-data" class="p-2">
        @if (App::getLocale() == 'en')
        <div class="row mx-auto mt-5">
          <div class="col-12">
            <span class="triangle">
              <span class="sm-trianngle">
              </span>
              <span class="text">01</span>
              <span class="text-bottom-1">About Us</span>
            </span>
          </div>
          <div class="col-6">
            <span class="triangle">
              <span class="sm-trianngle">
              </span>
              <span class="text">02</span>
              <span class="text-bottom-2">Expertise,<br>Services & Projects</span>
            </span>
          </div>
          <div class="col-6">
            <span class="triangle">
              <span class="sm-trianngle">
              </span>
              <span class="text">03</span>
              <span class="text-bottom-3">Consultancy<br>Approach</span>
            </span>
          </div>
          <div class="col-3">
            <span class="triangle">
              <span class="sm-trianngle">
              </span>
              <span class="text">04</span>
              <span class="text-bottom-4">Quality<br>Management</span>
            </span>
          </div>
          <div class="col-3">
            <span class="triangle">
              <span class="sm-trianngle">
              </span>
              <span class="text">05</span>
              <span class="text-bottom-5">Clients &<br>Partners</span>
            </span>
          </div>
          <div class="col-3">
            <span class="triangle">
              <span class="sm-trianngle">
              </span>
              <span class="text">06</span>
              <span class="text-bottom-4">News &<br>Publications</span>
            </span>
          </div>
          <div class="col-3">
            <span class="triangle">
              <span class="sm-trianngle">
              </span>
              <span class="text">07</span>
              <span class="text-bottom-6">Contact Us</span>
            </span>
          </div>
        </div>
        @else
        <div class="row mx-auto mt-5">
            <div class="col-12">
            <span class="triangle">
              <span class="sm-trianngle">
              </span>
              <span class="text">01</span>
              <span class="text-bottom-1">من نحن</span>
            </span>
            </div>
            <div class="col-6">
            <span class="triangle">
              <span class="sm-trianngle">
              </span>
              <span class="text">02</span>
              <span class="text-bottom-2">الخبرة ,<br> الخدمات & المشاريع</span>
            </span>
            </div>
            <div class="col-6">
            <span class="triangle">
              <span class="sm-trianngle">
              </span>
              <span class="text">03</span>
              <span class="text-bottom-3">نهج الاستشارات</span>
            </span>
            </div>
            <div class="col-3">
            <span class="triangle">
              <span class="sm-trianngle">
              </span>
              <span class="text">04</span>
              <span class="text-bottom-4">إدارة الجودة</span>
            </span>
            </div>
            <div class="col-3">
            <span class="triangle">
              <span class="sm-trianngle">
              </span>
              <span class="text">05</span>
              <span class="text-bottom-5">عملاء وشركاء</span>
            </span>
            </div>
            <div class="col-3">
            <span class="triangle">
              <span class="sm-trianngle">
              </span>
              <span class="text">06</span>
              <span class="text-bottom-4 bottom-6">الأخبار والمنشورات</span>
            </span>
            </div>
            <div class="col-3">
            <span class="triangle">
              <span class="sm-trianngle">
              </span>
              <span class="text">07</span>
              <span class="text-bottom-6">أتصل بنا</span>
            </span>
            </div>
          </div>
        @endif
      </section>
    </section>
@endsection
