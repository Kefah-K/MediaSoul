<?php include "include/header.php"; ?> 

    <!--Log In-->
    <section class="login1">
        <div class="container">
            <div class="row">
                <div class=" col-lg-5 col-md-8 col-10 mt-4 mb-4  p-5 mx-auto logform">
                    <div class="mx-auto">
                        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Log in</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Sign Up</button>
                            </li>
                          </ul>
                    </div>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

                            <form class="mt-3 p-3 form1">
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">E-mail</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name.surname @example.com">
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Password</label>
                                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="****">
                                </div>
                                
                                <div class="form-group text-center"><button type="submit" class="btn btn-primary mt-4 mb-4">LOG IN</button></div>
                                <div class="form-group text-center"><p><a href="#">Forget Password</a></p></div>
                                <div class="form-group text-center"><p>OR</p></div>
                                <div class="form-group text-center"><a href="#form22"><button type="button" class="btn btn-block"> Creat New Account</button></a></div>
                                
                                <div class="container-fluid mb-3 mt-3 div1"></div>
                               </form>
                        </div>

                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

                            <form class="mt-3 p-3 form2 " id="form22">
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Name Surname</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name surname ">
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">E-mail</label>
                                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="name.surname @example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="****">
                                  </div>
                                  <p>Your personal data will be processed for the purpose of carrying out membership transactions. You can find detailed information about the protection of personal data here.</p>
                                <div class="mb-3 form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1">ALLOW for <span> MEDIA SOUL</span></label>
                                </div>
                                <div class="form-group text-center"><button type="submit" class="btn btn-primary">SIGN UP</button></div>
                                <div class="container-fluid div1 mb-3 mt-3"></div>
                                </form>
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "include/footer.php"; ?>