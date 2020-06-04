<!DOCTYPE html>
<html lang="en">
@include('includes.header')
<body>
	<div class="wm-main-wrapper">
		<header id="wm-header" class="wm-header-one">
			@include('includes.topNav')
			@include('includes.menu')
		</header>
        @include('includes.banner')
		<div class="wm-main-content">
			@include('includes.findCourse')
			@include('includes.faculty')
			@include('includes.popularCourse')
			@include('includes.latest')
            @include('includes.contact')
		</div>
		@include('includes.footer')
	</div>
	@include('includes.modalLogin')
	@include('includes.footerLinks')
</body>
</html>