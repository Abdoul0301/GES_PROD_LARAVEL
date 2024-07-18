@extends('layaout.tamplateadmin')
@section('container')
    <div class="col-xl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title mb-0">Ajouter un produit</h4>
            </div>
            <div class="card-body">
                <form action="{{route('produits.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="categorie_id" class="col-lg-3 col-form-label">Categorie</label>
                        <div class="col-lg-9">
                            <select class="select" name="categorie_id">
                                <option>Select</option>
                                @foreach($categories as $categorie)
                                <option value="{{$categorie->id}}">{{$categorie->libelle}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <input name="user_id" type="hidden" value="{{auth()->user()->id}}">
                    <div class="form-group row">
                        <label for="image" class="col-lg-3 col-form-label">Image</label>
                        <div class="col-lg-9">
                            <input id="image" name="image" type="file" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="titre" class="col-lg-3 col-form-label">titre</label>
                        <div class="col-lg-9">
                            <input id="titre" name="titre" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="prix" class="col-lg-3 col-form-label">prix</label>
                        <div class="col-lg-9">
                            <input id="prix" name="prix" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date_fab" class="col-lg-3 col-form-label">date fabrication</label>
                        <div class="col-lg-9">
                            <input id="date_fab" name="date_fab" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date_exp" class="col-lg-3 col-form-label">date expiration</label>
                        <div class="col-lg-9">
                            <input id="date_exp" name="date_exp" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <a href="{{route('produits.index')}}" class="btn btn-primary">Retour</a>
@endsection
