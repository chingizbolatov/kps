<div class="emorat_tm_menubar">
    <div class="emorat_tm_menubar_in">
        <div class="emorat_tm_menubar_content">
            <div class="menu_logo">
                <a href="index.html"><img src="{{ asset('') }}img/logo.png" alt="" /></a>
            </div>
            <div class="menu_nav">
                <div class="menu_nav_in">
                    <div class="menu_nav_content scrollable">
                        <ul class="vert_nav">
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
    <div class="emorat_tm_home_button">
        <div class="home_button">
	   					<span class="first">
						<a href="index.html"><img class="svg" src="{{ asset('') }}img/svg/home.svg" alt="" /></a>
						</span>
            <span class="second">
                {{ __('navbar.build_dreams') }}
            </span>
        </div>

    </div>
</div>
