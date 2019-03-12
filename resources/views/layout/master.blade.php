<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<style>
body{
	background:blue;
}
</style>
<body>
<h1>Hello</h1>
@include('layout.sidebar')
@yield('content')

@extends('dashboard.index')
@stop

</body>