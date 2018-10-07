<div class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <!-- 折叠菜单 -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- BBS的图标 -->
            <a href="{{ url('/') }}" class="navbar-brand">LaraBBS</a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- 左侧边栏 Navbar -->
            <ul class="nav navbar-nav"></ul>

            <!-- 右侧边栏 Navbar -->
            <ul>
                <li><a href="#" class="">登录</a></li>
                <li><a href="#" class="">注册</a></li>
            </ul>
        </div>
    </div>
</div>