@extends('admin.layout.app')

@section('title')
    الصفحه الرئيسه
@endsection

@section('content')
    <!-- Widgets -->
    <div class="row clearfix">

        <a href="{{route('admin.admins.index')}}" style="color:#eee">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-lime hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">assignment_ind</i>
                </div>

                <div class="content">
                    <div class="text">
                      عدد أعضاء إدارة النظام
                    </div>
                    <div class="number count">{{\App\User::where('role','admin')->count()}}</div>
                </div>

            </div>
        </div>
        </a>

        <a href="{{route('admin.admins.index')}}" style="color:#eee">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-lime hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">assignment_ind</i>
                    </div>

                    <div class="content">
                        <div class="text">
                             عدد المديرين المساعدين للنظام
                        </div>
                        <div class="number count">{{\App\User::where('role','assistant')->count()}}</div>
                    </div>

                </div>
            </div>
        </a>




        {{-- <a href="{{route('admin.teams.index')}}" style="color: #eee">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-yellow hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">person_add</i>
                </div>
                <div class="content">
                    <div class="text">
                            عدد الفرق</div>
                    <div class="number count">{{\App\Team::count()}}</div>
                </div>
            </div>
        </div>
        </a> --}}


        <a href="{{route('admin.teams.index')}}" style="color: #eee">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-yellow hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">person_add</i>
                    </div>
                    <div class="content">
                        <div class="text">
                            عدد الفرق</div>
                        <div class="number count">{{\App\Team::count()}}</div>
                    </div>
                </div>
            </div>
        </a>




        <a href="{{route('admin.matches.index')}}" style="color: #eee">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-red hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">local_grocery_store</i>
                </div>
                <div class="content">
                    <div class="text">المباريات</div>
                    <div class="number count">{{\App\Game::count()}}</div>
                </div>
            </div>
        </div>
        </a>





{{--        <!-- Donut Chart -->--}}
{{--        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--            <div class="card">--}}
{{--                <div class="header">--}}
{{--                    <h2>الأهداف</h2>--}}

{{--                </div>--}}
{{--                <div class="body">--}}
{{--                    <div id="donut_chart" class="graph"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- #END# Donut Chart -->--}}


    </div>


@endsection

@push('scripts')


<script>
    $(function () {
    getMorris('donut', 'donut_chart');
    });


    function getMorris(type, element) {
    if (type === 'donut') {
    Morris.Donut({
    element: element,
    data: [
    @foreach(\App\Goal::all() as $key => $value)


        {
        label: "{{$value->team->ar_name}}",

        },

    @endforeach

    ],
    colors: ['rgb(42, 36, 66)', 'rgb(50, 201, 192)' , 'rgb(76, 72, 96)' , 'rgb(217, 218, 218)'],
    formatter: function (y) {
    return y + '%'
    }
    });
    }
    }
</script>
    @endpush



