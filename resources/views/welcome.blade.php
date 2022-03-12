@extends('layouts.app')

@section('js-files')
{{-- Skrypty dotyczące counts-section - Należy odkomentować po zainstalowaniu JQuery --}}
<!-- Counts JS -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script> --}}
@endsection

@section('content')
<section class="test-search bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column">
                <h3 class="fw-bold">Wykonaj badania bez wychodzenia z domu</h3>
                <p>Zamień pośpiech i kolejki na ulubiony fotel i spokojny poranek. Usiądź wygodnie, złóż zamówienie, a my zajmiemy się resztą.</p>

                <form class="row">
                    <div class="col-xl-10">
                        <input type="text" placeholder="Wyszukaj badanie lub pakiet" class="form-control rounded-pill fw-bold  bg-white py-4 px-5" id="inputText1">
                    </div>
                    <div class="col-xl-2">
                        <button type="submit" class="d-block btn btn-danger fw-bold text-white rounded-pill py-4 px-5 my-xl-0 my-3 mx-auto">Szukaj</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 d-flex justify-content-center">
                <img class="img-fluid rounded" src="https://www.drogeriaolmed.pl/blog_zdjecia/sluz-slimaka-wlasciwosci-zastosowanie-w-kosmetykach.jpg?ver=1645100562" alt="">
            </div>
        </div>
    </div>
</section>
<section class="counts-section">
    <div class="text-primary py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 col-md-6 text-center my-4">
                    <h2 class="fs-1" data-toggle="counterUp">142</h2>
                    <h6 class="fs-5 fw-bold text-secondary">wykonanych badań</h6>
                </div>
                <div class="col-lg-3 col-12 col-md-6 text-center my-4">
                    <h2 class="fs-1" data-toggle="counterUp">455</h2>
                    <h6 class="fs-5 fw-bold text-secondary">pacjentów</h6>
                </div>
                <div class="col-lg-3 col-12 col-md-6 text-center my-4">
                    <h2 class="fs-1" data-toggle="counterUp">4,262</h2>
                    <h6 class="fs-5 fw-bold text-secondary">badań dostępnych w ofercie</h6>
                </div>
                <div class="col-lg-3 col-12 col-md-6 text-center my-4">
                    <h2 class="fs-1" data-toggle="counterUp">25</h2>
                    <h6 class="fs-5 fw-bold text-secondary">średnia ocena z google</h6>
                    <div class="d-flex justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="align-self-center bi bi-google" viewBox="0 0 16 16">
                            <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                        </svg>
                        <span class="ms-1 fs-5 fw-bold text-secondary">518 opinii</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

{{-- Trzeba doinstalować JQuery - Ja próbowałem ale mi się nie udało --}}
{{-- <script type="text/javascript">
    $('[data-toggle="counterUp"]').counterUp({
        delay: 15,
        time: 1500
    });
</script> --}}


