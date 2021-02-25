@extends('layouts.app')

@push('header')
<style type="text/css">
.service {
  box-shadow: 0 0 1rem rgba(39,79,255,.085) !important;
}
</style>
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
<script type="text/javascript">
$('.counter').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
      duration = $this.attr('data-duration');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: parseInt(duration),
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
    }
  });  
});
</script>
@endpush