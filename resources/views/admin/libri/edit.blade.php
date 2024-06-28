@extends('layouts.admin')

@section('title', 'modifica libro')

@section('content')
<div class="container">
    <h1>Modifica libro</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    {{-- @dd($libro) --}}
    <form action="{{ route('admin.libri.update', $libro->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="titolo">Titolo</label>
            <input type="text" class="form-control" id="titolo" name="titolo" value="{{ $libro->titolo}}" required>
            @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        </div>
        <div class="mb-3">
            <label for="autore_id" class="form-label">Autore</label>
            <select name="autore_id" id="autore_id" class="form-control" required>
                @foreach($autori as $autore)
                    <option value="{{ $autore->id }}" {{ $libro->autore_id == $autore->id ? 
                    'selected' : '' }}>{{ $autore->nome }} {{ $autore->cognome }}</option>
                @endforeach
            </select>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="editore_id" class="form-label">Autore</label>
            <select name="editore_id" id="editore_id" class="form-control" required>
                @foreach($editori as $editore)
                    <option value="{{ $editore->id }}" {{ $libro->editore_id == $editore->id ? 'selected' : '' }}>{{ $editore->denominazione}}</option>
                @endforeach
            </select>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn" value="{{ $libro->isbn}}" required>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>
        <div class="form-group">
            <label for="lingua">Lingua</label>
            <input type="text" class="form-control" id="lingua" name="lingua" value="{{ $libro->lingua}}" required>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>
        <div class="form-group">
            <label for="anno">Anno</label>
            <input type="text" class="form-control" id="anno" name="anno" value="{{ $libro->anno}}" required>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>
        <div class="form-group">
            <label for="prezzo">Prezzo</label>
            <input type="number" class="form-control" id="prezzo" name="prezzo" value="{{ $libro->prezzo}}" required>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>
        <div class="form-group">
            <label for="categorias">Categorie</label><br>
            @foreach($categorie as $categoria)
                <input type="checkbox" id="categoria_{{ $categoria->id }}" name="category[]" value="{{ $categoria->id }}" {{ $libro->category->contains($categoria->id) ? 'checked' : '' }}>
                <label for="categoria_{{ $categoria->id }}">{{ $categoria->nome }}</label><br>
            @endforeach
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>       
        <button type="submit" class="btn btn-primary">Invia</button>
      </form>
</div>
@endsection