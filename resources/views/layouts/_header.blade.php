<div class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <!-- 折叠菜单 -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">隐藏导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- BBS的图标 -->
            <a href="{{ url('/') }}" class="navbar-brand">LaraBBS</a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- 左侧边栏 Navbar -->
            <ul class="nav navbar-nav navbar-left"></ul>

            <!-- 右侧边栏 Navbar -->
            <ul class="nav navbar-nav navbar-right">
            @guest
                <li>
                    <a href="{{ route('login') }}">
                        <span class="">登录</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}">
                        <span class="">注册</span>
                    </a>
                </li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px">
                            <img src="{{ Auth::user()->avatar }}" class="img-circle" width="30px" height="30px">
                        </span>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('users.edit', Auth::id()) }}">用户资料</a>
                        </li>

                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                退出登录
                            </a>

                            <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display:none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest
            </ul>
        </div>
    </div>
</div>