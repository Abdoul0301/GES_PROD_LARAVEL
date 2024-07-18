@extends('layaout.template')
@section('content')
    <div style="display: none" >
    {{$montant=0}}
    </div>
    <div class="col-md-12 ftco-animate">
        <div class="cart-list">

            <table class="table">
                <thead class="thead-primary">
                <tr class="text-center">
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>Produits</th>
                    <th>Prix</th>
                    <th>Quantite</th>
                    <th></th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>

                @foreach($paniers as $panier)

                    <tr class="text-center">
                        <form action="{{route('paniers.destroy', $panier)}}" method="post">
                            @csrf
                            @method('delete')
                        <td class="product-remove"><button type="submit"><span class="ion-ios-close"></span></button></td>
                        </form>
                        <td class="image-prod"><div class="img" style="background-image:url({{asset('storage/'.$panier->produit->image)}});"></div></td>

                        <td class="product-name">
                            <h3>{{$panier->produit->titre}}</h3>
                        </td>

                        <td class="price">{{$panier->produit->prix}}</td>
                        <form action="{{route('panier.modifier', $panier->id)}}" method="post">
                            @csrf
                            <input type="hidden" name="produit_id" value="{{$panier->produit->id}}">
                        <td class="quantity">
                            <div class="input-group mb-3">
                                <input type="number" name="quantite" class="quantity form-control input-number" value="{{$panier->quantite}}" min="1" max="100">
                            </div>
                        </td>
                            <td class="product-success" >
                                <button type="submit">
                                <span class="icon-check-circle"></span>
                                </button>
                            </td>
                        </form>

                        <td class="total">{{$panier->produit->prix * $panier->quantite}}</td>
                        {{$montant+=$panier->produit->prix * $panier->quantite}}
                    </tr><!-- END TR-->
                @endforeach

                <tr class="text-center">
                    <td class="Total" colspan="3">Total</td>
                    <form action="{{route('commandes.store')}}" method="post">
                        @csrf
                    <td class="total-price"> <input type="number"  name="montant" value="{{$montant}}" readonly><strong> Fcfa</strong></td>
                        <td><button type="submit">Commander</button></td>

                    </form>

                </tr>


                </tbody>

            </table>

        </div>
    </div>

    <script>
        // Fonction pour calculer le total et le mettre à jour
        function updateTotal(input) {
            var quantity = input.value; // Récupérer la nouvelle quantité
            var price = input.parentNode.parentNode.querySelector('.price').textContent; // Récupérer le prix du produit
            var total = parseFloat(quantity) * parseFloat(price); // Calculer le nouveau total

            // Mettre à jour le total affiché dans la même ligne
            input.parentNode.parentNode.querySelector('.total').textContent = '$' + total.toFixed(2); // Mettre à jour le total affiché
        }

        // Ajouter un gestionnaire d'événement de changement à chaque champ de quantité
        var quantityInputs = document.querySelectorAll('.quantity input');
        quantityInputs.forEach(function(input) {
            input.addEventListener('change', function() {
                updateTotal(this); // Appeler la fonction pour mettre à jour le total
            });
        });
    </script>
@endsection
