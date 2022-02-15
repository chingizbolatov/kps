@extends('layout')

@section('content')
    <div class="emorat_tm_section">
        <div class="emorat_tm_main_title_holder">
            <div class="container">
                <div class="title_holder">
                    <h3>Контакты</h3>
                </div>
                <div class="builify_tm_breadcrumbs">
                    <ul>
                        <li><a href="/">KazPromStroy</a></li>
                        <li class="shape"><span></span></li>
                        <li><span>{{ $contacts_page->title }}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<div class="emorat_tm_section">
    <div class="container">
        <div class="emorat_tm_main_contact_wrap">
            <div class="office_list">
                <ul>
                    <li>
                        <div class="inner">
                            <div class="image_wrap">
                                <div id="map">
                                    <div class="mapouter">
                                        <div class="gmap_canvas">
                                            <iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=47.117590,%2051.873524&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br><style>.mapouter{position:relative;text-align:right;height:300px;width:100%;}</style><a href="https://www.embedgooglemap.net">google iframe</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:100%;}</style>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="definitions_wrap">
                                <div class="office">
                                    <h3>{{ $contacts_page->office_title }}</h3>
                                    <div class="icon">
                                        <img class="svg" src="img/svg/location.svg" alt="" />
                                    </div>
                                </div>
                                <div class="short_info_wrap">
                                    <div class="row">
                                        <p>{{ $contacts_page->office_address }}</p>
                                    </div>
                                    <div class="row">
                                        <label>{{ __('contacts.phone') }}:</label>
                                        <span>{{ $contacts_page->phone_1 }}</span>
                                    </div>
                                    @if(!is_null($contacts_page->phone_2))
                                        <div class="row">
                                            <label>{{ __('contacts.phone') }}:</label>
                                            <span>{{ $contacts_page->phone_2 }}</span>
                                        </div>
                                    @endif
                                    <div class="row">
                                        <label>Email:</label>
                                        <span><a href="mailto:{{$contacts_page->email}}" style="color:#999999">{{ $contacts_page->email }}</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="emorat_tm_contact_wrap">
                <div class="get_in_touch">
                    <h3>{{ __('contacts.form.title') }}</h3>
                </div>
                <div class="inner_wrap">
                    <form action="/" method="post" class="contact_form" id="contact_form">
                        <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                        <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                        <div class="row">
                            <label>{{ __('contacts.form.full_name') }}<span></span></label>
                            <input id="name" type="text" />
                        </div>
                        <div class="row">
                            <label>{{ __('contacts.form.contact_phone') }}<span></span></label>
                            <input id="phone" type="text" />
                        </div>
                        <div class="row">
                            <label>{{ __('contacts.form.msg') }}<span></span></label>
                            <textarea id="message"></textarea>
                        </div>
                        <div class="row">
                            <a id="send_message" href="#">{{ __('contacts.form.btn') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
