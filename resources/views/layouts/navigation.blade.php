<div class="l-navbar" id="nav-bar">
<nav  class="nav">
    <div>
                
        <a href="{{url('/welcome')}}" class="nav_logo"> <img src="imagenes\Logo.png" alt="logo" width="100" height="100"></img> <span class="nav_logo-name">AutoAssistant</span> </a>
        @if (Route::has('login'))
        <div class="nav_list">
        
        @auth
            <a href="{{url('/welcome')}}" class="nav_link active"> <em class='bx bx-grid-alt nav_icon'></em> <span class="nav_name">Menu Principal</span> </a>
            <a href="{{route('profile.edit')}}" class="nav_link"> <em class='bx bx-user nav_icon'></em> <span class="nav_name">{{ __('Profile') }}</span> </a>
            <a href="/google-auth/redirect" class="nav_link"> <em class='bx bx-message-square-detail nav_icon'></em> <span class="nav_name">Messages</span> </a>
            
            <a href="{{ route('register') }}" class="nav_link"> <em class='bx bx-bookmark nav_icon'></em> <span class="nav_name">Bookmark</span> </a>
            @if (Route::has('register'))
            <a href="#" class="nav_link"> <em class='bx bx-folder nav_icon'></em> <span class="nav_name">Files</span> </a>
            <a href="#" class="nav_link"> <em class='bx bx-bar-chart-alt-2 nav_icon'></em> <span class="nav_name">Stats</span> </a>
            @endif
            @endauth
        </div>
        @endif
    </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();"
                                        class="nav_link"> <em class='bx bx-log-out nav_icon'></em> <span class="nav_name">{{ __('Cerrar Sesion') }}</span> </a>
        </form>
    
</nav>

</div>