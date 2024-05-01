<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> Admin Panel Laravel Vite Tailwind </title>
    @vite([
                'resources/css/admin/style.css',
                'resources/css/admin/satoshi.css',
                'resources/css/admin/simple-datatables.css',
                'resources/js/admin/index.js'
    ])
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
        @yield('content')
    </div>
</div>
<!-- ===== Page Wrapper End ===== -->
</body>
