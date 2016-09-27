{{-- Muestra contenido dependiendo de autenticación --}}
@if (Auth::check())
    {{-- Usuario si está autenticado--}}
    <div class="section">
        <div class="container">
            {{-- Permite insertar contenido desde otras vistas si usuario está autenticado--}}
            @yield('content')
        </div>
    </div>
@else
    {{-- Usuario no está autenticado--}}
    {{-- Permite insertar un SLIDE de imágenes en el tope del contenido --}}
    @include('layouts.carousel')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="https://unsplash.imgix.net/photo-1422222948315-28aadb7a2cb8?w=1024&amp;q=50&amp;fm=jpg&amp;s=cfeadbd7a991e58b553bee29a7eeca55"
                         class="img-responsive">
                    <h2>Cúmulo in a box</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                        <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                        <br>Ut enim ad minim veniam, quis nostrud</p>
                </div>
                <div class="col-md-3">
                    <img src="https://unsplash.imgix.net/photo-1420708392410-3c593b80d416?w=1024&amp;q=50&amp;fm=jpg&amp;s=db450320d7ee6de66c24c9b0bf2de3c6"
                         class="img-responsive">
                    <h2>Oportunidades de negocio</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                        <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                        <br>Ut enim ad minim veniam, quis nostrud</p>
                </div>
                {{-- Sección de autenticación o registro --}}
                <div class="col-md-6">
                    @yield('autenticacion')
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>¿Qué es Cúmulo?</h1>
                        <h3>A subtitle</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis
                            dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
                            nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                            enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum
                            felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus
                            elementum semper nisi.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="https://unsplash.imgix.net/photo-1418479631014-8cbf89db3431?w=1024&amp;q=50&amp;fm=jpg&amp;s=478a9a2196033db7c0bf3c8ba3707f4d"
                             class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">¿Quiénes se benefician usando Cúmulo?</h1>
                        <p class="text-center">We are a group of skilled individuals.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png"
                             class="img-circle img-responsive">
                    </div>
                    <div class="col-md-4">
                        <h3 class="text-left">Emprendedores</h3>
                        <p class="text-left">Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.</p>
                    </div>
                    <div class="col-md-2">
                        <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png"
                             class="img-circle img-responsive">
                    </div>
                    <div class="col-md-4">
                        <h3 class="text-left">Microempresarios</h3>
                        <p class="text-left">Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png"
                             class="img-circle img-responsive">
                    </div>
                    <div class="col-md-4">
                        <h3 class="text-left">Incubadoras de negocio</h3>
                        <p class="text-left">Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.</p>
                    </div>
                    <div class="col-md-2">
                        <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png"
                             class="img-circle img-responsive">
                    </div>
                    <div class="col-md-4 text-center">
                        <h3 class="text-left">Consumidores</h3>
                        <p class="text-left">Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>NOTICIAS</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <img src="https://unsplash.imgix.net/photo-1423683249427-8ca22bd873e0?w=1024&amp;q=50&amp;fm=jpg&amp;s=5e57c661d0f772ce269188a6f5325708"
                             class="img-responsive">
                        <h2>A title</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                            <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                            <br>Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                    <div class="col-md-3">
                        <img src="https://unsplash.imgix.net/photo-1422513391413-ddd4f2ce3340?w=1024&amp;q=50&amp;fm=jpg&amp;s=282e5978de17d6cd2280888d16f06f04"
                             class="img-responsive">
                        <h2>A title</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                            <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                            <br>Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                    <div class="col-md-3">
                        <img src="https://unsplash.imgix.net/reserve/vof4H8A1S02iWcK6mSAd_sarahmachtsachen.com_TheBeach.jpg?w=1024&amp;q=50&amp;fm=jpg&amp;s=992e28f0751267625026c5a18b66953c"
                             class="img-responsive img-rounded">
                        <h2>A title</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                            <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                            <br>Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                    <div class="col-md-3">
                        <img src="https://ununsplash.imgix.net/photo-1414637104192-f9ab9a0ee249?w=1024&amp;q=50&amp;fm=jpg&amp;s=39603686d9062f5c4a5309a45e28264e"
                             class="img-responsive">
                        <h2>A title</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                            <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                            <br>Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>TESTIMONIOS</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="https://unsplash.imgix.net/photo-1421986527537-888d998adb74?w=1024&amp;q=50&amp;fm=jpg&amp;s=e633562a1da53293c4dc391fd41ce41d"
                             class="img-responsive">
                        <h1>A title</h1>
                        <p></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                            <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                            <br>Ut enim ad minim veniam, quis nostrud</p>
                        <p></p>
                    </div>
                    <div class="col-md-6">
                        <img src="https://unsplash.imgix.net/photo-1422728221357-57980993ea99?w=1024&amp;q=50&amp;fm=jpg&amp;s=b4a34018d745e33048bcfc326cb9907b"
                             class="img-responsive">
                        <h1>A title</h1>
                        <p></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                            <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                            <br>Ut enim ad minim veniam, quis nostrud</p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">IMÁGENES DESTACADAS:
                            <br>
                        </h1>
                        <p class="text-center lead">A subtitle.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a><img src="https://unsplash.imgix.net/photo-1423347834838-5162bb452ca7?w=1024&amp;q=50&amp;fm=jpg&amp;s=c255e589621f06513c1d123c7323fe9c"
                                class="img-responsive"></a>
                    </div>
                    <div class="col-md-3">
                        <a><img src="https://unsplash.imgix.net/photo-1417128281290-30a42da46277?w=1024&amp;q=50&amp;fm=jpg&amp;s=2edb796eb5e657f2c82704a1e6573938"
                                class="img-responsive"></a>
                    </div>
                    <div class="col-md-3">
                        <a><img src="https://ununsplash.imgix.net/photo-1421098518790-5a14be02b243?w=1024&amp;q=50&amp;fm=jpg&amp;s=24665881d66f79925810c2deb7e486b9"
                                class="img-responsive"></a>
                    </div>
                    <div class="col-md-3">
                        <a><img src="https://unsplash.imgix.net/reserve/MTuhqSiPQbeVnaIYU16X_P1160798_adj.jpg?w=1024&amp;q=50&amp;fm=jpg&amp;s=ede6dca4fff55fa0cc6ec27bcd3480d9"
                                class="img-responsive"></a>
                    </div>
                </div>
            </div>
        </div>
@endif
