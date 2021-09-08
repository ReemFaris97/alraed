<?php $arr = []; ?>

<li>
    <a class="check_active" href="{{route('admin.home')}}">
        <i class="material-icons">home</i>
        <span>الصفحة الرئيسية والاحصائيات</span>
    </a>

</li>

<li>
    <a class="check_active" href="{{ url('/') }}">
        <i class="material-icons">home</i>
        <span>موقع الرائد</span>
    </a>

</li>


    @if(hasPermission('admins') || hasPermission('assistants'))
        @if(!in_array('users',$arr))
            <?php $arr[] = 'users' ?>
            <li class="header">مستخدمي النظام</li>
        @endif
    @endif

    @if(hasPermission('admins'))
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
    @endif


    @if(hasPermission('assistants'))
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">assignment_ind</i>
                <span>المدراء المساعدين</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a class="check_active" href="{{route('admin.assistants.index')}}">

                        <span> عرض جميع المساعدين</span>
                    </a>
                </li>
                <li>
                    <a class="check_active" href="{{route('admin.assistants.create')}}">

                        <span>اضافه عضو مساعد جديد</span>
                    </a>
                </li>
            </ul>
        </li>
    @endif


    @if(hasPermission('countries') || hasPermission('banners') || hasPermission('partners') || hasPermission('multimedia') || hasPermission('categories') || hasPermission('news'))
        @if(!in_array('general',$arr))
            <?php $arr[] = 'general' ?>
            <li class="header">عام</li>
        @endif
    @endif


    @if(hasPermission('banners'))

        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">perm_media</i>
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
    @endif

    @if(hasPermission('partners'))
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">layers</i>
                <span> الرعاة </span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a class="check_active" href="{{route('admin.partners.index')}}">

                        <span> عرض  جميع الرعاة</span>
                    </a>
                </li>
                <li>
                    <a class="check_active" href="{{route('admin.partners.create')}}">
                        <span>اضافه راعي جديد </span>
                    </a>
                </li>
            </ul>
        </li>
    @endif

    @if(hasPermission('events'))
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">layers</i>
                <span> المسؤولية الإجتماعية </span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a class="check_active" href="{{route('admin.event.index')}}">

                        <span> عرض  الجميع</span>
                    </a>
                </li>
                <li>
                    <a class="check_active" href="{{route('admin.event.create')}}">
                        <span>اضافه جديد </span>
                    </a>
                </li>
            </ul>
        </li>
    @endif

    @if(hasPermission('multimedia'))
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">perm_media</i>
                <span>ألبوم الصور</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a class="check_active" href="{{route('admin.videos.index')}}">

                        <span> الفديوهات</span>
                    </a>
                </li>
                <li>
                    <a class="check_active" href="{{route('admin.multimedia.index')}}">

                        <span> عرض ألبوم الصور</span>
                    </a>
                </li>
                <li>
                    <a class="check_active" href="{{route('admin.multimedia.create')}}">
                        <span>اضافه  جديد </span>
                    </a>
                </li>
            </ul>
        </li>
    @endif

    @if(hasPermission('countries'))
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
    @endif

    @if(hasPermission('categories'))
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">view_list</i>
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
    @endif
    @if(hasPermission('news'))

        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">view_list</i>
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
    @endif


    @if(hasPermission('our-team') || hasPermission('teams') || hasPermission('players'))
        @if(!in_array('play',$arr))
            <?php $arr[] = 'play' ?>
            <li class="header">إدارة اللاعبين</li>
        @endif
    @endif


    {{-- @if(hasPermission('our-team'))
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">layers</i>
                <span> فريقنا الأول </span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a class="check_active" href="{{route('admin.our-team.index')}}">

                        <span> عرض أعضاء فريق الرائد</span>
                    </a>
                </li>
                <li>
                    <a class="check_active" href="{{route('admin.our-team.create')}}">
                        <span>اضافه عضو جديد </span>
                    </a>
                </li>
            </ul>
        </li>
    @endif --}}

    @if(hasPermission('teams'))
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">person_add</i>
                <span>  الِفرق </span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a class="check_active" href="{{route('admin.teams.index')}}">
                        <span> عرض  جميع الفرق</span>
                    </a>
                </li>
                <li>
                    <a class="check_active" href="{{route('admin.teams.create')}}">

                        <span>اضافة فريق جديد</span>
                    </a>
                </li>
            </ul>
        </li>
    @endif
