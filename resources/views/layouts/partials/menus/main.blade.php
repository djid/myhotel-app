<div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="nav navbar-nav" style="width: 100%;">
	    @foreach($items as $menu_item)
	        <li><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
	    @endforeach
	</ul>	
</div>

	<!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav" style="width: 100%;">
          <li class="nav-item {{Request::is('/') ? 'active' : ''}}"> <a class="nav-link" href="{{url('/')}}">Accueil</a> </li>
          <li class="nav-item {{Request::is('contact') ? 'active' : ''}}"> <a class="nav-link" href="{{url('contact')}}">Contact </a> </li>
          <li class="nav-item {{Request::is('aide') ? 'active' : ''}}"> <a class="nav-link" href="#">Aide</a> </li>
          <li class="nav-item {{Request::is('business') ? 'active' : ''}}"> <a class="nav-link" href="#">Business</a> </li>
        </ul>
    </div> -->