<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
  @yield('title')
  @include('admin.layout.header-links')


</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
  <div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
      @include('admin.layout.sidebar')
      <!-- wrap @s -->
      <div class="nk-wrap ">

        @include('admin.layout.header')

        @yield('content')


        @include('admin.layout.footer')
      </div>
      <!-- wrap @e -->
    </div>
    <!-- main @e -->
  </div>
  <!-- app-root @e -->
  @include('admin.layout.modal')

  @include('admin.layout.footer-links')


</body>

</html>