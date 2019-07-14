@extends('admin.layout.app')

@section('title')
    الصفحه الرئيسه
@endsection

@section('header')
    {{Html::style('admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}
@endsection
@section('content')
    <!-- Widgets -->
    <div class="row clearfix">

{{--        <a href="{{route('admin.categories.index')}}" style="color:#eee">--}}
{{--        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
{{--            <div class="info-box bg-lime hover-expand-effect">--}}
{{--                <div class="icon">--}}
{{--                    <i class="material-icons">playlist_add_check</i>--}}
{{--                </div>--}}

{{--                <div class="content">--}}
{{--                    <div class="text">--}}
{{--                      الأقسام--}}
{{--                    </div>--}}
{{--                    <div class="number count">{{\App\Category::count()}}</div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        </a>--}}
{{--        <a href="{{route('admin.sub-categories.index')}}" style="color: #eee">الأقسام--}}
{{--        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
{{--            <div class="info-box bg-yellow hover-expand-effect">--}}
{{--                <div class="icon">--}}
{{--                    <i class="material-icons">playlist_add_check</i>--}}
{{--                </div>--}}
{{--                <div class="content">--}}
{{--                    <div class="text">--}}
{{--                            الفرعية</div>--}}
{{--                    <div class="number count">{{\App\SubCategory::count()}}</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        </a>--}}
{{--        <a href="{{route('admin.admins.index')}}" style="color: #eee">--}}
{{--        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
{{--            <div class="info-box bg-brown hover-expand-effect">--}}
{{--                <div class="icon">--}}
{{--                    <i class="material-icons">person_add</i>--}}
{{--                </div>--}}
{{--                <div class="content">--}}
{{--                    <div class="text">عدد أعضاء--}}
{{--                            الإدارة</div>--}}
{{--                    <div class="number count">{{\App\User::count()}}</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        </a>--}}
{{--        <a href="{{route('admin.products.index')}}" style="color: #eee">--}}
{{--        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
{{--            <div class="info-box bg-red hover-expand-effect">--}}
{{--                <div class="icon">--}}
{{--                    <i class="fa fa-leanpub"></i>--}}
{{--                </div>--}}
{{--                <div class="content">--}}
{{--                    <div class="text">المنتجات</div>--}}
{{--                    <div class="number count">{{\App\Product::count()}}</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        </a>--}}
{{--        <a href="{{route('admin.carts.index')}}" style="color: #eee">--}}
{{--        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
{{--            <div class="info-box bg-yellow hover-expand-effect">--}}
{{--                <div class="icon">--}}
{{--                    <i class="fa fa-shopping-cart"></i>--}}
{{--                </div>--}}
{{--                <div class="content">--}}
{{--                    <div class="text">عربة التسوق</div>--}}
{{--                    <div class="number count">{{\App\Cart::count()}}</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        </a>--}}
{{--        <a href="{{route('admin.questions.index')}}" style="color: #eee">--}}
{{--        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
{{--            <div class="info-box bg-yellow hover-expand-effect">--}}
{{--                <div class="icon">--}}
{{--                    <i class="fa fa-shopping-cart"></i>--}}
{{--                </div>--}}
{{--                <div class="content">--}}
{{--                    <div class="text">عدد أسئلة--}}
{{--                            الأستبيان</div>--}}
{{--                    <div class="number count">{{\App\Question::count()}}</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        </a>--}}
{{--        <a href="{{route('admin.questionnaires.index')}}" style="color: #eee">--}}
{{--        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
{{--            <div class="info-box bg-yellow hover-expand-effect">--}}
{{--                <div class="icon">--}}
{{--                    <i class="fa fa-shopping-cart"></i>--}}
{{--                </div>--}}
{{--                <div class="content">--}}
{{--                    <div class="text">عدد--}}
{{--                            الاستبيانات</div>--}}
{{--                    <div class="number count">{{\App\Questionnaires::count()}}</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    --}}
{{--        </a>--}}
    </div>


@endsection





