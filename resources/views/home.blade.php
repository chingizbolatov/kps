@extends('layout')

@section('content')
<div class="emorat_tm_section">
    <div class="emorat_tm_slider_wrap">
        <div class="container swiper">
            <div class="emorat_tm_slider_title_wrap">
                <div class="title">
                    <h3>{{ $home_page_info->h3 ?: 'We are more than builders'}}</h3>
                </div>
                <div class="subtitle">
                    <p>{{ $home_page_info->p ?: 'We offer the most complete house renovating services in the country, from kitchen design to bathroom re-modelling.'}}</p>
                </div>
                <div class="switches">
                    <div class="prev_next">
                        <div class="tm_next_button"></div>
                        <div class="tm_prev_button"></div>
                    </div>
                    <div class="swiper-pagination my_swiper_pagination"></div>
                </div>
            </div>
        </div>
        <div class="emorat_tm_universal_swiper_wrap">
            <div class="swiper-container">
                <div class="emorat_tm_articles_wrap swiper-wrapper">
                    <div class="article_inner swiper-slide">
                        <div class="article_image first">
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="article_inner swiper-slide">
                        <div class="article_image second">
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="article_inner swiper-slide">
                        <div class="article_image third">
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /SHORT SERVICES -->
<div class="emorat_tm_section">
    <div class="container">
        <div class="emorat_check_list_wrap emorat_tm_miniboxes">
            <ul>
                @foreach($advantages as $advantage)
                    <li>
                        <div class="inner">
                            <div class="title_holder emorat_tm_minibox">
                                <div class="shape">
                                    <span></span>
                                </div>
                                <div class="definition">
                                    <h3>{{ $advantage->title }}</h3>
                                    <span>{{ $advantage->description }}</span>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="emorat_tm_section">
    <div class="container">
        <div class="emorat_tm_about_company_wrap">
            <div class="emorat_tm_leftbox">
                <div class="emorat_tm_main_title_wrap">
                    <div class="title">
                        <h3>{{ $about->h3 }}</h3>
                    </div>
                    <div class="subtitle">
                        <p>{{ $about->p }}</p>
                    </div>
                </div>
                <div class="sign">
                    <img src="{{ asset('') . 'storage/' . $about->director_sign }}" alt="Sign">
                </div>
                <div class="author_name">
                    <span>{{ $about->director }}</span>
                </div>
            </div>
            <div class="rightbox">
                <div class="first_image">
                    <img src="{{ asset('img/about/about1.jpg') }}" alt=""  style="width: 100%;"/>
                    <div class="image" style="background-image: none"></div>
                </div>
                <div class="second_image_wrap">
                    <div class="inner">
                        <img src="{{ asset('img/about/about2.jpg') }}" alt="" />
                        <div class="image" style="background-image: none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="emorat_tm_section">
    <div class="container">
        <div class="emorat_tm_principles_wrap">
            <div class="list_wrap">
                <ul class="masonry">
                    @foreach($achievements as $achievement)
                        <li class="item">
                            <div class="inner">
                                <span class="leftshape"></span>
                                <span class="topshape"></span>
                                <div class="in">
                                    <div class="title">
                                        <h3>{{ $achievement->title }}</h3>
                                    </div>
                                    <div class="definition">
                                        <p>{{ $achievement->description }}</p>
                                    </div>
                                    <div class="number">
                                        <span>0{{ $achievement->id }}</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="emorat_tm_section">
    <div class="emorat_tm_services_wrap fn_w_sminiboxes">
        <div class="container">
            <div class="inner_wrap">
                <div class="leftbox fn_w_sminibox">
                    <div class="emorat_fn_sticky_section">
                        <div class="emorat_tm_main_title_wrap">
                            <div class="title">
                                <h3>{{ $services_page->title }}</h3>
                            </div>
                            <div class="subtitle">
                                <p>{{ $services_page->descr }}</p>
                            </div>
                            <div class="service_category">
                                <ul>
                                    @foreach($services_page->categories as $service_page_category)
                                        <li><span>{{ $service_page_category }}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="emorat_tm_button_wrap">
                                <a href="/services">{{ $services_page->btn_text }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="emorat_tm_rightbox fn_w_sminibox">
                    <div class="emorat_fn_sticky_section">
                        <div class="services_list_wrap">
                            <ul>
                                @foreach($services as $service)
                                    <li>
                                        <div class="inner">
                                            <div class="title_holder">
                                                <h3><a href="/service/{{$service->id}}}">{{ $service->title }}</a></h3>
                                            </div>
                                            <div class="description">
                                                <p>{{mb_substr($service->description, 0, 200)}}...</p>
                                            </div>
                                            <div class="read_more_wrap">
                                                <div class="read_more_in">
                                                    <a href="/service/{{$service->id}}}">{{ __('services.btn_text') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
