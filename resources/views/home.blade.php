@extends('layouts.app')

@section('content')
<div class="mt-4 text-white">......................................</div>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-info text-white">Bienvenidos al chat</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <iframe class="col" src="{{ url('/mensaje') }}" frameborder="0" height="400px"></iframe>
                <iframe class="col px-0" src="{{ url('/mensaje/create') }}" frameborder="0" height="100px"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
