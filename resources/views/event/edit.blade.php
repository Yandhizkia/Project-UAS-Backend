@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Event</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('events.form', ['event' => $event])
    </form>
</div>
@endsection
