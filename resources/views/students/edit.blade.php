@extends('layout')

@section('content')
    <div class="container">
        <h1 class="title">Edit Student</h1>
        <form action="/students/{{ $student->id }}" method="POST" class="form">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{ $student->name }}" required class="input-field">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ $student->email }}" required class="input-field">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" id="phone" value="{{ $student->phone }}" required class="input-field">
            </div>
            <button type="submit" class="btn-submit">Update</button>
        </form>
    </div>
@endsection

<style>
    .container {
        width: 60%;
        margin: 0 auto;
        padding: 30px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .title {
        font-size: 2em;
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .form {
        display: flex;
        flex-direction: column;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        font-size: 1em;
        margin-bottom: 5px;
        color: #555;
    }

    .input-field {
        width: 100%;
        padding: 10px;
        font-size: 1em;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .input-field:focus {
        border-color: #007bff;
        outline: none;
    }

    .btn-submit {
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        font-size: 1.2em;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn-submit:hover {
        background-color: #0056b3;
    }
</style>
