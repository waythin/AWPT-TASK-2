@extends('layouts.app')
Hello from Page 2


{{--
@foreach($data as $item)
{{ $item }}
<?php
	echo "<br>";
?>
@endforeach

--}}

@foreach($names as $n)
{{ $n }}
<?php
	echo "<br>";
?>
@endforeach