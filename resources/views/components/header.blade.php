<header class="flex flex-col gap-4 sm:flex-row justify-between items-center w-full mb-8">
    <div class="left flex gap-16">
        <a href="/" class="logo block">
            <x-application-logo class="h-4"/>
        </a>
    </div>
    <div class="right flex gap-8 items-center">
        <x-search-bar/>
        @auth
            <a href="{{ @route("dashboard") }}">管理</a>
        @else
            <a href="{{ @route("register") }}">登入</a>
        @endauth
    </div>
</header>
