<!--Navbar-->
<nav class="navbar navbar-fixed navbar-dark info-color">
    <!-- Collapse button-->
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx2">
        <i class="fa fa-bars"></i>
    </button>
    <div class="container">
        <!--Collapse content-->
        <div class="collapse navbar-toggleable-xs" id="collapseEx2">
            <!--Navbar Brand-->
            <a href="{{route('profile')}}" class="navbar-brand">Armface</a>
            <!--Links-->
            <ul class="nav navbar-nav">
                <li class="nav-item btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">Account</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a href="{{route('change.password.show')}}" class="dropdown-item">Change password</a>
                        <a href="{{route('photos.form.show')}}" class="dropdown-item">Add photos</a>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav nav-flex-icons">
                <li class="nav-item btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a href="#" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="dropdown-item ">Log out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        <!--/.Collapse content-->
    </div>
</nav>
<!--/.Navbar-->