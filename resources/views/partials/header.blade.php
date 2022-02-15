<div class="emorat_tm_mobile_header_wrap">
    <div class="in">
        <div class="container">
            <div class="header_inner">
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('') }}img/logo.png" alt="" /></a>
                </div>
                <div class="emorat_tm_trigger">
                    <div class="hamburger hamburger--collapse-r">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navigation_wrap">
            <div class="container">
                <div class="inner_navigation">
                    <ul class="nav">
                        <li><a href="/">{{ __('navbar.home') }}</a></li>
                        <li><a href="/services">{{ __('navbar.services') }}</a></li>
                        <li><a href="/contacts">{{ __('navbar.contact') }}</a></li>
                        <li class="lang">
                            <a href="{{ route('locale', ['locale' => 'ru']) }}">RU</a>
                            <a href="{{ route('locale', ['locale' => 'kz']) }}">KZ</a>
                            <a href="{{ route('locale', ['locale' => 'en']) }}">EN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
