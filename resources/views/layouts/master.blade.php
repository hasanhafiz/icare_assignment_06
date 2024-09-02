@include('partials.header')
    <body data-plugin-page-transition class="template-{{ (Request::segments() == null) ? 'home' : collect(\Request::segments())->implode('-') }}">
		<div class="body">
            @include('partials.menu')
			<div role="main" class="main">
                @yield('page_header')
				@yield('main')
			</div> <!-- end div main -->
@include('partials.footer')
