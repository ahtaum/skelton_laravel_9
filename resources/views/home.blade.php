@extends('layout.app')
@section('title', 'Home')

@section('title-banner', 'Home')
@section('content-banner', 'Selamat datang di website kami')
@section('image-banner', asset('images/img1.jpg'))

@section('content')
<section id="row-1" class="container text-light">
    <h1 class="text-center">Hallo Dunia</h1>
</section>
@endsection

@push('styles')
<style>

    @media (max-width: 576px) {}

    @media (min-width: 720px) {}

    @media (min-width: 992px) {}

    @media (min-width: 1200px) {}

    @media (min-width: 1400px) {}

</style>
@endpush

@push('scripts')
    <script>
        console.log(`asdasdasd`)
    </script>
@endpush