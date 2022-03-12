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
                    <div class="mb-3"><img class="img-fluid" src="https://www.drogeriaolmed.pl/images/svg/pro4.svg" alt=""></div>
                    <h2 class="fs-1" data-toggle="counterUp">142</h2>
                    <h6 class="fs-5 fw-bold text-secondary">wykonanych badań</h6>
                </div>
                <div class="col-lg-3 col-12 col-md-6 text-center my-4">
                    <div class="mb-3"><img class="img-fluid" src="https://www.drogeriaolmed.pl/images/svg/pro4.svg" alt=""></div>
                    <h2 class="fs-1" data-toggle="counterUp">455</h2>
                    <h6 class="fs-5 fw-bold text-secondary">pacjentów</h6>
                </div>
                <div class="col-lg-3 col-12 col-md-6 text-center my-4">
                    <div class="mb-3"><img class="img-fluid" src="https://www.drogeriaolmed.pl/images/svg/pro4.svg" alt=""></div>
                    <h2 class="fs-1" data-toggle="counterUp">4,262</h2>
                    <h6 class="fs-5 fw-bold text-secondary">badań dostępnych w ofercie</h6>
                </div>
                <div class="col-lg-3 col-12 col-md-6 text-center my-4">
                    <div class="mb-3"><img class="img-fluid" src="https://www.drogeriaolmed.pl/images/svg/pro4.svg" alt=""></div>
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
<section class="company-values bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5 order-0"><h2 class="fw-bold text-center">Wartości, które cenimy w naszej firmie</h2></div>
            <div class="col-lg-6 pe-5 order-2 order-lg-1">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="align-self-center my-3 my-lg-0 me-0 me-lg-3">
                        <img class="img-fluid" src="https://www.drogeriaolmed.pl/images/svg/pro4.svg" alt="">
                    </div>
                    <div class="text-center text-lg-start">
                        <h3>Komfort</h3>
                        <p>
                            Kanapa, a może łóżko? Bliski trzymający za rękę? Zainspirowani bajką o złotej rybce chcemy spełniać życzenia o idealnym badaniu - i to nie tylko trzy
                        </p>
                    </div>
                </div>
                <div class="d-flex flex-column flex-lg-row">
                    <div class="align-self-center my-3 my-lg-0 me-0 me-lg-3">
                        <img class="img-fluid" src="https://www.drogeriaolmed.pl/images/svg/pro4.svg" alt="">
                    </div>
                    <div class="text-center text-lg-start">
                        <h3>Doświadczenie</h3>
                        <p>
                            Badamy wszystkich! Kilkumiesięczny maluch, słabo widoczne żyły - nasi specjaliści to drużyna do zadań specjalnych
                        </p>
                    </div>
                </div>
                <div class="d-flex flex-column flex-lg-row">
                    <div class="align-self-center my-3 my-lg-0 me-0 me-lg-3">
                        <img class="img-fluid" src="https://www.drogeriaolmed.pl/images/svg/pro4.svg" alt="">
                    </div>
                    <div class="text-center text-lg-start">
                        <h3>Wspólne pobranie</h3>
                        <p>
                            Na jednej wizycie zbadasz całą rodzinę lub paczkę przyjaciół. Wygodne, prawda? Dodamy, że za pobranie zapłacisz tylko raz. To nie żart!
                        </p>
                    </div>
                </div>
                <div class="d-flex flex-column flex-lg-row">
                    <div class="align-self-center my-3 my-lg-0 me-0 me-lg-3">
                        <img class="img-fluid" src="https://www.drogeriaolmed.pl/images/svg/pro4.svg" alt="">
                    </div>
                    <div class="text-center text-lg-start">
                        <h3>Czas</h3>
                        <p>
                            Dzięki nam Pacjenci oszczędzają średnio 2 godziny. Już teraz zaplanuj dłuższą drzemkę czy rodzinne śniadanie w dniu badania
                        </p>
                    </div>
                </div>
                <div class="d-flex flex-column flex-lg-row">
                    <div class="align-self-center my-3 my-lg-0 me-0 me-lg-3">
                        <img class="img-fluid" src="https://www.drogeriaolmed.pl/images/svg/pro4.svg" alt="">
                    </div>
                    <div class="text-center text-lg-start">
                        <h3>Bezpieczeństwo</h3>
                        <p>
                            Remont w łazience? Nie przejmuj się, my zadbamy o higienę pobrania.
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 d-flex justify-content-center order-1 order-lg-2">
                <img class="img-fluid rounded" src="https://www.drogeriaolmed.pl/blog_zdjecia/sluz-slimaka-wlasciwosci-zastosowanie-w-kosmetykach.jpg?ver=1645100562" alt="">
            </div>
        </div>
    </div>
