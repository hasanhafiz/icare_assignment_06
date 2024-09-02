<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-dark">
        <div class="header-container container container-xl-custom">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a class="" href="{{ route('index') }}">
                                <img alt="Porto" width="" height="" src="{{ asset('assets/img/logo-default2.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links">
                            <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-dropdown-arrow header-nav-main-effect-3 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="">
                                            <a class="{{ (request()->is('/')) ? 'active' : '' }}" href="{{ route('index') }}">
                                                Home
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="{{ ( request()->is('work-experiences') ) ? 'active' : '' }}" href="{{ route('experience') }}">
                                                Work Experiences
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="{{ ( request()->is('projects') || request()->is('project/*') ) ? 'active' : '' }}" href="{{ route('portfolio') }}">
                                                Portfolio
                                            </a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
