@extends('layouts.app')

@section('content')
    <h1>Lista de Produtos</h1>
    <a href="{{ route('produtos.create') }}">Adicionar Produto</a>
    
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Categoria</th>
                <th>Imagem</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category }}</td>
                    <td>
                        @if($product->image_path)
                            <img src="{{ asset('storage/' . $product->image_path) }}" alt="Imagem do Produto" width="100">
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
