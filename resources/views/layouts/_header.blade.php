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
            <ul class="nav navbar-nav navbar-left">
                <li class="{{ active_class(if_route('topics.index')) }}"><a href="{{ route('topics.index') }}">话题</a></li>
                <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 1))) }}"><a href="{{ route('categories.show', 1) }}">分享</a></li>
                <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 2))) }}"><a href="{{ route('categories.show', 2) }}">教程</a></li>
                <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 3))) }}"><a href="{{ route('categories.show', 3) }}">问答</a></li>
                <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 4))) }}"><a href="{{ route('categories.show', 4) }}">公告</a></li>
            </ul>

            <!-- 右侧边栏 Navbar -->
            <ul class="nav navbar-nav navbar-right">
            @guest
                <li><a href="{{ route('login') }}">登录</a></li>
                <li><a href="{{ route('register') }}">注册</a></li>
            @else
                <li>
                    <a href="{{ route('topics.create') }}">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                </li>
                {{-- 消息通知标记 --}}
                <li>
                    <a href="{{ route('notifications.index') }}" class="notifications-badge" style="margin-top: -2px;">
                        <span class="badge badge-{{ Auth::user()->notification_count > 0 ? 'hint' : 'fade' }}" title="消息提醒">
                            {{ Auth::user()->notification_count }}
                        </span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px">
                            <img src="{{ Auth::user()->avatar }}" class="img-circle" width="30px" height="30px">
                        </span>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('users.show', Auth::id()) }}">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                个人中心
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('users.edit', Auth::id()) }}">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                编辑资料
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <span class="glyphicon glyphicon-log-out" aria-hidden="true" style="color:red"></span>
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