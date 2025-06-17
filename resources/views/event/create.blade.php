@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Buat Event Baru</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        @include('events.form', ['event' => null])
    </form>
</div>
@endsection
