@extends('products.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Activité CRUD </h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('products.create') }}"> Créer un nouveau produit</a>

            </div>

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr>

            <th>Produits</th>

            <th>Nom</th>

            <th>Détails</th>

            <th width="280px">Gestion</th>

        </tr>

        @foreach ($products as $product)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $product->name }}</td>

            <td>{{ $product->detail }}</td>

            <td>

                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Voir</a>

    

                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Modif</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Supp</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $products->links() !!}

      

@endsection