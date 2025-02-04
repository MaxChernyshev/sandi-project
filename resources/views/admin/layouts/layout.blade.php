<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> Admin Panel Sandy's Ukrainian Products Site </title>
    @vite([
                'resources/css/admin/style.css',
                'resources/css/admin/satoshi.css',
                'resources/css/admin/simple-datatables.css',
                'resources/js/admin/index.js'
    ])

    @if ((
        Route::currentRouteName() == 'admin.statements.edit' ||
        Route::currentRouteName() == 'admin.statements.create' ||
        Route::currentRouteName() == 'admin.instructions.edit' ||
        Route::currentRouteName() == 'admin.instructions.create' ||
        Route::currentRouteName() == 'admin.products.edit' ||
        Route::currentRouteName() == 'admin.products.create'
        ))
        @vite('resources/js/admin/quill-form.js')
    @endif


    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>

<body
        x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
        x-init=" darkMode = JSON.parse(localStorage.getItem('darkMode')); $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
        :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}">

<!-- ===== Page Wrapper Start ===== -->
<div class="flex h-screen overflow-hidden">
    @include('admin.layouts.sidebar')
    <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
        @include('admin.layouts.header')
        {{--        @include('admin.layouts.messages')--}}
        @include('admin.layouts.errors')
        @include('admin.layouts.messages')
        @yield('content')
    </div>
</div>
<!-- ===== Page Wrapper End ===== -->
@include('admin.layouts.footer')
