<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanica Haritası</title>

    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.qtip.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="js/raphael-min.js"></script>
    <script type="text/javascript" src="js/paths.js"></script>
    <script type="text/javascript" src="js/turkiye.js?v=123"></script>
    <script type="text/javascript" src="js/jquery.qtip.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#map svg path").hover(
                function() {
                    var id = $(this).attr("id");
                    $("#sehir").text(id);
                });

            $('#map svg path').on('click', function(e) {
                var id = $(this).attr("id");
                console.log(id);
            });
            $('#map svg path').click(function() {
                $('.list').toggleClass('hidden');
                var maxHeight = $('.list').hasClass('hidden') ? 0 : $('.list').find('li').outerHeight(
                    true) * $('.list').find('li').length;
                $('.list-container').css('max-height', maxHeight + 'px');
            });
        })
    </script>
    <style type="text/css">
        body {
            background: #fff;
        }

        @media screen and (max-width: 768px) {
            #map {
                display: none;
            }

            #sehir {
                display: none;
            }
        }

		@media screen and (min-width: 768px) {
			#map_option{
				display: none;
			}
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

    <div class="header-navbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-9 nav pt-4 ps-5">
                    <img class="logo" src="./img/sanica_logo.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid col-sm-12">
        <h1 id="sehir">Şehir</h1>
        <div class="row">
            <div class="container">
                <div id="map"></div>

                <div class="col-10 col-md-6 mx-auto my-3" id="map_option">
                    <h1 class="display-6"><label for="il">Şehir:</label></h1>
                    <select id="il" name="il_id" class="form-select" aria-label="" required>
                        <option value="">Şehir Seçin</option>
                        @foreach ($iller as $il)
                            <option value="{{ $il->id }}">{{ $il->il_ismi }}</option>
                        @endforeach
                    </select>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="bayi-tablo">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($iller as $il)
                    <tr>
                        <th scope="row">{{ $il->id }}</th>
                        <td>{{ $il->il_ismi }}</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                @endforeach
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
