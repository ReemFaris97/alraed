<?php $arr = []; ?>

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


@foreach(auth()->user()->permissions as $permission)


    @if(in_array($permission->name,['admins','assistants']))
        @if(!in_array('users',$arr))
            <?php $arr[] = 'users' ?>
            <li class="header">مستخدمين النظام</li>
        @endif
    @endif

    @if($permission->name == 'admins')
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

    @if($permission->name == 'assistants')
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


    @if(in_array($permission->name,['banners','partners','our-team','multimedia','categories','news']))
        @if(!in_array('general',$arr))
            <?php $arr[] = 'general' ?>
            <li class="header">عام</li>
        @endif
    @endif


    @if($permission->name== "banners")

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

    @if($permission->name== "partners")
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

    @if($permission->name== "our-team")
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
    @endif

    @if($permission->name== "multimedia")
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">perm_media</i>
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
    @endif

    @if($permission->name== "categories")
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
    @if($permission->name== "news")

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


    @if(in_array($permission->name,['countries','teams','players']))
        @if(!in_array('play',$arr))
            <?php $arr[] = 'play' ?>
            <li class="header">إدارة اللاعبين</li>
        @endif
    @endif

    @if($permission->name== "countries")
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

    @if($permission->name== "teams")
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

    @if($permission->name== "players")
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
    @endif


    @if(in_array($permission->name,['champions','matches','goals','statistics']))
        @if(!in_array('mat',$arr))
            <?php $arr[] = 'mat' ?>
            <li class="header">إدارة المباريات</li>
        @endif
    @endif


    @if($permission->name== "champions")
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

    @if($permission->name== "matches")
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

    @if($permission->name== "goals")
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
    @endif

    @if($permission->name== "statistics")

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



    @if(in_array($permission->name,['settings','headers','messages','advertisement']))
        @if(!in_array('setting',$arr))
            <?php $arr[] = 'setting' ?>
            <li class="header">الإعدادات العامة</li>
        @endif



        @if($permission->name== "permissions")
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

        @if($permission->name== "settings")
            <li>
                <a class="check_active" href="{{route('admin.settings.index')}}">
                    <i class="material-icons">layers</i>
                    <span> الاعدادات </span>
                </a>

            </li>

        @endif

    @endif


@endforeach




