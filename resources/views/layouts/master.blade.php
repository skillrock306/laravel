@include('layouts.header')
	@include('modules.menu')
    <div class="container">     
      	<div class="row">   
			@yield('content')
      	</div>       <!-- /row -->
    </div> <!-- /container -->
@include('layouts.footer')