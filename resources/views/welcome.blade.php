<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Station</title>

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Font Awesome --}}

    {{-- import js & scss --}}
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <img src="https://static.trainlinecontent.com/content/vul/logos/trainline-mint.svg" alt="logo">
    </header>
    <main>
        <div class="jumbotron">
            <h1 class="text-center py-3">Treni</h1>
        </div>
        <hr>
        <div class="main-content">
            <div class="container mt-5 d-flex flex-wrap justify-content-between">
                 <div class="row">
                    @foreach ($trains as $train)
                    <div class="col-12 col-md-6 col-lg-4 g-5 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                {{-- Azienda --}}
                                <h5 class="card-title">{{ $train['azienda'] }}</h5>
                                {{-- Codice Treno --}}
                                <h6 class="card-subtitle mb-2 text-body-secondary">ID {{ $train['codice-treno'] }}</h6>
                                {{-- INFO --}}
                                <div class="container d-flex justify-content-between align-items-center">
                                    <div class="partenza d-flex flex-column">
                                        <strong>{{ $train['ora_partenza'] }}</strong>
                                        <span>{{ $train['stazione_partenza'] }}</span>
                                    </div>
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                    <div class="arrivo d-flex flex-column">
                                        <strong>{{ $train['ora_arrivo'] }}</strong>
                                        <span>{{ $train['stazione_arrivo'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
        </div>
    </div>
        </div>
    </main>

    <footer>
        <ul>
            <li>Gruppo FS Italiane 2023</li>
            <li>Protezione dati personali</li>
        </ul>
    </footer>
</body>

</html>