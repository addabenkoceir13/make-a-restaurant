<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Title page --}}
    <title>@yield('title', 'Unknow title')</title>

    <!-- Styles -->
    {{-- Boostrap 5.1.3 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="{{ asset('bootstrap513/css/bootstrap.min.css') }}" rel="stylesheet" media="all">
    {{-- Styles css slidbars --}}
    <link rel="stylesheet" href="{{asset('admin-css/css/styles.css')}}">

    <!-- Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

</head>
