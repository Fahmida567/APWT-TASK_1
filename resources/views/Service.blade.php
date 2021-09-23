<head>
    <style>
       


    </style>
</head>
@extends('Layouts.Nav')

@section('content')
<h1 style="text-align:center"> Welcome to Our Service page <h1>

    <h2 style="text-align:center">Products</h2>
    @foreach ($product as $item)
    {{
        $item
    }}
    <?php 
        echo "<br>";
        ?>
        
    @endforeach
    <footer class="footer">
        <p style="text-align: center;">copyright 2021</p>

      </footer> 


    @endsection
    