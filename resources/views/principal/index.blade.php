@extends('layouts.app')

@push('header')
@endpush

@section('content')

  @include('principal.lead')
  @include('principal.stats')
  @include('principal.services')
  @include('components.cta')
  @include('principal.highlights')
  @include('principal.testimonials')

@endsection

@push('scripts')
@endpush