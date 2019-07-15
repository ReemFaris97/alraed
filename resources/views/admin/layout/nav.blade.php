
<li>
    <a class="check_active" href="{{route('admin.home')}}">
        <i class="material-icons">home</i>
        <span>الصفحه الرئيسه والاحصائيات</span>
    </a>

</li>

<li>
    <a class="check_active" href="#">
        <i class="material-icons">home</i>
        <span>موقع الرائد</span>
    </a>

</li>

<li class="header">مستخدمين النظام</li>

<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">assignment_ind</i>
        <span>أعضاء الإدارة</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a class="check_active" href="{{route('admin.admins.index')}}">

                <span> عرض أعضاء الإدارة</span>
            </a>
        </li>
        <li>
            <a class="check_active" href="{{route('admin.admins.create')}}">

                <span>اضافه عضو إدارة جديد</span>
            </a>
        </li>
    </ul>
</li>



<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">layers</i>
        <span> البنرات </span>
    </a>
    <ul class="ml-menu">
        <li>
            <a class="check_active" href="{{route('admin.banners.index')}}">

                <span> عرض جميع البنرات</span>
            </a>
        </li>
        <li>
            <a class="check_active" href="{{route('admin.banners.create')}}">
                <span>اضافه بنر جديد </span>
            </a>
        </li>
    </ul>
</li>

<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">layers</i>
        <span> فريقنا الأول </span>
    </a>
    <ul class="ml-menu">
        <li>
            <a class="check_active" href="{{route('admin.our-team.index')}}">

                <span> عرض أعضاء فريق الرواد</span>
            </a>
        </li>
        <li>
            <a class="check_active" href="{{route('admin.our-team.create')}}">
                <span>اضافه عضو جديد </span>
            </a>
        </li>
    </ul>
</li>

<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">edit_location</i>
        <span>إدارة الوسائط المتعددة</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a class="check_active" href="{{route('admin.multimedia.index')}}">

                <span> عرض الوسائط المتعددة</span>
            </a>
        </li>
        <li>
            <a class="check_active" href="{{route('admin.multimedia.create')}}">
                <span>اضافه  جديد </span>
            </a>
        </li>
    </ul>
</li>

<li class="header">إدارة الأخبار</li>
<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">edit_location</i>
        <span>أقسام الأخبار</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a class="check_active" href="{{route('admin.categories.index')}}">
                <span> عرض الأقسام</span>
            </a>
        </li>
        <li>
            <a class="check_active" href="{{route('admin.categories.create')}}">
                <span> اضافه قسم</span>
            </a>
        </li>
    </ul>
</li>


<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">edit_location</i>
        <span>الأخبار</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a class="check_active" href="{{route('admin.news.index')}}">
                <span> عرض جميع الأخبار</span>
            </a>
        </li>
        <li>
            <a class="check_active" href="{{route('admin.news.create')}}">
                <span>اضافه خبر جديد </span>
            </a>
        </li>
    </ul>
</li>

<li class="header">إدارة اللاعبين</li>

<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">edit_location</i>
        <span>الدول</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a class="check_active" href="{{route('admin.countries.index')}}">
                <span>جميع الدول</span>
            </a>
        </li>
        <li>
            <a class="check_active" href="{{route('admin.countries.create')}}">
                <span>اضافه دولة جديد</span>
            </a>
        </li>
    </ul>
</li>

<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">layers</i>
        <span>  الِفرق </span>
    </a>
    <ul class="ml-menu">
        <li >
            <a class="check_active" href="{{route('admin.teams.index')}}">
                <span> عرض  جميع الفرق</span>
            </a>
        </li>
        <li >
            <a  class="check_active" href="{{route('admin.teams.create')}}">

                <span>اضافة فريق جديد</span>
            </a>
        </li>
    </ul>
</li>


<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">layers</i>
        <span>  لاعبي الفرق </span>
    </a>
    <ul class="ml-menu">
        <li >
            <a class="check_active" href="{{route('admin.players.index')}}">
                <span> عرض  جميع اللاعبين</span>
            </a>
        </li>
        <li >
            <a  class="check_active" href="{{route('admin.players.create')}}">

                <span>اضافة لاعب جديد</span>
            </a>
        </li>
    </ul>
</li>


{{--<li>--}}
{{--    <a href="javascript:void(0);" class="menu-toggle">--}}
{{--        <i class="material-icons">edit_location</i>--}}
{{--        <span>التقارير</span>--}}
{{--    </a>--}}
{{--    <ul class="ml-menu">--}}
{{--        <li>--}}
{{--            <a class="check_active" href="{{route('admin.reports.clients')}}">--}}

{{--                <span> عرض تقارير العملاء</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a class="check_active" href="{{route('admin.reports.products')}}">--}}

{{--                <span> عرض تقارير المنتجات</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a class="check_active" href="{{route('admin.reports.dailyReports')}}">--}}
{{--                <span>عرض التقارير اليومية  </span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</li>--}}



{{--<li>--}}
{{--    <a class="check_active" href="{{route('admin.carts.index')}}">--}}
{{--        <i class="material-icons">layers</i>--}}
{{--        <span>عربات التسوق</span>--}}
{{--    </a>--}}

{{--</li>--}}



{{--<li>--}}
{{--    <a class="check_active" href="{{route('admin.questionnaires.index')}}">--}}
{{--        <i class="material-icons">layers</i>--}}
{{--        <span> إدارة الإستبيانات</span>--}}
{{--    </a>--}}

{{--</li>--}}





<li>
<a class="check_active" href="{{route('admin.settings.index')}}">
<i class="material-icons">layers</i>
<span> الاعدادات </span>
</a>

</li>




