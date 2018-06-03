<!DOCTYPE html>
<html>
@include(_get_frontend_layout_path('frontend._head'))
<body>
@include(_get_frontend_layout_path('frontend.unused'))
<div class="site-wraper">
    @include(_get_frontend_layout_path('frontend._header'))
    @yield('content')

</div>
@include(_get_frontend_layout_path('frontend.footer'))
@include(_get_frontend_layout_path('frontend.js'))

</body>
</html>
