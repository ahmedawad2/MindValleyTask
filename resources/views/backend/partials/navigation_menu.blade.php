@inject('controller', \App\Http\Controllers\Controller)


{{--home--}}
<li class=" navigation-header">
    <span>Dashboard</span>
    <i data-toggle="tooltip" data-placement="right" data-original-title="Operator Data" class=" ft-minus"></i>
</li>
<li class=" nav-item">
    <a href="#">
        <i class="ft-home"></i>
        <span data-i18n="" class="menu-title">Dashboard</span>
    </a>
    <ul class="menu-content">
        <li>
            <a href="{{route('admin_home')}}" class="menu-item">Home</a>
        </li>
    </ul>
</li>
{{--Users--}}
    <li class=" navigation-header">
        <span>Articles</span>
        <i data-toggle="tooltip" data-placement="right" data-original-title="Users" class=" ft-minus"></i>
    </li>
    <li class=" nav-item">
        <a href="#">
            <i class="ft-user"></i>
            <span data-i18n="" class="menu-title">Articles</span>
        </a>
        <ul class="menu-content">
            <li>
                <a href="{{route('articles.index')}}" class="menu-item">index</a>
            </li>
            <li class="">
                <a href="{{route('articles.create')}}" class="menu-item">create</a>
            </li>
        </ul>
    </li>

