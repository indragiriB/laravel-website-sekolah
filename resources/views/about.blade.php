@extends('layout')

@section('content')
    <div class="container">
        <h1 class="title">About Us</h1>
        <p class="description">
        
Website Student Management ini merupakan website yang digunakan untuk mengetahui, memasukkan, mengedit dan menghapus data siswa terutama yang ada di SMK Negeri 5 Surakarta. Dengan adanya website Student Management yang menyimpan data siswa ini diharapkan dapat mempermudah dalam pengelolaan data siswa.
        </p>
    </div>
@endsection

<style>
    .container {
        width: 60%;
        margin: 50px auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .title {
        font-size: 2.5em;
        color: #333;
        margin-bottom: 20px;
        text-align: center;
    }

    .description {
        font-size: 1.2em;
        color: #555;
        text-align: center;
        line-height: 1.6;
    }
</style>
