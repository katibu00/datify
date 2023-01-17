@extends('layouts.master')
@section('PageTitle', 'Buy Data')
@section('content')
    <!-- Add new contact modal -->
    <div class="add-new-contact-modal modal fade px-0" id="addnewcontact" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="addnewcontactlabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="modal-title" id="addnewcontactlabel">Add new Beneficiary</h6>
                        <button class="btn btn-close p-1 ms-auto me-0" type="button" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form action="#">
                        <div class="input-group mb-3"><span class="input-group-text" id="to">Name</span>
                            <input class="form-control" type="text" placeholder="" aria-label="Username"
                                aria-describedby="to">
                        </div>
                        <div class="input-group mb-3"><span class="input-group-text" id="to">Number</span>
                            <input class="form-control" type="text" placeholder="" aria-label="Username"
                                aria-describedby="to">
                        </div>
                        
                        <button class="btn btn-primary w-100" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="add-new-contact-wrap"><a class="shadow" href="#" data-bs-toggle="modal"
            data-bs-target="#addnewcontact"><i class="bi bi-plus-lg"></i></a></div>
    <div class="container">
        <div class="element-heading">
            <h6 class="ps-1">Beneficiaries</h6>
        </div>
        <!-- User Status Slide -->
        <div class="chat-user-status-slides-wrapper">
            <div class="chat-user-status-slides mb-2">
                <!-- Single Status Slide -->
                <div>
                    <div class="user-status-slide"><a href="#"><img src="img/bg-img/user1.png" alt="">
                            <div class="active-status"></div>
                            <p class="mb-0 mt-2 text-truncate">Aynal</p>
                        </a></div>
                </div>
                <!-- Single Status Slide -->
                <div>
                    <div class="user-status-slide"><a href="#"><img src="img/bg-img/user2.png" alt="">
                            <div class="active-status"></div>
                            <p class="mb-0 mt-2 text-truncate">Afrin</p>
                        </a></div>
                </div>
                <!-- Single Status Slide -->
                <div>
                    <div class="user-status-slide"><a href="#"><img src="img/bg-img/user3.png" alt="">
                            <div class="active-status"></div>
                            <p class="mb-0 mt-2 text-truncate">Fairoze</p>
                        </a></div>
                </div>
                <!-- Single Status Slide -->
                <div>
                    <div class="user-status-slide offline"><a href="#"><img src="img/bg-img/user4.png" alt="">
                            <div class="active-status"></div>
                            <p class="mb-0 mt-2 text-truncate">ReFresh</p>
                        </a></div>
                </div>
                <!-- Single Status Slide -->
                <div>
                    <div class="user-status-slide"><a href="#"><img src="img/bg-img/user1.png" alt="">
                            <div class="active-status"></div>
                            <p class="mb-0 mt-2 text-truncate">রবিন</p>
                        </a></div>
                </div>
                <!-- Single Status Slide -->
                <div>
                    <div class="user-status-slide offline"><a href="#"><img src="img/bg-img/user2.png" alt="">
                            <div class="active-status"></div>
                            <p class="mb-0 mt-2 text-truncate">Hasnain</p>
                        </a></div>
                </div>
                <!-- Single Status Slide -->
                <div>
                    <div class="user-status-slide"><a href="#"><img src="img/bg-img/user1.png" alt="">
                            <div class="active-status"></div>
                            <p class="mb-0 mt-2 text-truncate">Aynal</p>
                        </a></div>
                </div>
                <!-- Single Status Slide -->
                <div>
                    <div class="user-status-slide"><a href="#"><img src="img/bg-img/user2.png" alt="">
                            <div class="active-status"></div>
                            <p class="mb-0 mt-2 text-truncate">Afrin</p>
                        </a></div>
                </div>
                <!-- Single Status Slide -->
                <div>
                    <div class="user-status-slide"><a href="#"><img src="img/bg-img/user3.png" alt="">
                            <div class="active-status"></div>
                            <p class="mb-0 mt-2 text-truncate">Fairoze</p>
                        </a></div>
                </div>
                <!-- Single Status Slide -->
                <div>
                    <div class="user-status-slide offline"><a href="#"><img src="img/bg-img/user4.png"
                                alt="">
                            <div class="active-status"></div>
                            <p class="mb-0 mt-2 text-truncate">ReFresh</p>
                        </a></div>
                </div>
                <!-- Single Status Slide -->
                <div>
                    <div class="user-status-slide"><a href="#"><img src="img/bg-img/user1.png" alt="">
                            <div class="active-status"></div>
                            <p class="mb-0 mt-2 text-truncate">রবিন</p>
                        </a></div>
                </div>
                <!-- Single Status Slide -->
                <div>
                    <div class="user-status-slide offline"><a href="#"><img src="img/bg-img/user2.png"
                                alt="">
                            <div class="active-status"></div>
                            <p class="mb-0 mt-2 text-truncate">Hasnain</p>
                        </a></div>
                </div>
            </div>
        </div>
        <!-- Element Heading -->
        {{-- <div class="element-heading">
            <h6 class="ps-1">Buy Data Bundle</h6>
        </div> --}}
       
        <div class="container">
            <div class="card">
              <div class="card-body">
                <div class="standard-tab">
                  <ul class="nav rounded-lg mb-2 p-2 shadow-sm" id="affanTabs1" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="btn active" id="bootstrap-tab" data-bs-toggle="tab" data-bs-target="#bootstrap" type="button" role="tab" aria-controls="bootstrap" aria-selected="true">My Number</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn" id="pwa-tab" data-bs-toggle="tab" data-bs-target="#pwa" type="button" role="tab" aria-controls="pwa" aria-selected="false">Send to Others</button>
                    </li>
                    
                  </ul>
                  <div class="tab-content rounded-lg p-3 shadow-sm" id="affanTabs1Content">
                    
                    <div class="tab-pane fade show active" id="bootstrap" role="tabpanel" aria-labelledby="bootstrap-tab">
        
                      <div class="form-group">
                        <label class="form-label" for="defaultSelect">Plan</label>
                        <select class="form-select" id="defaultSelect" name="defaultSelect" aria-label="Default select example">
                          <option value=""></option>
                          <option value="500">500MB - &#8358;120</option>
                          <option value="500">1GB - &#8358;230</option>
                          <option value="500">1.5GB - &#8358;350</option>
                          <option value="500">2GB - &#8358;460</option>
                          <option value="500">5GB - &#8358;1,050</option>
                          <option value="500">10GB - &#8358;5,000</option>
                        </select>
                      </div>
                      <button class="btn btn-primary w-100" type="submit">Continue</button>

                    </div>

                    <div class="tab-pane fade" id="pwa" role="tabpanel" aria-labelledby="pwa-tab">
                      <h6>PWA Ready</h6>
                      <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>

                    

                  </div>
                </div>
              </div>
            </div>
          </div>


    </div>

@endsection
