@extends('layaout.template')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-gradient-success">
            <h3>Ajouter un produit</h3>
        </div>
        <div class="card-body">
            <form action="{{route('produits.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input name="user_id" type="hidden" value="{{auth()->user()->id}}">
                <div class="form-group">
                    <label for="titre">Titre:</label>
                    <input type="text" class="form-control" id="titre" name="titre" required>
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
                </div>
                <div class="form-group">
                    <label for="categorie_id">Catégorie:</label>
                    <select class="form-control" id="categorie_id" name="categorie_id" required>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}"> {{$category->libelle}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="prix">Prix:</label>
                    <input type="number" class="form-control" id="prix" name="prix" required>
                </div>
                <div class="form-group">
                    <label for="quantite">Quantite:</label>
                    <input type="number" class="form-control" id="quantite" name="quantite">
                </div>
                <div class="form-group">
                    <label for="date_fab">Date de fabrication:</label>
                    <input type="date" class="form-control" id="date_fab" name="date_fab">
                </div>
                <div class="form-group">
                    <label for="date_exp">Date d'expiration:</label>
                    <input type="date" class="form-control" id="date_exp" name="date_exp" required>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>

@endsection

