@include('components.header')

    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url({{ url('images/login-3.png') }})">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-12 col-lg-8 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <img class="img-fluid" alt="" src="{{ asset('images/logo-wesclic.png') }}" style="width: 200px">
                                        <h2 class="m-b-0">Register</h2>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center m-b-30 ">
                                        <h5 class="m-b-0 font-size-13 text-muted">Selamat Datang, Silahkan Register</h5>
                                    </div>
                                    <form action="/api/auth/register" method="POST">
                                        @csrf
                                        <div class="row g-2">
                                            <div class="form-group col mb-0">
                                                <label class="font-weight-semibold" for="userName">Username:</label>
                                                <div class="input-affix">
                                                    <i class="prefix-icon bx bx-user"></i>
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="form-group col mb-0">
                                                <label class="font-weight-semibold" for="password">Email:</label>
                                                <div class="input-affix m-b-10">
                                                    <i class='prefix-icon bx bx-envelope'></i>
                                                    <input type="text" class="form-control" id="email" name="email" placeholder="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="form-group col mb-0">
                                                <label class="font-weight-semibold" for="userName">Password:</label>
                                                <div class="input-affix">
                                                    <i class='prefix-icon bx bx-key'></i>
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="form-group col mb-0">
                                                <label class="font-weight-semibold" for="password">Confirm Password:</label>
                                                <div class="input-affix m-b-10">
                                                    <i class='prefix-icon bx bx-key'></i>
                                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" hidden>
                                            <label class="font-weight-semibold" for="password">Roles</label>
                                            <div class="input-affix m-b-10">
                                                <i class='prefix-icon bx bx-key'></i>
                                                <input type="text" class="form-control" id="roles" name="roles" placeholder="roles" value="roles" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="font-size-13 text-muted">
                                                    have an account? 
                                                    <a class="small" href="/login"> Login</a>
                                                </span>
                                                <button class="btn btn-primary" type="submit">Register</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
  