<html>
@include('partials._head')
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
@include('partials.kesiswaan._sidebar')

@include('partials._navbar')

@yield('content')

@include('partials._footer')
@include('partials._javascript')

</div>
</div>
	@stack('js_body')
</body>
</html>