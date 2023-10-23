@extends('layouts.index')

@section('hero')
  @include('sections.hero')
@endsection

@section('content')
  @include('sections.about')
  @include('sections.menu')
@endsection