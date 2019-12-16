@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{route('contacts.post')}}">
    @csrf

    <label for="nombre">Nombre</label>
    <input name= 'nombre' id="nombre" type="text">
   
    <label for="surname">Apellido</label>
    <input id="surname" name='surname' type="text">
    
    <button type="submit">Enviar</button>
</form>