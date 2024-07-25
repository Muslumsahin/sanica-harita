<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Sanica Haritası</title>

    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.qtip.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style type="text/css">
        body {
            background: #fff;
        }

        #map {
            width: 1050px;
            height: 620px;
            position: relative;
            margin: auto;
        }

        #map svg {
            position: relative;
            top: -100px;
            left: 0px;
        }

        svg>a {
            cursor: pointer;
            display: block;
        }

        #sehir {
            font-size: 30px;
            text-align: center;
            margin-top: 25px;
            color: #00394f;
        }

        .header-navbar {
            height: 100px;
            background-color: #C10230;
        }

        .logo {
            width: 300px;
        }

        .contact {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header>
        <div class="header-navbar">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-9 nav pt-4 ps-5">
                        <img class="logo" src="./img/sanica_logo.png" alt="">

                    </div>
                    <a class="col-3 pt-4 ps-5 text-white contact">
                        iletişim
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="col-6 mx-auto">
            <form action="{{ route('bayi.store') }}" method="POST">
                @csrf
                <label for="firmaismi">Firma İsmi:</label>
                <input type="text" id="firmaismi" name="firmaismi" required>
                <br>
                <label for="il">Şehir:</label>
                <select id="il" name="il_id" required>
                    @foreach($iller as $il)
                        <option value="{{ $il->id }}">{{ $il->il_ismi }}</option>
                    @endforeach
                </select>
                <br>
                <button type="submit">Bayi Ekle</button>
            </form>
        </div>
    </div>
</body>

</html>
