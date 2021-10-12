@extends('layouts.app')



@section('content')
<div class="container">

    @foreach($products as $pro)
        {{$pro}}

        <?php
        echo "<br>";
        ?>
    @endforeach
    
</div>
@endsection 