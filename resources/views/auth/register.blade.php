<!doctype html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Registre</title>
      <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/logos/favicon.png')}}" />
      <link rel="stylesheet" href="{{asset('assets/css/styles.min.css')}}" />
      <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
</head>

<body>
      <!--  Body Wrapper -->
      <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
            <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
                  <div class="d-flex align-items-center justify-content-center w-100">
                        <div class="row justify-content-center w-100">
                              <div class="col-md-8 col-lg-6 col-xxl-3">
                                    <div class="card mb-0">
                                          <div class="card-body">
                                                <a href="/" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                                      <h1>Regitrer</h1>
                                                </a>
                                                <p class="text-center">Gestion Stagiaire</p>
                                                <form action="{{route('auth.register')}}" method="post">
                                                      @csrf
                                                      @method('POST')
                                                      <div class="mb-3">
                                                            <label for="exampleInputNom1" class="form-label">Nom</label>
                                                            <input type="text" class="form-control" name="name" id="exampleInputNom1">
                                                      </div>
                                                      <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                                            <input type="email" class="form-control" name="email" id="exampleInputEmail1">
                                                      </div>
                                                      <div class="mb-4">
                                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                                            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                                                      </div>
                                                      <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Register</button>
                                                      <div class="d-flex align-items-center justify-content-center">
                                                            <p class="fs-4 mb-0 fw-bold">Already registred?</p>
                                                            <a class="text-primary fw-bold ms-2" href="{{route('auth.loginView')}}">Login</a>
                                                      </div>
                                                </form>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
      <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>