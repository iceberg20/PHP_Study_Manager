  <div class="container">
    <nav class="nav">
      <a class="nav-link" href="/">Home</a>
      <a class="nav-link active" href="/studysection">View All</a>
      <a class="nav-link" href="/studysection/create">Create</a>
      <a class="nav-link" href="/studysection/report">Report</a>
      <a class="nav-link" href="/config">Config</a>
      
      <form class="form-inline my-2 my-lg-0 ml-auto" action="{{ route('logout') }}" method="POST">
      @guest
        <a class="nav-link" href="{{ route('login') }}">Login</a>
        <a class="nav-link" href="{{ route('register') }}">Register</a>
      @else
         <a class="nav-link" href="#">{{ Auth::user()->name }} </a>
        <button class="btn my-2 my-sm-0" type="submit">
            Logout
        </button>
      @endguest
		{{ csrf_field() }}
	</form>
    </nav>
  </div>