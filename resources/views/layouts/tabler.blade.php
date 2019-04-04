<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials._tabler.header')
  
  <title>@yield('title')</title>
  
  @stack('styles')
</head>
<body>
  <div class="page"> 
    <div class="page-main">
      <!-- 2 divs opening and only 1 closing please resolve -->
    @include('partials._tabler.navbar')
      
      @yield('content')

    @include('partials._tabler.footer')
  </div>

  @stack('scripts')
</body>
</html>