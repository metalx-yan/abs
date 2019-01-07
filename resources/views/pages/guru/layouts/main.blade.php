<html>

@include('partials._head')
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
@include('partials.guru._sidebar')

@include('partials._navbar')

@yield('content')

@include('partials._footer')
@include('partials._javascript')

</div>
</div>
</body>
</html>