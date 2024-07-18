@extends('layaout.template')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    {{ $categorie->exists ? 'Modifier une catégorie' : 'Créer une catégorie' }}
                </div>
                <div class="card-body">
                    <form class="needs-validation" novalidate action="{{ $categorie->exists
                        ? route('categories.update', $categorie)
                        : route('categories.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if($categorie->exists)
                            @method('PUT')
                        @endif

                        @include('components.input', [
                            'label' => 'Nom', 'name' => 'libelle', 'value' => $categorie->name
                        ])

                        @include('components.input', [
                            'label' => 'Image', 'name' => 'image', 'value' => $categorie->image, 'type' => 'file'
                        ])

                        <div class="text-center form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save"></i>
                                {{ $categorie->exists ? 'Modifier' : 'Créer' }}
                            </button>
                        </div>
                    </form> <!-- End Form Add | Edit form -->
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection
