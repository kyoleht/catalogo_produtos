@extends('layouts.app')

@section('content')
    <h1>Criar Novo Produto</h1>
    <form action="{{ route('produtos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name" required>
        
        <label for="description">Descrição:</label>
        <textarea name="description" required></textarea>
        
        <label for="price">Preço:</label>
        <input type="number" name="price" step="0.01" required>
        
        <label for="category">Categoria:</label>
        <input type="text" name="category" required>
        
        <label for="image">Imagem:</label>
        <input type="file" name="image">
        
        <button type="submit">Salvar</button>
    </form>
@endsection
