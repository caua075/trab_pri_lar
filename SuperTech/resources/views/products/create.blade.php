@extends ('layouts.main')
@section('title', 'Cadastro de Produtos')
@section('content')

    <div class="container">
        <h1 >Criar Produto</h1>
        <form action="/products" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Preço</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Imagem do Produto</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrição</label>
                <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </form>
    </div>

@endsection