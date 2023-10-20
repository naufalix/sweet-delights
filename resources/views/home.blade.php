@extends('layouts.index')

@section('hero')
  @include('sections.hero')
@endsection

@section('content')
  @include('sections.about')
  @include('sections.menu')
  @include('sections.chefs')
  @include('sections.reservation')
  @include('sections.offers')
@endsection