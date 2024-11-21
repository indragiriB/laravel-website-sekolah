@extends('layout')

@section('content')
    <div class="container">
        <h1 class="title">Welcome to the Student Management System</h1>
        <p class="description">Manage student data efficiently with our easy-to-use application.</p>
        <a href="/students" class="btn-primary">View Students</a>
    </div>
@endsection

<style>
    body {
        margin: 0;
        padding: 0;
        height: 100vh; /* Full viewport height */
        background-image: url('/assets/img/kacaw.jpeg'); /* Ensure the image path is correct */
        background-size: cover; /* Full-screen background */
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        font-family: Arial, sans-serif;
    }

    .container {
        position: relative;
        text-align: center;
        margin: auto;
        padding: 20px;
        color: white; /* Text color on dark background */
    }

    .title {
        font-size: 3em;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8); /* Outline effect using text-shadow */
        color: white; /* Ensure text is visible */
        -webkit-text-stroke: 1px black; /* Adds a black outline */
    }

    .description {
        font-size: 1.2em;
        margin-bottom: 30px;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8); /* Outline effect using text-shadow */
        color: white; /* Ensure text is visible */
        -webkit-text-stroke: 0.5px black; /* Adds a black outline */
    }

    .btn-primary {
        display: inline-block;
        padding: 10px 20px;
        font-size: 1.1em;
        color: white;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        text-decoration: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>
