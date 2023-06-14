@extends('layout.main')

@section('content')
    <h1 class="my-5">ELENCO CARATTERI</h1>

    @if (session('deleted'))

        <div class="alert alert-success" role="alert">
            {{ session('deleted') }}
        </div>

    @endif


    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Specie</th>
            <th scope="col">Gender</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($characters as $char )
                <tr>
                    <td>{{ $char->name }}</td>
                    <td>{{ $char->species }}</td>
                    <td>{{ $char->gender }}</td>
                    <td>
                        <a href="{{ route('characters.show', $char) }}" class="btn btn-primary">VAI</a>
                        <a href="{{ route('characters.edit', $char) }}" class="btn btn-secondary">MODIFICA</a>
                        <form
                              class="d-inline"
                              action="{{ route('characters.destroy', $char) }}"
                              method="POST"
                              onsubmit="return confirm('Confermi l\'eliminazione del carattere:  {{ $char->name }} ?')"
                            >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" title="Elimina">ELIMINA</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
      </table>
@endsection
