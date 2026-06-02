@extends('admin.layout.app')
@section('content')


  <!-- Main content -->
  
  <h1 class="hidden">
    Theme Furniture - Cửa hàng nội thất adminnn nè !!!!!!!!!!!!!
  </h1>

  <div id="app" data-users='@json($users)'></div>
  @vite('resources/js/pages/Users.jsx')

@endsection
