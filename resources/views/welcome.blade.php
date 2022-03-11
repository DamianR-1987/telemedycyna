@extends('layouts.app')

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
@endsection


