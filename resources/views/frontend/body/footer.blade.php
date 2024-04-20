@php

    $allfooter = App\Models\Footer::find(1);

@endphp

<footer class="footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">Contact us</h5>
                        <h4 class="title">{{ $allfooter->number }}</h4>
                    </div>
                    <div class="footer__widget__text">
                        <p>{{ $allfooter->short_description }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">my address</h5>
                    </div>
                    <div class="footer__widget__address">
                        <p>{{ $allfooter->address }}</p>
                        <a href="#" class="mail">{{ $allfooter->email }}</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">Follow me</h5>
                        <h4 class="title">socially connect</h4>
                    </div>
                    <div class="footer__widget__social">
                        <ul class="footer__social__list">
                            <li><a href="{{ $allfooter->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $allfooter->twitter }}"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright__wrap">
            <div class="row">
                <div class="col-12">
                    <div class="copyright__text text-center">
                        <p>{{ $allfooter->coppyright }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
