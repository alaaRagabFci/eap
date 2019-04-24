<li class="nav-item {{Request::is('adminpanel') ? 'start active open':'' }}">
    <a href="{{ url('/adminpanel') }}" class="nav-link nav-toggle">
        <i class="icon-home"></i>
        <span class="title">Dashboard</span>
        <span class="selected"></span>
    </a>
</li>
<li class="nav-item {{Request::is('settings') ? 'start active open':'' }}">
    <a href="{{ url('/settings') }}" class="nav-link nav-toggle">
        <i class="fa fa-cogs"></i>
        <span class="title">Settings</span>
        <span class="selected"></span>
    </a>
</li>
<li class="nav-item {{Request::is('head-descriptions') ? 'start active open':'' }}">
    <a href="{{ url('/head-descriptions') }}" class="nav-link nav-toggle">
        <i class="fa fa-tasks"></i>
        <span class="title">Head descriptions</span>
        <span class="selected"></span>
    </a>
</li>
<li class="nav-item {{Request::is('about-us') ? 'start active open':'' }}">
    <a href="{{ url('/about-us') }}" class="nav-link nav-toggle">
        <i class="fas fa-address-card"></i>
        <span class="title">About us</span>
        <span class="selected"></span>
    </a>
</li>
<li class="nav-item {{Request::is('projects', 'services', 'expertises') ? 'start active open':'' }}">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fab fa-servicestack"></i>
        <span class="title">Services & projects</span>
        <span class="selected"></span>
        <span class="arrow open"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item {{Request::is('projects') ? 'start active open':'' }}">
            <a href="{{ url('/projects') }}" class="nav-link ">
                <i class="fas fa-project-diagram"></i>
                <span class="title">Projects</span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="nav-item {{Request::is('services') ? 'start active open':'' }}">
            <a href="{{ url('/services') }}" class="nav-link ">
                <i class="fab fa-servicestack"></i>
                <span class="title">Services</span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="nav-item {{Request::is('expertises') ? 'start active open':'' }}">
            <a href="{{ url('/expertises') }}" class="nav-link ">
                <i class="fa fa-align-justify"></i>
                <span class="title">Expertises</span>
                <span class="selected"></span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{Request::is('managments') ? 'start active open':'' }}">
    <a href="{{ url('/managments') }}" class="nav-link nav-toggle">
        <i class="fa fa-tasks"></i>
        <span class="title">Managments</span>
        <span class="selected"></span>
    </a>
</li>
<li class="nav-item {{Request::is('clients') ? 'start active open':'' }}">
    <a href="{{ url('/clients') }}" class="nav-link nav-toggle">
        <i class="fas fa-handshake"></i>
        <span class="title">Clients & Partners</span>
        <span class="selected"></span>
    </a>
</li>
<li class="nav-item {{Request::is('consultancies') ? 'start active open':'' }}">
    <a href="{{ url('/consultancies') }}" class="nav-link nav-toggle">
        <i class="fa fa-align-justify"></i>
        <span class="title">Consultancies</span>
        <span class="selected"></span>
    </a>
</li>
<li class="nav-item {{Request::is('news') ? 'start active open':'' }}">
    <a href="{{ url('/news') }}" class="nav-link nav-toggle">
        <i class="fa fa-newspaper"></i>
        <span class="title">News</span>
        <span class="selected"></span>
    </a>
</li>

<li class="nav-item {{Request::is('profiles') ? 'start active open':'' }}">
    <a href="{{ url('/profiles') }}" class="nav-link nav-toggle">
        <i class="fa fa-user"></i>
        <span class="title">Download our profile</span>
        <span class="selected"></span>
    </a>
</li>

<li class="nav-item {{Request::is('publications') ? 'start active open':'' }}">
    <a href="{{ url('/publications') }}" class="nav-link nav-toggle">
        <i class="fa fa-align-justify"></i>
        <span class="title">Publications</span>
        <span class="selected"></span>
    </a>
</li>

