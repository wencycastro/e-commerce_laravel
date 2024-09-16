@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-sm p-4">
            <h1 class="mb-4">Profile</h1>
            <div class="form-floating mb-3">
                <input type="email" class="form-control rounded" id="floatingInput" placeholder="name@example.com"
                    value="{{ $email }}" readonly>
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control rounded" id="floatingName" placeholder="Name"
                    value="{{ $name }}" readonly>
                <label for="floatingName">Name</label>
            </div>
        </div>
    </div>
@endsection
