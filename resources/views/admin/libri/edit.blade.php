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
        <div class="form-group">
            <label for="autore_id">Autore</label>
            <input type="text" class="form-control" id="autore_id" name="autore_id" value="{{ $libro->autore_id}}" required>
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
            <label for="editore_id">Editore</label>
            <input type="text" class="form-control" id="editore_id" name="editore_id" value="{{ $libro->editore_id}}" required>
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
        <button type="submit" class="btn btn-primary">
            Invia
        </button>   
    </form>
</div>

@endsection