</section>
<section class="how-it-works py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5"><h2 class="fw-bold text-center">Jak to działa ?</h2></div>
            <div class="col-12 col-lg-3 d-flex flex-column">
                <div class="mb-3 text-center">
                    <img class="img-fluid" src="https://www.drogeriaolmed.pl/images/svg/pro4.svg" alt="">
                </div>
                <div class="mb-2">
                    <h3 class="fs-5 fw-bold text-center text-secondary">Zamawiasz online</h3>
                </div>
                <div class="mb-1">
                    <p class="text-center">
                        Nie musisz dzwonić nieskończoną ilość razy do punktu pobrań ani gimnastykować się z dopasowaniem badań do planu dnia. Zamów online i wybierz dogodny termin.
                    </p>
                </div>
                <div class="mb-3 text-center mt-auto">
                    <a class="card-button btn text-primary fw-bold rounded-pill py-2 px-4" href="#" role="button">KATALOG BADAŃ</a>
                </div>
            </div>
            <div class="col-12 col-lg-3 d-flex flex-column">
                <div class="mb-3 text-center">
                    <img class="img-fluid" src="https://www.drogeriaolmed.pl/images/svg/pro4.svg" alt="">
                </div>
                <div class="mb-2">
                    <h3 class="fs-5 fw-bold text-center text-secondary">Badasz się w 15 minut</h3>
                </div>
                <div class="mb-1">
                    <p class="text-center">
                        Badania zajmą Ci raptem kwadrans. W tym czasie zadbamy o Twój komfort, bezpieczne pobranie i odpowiemy na pytania.
                    </p>
                </div>
                <div class="mb-3 text-center mt-auto">
                    <a class="card-button btn text-primary fw-bold rounded-pill py-2 px-4" href="#" role="button">WYBIERZ BADANIA</a>
                </div>
            </div>
            <div class="col-12 col-lg-3 d-flex flex-column">
                <div class="mb-3 text-center">
                    <img class="img-fluid" src="https://www.drogeriaolmed.pl/images/svg/pro4.svg" alt="">
                </div>
                <div class="mb-2">
                    <h3 class="fs-5 fw-bold text-center text-secondary">Odbierasz wyniki w 1 minutę</h3>
                </div>
                <div class="mb-1">
                    <p class="text-center">
                        W tramwaju albo w przerwie w pracy - wyniki odbierasz online, przeważnie już na drugi dzień. Jeśli masz problem ze zrozumieniem wyników, pomożemy.
                    </p>
                </div>
                <div class="mb-3 text-center mt-auto">
                    <a class="card-button btn text-primary fw-bold rounded-pill py-2 px-4" href="#" role="button">SKONSULTUJ WYNIKI</a>
                </div>
            </div>
            <div class="col-12 col-lg-3 d-flex flex-column">
                <div class="mb-3 text-center">
                    <img class="img-fluid" src="https://www.drogeriaolmed.pl/images/svg/pro4.svg" alt="">
                </div>
                <div class="mb-2">
                    <h3 class="fs-5 fw-bold text-center text-secondary">Dbasz o zdrowie - kiedy chcesz!</h3>
                </div>
                <div class="mb-1">
                    <p class="text-center">
                        Starasz się prowadzić zdrowy tryb życia? Z naszymi treściami będzie Ci łatwiej - <a class="text-decoration-none fw-bold" href="#">sprawdź poradnik zdrowia</a> i social media.
                    </p>
                </div>
                <div class="mt-4 mb-3 mt-auto text-center text-primary fw-bold d-flex justify-content-evenly">
                    <a class="facebook-icon" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                    </a>
                    <a class="instagram-icon" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="ask-doctor col-12 text-center mt-3">
                <h2 class="fs-4 text-secondary my-3">Nie wiesz, jakie badania wybrać?<br>Zapytaj lekarza lub diagnosty</h2>
                <a href="#" class="mt-3 mx-auto btn btn-primary fw-bold text-white rounded-pill py-2 px-4">
                    POTRZEBUJE PORADY
                </a>
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


