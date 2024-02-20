<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <header>
      <!-- place navbar here -->
    </header>
    <main>
      <h1 class="row justify-content-center m-0 p-1">Actividad</h1>
      <div class="row m-0 justify-content-center align-items-center p-3">
        <table class="table w-75">
          <thead>
            <tr class="table-active">
              <th scope="col">#id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Editar</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pruebas as $prueba)
            <tr>
              <th scope="row">{{$prueba->id}}</th>
              <td>{{$prueba->nombre}}</td>
              <td>{{$prueba->descripcion}}</td>
              <td><a href="{{ route('pruebas.edit', ['prueba' => $prueba->id]) }}" class="text-decoration-none">Editar</a></td>
              <td>
                <form action="{{route('pruebas.destroy', ['prueba' => $prueba->id])}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit">X</button>
                </form>
              </td>
            </tr>
            @endforeach
            <tr>
              <th scope="row"><a href="{{route('pruebas.create')}}" class="text-decoration-none">+</a></th>
            </tr>
          </tbody>
        </table>
      </div>
      
    </main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
