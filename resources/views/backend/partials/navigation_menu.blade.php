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
            <a href="{{route('home')}}" class="menu-item">Home</a>
        </li>
    </ul>
</li>
{{--Users--}}
    <li class=" navigation-header">
        <span>Projects</span>
        <i data-toggle="tooltip" data-placement="right" data-original-title="Users" class=" ft-minus"></i>
    </li>
    <li class=" nav-item">
        <a href="#">
            <i class="ft-user"></i>
            <span data-i18n="" class="menu-title">Projects</span>
        </a>
        <ul class="menu-content">
            <li>
                <a href="{{route('projects.index')}}" class="menu-item">index</a>
            </li>
            <li class="">
                <a href="{{route('projects.create')}}" class="menu-item">create</a>
            </li>
        </ul>
    </li>

<li class=" navigation-header">
    <span>Tasks</span>
    <i data-toggle="tooltip" data-placement="right" data-original-title="Users" class=" ft-minus"></i>
</li>
<li class=" nav-item">
    <a href="#">
        <i class="ft-user"></i>
        <span data-i18n="" class="menu-title">Tasks</span>
    </a>
    <ul class="menu-content">
        <li>
            <a href="{{route('tasks.index')}}" class="menu-item">index</a>
        </li>
        <li class="">
            <a href="{{route('tasks.create')}}" class="menu-item">create</a>
        </li>
    </ul>
</li>

