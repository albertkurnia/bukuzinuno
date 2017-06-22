@extends('layouts.app')
@section('content')
 <div class="app-content content container-fluid">
        <div class="content-wrapper">
          <div class="content-header row">
            <div class="content-header-left col-md-6 col-xs-12 mb-1">
              <h2 class="content-header-title">Search Website</h2>
            </div>
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
              <div class="breadcrumb-wrapper col-xs-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Search</a>
                  </li>
                  <li class="breadcrumb-item active">Search Website
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="content-body"><!-- Search form-->
            <section id="search-website" class="card overflow-hidden">
              <div class="card-header">
                <h4 class="card-title">Website search results</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                    <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                    <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                    <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-body collapse in">
                <div class="card-block pb-0">
                  <fieldset class="form-group position-relative mb-0">
                    <input type="text" class="form-control form-control-lg input-lg" id="iconLeft" placeholder="Robust Admin Template">
                    <div class="form-control-position">
                      <i class="icon-microphone2 font-medium-4"></i>
                    </div>
                  </fieldset>
                </div>
                <!--Search Navbar-->
                <div id="search-nav" class="card-block">
                  <ul class="nav nav-inline">
                    <li class="nav-item">
                      <a class="nav-link active" href="search-website.html"><i class="icon-link4"></i> Website</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="search-images.html"><i class="icon-image4"></i> Images</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="search-videos.html"><i class="icon-video2"></i> Videos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="icon-map6"></i> Maps</a>
                    </li>
                    <li class="dropdown nav-item float-xs-right">
                      <a href="#" class="btn dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-setting1"></i> <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Languages</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Search Settings</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">History</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Search Help</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <!--/ Search Navbar-->
                <!--Search Result-->
                <div id="search-results" class="card-block">
                  <div class="col-lg-8">
                    <p class="text-muted font-small-3">About 68,00,000 results (0.58 seconds) </p>
                    <ul class="media-list row">
                      <!--search with list-->
                      <li class="media">
                        <div class="media-body">
                          <p class="lead mb-0"><a href="#"><span class="text-bold-600">Robust</span> - Responsive Bootstrap Admin Template</a></p>
                          <p class="mb-0"><a href="#" class="green darken-1">https://pixinvent.com/<span class="text-bold-600">robust</span>/ <i class="icon-caret-down" aria-hidden="true"></i></a></p>
                          <ul class="list-inline list-inline-pipe text-muted">
                            <li>
                              <i class="icon-android-star yellow darken-2"></i>
                              <i class="icon-android-star yellow darken-2"></i>
                              <i class="icon-android-star yellow darken-2"></i>
                              <i class="icon-android-star yellow darken-2"></i>
                              <i class="icon-android-star yellow darken-2"></i> &nbsp;5 stars
                            </li>
                            <li>590 votes</li>
                            <li>US$ 28.00</li>
                            <li>In stock</li>
                          </ul>
                          <p><span class="text-muted">Aug 3, 2016 - </span><span class="text-bold-600">Robust</span> nec nisl lobortis erat rutrum dignissim. Colonel <span class="text-bold-600">Responsive Bootstrap Admin Template</span> Ut tellus dui, rhoncus quis vulputate non, sodales ac ex. Fusce interdum efficitur purus quis viverra. Vivamus eros urna, scelerisque ac enim a, pharetra imperdiet dolor...</p>
                          <div class="website-detailed-list mx-1 my-1">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="content-group">
                                  <div class="media-body">
                                    <p class="mb-0"><a href="#">Dashboard</a></p>
                                    <p>Donec vitae ante ipsum. In aliquet, urna id varius mattis...</p>
                                  </div>
                                </div>
                                <div class="content-group">
                                  <div class="media-body">
                                    <p class="mb-0"><a href="#">Form Components</a></p>
                                    <p>Velit mi sodales turpis, nec consectetur leo elit.</p>
                                  </div>
                                </div>
                                <div class="content-group">
                                  <div class="media-body">
                                    <p class="mb-0"><a href="#">Charts</a></p>
                                    <p>Vestibulum nec orci placerat, euismod turpis egestas, pretium risus.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="content-group">
                                  <div class="media-body">
                                    <p class="mb-0"><a href="#">UI Components</a></p>
                                    <p>Nam in velit iaculis, vestibulum ex a, porta sapien...</p>
                                  </div>
                                </div>
                                <div class="content-group">
                                  <div class="media-body">
                                    <p class="mb-0"><a href="#">Support</a></p>
                                    <p>Donec ullamcorper est vel dui commodo dictum.</p>
                                  </div>
                                </div>
                                <div class="content-group">
                                  <div class="media-body">
                                    <p class="mb-0"><a href="#">Documentation</a></p>
                                    <p>Ut rhoncus massa diam, in commodo enim posuere quis mosito...</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <!--search with image-->
                      <li class="media">
                        <p class="lead mb-0"><a href="#"><span class="text-bold-600">Attire bench</span> -  Quick win shoot me an email</a></p>
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object width-150" src="../../app-assets/images/portfolio/width-600/portfolio-14.jpg" alt="Generic placeholder image">
                          </a>
                        </div>
                        <div class="media-body media-search">
                          <p class="mb-0"><a href="#" class="green darken-1">https://pixinvent.com/<span class="text-bold-600">robust</span>/ <i class="icon-caret-down" aria-hidden="true"></i></a></p>
                          <ul class="list-inline list-inline-pipe text-muted">
                            <li>
                              <i class="icon-android-star yellow darken-2"></i>
                              <i class="icon-android-star yellow darken-2"></i>
                              <i class="icon-android-star yellow darken-2"></i>
                              <i class="icon-android-star yellow darken-2"></i>
                              <i class="icon-android-star-half yellow darken-2"></i> &nbsp;4.5 stars
                            </li>
                            <li>50 votes</li>
                            <li>US$ 40.00</li>
                            <li>In stock</li>
                          </ul>
                          <p><span class="text-muted">Aug 3, 2016 - </span> We need to dialog around <span class="text-bold-600">Robust Admin</span> your choice of work attire bench mark, or win-win-win. Quick win shoot me an email. Proceduralize i don't want to drain the whole swamp, i just want to shoot some alligators yet old boys club.</p>
                        </div>
                      </li>
                      <!--search with video-->
                      <li class="media">
                        <p class="lead mb-0"><a href="#"><span class="text-bold-600">The Table</span> - for what do you feel you would bring to</a></p>
                        <div class="media-left media-search">
                          <iframe width="150" height="110" src="https://www.youtube.com/embed/SsE5U7ta9Lw?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                        </div>
                        <div class="media-body">
                          <p class="mb-0"><a href="#" class="green darken-1">http://youtube.com/<span class="text-bold-600">robust</span>/ <i class="icon-caret-down" aria-hidden="true"></i></a></p>
                          <ul class="list-inline list-inline-pipe text-muted">
                            <li>Aug 3, 2016</li>
                            <li>1M Views</li>
                            <li>Uploaded by PlayStation</li>
                          </ul>
                          <p><span class="text-bold-600">Proceduralize</span> Not the long pole in my tent. Get buy-in pixel pushing, and quick win . What's the status on the deliverables for eow? goalposts golden goose, and take five.</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <p class="lead mb-0"><a href="#"><span class="text-bold-600">Microdosing</span> - deep v actually schlitz chia</a></p>
                          <p class="mb-0"><a href="#" class="green darken-1">http://themeforest.net/<span class="text-bold-600">robust</span>/microdosing <i class="icon-caret-down" aria-hidden="true"></i></a></p>
                          <p>Lobortis erat rutrum dignissim. Colonel <span class="text-bold-600">Responsive Bootstrap Admin Template</span> Ut tellus dui, rhoncus quis vulputate non, sodales ac ex. Fusce interdum efficitur purus quis viverra. Vivamus eros urna, scelerisque ac enim...</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <p class="lead mb-0"><a href="#">Aesthetic neutra <span class="text-bold-600">freegan</span>, mlkshk literally</a></p>
                          <p class="mb-0"><a href="#" class="green darken-1">http://envato.com/literally/<span class="text-bold-600">robust</span>/ <i class="icon-caret-down" aria-hidden="true"></i></a></p>
                          <p><span class="text-muted">June 30, 2016 - </span><span class="text-bold-600">Humblebrag</span> mixtape tumblr small batch, marfa blog mumblecore retro sustainable bitters normcore brunch whatever helvetica. <span class="text-bold-600">Humblebrag mumblecore </span>beard irony, XOXO craft beer kogi letterpress freegan vegan disrupt...</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <p class="lead mb-0"><a href="#"><span class="text-bold-600">iCell</span> -  disrupt butcher pitchfork.</a></p>
                          <p class="mb-0"><a href="#" class="green darken-1">http://google.com/<span class="text-bold-600">icell</span>/ <i class="icon-caret-down" aria-hidden="true"></i></a></p>
                          <ul class="list-inline list-inline-pipe text-muted">
                            <li>
                              <i class="icon-android-star yellow darken-2"></i>
                              <i class="icon-android-star yellow darken-2"></i>
                              <i class="icon-android-star-half yellow darken-2"></i>
                              <i class="icon-android-star-outline yellow darken-2"></i>
                              <i class="icon-android-star-outline yellow darken-2"></i> &nbsp;2.5 stars
                            </li>
                            <li>590 votes</li>
                            <li>US$ 399.00</li>
                            <li>In stock</li>
                          </ul>
                          <p><span class="text-muted">March 23, 2016 - </span>Church-key selfies bitters man bun post-ironic. <span class="text-bold-600">8-bit 3 wolf moon</span> drinking vinegar, direct trade plaid cred hashtag offal. Fap XOXO chambray, intelligentsia kogi keytar flexitarian cardigan kale chips food truck.</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <p class="lead mb-0"><a href="#"><span class="text-bold-600">Run it</span> - up the flagpole, ping the boss</a></p>
                          <p class="mb-0"><a href="#" class="green darken-1">http://mail.example.com/<span class="text-bold-600">run</span>/ <i class="icon-caret-down" aria-hidden="true"></i></a></p>
                          <p>Pixel pushing horsehead offer that jerk from finance really threw me under the bus, but best practices new economy and take five, punch the tree, and come back in here with a clear head...</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <p class="lead mb-0"><a href="#"><span class="text-bold-600">Keytar</span> - jean shorts disrupt poutine</a></p>
                          <p class="mb-0"><a href="#" class="green darken-1">http://demo.keytar.com/<span class="text-bold-600">jean</span>/ <i class="icon-caret-down" aria-hidden="true"></i></a></p>
                          <ul class="list-inline list-inline-pipe text-muted">
                            <li>
                              <i class="icon-android-star yellow darken-2"></i>
                              <i class="icon-android-star yellow darken-2"></i>
                              <i class="icon-android-star yellow darken-2"></i>
                              <i class="icon-android-star-outline yellow darken-2"></i>
                              <i class="icon-android-star-outline yellow darken-2"></i> &nbsp;3 stars
                            </li>
                            <li>50 votes</li>
                            <li>US$ 4.00</li>
                            <li>Out Of stock</li>
                          </ul>
                          <p><span class="text-muted">Jan 14, 2016 - </span><span class="text-bold-600">Brooklyn</span> ethical sartorial gastropub shabby chic photo booth. Bushwick roof party kogi pitchfork food truck heirloom, street art occupy blog try-hard single-origin coffee chillwave.</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <p class="lead mb-0"><a href="#"><span class="text-bold-600">Helicopter</span> -  view drop-dead date</a></p>
                          <p class="mb-0"><a href="#" class="green darken-1">http://demo.helicopter.com/<span class="text-bold-600">date</span>/ <i class="icon-caret-down" aria-hidden="true"></i></a></p>
                          <p><span class="text-muted">Sept 18, 2016 - </span> Sacred cow execute pig in a python. We need to socialize the comms with the wider stakeholder community collaboration through advanced technlogy three-martini lunch, nor bench mark, hit the ground running. Value prop collaboration through advanced technlogy. Face time out of the loop. Forcing function.</p>
                        </div>
                      </li>
                    </ul>
                    <div class="text-xs-center">
                      <nav aria-label="Page navigation">
                        <ul class="pagination">
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">« Prev</span>
                              <span class="sr-only">Previous</span>
                            </a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item active"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">4</a></li>
                          <li class="page-item"><a class="page-link" href="#">5</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">Next »</span>
                              <span class="sr-only">Next</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card border-grey border-lighten-2">
                      <div class="card-block">
                        <h4 class="card-title">Robust</h4>
                        <h6 class="card-subtitle text-muted">Responsive Bootstrap Admin Template</h6>
                      </div>
                      <img class="img-fluid" src="../../app-assets/images/portfolio/width-600/portfolio-3.jpg" alt="logo">
                      <div class="card-block">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.<a href="#">Wikipedia</a></p>
                        <ul class="list-group">
                          <li class="list-group-item"><strong>Website :</strong> <a href="#" class="card-link">https://pixinvent.com/</a></li>
                          <li class="list-group-item"><strong>Customer service :</strong> 022 8888 9999</li>
                          <li class="list-group-item"><strong>Founder :</strong> PIXINVENT</li>
                          <li class="list-group-item"><strong>Founded :</strong> 2017</li>
                          <li class="list-group-item"><strong>Support:</strong> <a href="#">support@pixinvent.com</a></li>
                        </ul>
                        <div class="py-1 text-xs-center">
                          <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="icon-facebook3"></span></a>
                          <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="icon-twitter3"></span></a>
                          <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"><span class="icon-linkedin3 font-medium-4"></span></a>
                          <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github"><span class="icon-github font-medium-4"></span></a>
                        </div>
                      </div>
                      <div class="card-block">
                        <p class="text-bold-600">People also search for</p>
                        <div class="row">
                          <div class="col-md-4">
                            <img class="img-fluid rounded" src="../../app-assets/images/gallery/11.jpg" alt="Image description">
                            <a href="#" class="font-small-2">Ashoka</a>
                          </div>
                          <div class="col-md-4">
                            <img class="img-fluid rounded" src="../../app-assets/images/gallery/12.jpg" alt="Image description">
                            <a href="#" class="font-small-2">Materialize</a>
                          </div>
                          <div class="col-md-4">
                            <img class="img-fluid rounded" src="../../app-assets/images/gallery/13.jpg" alt="Image description">
                            <a href="#" class="font-small-2">HTML </a>
                          </div>
                          <div class="col-md-4">
                            <img class="img-fluid rounded" src="../../app-assets/images/gallery/14.jpg" alt="Image description">
                            <a href="#" class="font-small-2">Ashoka</a>
                          </div>
                          <div class="col-md-4">
                            <img class="img-fluid rounded" src="../../app-assets/images/gallery/25.jpg" alt="Image description">
                            <a href="#" class="font-small-2">Materialize</a>
                          </div>
                          <div class="col-md-4">
                            <img class="img-fluid rounded" src="../../app-assets/images/gallery/23.jpg" alt="Image description">
                            <a href="#" class="font-small-2">HTML </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!--/ Search form -->

          </div>
        </div>
      </div>
      @endsection