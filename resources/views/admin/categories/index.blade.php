@extends('layaout.tamplateadmin')
@section('container')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Categories</h3>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{route('categories.create')}}" class="btn add-btn" ><i class="fa fa-plus"></i> Ajouter Cateorie</a>
                <div class="view-icons">
                    <a href="clients.html" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
                    <a href="clients-list.html" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row staff-grid-row">
        @foreach($categories as $categorie)
        <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="client-profile.html" class="avatar"><img alt="" src="{{asset('storage/'.$categorie->image)}}"></a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                    </div>
                </div>
                <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html">{{$categorie->libelle}}</a></h4>

            </div>
        </div>
    @endforeach
    </div>
@endsection
