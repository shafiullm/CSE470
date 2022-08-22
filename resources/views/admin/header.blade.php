<div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li>
              <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit" class="nav-link btn btn-success">
                        {{ __(' Logout ') }}
                    </button>
                </form>
              </li>
          </div>
        </nav>