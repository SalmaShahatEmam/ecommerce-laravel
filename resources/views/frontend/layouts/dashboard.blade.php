<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title' , 'dashboard')</title>

  @include('frontend.layouts.partials.styles')
  </head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
         @include('frontend.layouts.partials.navbar')
      <div class="main-sidebar sidebar-style-2">
         @include('frontend.layouts.partials.aside')
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
       @yield('page_header') 
       @yield('page_content')
     </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  @include('frontend.layouts.partials.scripts')
</body>
</html>