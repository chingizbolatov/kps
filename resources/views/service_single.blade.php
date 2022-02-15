@extends('layout')

@section('content')
    <div class="emorat_tm_section">
        <div class="emorat_tm_main_title_holder">
            <div class="container">
                <div class="title_holder">
                    <h3>{{ $service->title }}</h3>
                </div>
                <div class="builify_tm_breadcrumbs">
                    <ul>
                        <li><a href="/">KazPromStroy</a></li>
                        <li class="shape"><span></span></li>
                        <li><a href="/services">{{ $services_page->title }}</a></li>
                        <li class="shape"><span></span></li>
                        <li><span>{{ $service->title }}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="emorat_tm_section">
        <div class="container">
            <div class="emorat_tm_service_single_wrap">
                <div class="emorat_tm_twicebox_wrap">
                    <div class="leftbox">
                        <div class="main_image_wrap">
                            <div class="image_wrap">
                                <img src="{{ asset('') . '/storage/' .$service->img_uri }}" alt="" />
                            </div>
                            <div class="image_definition">
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                        <div class="service_features">
                            <h3>{{ __('service.service_features') }}</h3>
                            <ul>
                                @foreach($service->features as $feature)
                                    <li>
                                        <div class="inner">
                                            <div class="definition">
                                                <p>{{ $feature }}</p>
                                            </div>
                                            <div class="icon">
                                                <img class="svg" src="{{ asset('') }}img/svg/check.svg" alt="" />
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="accordion_wrap_all">
                            <div class="title">
                                <h3>{{ __('service.how') }}</h3>
                            </div>
                            <div class="accordion_wrap">
                                <div class="emorat_tm_accordion">
                                    @foreach($service->work_flow as $work_flow)
                                        <div class="accordion_in">
                                            <div class="acc_head">{{ $work_flow }}<div class="wow_shape"><span class="wow_effect"></span></div></div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="emorat_tm_short_contact">
                            <div class="text">
                                <p>{{ __('service.contact_us') }}</p>
                            </div>
                            <div class="emorat_tm_button_wrap">
                                <a href="#">{{ __('service.contact_us_btn') }}</a>
                            </div>
                        </div>
                        <div class="emorat_tm_line"></div>
                        <div class="emorat_tm_other_services_wrap">
                            <h3>{{ __('service.other_services') }}</h3>
                            <div class="services_list_wrap">
                                <ul>
                                    @foreach($services as $service)
                                        <li>
                                            <div class="inner">
                                                <div class="title_holder">
                                                    <h3><a href="/service/{{$service->id}}">{{ $service->title }}</a></h3>
                                                </div>
                                                <div class="description">
                                                    <p>{{mb_substr($service->description, 0, 200)}}...</p>
                                                </div>
                                                <div class="read_more_wrap">
                                                    <div class="read_more_in">
                                                        <a href="/service/{{ $service->id }}">{{ __('services.btn_text') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="rightbox">
                        <div class="emorat_tm_categories">
                            <ul>
                                {{ $count = 0 }}
                                @foreach($services as $service)
                                    @if($count < 5):
                                        <li><a href="/service/{{$service->id}}">{{ $service->title }}</a></li>
                                    @endif
                                    {{ $count+=1 }}
                                @endforeach
                            </ul>
                            <div class="first_shape"></div>
                            <div class="second_shape"></div>
                        </div>
                        <div class="emorat_tm_request_estimate_wrap">
                            <div class="image_wrap">
                                <img src="{{asset('')}}/img/service-right-part.jpg" alt="" />
                                <div class="image" style="background: url({{asset('')}}'/img/service-right-part.jpg')"></div>
                            </div>
                            <div class="definition">
                                <div class="text">
                                    <p>{{ __('service.lets_start') }}</p>
                                </div>
                                <div class="button">
                                    <a href="#">{{ __('service.lets_start_btn') }}</a>
                                </div>
                                <div class="first_shape">
                                    <span class="first"></span>
                                    <span class="second"></span>
                                    <span class="third"></span>
                                </div>
                                <div class="second_shape">
                                    <span class="first"></span>
                                    <span class="second"></span>
                                    <span class="third"></span>
                                </div>
                                <div class="first_square"></div>
                                <div class="second_square"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
