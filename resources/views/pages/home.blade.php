@extends('layouts.master')
@section('PageTitle', 'Home')
@section('content')

    <div class="top-products-area">
        <div class="container">
            <div class="row g-3">

                <!-- Single Top Product Card -->
                <div class="col-6 col-sm-4 col-lg-3 text-center">
                    <div class="card single-product-card">
                        <a href="{{ route('buy_data') }}">
                        <div class="card-body p-3">
                            <div class="feature-card mx-auto text-center">
                                <div class="card mx-auto bg-gray">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-heart" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5Zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0ZM14 14V5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1ZM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
                                      </svg>
                                </div>
                                <p class="mb-0">Buy Data</p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <!-- Single Top Product Card -->
                <div class="col-6 col-sm-4 col-lg-3 text-center">
                    <div class="card single-product-card">
                        <div class="card-body p-3">
                            <div class="feature-card mx-auto text-center">
                                <div class="card mx-auto bg-gray">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet" viewBox="0 0 16 16">
                                        <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z"/>
                                      </svg>
                                </div>
                                <p class="mb-0">Wallet</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Top Product Card -->
                <div class="col-6 col-sm-4 col-lg-3 text-center">
                    <div class="card single-product-card">
                        <div class="card-body p-3">
                            <div class="feature-card mx-auto text-center">
                                <div class="card mx-auto bg-gray">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone" viewBox="0 0 16 16">
                                        <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z"/>
                                      </svg>
                                </div>
                                <p class="mb-0">Tell A Friend</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Top Product Card -->
                <div class="col-6 col-sm-4 col-lg-3 text-center">
                    <div class="card single-product-card">
                        <div class="card-body p-3">
                            <div class="feature-card mx-auto text-center">
                                <div class="card mx-auto bg-gray">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                      </svg>
                                </div>
                                <p class="mb-0">WhatsApp Us</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="pt-3"></div>
   
    <div class="container">
        <div class="card bg-primary mb-3 bg-img" style="background-image: url('/mobile/img/core-img/1.png')">
            <div class="card-body direction-rtl p-5">
                <h2 class="text-white">Commission-free</h2>
                <p class="mb-4 text-white">Fund your wallet commission-free by transferring your money into our bank account -
                It typically takes 3 - 10 minutes for the money to reflect in your account. We are 24/7 active on WhatsApp to resolve all complains.</p><a class="btn btn-warning"
                    href="#">WhatsApp Us</a>
            </div>
        </div>
    </div>

    <div class="container direction-rtl">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-4">
                        <div class="feature-card mx-auto text-center">
                            <span class="m-1 badge bg-primary">&#8358;1,000</span>
                            <p class="mb-0">Avail. Balance</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="feature-card mx-auto text-center">
                            <span class="m-1 badge bg-secondary">&#8358;54</span>
                            <p class="mb-0">Main Account</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="feature-card mx-auto text-center">
                            <span class="m-1 badge bg-info">&#8358;54</span>
                            <p class="mb-0">Bonus Account</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <h3>Customer Review</h3>
                <div class="testimonial-slide-three-wrapper">
                    <div class="testimonial-slide3 testimonial-style3">
                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <div class="text-content"><span class="d-inline-block badge bg-warning mb-2"><i
                                        class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i
                                        class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i
                                        class="bi bi-star-fill"></i></span>
                                <h6 class="mb-2">The code looks clean, and the designs are excellent. I
                                    recommend.</h6><span class="d-block">Mrrickez, Themeforest</span>
                            </div>
                        </div>
                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <div class="text-content"><span class="d-inline-block badge bg-warning mb-2"><i
                                        class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i
                                        class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i
                                        class="bi bi-star-fill"></i></span>
                                <h6 class="mb-2">All complete, <br> great craft.</h6><span class="d-block">Mazatlumm,
                                    Themeforest</span>
                            </div>
                        </div>
                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <div class="text-content"><span class="d-inline-block badge bg-warning mb-2"><i
                                        class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i
                                        class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i
                                        class="bi bi-star-fill"></i></span>
                                <h6 class="mb-2">Awesome template! <br> Excellent support!</h6><span
                                    class="d-block">Vguntars, Themeforest</span>
                            </div>
                        </div>
                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <div class="text-content"><span class="d-inline-block badge bg-warning mb-2"><i
                                        class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i
                                        class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i
                                        class="bi bi-star-fill"></i></span>
                                <h6 class="mb-2">Nice modern design, <br> I love the product.</h6><span
                                    class="d-block">electroMEZ, Themeforest</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container direction-rtl">
        <div class="card">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-4">
                        <div class="feature-card mx-auto text-center">
                            <div class="card mx-auto bg-gray"><i class="bi bi-star text-warning"></i></div>
                            <p class="mb-0">Best Rated</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="feature-card mx-auto text-center">
                            <div class="card mx-auto bg-gray">
                                <svg class="bi bi-award text-success" xmlns="http://www.w3.org/2000/svg" width="30"
                                    height="30" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z">
                                    </path>
                                    <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z">
                                    </path>
                                </svg>
                            </div>
                            <p class="mb-0">Elegant</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="feature-card mx-auto text-center">
                            <div class="card mx-auto bg-gray">
                                <svg class="bi bi-lightning-charge text-primary" xmlns="http://www.w3.org/2000/svg"
                                    width="30" height="30" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09zM4.157 8.5H7a.5.5 0 0 1 .478.647L6.11 13.59l5.732-6.09H9a.5.5 0 0 1-.478-.647L9.89 2.41 4.157 8.5z">
                                    </path>
                                </svg>
                            </div>
                            <p class="mb-0">Trendsetter</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-3"></div>
@endsection
