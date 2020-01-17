    <!-- banner -->
    <div class="main-w3pvt mian-content-wthree text-center" >
        <div class="container">
            <div class="style-banner mx-auto"><br><br><br><br>
                <h3 class="text-wh font-weight-bold">Connect With <span>Developers</span></h3>
                
                <!-- form -->
                <div class="home-form-w3ls mt-5">
                    <form action="<?= base_url()?>Question/index" method="GET">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="title" placeholder="Ask your questions?"
                                        required="">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                  <button type="submit" class="btn_apt btn">Search</button>
                                </div>
                                
                            </div>
                        </div>
                        
                    </form>
                </div>
                <!-- //form -->
            </div>
        </div>
    </div>
    <!-- //banner -->


    <!-- services -->
    <div class="services py-5" id="what">
        <div class="container py-xl-5 py-lg-3">
            <h3 style="color: #ff7f62;" class="title-w3 mb-xl-5 mb-sm-4 mb-2 text-center text-wh font-weight-bold">Categories</h3>
            <div class="row w3pvtits-services-row text-center">
                <div class="col-lg-3 serv-w3mk mt-5">
                    <a href="#">
                        <div class="w3pvtits-services-grids">
                        <span class="fa fa-html5 ser-icon" aria-hidden="true"></span>
                        <h4 class="text-bl my-4">HTML</h4>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 serv-w3mk mt-5">
                    <div class="w3pvtits-services-grids">
                        <span class="fa fa-css3 ser-icon" aria-hidden="true"></span>
                        <h4 class="text-bl my-4">CSS</h4>
                    </div>
                </div>
                <div class="col-lg-3 serv-w3mk mt-5">
                    <div class="w3pvtits-services-grids">
                        <span class="fa fa-file-code-o ser-icon" aria-hidden="true"></span>
                        <h4 class="text-bl my-4">Javascript</h4>
                    </div>
                </div>
                <div class="col-lg-3 serv-w3mk mt-5">
                    <div class="w3pvtits-services-grids">
                        <span class="fa fa-code ser-icon" aria-hidden="true"></span>
                        <h4 class="text-bl my-4">Bootstrap</h4>
                    </div>
                </div>

                <div class="col-lg-3 serv-w3mk mt-5">
                    <div class="w3pvtits-services-grids">
                        <span class="fa  fa-codepen ser-icon" aria-hidden="true"></span>
                        <h4 class="text-bl my-4">PHP</h4>
                    </div>
                </div>
                <div class="col-lg-3 serv-w3mk mt-5">
                    <div class="w3pvtits-services-grids">
                        <span class="fa fa-database ser-icon" aria-hidden="true"></span>
                        <h4 class="text-bl my-4">MySql</h4>
                    </div>
                </div>
                <div class="col-lg-3 serv-w3mk mt-5">
                    <div class="w3pvtits-services-grids">
                        <span class="fa  fa-codepen ser-icon" aria-hidden="true"></span>
                        <h4 class="text-bl my-4">Codeigniter</h4>
                    </div>
                </div>
                <div class="col-lg-3 serv-w3mk mt-5">
                    <div class="w3pvtits-services-grids">
                        <span class="fa  fa-codepen ser-icon" aria-hidden="true"></span>
                        <h4 class="text-bl my-4">Laravel</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //services -->

    <!-- events -->
    <section class="blog_w3ls py-5" id="events">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-5 text-center font-weight-bold">Recent Questions</h3>
            
            <div class="row mt-lg-2">
                <!-- blog grid -->
            <?php foreach ($questions as $question) { ?>
              
                    <div class="col-lg-12 col-md-12 mt-lg-0 mt-5"  style="margin-bottom: 10px;">
                    
                    <a href="<?= base_url()?>Question/question_details/<?=$question['id']?>"><div class="card">
                        <div class="card-header m-0">
                           
                        </div>
                        <div class="card-body" style="padding: .7rem;">
                            <p class="text-left"><?=$question['title']?></p>
                        </div>
                        <div class="card-footer blog_w3icon border-top pt-2 mt-3 d-flex justify-content-between" style="margin-top: 0px;padding: 0.1rem 1.25rem">
                            <small class="text-bl">
                                <b>By: <?=$question['username']?></b>

                          
                            </small>
                            <p>  <i class="fa fa-eye"> <?=$question['seen']?> </i>
                            <i class="fa fa-reply-all"> <?=$question['answer']?></i></p>
                            <span>
                                Asked on: <?php echo(date("d M Y",$question['date'])); ?>
                            </span>

                        </div>
                    </div>
                    </a>
                </div>
              
          <?php } ?>
                <!-- //blog grid -->

                        <div class="col-md-2 offset-5">
                            <a class="service-btn" href="#">See More<span class="fa fa-long-arrow-right ml-2"></span></a>
                        </div>
            </div>
        </div>

    </section>
    <!-- //events -->

    <!-- stats section -->
    <div class="middlesection-w3pvt py-sm-5 pt-sm-0 pt-5 mt-5" id="stats">
        <div class="container py-xl-5 py-lg-3">
               <h3 class="title-w3-2 title-w3 mb-md-5 mb-4 font-weight-bold text-center">Our Statistics</h3>
                <div class="row">
                    <div class="col-4 w3layouts_stats_left w3_counter_grid">
                        <center>
                            <h4 class="counter">38+</h4>
                        <p class="para-text-w3ls text-li let">Total Questions</p>
                        </center>
                    </div>
                    <div class="col-4 w3layouts_stats_left w3_counter_grid2">
                       <center> <h4 class="counter">60+</h4>
                        <p class="para-text-w3ls text-li let">Replies</p></center>
                    </div>
                    <div class="col-4 w3layouts_stats_left w3_counter_grid1">
                       <center> <h4 class="counter">50+</h4>
                        <p class="para-text-w3ls text-li let">Registered Users</p></center>
                    </div>
                </div>
            </div>
    
    </div>
    <!-- //stats section -->
