<h1>Cadastro de Produto</h1>
<label for="name">Nome:</label>
<input type="text" id="name" name="name" placeholder="Digite o nome do produto" value="{{$product->name}}" readonly>
<br>
<label for="description">Descrição:</label>
<br>
<textarea id="description" name="description" rows="4" cols="50" placeholder="Digite a descrição do produto" readonly>{{$product->description}}</textarea>
<br>
<label for="price">Preço:</label>
<input type="number" id="price" name="price" step="0.01" placeholder="Digite o preço do produto" value="{{$product->price}}" readonly>
<br>
<label for="stock">Estoque:</label>
<input type="number" id="stock" name="stock" placeholder="Digite a quantidade em estoque" value="{{$product->stock}}" readonly>
<br><br>
<form action="{{route('products.destroy', $product->id)}}" method="post">
    @csrf()
    @method('DELETE')
    <input type="submit" value="Excluir">
</form>