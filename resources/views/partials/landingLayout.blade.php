<!DOCTYPE html>
<html lang="en">
@include('includes.header')
<body>
	<div class="wm-main-wrapper">
		<header id="wm-header" class="wm-header-one">
			@include('includes.topNav')
			@include('includes.menu')
		</header>
		
			@yield('main_content')
			@include('includes.counter')
		</div>
		@include('includes.footer')
	</div>
	@include('includes.footerLinks')
</body>
</html>