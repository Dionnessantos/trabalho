<h1>Cadastro de Produto</h1>
@if ($errors->any())
    @foreach($errors->all() as $error)
        {{$error}} <br>
    @endforeach
@endif
<form action="{{route('products.store')}}" method="post">
    @csrf()
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" placeholder="Digite o nome do produto">
    <br>
    <label for="description">Descrição:</label>
    <br>
    <textarea id="description" name="description" rows="4" cols="50" placeholder="Digite a descrição do produto"></textarea>
    <br>
    <label for="price">Preço:</label>
    <input type="number" id="price" name="price" step="0.01" placeholder="Digite o preço do produto">
    <br>
    <label for="stock">Estoque:</label>
    <input type="number" id="stock" name="stock" placeholder="Digite a quantidade em estoque">
    <br><br>
    <input type="submit" value="Enviar">
</form>