<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">person_add</i>
        <span>  الانجازات </span>
    </a>
    <ul class="ml-menu">
        <li>
            <a class="check_active" href="{{route('admin.achievements.index')}}">
                <span>  الانجازات</span>
            </a>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">person_add</i>
        <span>الصفحات</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a class="check_active" href="{{route('admin.pages.index')}}">
                <span>الصفحات</span>
            </a>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">person_add</i>
        <span>  الاستبيانات </span>
    </a>
    <ul class="ml-menu">
        <li>
            <a class="check_active" href="{{route('survey-manager.admin')}}">
                <span>  الاستبيانات</span>
            </a>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">person_add</i>
        <span>  البلاغات </span>
    </a>
    <ul class="ml-menu">
        <li>
            <a class="check_active" href="{{route('admin.reports.index')}}">
                <span> عرض  جميع البلاغات</span>
            </a>
        </li>

    </ul>
</li>
<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">person_add</i>
        <span>  رسائل التواصل </span>
    </a>
    <ul class="ml-menu">
        <li>
            <a class="check_active" href="{{route('admin.contacts.index')}}">
                <span> عرض  جميع رسائل التواصل</span>
            </a>
        </li>

    </ul>
</li>

    {{-- @if(hasPermission('players'))
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">person_add</i>
                <span>  لاعبي الفرق </span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a class="check_active" href="{{route('admin.players.index')}}">
                        <span> عرض  جميع اللاعبين</span>
                    </a>
                </li>
                <li>
                    <a class="check_active" href="{{route('admin.players.create')}}">

                        <span>اضافة لاعب جديد</span>
                    </a>
                </li>
            </ul>
        </li>
    @endif --}}


    @if(hasPermission('champions') || hasPermission('matches') || hasPermission('goals') || hasPermission('statistics'))
        @if(!in_array('mat',$arr))
            <?php $arr[] = 'mat' ?>
            <li class="header">إدارة المباريات</li>
        @endif
    @endif


    @if(hasPermission('champions'))
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">layers</i>
                <span>  البطولات </span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a class="check_active" href="{{route('admin.champions.index')}}">
                        <span> عرض  جميع البطولات</span>
                    </a>
                </li>
                <li>
                    <a class="check_active" href="{{route('admin.champions.create')}}">

                        <span>اضافة بطولة جديد</span>
                    </a>
                </li>
            </ul>
        </li>
    @endif

    @if(hasPermission('matches'))
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">update</i>
                <span>  المباريات </span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a class="check_active" href="{{route('admin.matches.index')}}">
                        <span> عرض  جميع المباريات</span>
                    </a>
                </li>
                <li>
                    <a class="check_active" href="{{route('admin.matches.create')}}">

                        <span>اضافة مباراة جديد</span>
                    </a>
                </li>
            </ul>
        </li>
    @endif

    {{-- @if(hasPermission('goals'))
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">donut_large</i>
                <span>  الأهداف </span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a class="check_active" href="{{route('admin.goals.index')}}">
                        <span> عرض  جميع الأهداف</span>
                    </a>
                </li>
                <li>
                    <a class="check_active" href="{{route('admin.goals.create')}}">

                        <span>اضافة هدف جديد</span>
                    </a>
                </li>
            </ul>
        </li>
    @endif --}}

    @if(hasPermission('statistics'))

        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">assignment</i>
                <span>  الإحصائيات </span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a class="check_active" href="{{route('admin.statistics.index')}}">
                        <span> عرض  جميع الإحصائيات</span>
                    </a>
                </li>
                <li>
                    <a class="check_active" href="{{route('admin.statistics.create')}}">

                        <span>اضافة جديد</span>
                    </a>
                </li>
            </ul>
        </li>
    @endif


     @if(hasPermission('volunteers') || hasPermission('desires'))
        <li class="header">الاستبيانات</li>
    @endif


    @if(hasPermission('volunteers'))
        <li>
            <a class="check_active" href="{{route('admin.volunteer.index')}}">
                <i class="material-icons">layers</i>
                <span> المتطوعين </span>
            </a>
        </li>
    @endif

    @if(hasPermission('desires'))
        <li>
            <a class="check_active" href="{{route('admin.desire.index')}}">
                <i class="material-icons">layers</i>
                <span> الراغبين </span>
            </a>
        </li>
    @endif



    @if(hasPermission('settings') || hasPermission('headers') || hasPermission('messages')|| hasPermission('advertisement'))
        @if(!in_array('setting',$arr))
            <?php $arr[] = 'setting' ?>
            <li class="header">الإعدادات العامة</li>
        @endif



        @if(hasPermission('permissions'))
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">assignment</i>
                    <span>   إدارة الصلاحيات </span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a class="check_active" href="{{route('admin.permissions.index')}}">
                            <span> عرض  جميع الصلاحيات</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endif

        @if(hasPermission('settings'))
            <li>
                <a class="check_active" href="{{route('admin.settings.index')}}">
                    <i class="material-icons">layers</i>
                    <span> الاعدادات </span>
                </a>

            </li>

        @endif

    @endif






