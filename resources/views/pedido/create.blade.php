 @extends('layouts.app')
 @vite(['resources/sass/app.scss', 'resources/js/app.js'])
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




 @section('content')
 <div class="container">
     <span class="border border-primary">
     <form action="{{route('pedido.store')}} " method="POST">
        @csrf
        <h1> Novo Pedido! </h1>
            <div class="form-group">
              <label for="exampleFormControlInput1">Cliente</label>
              <input  name ="diarias"type="" class="form-control" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Cliente</label>
              <select class="form-control" id="cliente">
                <script></script>
                @foreach ($listagem as $lista)
                <option>{{$lista->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Example multiple select</label>
              <select multiple class="form-control" id="exampleFormControlSelect2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Example textarea</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              <button class="btn btn-success" type="submit"> Enviar ></button>
            </div>
          </form>
          
          <script> 
                const req =  new XMLHttpRequest();
                req.
        </script>
        </span>
        </div>
 @endsection


