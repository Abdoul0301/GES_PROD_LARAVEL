<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Login - HRMS admin template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/logo.jpg')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('assets/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('assets/js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body class="account-page">

<!-- Main Wrapper -->
<div class="main-wrapper">
    <div class="account-content">
        <a href="job-list.html" class="btn btn-primary apply-btn">Apply Job</a>


            <!-- Account Logo -->
            <div class="account-logo">
                <a href="index.html"><img src="assets/img/logo.jpg" alt="Dreamguy's Technologies"></a>
            </div>
            <!-- /Account Logo -->




        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Ajouter un utilisateur</h4>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Personal Information</h4>
                    <form action="{{route('users.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group ">
                                    <label for="prenom" class=" col-form-label">Prenom</label>
                                    <div class="col-lg-9">
                                        <input id="prenom" name="prenom" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="nom" class="col-form-label">Nom</label>
                                    <div class="col-lg-9">
                                        <input id="nom" name="nom" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group ">
                                    <label for="email" class="col-form-label">Email</label>
                                    <div class="col-lg-9">
                                        <input id="email" name="email" type="email" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="password" class=" col-form-label">Password</label>
                                    <div class="col-lg-9">
                                        <input id="password" name="password" type="password" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="confirmpassword" class=" col-form-label">Confirmer Password</label>
                                    <div class="col-lg-9">
                                        <input id="confirmpassword" name="confirmpassword" type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="preference" class="col-form-label">Preference</label>
                                <div class="col-lg-12">
                                    <select id="preference" class="select form-control" name="preference">
                                        <option> Select </option>
                                        @foreach($categories as $categorie)
                                            <option value="{{$categorie->id }}" >
                                                {{$categorie->libelle}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="roles" class="col-form-label">Role</label>
                                <div class="col-lg-12">
                                    <select id="roles" class="select form-control" name="roles[]">
                                        <option> Select </option>
                                        @foreach($roles as $role)
                                            <option value="{{ $role->name }}" {{ in_array($role, old('roles') ?? []) ? 'selected' : '' }}>
                                                {{$role->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h4 class="card-title">Address</h4>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group ">
                                    <label for="adresse" class=" col-form-label">Address </label>
                                    <div class="col">
                                        <input id="adresse" name="adresse" type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="telephone" class=" col-form-label">Telephone</label>
                                    <div class="col">
                                        <input id="telephone" name="telephone"  type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="cni" class=" col-form-label">Cni</label>
                                    <div class="col">
                                        <input id="cni" name="cni" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pays" class=" col-form-label">Pays</label>
                                    <div class="col">
                                        <input id="pays" name="pays" type="text" class="form-control">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

                </div>


<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<!-- Custom JS -->
<script src="{{asset('assets/js/app.js')}}"></script>

</body>
</html>

