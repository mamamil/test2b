@extends('layouts.app')

@section('content')
<h1>Добавить предложение</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST" action="{{ route('suggestions.store') }}">
    @csrf
    <div class="form-group">
        <label for="text">Текст предложения:</label>
        <textarea class="form-control" id="text" name="text" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label for="department">Отдел:</label>
        <select class="form-control" id="department" name="department">
            <option value="IT">IT</option>
            <option value="Маркетинг">Маркетинг</option>
            <option value="Продажи">Продажи</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
</form>
@endsection