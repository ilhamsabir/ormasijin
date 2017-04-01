<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('dashboard') }}"><img class="logo" src="{{ url('public/img/logo-ijinormas.png') }}" alt="logo app"</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
       <ul class="nav navbar-nav navbar-right">
         <li class="dropdown pull-right">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>   {{ Auth::user()->name }} <span class="caret"></span></a>
           <ul class="dropdown-menu" role="menu">
             <li><a href="{{ url('/web/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
           </ul>
         </li>

         <!-- <li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="label label-danger">1</span></a>
						<ul class="dropdown-menu" role="menu">
             <li><a href="{{ url('/web/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
						</ul>
				 </li>
         <li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i> <span class="label label-danger" id="label-message">1</span></a>
						<ul class="dropdown-menu" role="menu" id="notif-user-message">

						</ul>
				 </li> -->
       </ul>
    </div><!--/.navbar-collapse -->
  </div>
</nav>
