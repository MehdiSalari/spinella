<!-- footer begin -->
<footer @if (Session::get('locale') == 'fa') class="rtl" @endif()>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 sm-text-center">
                <h3>{{ __('home.footer.contact.title') }}</h3>
                {{ __('home.footer.contact.address') }}<br>
                TEL: <a href= "tel:{{ __('home.footer.contact.phone') }}">{{ __('home.footer.contact.phone') }}</a><br>
                E-Mail: <a href="mailto:{{ __('home.footer.contact.email') }}"> {{ __('home.footer.contact.email') }}</a><br>
            </div>
            <div class="footer-line quick-links"></div>
            <div class="col-lg-3 sm-text-center quick-links">
                <h3>{{ __('home.footer.links.title') }}</h3>
                <a href="{{ route('blog') }}">{{ __('home.header.blog') }}</a><br>
                <!-- <a href="{{ route('products') }}">{{ __('home.header.products') }}</a><br> -->
                <a href="{{ route('about-us') }}">{{ __('home.header.about') }}</a><br>
                <a href="{{ route('contact-us') }}">{{ __('home.header.contact') }}</a><br>
            </div>
            <div class="footer-line"></div>
            <div class="col-lg-3 sm-text-center">
                <h3>{{ __('home.footer.subscribe.title') }}</h3>
                <input type="text" class="form-control mb-2" placeholder="{{ __('home.footer.subscribe.email') }}">
                <input type="submit" value="{{ __('home.footer.subscribe.button') }}" class="btn-custom">
            </div>
            <div class="footer-line"></div>
            <div class="col-lg-3 text-center">
                <img class="logo mb-0" src="{{ asset('assets/images/footer-logo1.png') }}" alt="Logo">
                <p class="footer-text">{{ __('home.footer.info.desc') }}</p>
                <div class="social-icons mt-0">
                    <a target="_blank" href="{{ __('home.footer.social.fb') }}"><i class="fa fa-facebook fa-lg"></i></a>
                    <a target="_blank" href="{{ __('home.footer.social.ig') }}"><i class="fa fa-instagram fa-lg"></i></a>
                    <a target="_blank" href="{{ __('home.footer.social.wa') }}"><i class="fa fa-whatsapp fa-lg"></i></a>
                    <a target="_blank" href="{{ __('home.footer.social.tg') }}"><i class="fa fa-telegram fa-lg"></i></a>
                    <a target="_blank" href="{{ __('home.footer.social.sk') }}"><i class="fa fa-skype fa-lg"></i></a>
                </div>
            </div>
        </div>
        <div class="row text-center mt-3" style="margin-bottom: -60px;">
            <p>{{ __('home.footer.copyright.text') }}<br>
                {{ __('home.footer.copyright.powered') }} <a href="{{ __('home.footer.copyright.link') }}">{{ __('home.footer.copyright.name') }}</a></p>
        </div>
    </div>
</footer>
<!-- footer close -->
