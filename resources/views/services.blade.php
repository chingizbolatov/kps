@extends('layout')

@section('content')
    <div class="emorat_tm_section">
        <div class="emorat_tm_main_title_holder">
            <div class="container">
                <div class="title_holder">
                    <h3>{{ $services_page->title }}</h3>
                </div>
                <div class="builify_tm_breadcrumbs">
                    <ul>
                        <li><a href="/">KazPromStroy</a></li>
                        <li class="shape"><span></span></li>
                        <li><span>{{ $services_page->title }}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="emorat_tm_section">
        <div class="container">
            <div class="emorat_tm_services_list_wrap">
                <ul class="masonry">
                    @foreach($services as $service)
                        <li class="item">
                            <div class="inner">
                                <div class="service_image">
                                    <img src="{{ asset('') . 'storage/' . $service->img_uri }}" alt="" />
                                    <a href="/service/{{$service->id}}"><div class="image" style="background-image: url({{ asset('') . 'storage/' . $service->img_uri }});"></div></a>
                                </div>
                                <div class="list_definitions_wrap">
                                    <div class="titles">
                                        <div class="title_holder">
                                            <h3><a href="/service/{{$service->id}}">{{ $service->title }}</a></h3>
                                        </div>
                                        <div class="definition">
                                            <p>{{mb_substr($service->description, 0, 200)}}...</p>
                                        </div>
                                    </div>
                                    <div class="read_more_wrap">
                                        <div class="read_more_in">
                                            <a href="/service/{{ $service->id }}">{{ __('services.btn_text') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop
