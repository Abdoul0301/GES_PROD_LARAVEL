@extends('layaout.tamplateadmin')

@section('container')

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-auto float-right ml-auto">
                <a href="{{route('users.create')}}" class="btn add-btn" ><i class="fa fa-plus"></i> ajouter Employee</a>
                <div class="view-icons">
                    <a href="employees.html" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
                    <a href="employees-list.html" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
                </div>
            </div>
        </div>
    </div>

{{--    parcourir la liste des employees et les afficher--}}
    <div class="row staff-grid-row">
        <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt=""></a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                    </div>
                </div>
                <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile.html">John Doe</a></h4>
                <div class="small text-muted">Web Designer</div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-09.jpg" alt=""></a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                    </div>
                </div>
                <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile.html">Richard Miles</a></h4>
                <div class="small text-muted">Web Developer</div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-10.jpg" alt=""></a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                    </div>
                </div>
                <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile.html">John Smith</a></h4>
                <div class="small text-muted">Android Developer</div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-05.jpg" alt=""></a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                    </div>
                </div>
                <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile.html">Mike Litorus</a></h4>
                <div class="small text-muted">IOS Developer</div>
            </div>
        </div>


    </div>
@endsection
