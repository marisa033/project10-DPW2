@include("admin.section.assets")
<style type="text/css">
  .login,
.image {
  min-height: 100vh;
}

.bg-image {
  background-image: url('https://bootstrapious.com/i/snippets/sn-page-split/bg.jpg');
  background-size: cover;
  background-color: red;
  background-position: center center;
}
</style>
<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-4">Login</h3>
                             @include('admin.utils.notif')
                            <form action="{{url('login')}}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input id="inputEmail" type="email" placeholder="Email address" name="email" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <div class="form-group mb-3">
                                    <input id="inputPassword" type="password" placeholder="Password" name="password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                    <label for="customCheck1" class="custom-control-label">Remember password</label>
                                    <a href="{{url('register')}}" class="float-right custom-control-label"><u>Sign Up </u></a>
                                    <button href="{{url('admin/beranda')}}" type="submit" class="btn btn-info btn-block text-uppercase mb-2 rounded-pill shadow-sm">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>

@include("admin.section.js")