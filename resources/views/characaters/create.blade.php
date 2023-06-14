@extends('layout.main')

@section('content')
    <h1 class="my-5">Nuovo carattere</h1>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('characters.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input
              id="name"
              class="form-control @error('name') is-invalid @enderror"
              name="name"
              type="text"
              placeholder="Nuovo nome"
              value="{{ old('name') }}"
            >
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="species" class="form-label">Species</label>
            <input
              id="species"
              class="form-control @error('species') is-invalid @enderror"
              name="species"
              type="text"
              placeholder="Nuova specie"
              value="{{ old('species') }}"
            >
            @error('species')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input
              id="type"
              class="form-control @error('type') is-invalid @enderror"
              name="type"
              type="text"
              placeholder="Nuovo Tipo"
              value="{{ old('type') }}"
            >
            @error('type')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <input
              id="gender"
              class="form-control @error('gender') is-invalid @enderror"
              name="gender"
              type="text"
              placeholder="Nuovo gender"
              value="{{ old('gender') }}"
            >
            @error('gender')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="origin_name" class="form-label">Origin name</label>
            <input
              id="origin_name"
              class="form-control @error('origin_name') is-invalid @enderror"
              name="origin_name"
              type="text"
              placeholder="Nuovo origin name"
              value="{{ old('origin_name') }}"
            >
            @error('origin_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="location_name" class="form-label">Location name</label>
            <input
              id="location_name"
              class="form-control @error('location_name') is-invalid @enderror"
              name="location_name"
              type="text"
              placeholder="Nuovo Location name"
              value="{{ old('location_name') }}"
            >
            @error('location_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input
              id="image"
              class="form-control @error('image') is-invalid @enderror"
              name="image"
              type="text"
              placeholder="Nuova Immagine"
              value="{{ old('image') }}"
            >
            @error('image')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>


@endsection
