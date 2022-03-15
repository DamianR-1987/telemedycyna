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
            <div class="col-12 mb-5 order-0">
                <h2 class="fw-bold text-center">Wartości, które cenimy w naszej firmie</h2>
            </div>
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
                <a href="#" class="text-uppercase mt-3 mx-auto btn btn-primary fw-bold text-white rounded-pill py-2 px-4">
                    POTRZEBUJE PORADY
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Trzeba dopracować responsywność w sliderach "opinie" i "partnerzy" - nie umiałem na małym ekranie wyświetlić jednego elementu --}}
<section class="opinions_and_partners py-5">
    <div class="container bg-light py-5 rounded">
        <div class="row">
            <div class="col-12 py-5">
                <h2 class="fw-bold text-center">Opinie naszych klientów</h2>
            </div>
            <div class="col-12 py-5">
                <div id="carouselOpinions" class="carousel slide" data-bs-interval="false">
                    <div class="carousel-indicators m-0">
                      <button type="button" data-bs-target="#carouselOpinions" data-bs-slide-to="0" class="bg-primary rounded-pill border-primary border-1 active" style="width:12px; height:12px" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselOpinions" data-bs-slide-to="1" class="rounded-pill border-primary border-1" style="width:12px; height:12px" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselOpinions" data-bs-slide-to="2" class="rounded-pill border-primary border-1" style="width:12px; height:12px" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                          <div class="row">
                            <div class="d-flex justify-content-center col-12 col-lg-4">
                                <div class="card p-4 my-3">
                                    <div class="card-body h-75">
                                        <p class="card-text h-75">
                                            Profesjonalna obsługa od początku procesu aż po sam koniec – świetna komunikacja, szybkość działania i dopracowane rozwiązania logistyczne przy badaniu grupy 300 pracowników. Spersonalizowane pakiety badań spotkały się z ogromnym zainteresowaniem i pozytywnym odbiorem pracowników każdego szczebla. Strzał w dziesiątkę! Polecamy każdej firmie, która nadal się waha.
                                        </p>
                                        <div class="rating h-25">
                                            <p class="mb-1">Ocena</p>
                                            <div class="stars text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                                    <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex bg-white h-25">
                                        <div class="author-photo w-25 p-2 align-self-center">
                                            <img class="img-fluid rounded-circle" src="https://www.drogeriaolmed.pl/blog_zdjecia/sluz-slimaka-wlasciwosci-zastosowanie-w-kosmetykach.jpg?ver=1645100562" alt="">
                                        </div>
                                        <div class="author-details p-2">
                                            <p class="author-name fs-5 text-primary fw-bold">Aleksandra Mitura</p>
                                            <p class="author-firm">Country HR Advisor w Cargotec Poland Sp. z o.o.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center col-12 col-lg-4">
                                <div class="card p-4 my-3">
                                    <div class="card-body h-75">
                                        <p class="card-text h-75">
                                            Jestem bardzo zadowolona. Pani była punktualnie, a cała wizyta trwała ok. 15 minut. Pobieranie krwi - profesjonalne. Mogłam zapłacić kartą, co dla mnie nie jest bez znaczenia.Napewno jeszcze skorzystam z usługi i polecę innym.
                                        </p>
                                        <div class="rating h-25">
                                            <p class="mb-1">Ocena</p>
                                            <div class="stars text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                                    <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex bg-white h-25">
                                        <div class="author-photo w-25 p-2 align-self-center">
                                            <img class="img-fluid rounded-circle" src="https://www.drogeriaolmed.pl/blog_zdjecia/sluz-slimaka-wlasciwosci-zastosowanie-w-kosmetykach.jpg?ver=1645100562" alt="">
                                        </div>
                                        <div class="author-details p-2">
                                            <p class="author-name fs-5 text-primary fw-bold">Elżbieta U.</p>
                                            <p class="author-firm"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center col-12 col-lg-4">
                                <div class="card p-4 my-3">
                                    <div class="card-body h-75">
                                        <p class="card-text h-75">
                                            Nie wierzę jeszcze, że taka usługa istnieje i działa tak dobrze. Umawianie przez stronę super, umówiliśmy termin w Łodzi dzień przed wizytą. Ceny też nie są dużo wyższe niż w innych prywatnych punktach pobrań. Dla noworodków super, nie trzeba ryzykować że się zarażą czymś w poczekalni. Wszystko sprawnie. Naprawdę wciąż jestem w szoku - pozytywnym :) Jestem chyba bardziej pod wrażeniem niż jak pierwszy raz zamawiałem pizze przez internet 15 lat temu.
                                        </p>
                                        <div class="rating h-25">
                                            <p class="mb-1">Ocena</p>
                                            <div class="stars text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                                    <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex bg-white h-25">
                                        <div class="author-photo w-25 p-2 align-self-center">
                                            <img class="img-fluid rounded-circle" src="https://www.drogeriaolmed.pl/blog_zdjecia/sluz-slimaka-wlasciwosci-zastosowanie-w-kosmetykach.jpg?ver=1645100562" alt="">
                                        </div>
                                        <div class="author-details p-2">
                                            <p class="author-name fs-5 text-primary fw-bold">Piotr K.</p>
                                            <p class="author-firm"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                      </div>
                      <div class="carousel-item">
                        <div class="row">
                            <div class="d-flex justify-content-center col-12 col-lg-4">
                                <div class="card p-4 my-3">
                                    <div class="card-body h-75">
                                        <p class="card-text h-75">
                                            Profesjonalna obsługa od początku procesu aż po sam koniec – świetna komunikacja, szybkość działania i dopracowane rozwiązania logistyczne przy badaniu grupy 300 pracowników. Spersonalizowane pakiety badań spotkały się z ogromnym zainteresowaniem i pozytywnym odbiorem pracowników każdego szczebla. Strzał w dziesiątkę! Polecamy każdej firmie, która nadal się waha.
                                        </p>
                                        <div class="rating h-25">
                                            <p class="mb-1">Ocena</p>
                                            <div class="stars text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                                    <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex bg-white h-25">
                                        <div class="author-photo w-25 p-2 align-self-center">
                                            <img class="img-fluid rounded-circle" src="https://www.drogeriaolmed.pl/blog_zdjecia/sluz-slimaka-wlasciwosci-zastosowanie-w-kosmetykach.jpg?ver=1645100562" alt="">
                                        </div>
                                        <div class="author-details p-2">
                                            <p class="author-name fs-5 text-primary fw-bold">Aleksandra Mitura</p>
                                            <p class="author-firm">Country HR Advisor w Cargotec Poland Sp. z o.o.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center col-12 col-lg-4">
                                <div class="card p-4 my-3">
                                    <div class="card-body h-75">
                                        <p class="card-text h-75">
                                            Jestem bardzo zadowolona. Pani była punktualnie, a cała wizyta trwała ok. 15 minut. Pobieranie krwi - profesjonalne. Mogłam zapłacić kartą, co dla mnie nie jest bez znaczenia.Napewno jeszcze skorzystam z usługi i polecę innym.
                                        </p>
                                        <div class="rating h-25">
                                            <p class="mb-1">Ocena</p>
                                            <div class="stars text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                                    <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex bg-white h-25">
                                        <div class="author-photo w-25 p-2 align-self-center">
                                            <img class="img-fluid rounded-circle" src="https://www.drogeriaolmed.pl/blog_zdjecia/sluz-slimaka-wlasciwosci-zastosowanie-w-kosmetykach.jpg?ver=1645100562" alt="">
                                        </div>
                                        <div class="author-details p-2">
                                            <p class="author-name fs-5 text-primary fw-bold">Elżbieta U.</p>
                                            <p class="author-firm"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center col-12 col-lg-4">
                                <div class="card p-4 my-3">
                                    <div class="card-body h-75">
                                        <p class="card-text h-75">
                                            Nie wierzę jeszcze, że taka usługa istnieje i działa tak dobrze. Umawianie przez stronę super, umówiliśmy termin w Łodzi dzień przed wizytą. Ceny też nie są dużo wyższe niż w innych prywatnych punktach pobrań. Dla noworodków super, nie trzeba ryzykować że się zarażą czymś w poczekalni. Wszystko sprawnie. Naprawdę wciąż jestem w szoku - pozytywnym :) Jestem chyba bardziej pod wrażeniem niż jak pierwszy raz zamawiałem pizze przez internet 15 lat temu.
                                        </p>
                                        <div class="rating h-25">
                                            <p class="mb-1">Ocena</p>
                                            <div class="stars text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                                    <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex bg-white h-25">
                                        <div class="author-photo w-25 p-2 align-self-center">
                                            <img class="img-fluid rounded-circle" src="https://www.drogeriaolmed.pl/blog_zdjecia/sluz-slimaka-wlasciwosci-zastosowanie-w-kosmetykach.jpg?ver=1645100562" alt="">
                                        </div>
                                        <div class="author-details p-2">
                                            <p class="author-name fs-5 text-primary fw-bold">Piotr K.</p>
                                            <p class="author-firm"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                      </div>
                      <div class="carousel-item">
                        <div class="row">
                            <div class="d-flex justify-content-center col-12 col-lg-4">
                                <div class="card p-4 my-3">
                                    <div class="card-body h-75">
                                        <p class="card-text h-75">
                                            Profesjonalna obsługa od początku procesu aż po sam koniec – świetna komunikacja, szybkość działania i dopracowane rozwiązania logistyczne przy badaniu grupy 300 pracowników. Spersonalizowane pakiety badań spotkały się z ogromnym zainteresowaniem i pozytywnym odbiorem pracowników każdego szczebla. Strzał w dziesiątkę! Polecamy każdej firmie, która nadal się waha.
                                        </p>
                                        <div class="rating h-25">
                                            <p class="mb-1">Ocena</p>
                                            <div class="stars text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                                    <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex bg-white h-25">
                                        <div class="author-photo w-25 p-2 align-self-center">
                                            <img class="img-fluid rounded-circle" src="https://www.drogeriaolmed.pl/blog_zdjecia/sluz-slimaka-wlasciwosci-zastosowanie-w-kosmetykach.jpg?ver=1645100562" alt="">
                                        </div>
                                        <div class="author-details p-2">
                                            <p class="author-name fs-5 text-primary fw-bold">Aleksandra Mitura</p>
                                            <p class="author-firm">Country HR Advisor w Cargotec Poland Sp. z o.o.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center col-12 col-lg-4">
                                <div class="card p-4 my-3">
                                    <div class="card-body h-75">
                                        <p class="card-text h-75">
                                            Jestem bardzo zadowolona. Pani była punktualnie, a cała wizyta trwała ok. 15 minut. Pobieranie krwi - profesjonalne. Mogłam zapłacić kartą, co dla mnie nie jest bez znaczenia.Napewno jeszcze skorzystam z usługi i polecę innym.
                                        </p>
                                        <div class="rating h-25">
                                            <p class="mb-1">Ocena</p>
                                            <div class="stars text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                                    <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex bg-white h-25">
                                        <div class="author-photo w-25 p-2 align-self-center">
                                            <img class="img-fluid rounded-circle" src="https://www.drogeriaolmed.pl/blog_zdjecia/sluz-slimaka-wlasciwosci-zastosowanie-w-kosmetykach.jpg?ver=1645100562" alt="">
                                        </div>
                                        <div class="author-details p-2">
                                            <p class="author-name fs-5 text-primary fw-bold">Elżbieta U.</p>
                                            <p class="author-firm"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center col-12 col-lg-4">
                                <div class="card p-4 my-3">
                                    <div class="card-body h-75">
                                        <p class="card-text h-75">
                                            Nie wierzę jeszcze, że taka usługa istnieje i działa tak dobrze. Umawianie przez stronę super, umówiliśmy termin w Łodzi dzień przed wizytą. Ceny też nie są dużo wyższe niż w innych prywatnych punktach pobrań. Dla noworodków super, nie trzeba ryzykować że się zarażą czymś w poczekalni. Wszystko sprawnie. Naprawdę wciąż jestem w szoku - pozytywnym :) Jestem chyba bardziej pod wrażeniem niż jak pierwszy raz zamawiałem pizze przez internet 15 lat temu.
                                        </p>
                                        <div class="rating h-25">
                                            <p class="mb-1">Ocena</p>
                                            <div class="stars text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                                    <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex bg-white h-25">
                                        <div class="author-photo w-25 p-2 align-self-center">
                                            <img class="img-fluid rounded-circle" src="https://www.drogeriaolmed.pl/blog_zdjecia/sluz-slimaka-wlasciwosci-zastosowanie-w-kosmetykach.jpg?ver=1645100562" alt="">
                                        </div>
                                        <div class="author-details p-2">
                                            <p class="author-name fs-5 text-primary fw-bold">Piotr K.</p>
                                            <p class="author-firm"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselOpinions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon position-absolute top-50 start-0 text-dark" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg>
                      </span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselOpinions" data-bs-slide="next">
                      <span class="carousel-control-next-icon text-dark position-absolute top-50 end-0" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                      </span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="col-12 py-5">
                <h2 class="fw-bold text-center">Partnerzy</h2>
            </div>
            <div class="col-12 py-5">
                <div id="carouselPartners" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators m-0">
                    <button type="button" data-bs-target="#carouselPartners" data-bs-slide-to="0" class="bg-primary rounded-pill border-primary border-1 active" style="width:12px; height:12px" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselPartners" data-bs-slide-to="1" class="rounded-pill border-primary border-1" style="width:12px; height:12px" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row row-cols-2 row-cols-lg-5">
                                <div class="col d-flex justify-content-center">
                                    <a class="navbar-brand p-0 m-0" href="/" aria-label="Bootstrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block my-1" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
                                    </a>
                                </div>
                                <div class="col  d-flex justify-content-center">
                                    <a class="navbar-brand p-0 m-0" href="/" aria-label="Bootstrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block my-1" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
                                    </a>
                                </div>
                                <div class="col  d-flex justify-content-center">
                                    <a class="navbar-brand p-0 m-0" href="/" aria-label="Bootstrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block my-1" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
                                    </a>
                                </div>
                                <div class="col  d-flex justify-content-center">
                                    <a class="navbar-brand p-0 m-0" href="/" aria-label="Bootstrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block my-1" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
                                    </a>
                                </div>
                                <div class="col  d-flex justify-content-center">
                                    <a class="navbar-brand p-0 m-0" href="/" aria-label="Bootstrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block my-1" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row row-cols-2 row-cols-lg-5">
                                <div class="col d-flex justify-content-center">
                                    <a class="navbar-brand p-0 m-0" href="/" aria-label="Bootstrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block my-1" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
                                    </a>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <a class="navbar-brand p-0 m-0" href="/" aria-label="Bootstrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block my-1" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
                                    </a>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <a class="navbar-brand p-0 m-0" href="/" aria-label="Bootstrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block my-1" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
                                    </a>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <a class="navbar-brand p-0 m-0" href="/" aria-label="Bootstrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block my-1" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
                                    </a>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <a class="navbar-brand p-0 m-0" href="/" aria-label="Bootstrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block my-1" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="packages_and_tests bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <h2 class="fw-bold text-center">Zadbaj o zdrowie wybierając badania lub pakiety badań</h2>
            </div>
            <ul class="nav nav-pills justify-content-center mb-5" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a id="pills-packages-tab" data-bs-toggle="pill" data-bs-target="#pills-packages" role="tab" aria-controls="pills-packages" aria-selected="true" class="active text-uppercase text-decoration-none nav-link bg-primary fw-bold text-white rounded-pill py-2 px-4 mx-3" href="#">
                        PAKIETY
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a id="pills-tests-tab" data-bs-toggle="pill" data-bs-target="#pills-tests" role="tab" aria-controls="pills-tests" aria-selected="false" class="text-uppercase text-decoration-none nav-link bg-white fw-bold text-primary border border-primary rounded-pill py-2 px-4 mx-3" href="#">
                        BADANIA
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-packages" role="tabpanel" aria-labelledby="pills-packages-tab">
                    <div class="row row-cols-1 row-cols-lg-4">
                        <div class="col my-3">
                            <div class="card border-0 h-100">
                                <a href="#">
                                    <img src="https://www.drogeriaolmed.pl/blog_zdjecia/sluz-slimaka-wlasciwosci-zastosowanie-w-kosmetykach.jpg?ver=1645100562" class="card-img-top" alt="">
                                </a>
                                <div class="card-body h-75">
                                    <h3 class="card-title fs-6">
                                        <a href="#" class="card-link text-decoration-none text-dark fw-bold">e-PAKIET DLA KAŻDEGO (MAKSIMUM)</a>
                                    </h3>
                                    <p class="card-text overflow-hidden mb-0">
                                        e-PAKIET DLA KAŻDEGO w wersji MAKSIMUM dostarcza kompleksowych informacji na temat stanu organizmu (tzw. homeostazy). Badania zostały dobrane tak, by ich wyniki pozwalały zidentyfikować problem zdrowotny w obrębie konkretnego...
                                    </p>
                                    <a class="text-decoration-none" href="#">Czytaj więcej</a>
                                </div>
                                <div class="card-footer d-flex justify-content-center bg-white border-top-0 mt-auto pb-4">
                                    <a role="button" class="text-uppercase text-decoration-none nav-link bg-primary fw-bold text-white rounded-pill py-2 px-4 mx-3" href="#">
                                        Wybierz pakiet
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col my-3">
                            <div class="card border-0 h-100">
                                <a href="#">
                                    <img src="https://www.drogeriaolmed.pl/blog_zdjecia/sluz-slimaka-wlasciwosci-zastosowanie-w-kosmetykach.jpg?ver=1645100562" class="card-img-top" alt="">
                                </a>
                                <div class="card-body h-75">
                                    <h3 class="card-title fs-6">
                                        <a href="#" class="card-link text-decoration-none text-dark fw-bold">e-PAKIET DLA KAŻDEGO (MAKSIMUM) Z KONSULTACJĄ</a>
                                    </h3>
                                    <p class="card-text overflow-hidden mb-0">
                                        e-PAKIET DLA KAŻDEGO w wersji MAKSIMUM z konsultacją pozwala skontrolować ogólny stan organizmu i funkcjonowanie najważniejszych narządów. Dzięki temu, że poza badaniami pakiet obejmuje konsultację, wygodnie i szybko uzy...
                                    </p>
                                    <a class="text-decoration-none" href="#">Czytaj więcej</a>
                                </div>
                                <div class="card-footer d-flex justify-content-center bg-white border-top-0 mt-auto pb-4">
                                    <a role="button" class="text-uppercase text-decoration-none nav-link bg-primary fw-bold text-white rounded-pill py-2 px-4 mx-3" href="#">
                                        Wybierz pakiet
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col my-3">
                            <div class="card border-0 h-100">
                                <a href="#">
                                    <img src="https://www.drogeriaolmed.pl/blog_zdjecia/sluz-slimaka-wlasciwosci-zastosowanie-w-kosmetykach.jpg?ver=1645100562" class="card-img-top" alt="">
                                </a>
                                <div class="card-body h-75">
                                    <h3 class="card-title fs-6">
                                        <a href="#" class="card-link text-decoration-none text-dark fw-bold">e-PAKIET DLA MĘŻCZYZN</a>
                                    </h3>
                                    <p class="card-text overflow-hidden mb-0">
                                        e-PAKIET DLA MĘŻCZYZN to zestaw badań, który pozwala ocenić ogólny stan zdrowia, sprawdzić funkcjonowanie najważniejszych narządów (nerek, wątroby, tarczycy) oraz wykryć ewentualne niedobory i odchylenia. Pakiet obejmu...
                                    </p>
                                    <a class="text-decoration-none" href="#">Czytaj więcej</a>
                                </div>
                                <div class="card-footer d-flex justify-content-center bg-white border-top-0 mt-auto pb-4">
                                    <a role="button" class="text-uppercase text-decoration-none nav-link bg-primary fw-bold text-white rounded-pill py-2 px-4 mx-3" href="#">
                                        Wybierz pakiet
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col my-3">
                            <div class="card border-0 h-100">
                                <a href="#">
                                    <img src="https://www.drogeriaolmed.pl/blog_zdjecia/sluz-slimaka-wlasciwosci-zastosowanie-w-kosmetykach.jpg?ver=1645100562" class="card-img-top" alt="">
                                </a>
                                <div class="card-body h-75">
                                    <h3 class="card-title fs-6">
                                        <a href="#" class="card-link text-decoration-none text-dark  fw-bold">e-PAKIET DLA KOBIET</a>
                                    </h3>
                                    <p class="card-text overflow-hidden mb-0">
                                        Pakiet zawiera badania umożliwiające kompleksowy przeglądu zdrowia. Dzięki pakietowi uzyskasz informacje na temat niedoborów witamin, mikro- i makroelementów, zweryfikujesz pracę najważniejszych narządów (tarczyca, wątr...
                                    </p>
                                    <a class="text-decoration-none" href="#">Czytaj więcej</a>
                                </div>
                                <div class="card-footer d-flex justify-content-center bg-white border-top-0 mt-auto pb-4">
                                    <a role="button" class="text-uppercase text-decoration-none nav-link bg-primary fw-bold text-white rounded-pill py-2 px-4 mx-3" href="#">
                                        Wybierz pakiet
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-tests" role="tabpanel" aria-labelledby="pills-tests-tab">
                    <div class="row row-cols-1 row-cols-lg-4">
                        <div class="col my-3">
                            <div class="card border-0 h-100">
                                <a href="#">
                                    <img src="https://www.drogeriaolmed.pl/blog_zdjecia/sluz-slimaka-wlasciwosci-zastosowanie-w-kosmetykach.jpg?ver=1645100562" class="card-img-top" alt="">
                                </a>
                                <div class="card-body h-75">
                                    <h3 class="card-title fs-6">
                                        <a href="#" class="card-link text-decoration-none text-dark fw-bold">Morfologia krwi (pełna)</a>
                                    </h3>
                                    <p class="card-text overflow-hidden mb-0">
                                        Morfologia krwi pełna to podstawowe badanie diagnostyczne, które pozwala ocenić ogólną kondycję organizmu. Wyniki badania dostarczają informacji na temat ilości i jakości elementów morfotycznych krwi: krwinek czerwonych ...
                                    </p>
                                    <a class="text-decoration-none" href="#">Czytaj więcej</a>
                                </div>
                                <div class="card-footer d-flex justify-content-center bg-white border-top-0 mt-auto pb-4">
                                    <a role="button" class="text-uppercase text-decoration-none nav-link bg-primary fw-bold text-white rounded-pill py-2 px-4 mx-3" href="#">
                                        Wybierz badanie
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col my-3">
                            <div class="card border-0 h-100">
                                <a href="#">
                                    <img src="https://www.drogeriaolmed.pl/blog_zdjecia/sluz-slimaka-wlasciwosci-zastosowanie-w-kosmetykach.jpg?ver=1645100562" class="card-img-top" alt="">
                                </a>
                                <div class="card-body h-75">
                                    <h3 class="card-title fs-6">
                                        <a href="#" class="card-link text-decoration-none text-dark fw-bold">CRP</a>
                                    </h3>
                                    <p class="card-text overflow-hidden mb-0">
                                        CRP (białko C-reaktywne) to białko tzw. ostrej fazy. Oznacza to, że jego stężenie rośnie w wyniku stanów zapalnych czy urazów. CRP jest oznaczane ilościowo w diagnostyce wielu schorzeń, uszkodzeń tkanek oraz kontroli le...
                                    </p>
                                    <a class="text-decoration-none" href="#">Czytaj więcej</a>
                                </div>
                                <div class="card-footer d-flex justify-content-center bg-white border-top-0 mt-auto pb-4">
                                    <a role="button" class="text-uppercase text-decoration-none nav-link bg-primary fw-bold text-white rounded-pill py-2 px-4 mx-3" href="#">
                                        Wybierz badanie
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col my-3">
                            <div class="card border-0 h-100">
                                <a href="#">
                                    <img src="https://www.drogeriaolmed.pl/blog_zdjecia/sluz-slimaka-wlasciwosci-zastosowanie-w-kosmetykach.jpg?ver=1645100562" class="card-img-top" alt="">
                                </a>
                                <div class="card-body h-75">
                                    <h3 class="card-title fs-6">
                                        <a href="#" class="card-link text-decoration-none text-dark fw-bold">TSH</a>
                                    </h3>
                                    <p class="card-text overflow-hidden mb-0">
                                        Pomiar stężenia TSH (inaczej tyreotropiny, hormonu tyreotropowego) to najczulsze badanie stosowane w diagnostyce zaburzeń czynności tarczycy. Pozwala wykrywać również te schorzenia i stany, które przebiegają bezobjawowo. ...
                                    </p>
                                    <a class="text-decoration-none" href="#">Czytaj więcej</a>
                                </div>
                                <div class="card-footer d-flex justify-content-center bg-white border-top-0 mt-auto pb-4">
                                    <a role="button" class="text-uppercase text-decoration-none nav-link bg-primary fw-bold text-white rounded-pill py-2 px-4 mx-3" href="#">
                                        Wybierz badanie
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col my-3">
                            <div class="card border-0 h-100">
                                <a href="#">
                                    <img src="https://www.drogeriaolmed.pl/blog_zdjecia/sluz-slimaka-wlasciwosci-zastosowanie-w-kosmetykach.jpg?ver=1645100562" class="card-img-top" alt="">
                                </a>
                                <div class="card-body h-75">
                                    <h3 class="card-title fs-6">
                                        <a href="#" class="card-link text-decoration-none text-dark fw-bold">Witamina D metabolit 25(OH)</a>
                                    </h3>
                                    <p class="card-text overflow-hidden mb-0">
                                        Badanie służy do oceny i kontroli poziomu całkowitej 25-hydroksy witaminy D, inaczej witaminy 25(OH)D. Często wykonuje się ją w diagnostyce zaburzeń gospodarki wapniowo-fosforanowej, w tym chorób metabolicznych tkanki kost...
                                    </p>
                                    <a class="text-decoration-none" href="#">Czytaj więcej</a>
                                </div>
                                <div class="card-footer d-flex justify-content-center bg-white border-top-0 mt-auto pb-4">
                                    <a role="button" class="text-uppercase text-decoration-none nav-link bg-primary fw-bold text-white rounded-pill py-2 px-4 mx-3" href="#">
                                        Wybierz badanie
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Trzeba dopracować responsywność w sliderze - nie umiałem na małym ekranie wyświetlić jednego elementu --}}
<section class="about_us py-5">
    <div class="container bg-light py-5 rounded">
        <div class="row">
            <div class="col-12">
                <h2 class="fw-bold text-center">Media about us</h2>
            </div>
            <div class="col-12 py-5">
                <div id="carouselAbout" class="carousel slide" data-bs-interval="false">
                    <div class="carousel-indicators m-0">
                      <button type="button" data-bs-target="#carouselAbout" data-bs-slide-to="0" class="bg-primary rounded-pill border-primary border-1 active" style="width:12px; height:12px" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselAbout" data-bs-slide-to="1" class="rounded-pill border-primary border-1" style="width:12px; height:12px" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="d-flex justify-content-center flex-column col-6 col-lg-3">
                                    <div class="mb-3 text-center">
                                        <img class="img-fluid" src="https://www.drogeriaolmed.pl/images/svg/pro4.svg" alt="">
                                    </div>
                                    <div class="mb-3 text-center mt-auto">
                                        <a class="card-button btn text-primary fw-bold rounded-pill py-2 px-4" href="#" role="button">WYBIERZ BADANIA</a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center flex-column col-6 col-lg-3">
                                    <div class="mb-3 text-center">
                                        <img class="img-fluid" src="https://www.drogeriaolmed.pl/images/svg/pro4.svg" alt="">
                                    </div>
                                    <div class="mb-3 text-center mt-auto">
                                        <a class="card-button btn text-primary fw-bold rounded-pill py-2 px-4" href="#" role="button">WYBIERZ BADANIA</a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center flex-column col-6 col-lg-3">
                                    <div class="mb-3 text-center">
                                        <img class="img-fluid" src="https://www.drogeriaolmed.pl/images/svg/pro4.svg" alt="">
                                    </div>
                                    <div class="mb-3 text-center mt-auto">
                                        <a class="card-button btn text-primary fw-bold rounded-pill py-2 px-4" href="#" role="button">WYBIERZ BADANIA</a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center flex-column col-6 col-lg-3">
                                    <div class="mb-3 text-center">
                                        <img class="img-fluid" src="https://www.drogeriaolmed.pl/images/svg/pro4.svg" alt="">
                                    </div>
                                    <div class="mb-3 text-center mt-auto">
                                        <a class="card-button btn text-primary fw-bold rounded-pill py-2 px-4" href="#" role="button">WYBIERZ BADANIA</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="d-flex justify-content-center flex-column col-6 col-lg-3">
                                    <div class="mb-3 text-center">
                                        <img class="img-fluid" src="https://www.drogeriaolmed.pl/images/svg/pro4.svg" alt="">
                                    </div>
                                    <div class="mb-3 text-center mt-auto">
                                        <a class="card-button btn text-primary fw-bold rounded-pill py-2 px-4" href="#" role="button">WYBIERZ BADANIA</a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center flex-column col-6 col-lg-3">
                                    <div class="mb-3 text-center">
                                        <img class="img-fluid" src="https://www.drogeriaolmed.pl/images/svg/pro4.svg" alt="">
                                    </div>
                                    <div class="mb-3 text-center mt-auto">
                                        <a class="card-button btn text-primary fw-bold rounded-pill py-2 px-4" href="#" role="button">WYBIERZ BADANIA</a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center flex-column col-6 col-lg-3">
                                    <div class="mb-3 text-center">
                                        <img class="img-fluid" src="https://www.drogeriaolmed.pl/images/svg/pro4.svg" alt="">
                                    </div>
                                    <div class="mb-3 text-center mt-auto">
                                        <a class="card-button btn text-primary fw-bold rounded-pill py-2 px-4" href="#" role="button">WYBIERZ BADANIA</a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center flex-column col-6 col-lg-3">
                                    <div class="mb-3 text-center">
                                        <img class="img-fluid" src="https://www.drogeriaolmed.pl/images/svg/pro4.svg" alt="">
                                    </div>
                                    <div class="mb-3 text-center mt-auto">
                                        <a class="card-button btn text-primary fw-bold rounded-pill py-2 px-4" href="#" role="button">WYBIERZ BADANIA</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselAbout" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon position-absolute top-50 start-0 text-dark" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg>
                      </span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselAbout" data-bs-slide="next">
                      <span class="carousel-control-next-icon text-dark position-absolute top-50 end-0" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                      </span>
                      <span class="visually-hidden">Next</span>
                    </button>
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


