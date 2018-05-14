<div class="small-top">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 date-sec">
        <div id="Date"></div>
      </div>
       
      <div class="col-lg-3 offset-lg-5">
        <div class="social-icon"> <a target="_blank" href="#" class=" fa fa-facebook"></a> <a target="_blank" href="#" class=" fa fa-twitter"></a> <a target="_blank" href="#" class=" fa fa-google-plus"></a> <a target="_blank" href="#" class=" fa fa-linkedin"></a> <a target="_blank" href="#" class=" fa fa-youtube"></a> </div>

        
      </div>
    </div>
  </div>
</div>
 
<div class="top-head left">
  <div class="container">
    <div class="row">
      <div class="col-6 col-lg-4">
        <h1><a href="{{'/'}} "> MyHotel</a><small>Phare des Hotel Haitiens</small></h1>
      </div>
       
       @if(Auth::guest())
      <div class="col-6 col-lg-3 ml-auto admin-bar hidden-sm-down">
        <nav class="nav nav-inline">
          <a href="{{ route('login') }}" class="nav-link"><i class="fa fa-sign-in" style="width: 16px;"></i>Login</a>
          <a href="{{ route('register') }}" class="nav-link"><i class="far fa-registered"></i> Register</a>
        </nav>       
      </div>

      @else
      <div class="col-md-6 col-lg-3 ml-auto admin-bar hidden-sm-down">
        <nav class="nav nav-inline">
          <a href="#" class="nav-link">
            <span class="ping"></span> <i class="fa fa-envelope-o"></i>
          </a>
          <a href="#" class="nav-link"><i class="fa fa-bell-o"></i> </a>

          <li class="dropdown">
            <a href="{{ route('logout') }}" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>

            <ul class="dropdown-menu" style="background-color: currentColor;">
              <li><a href="{{ url('/profile') }} ">Profil</a></li>
              <li><a href="{{ url('/logout') }} ">Logout</a></li>
            </ul>
          </li>
          <img class="img-fluid rounded-circle" src="/storage/{{Auth::user()->avatar }}">
        </nav>
      </div>
      @endguest
    </div>                  
  </div>
</div>

<section class="top-nav">
  <nav class="navbar navbar-expand-lg py-0 navbar-light">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      {{ menu('main','layouts/partials/menus/main') }} 
      <div class="aa-input-container" id="aa-input-container">
    <input type="search" id="aa-search-input" class="aa-input-search" placeholder="Algolia" name="search" autocomplete="off" />
    <!-- <svg class="aa-input-icon" viewBox="654 -372 1664 1664">
        <path d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.2,1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.2,910,208.7,910,332s43.8,228.8,131.5,316.5C1129.2,736.2,1234.7,780,1358,780s228.8-43.8,316.5-131.5  C1762.2,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,343C2305.7,1098.7,2318,1128.7,2318,1164z" />
    </svg> -->
    </div>
      
        <form action="{{ route('search') }}" method="GET" class="ml-auto">
          <div class="search">
            <input type="text" name="query" id="query" value="{{ request()->input('query') }}" class="form-control" maxlength="64" placeholder="Search" />

            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
          </div>
        </form>
      
    </div>
  </nav>
</section>

