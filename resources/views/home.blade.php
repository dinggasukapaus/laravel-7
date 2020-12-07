@extends('layouts.app')

@role('admin')
  @section('content')
  @yield('content', View::make('admin.index'))
  @endsection
@else
    @section('content')
    @yield('content', View::make('user.admin'))
    @endsection
@endrole
