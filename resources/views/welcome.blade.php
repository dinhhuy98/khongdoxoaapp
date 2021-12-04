<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript">
        
        // this is where you paste your api key
var apiKey = "5aba895a0f9d2f612c36d18b16e9d6fcd9cf6f73aafc1704f4c175eaaef69db5";
var ccStreamer = new WebSocket('wss://streamer.cryptocompare.com/v2?api_key=' + apiKey);
var config = {
    "coin":{
        "ADA":{
            "minP":1.5,
            "maxP":1.7,
            "rangeP":0.05,
            "preMinP":0,
            "preMaxP":0
        }
    }
}
ccStreamer.onopen = function onStreamOpen() {
    var subRequest = {
        "action": "SubAdd",
        "subs": ["0~Coinbase~ADA~USD","0~Coinbase~BTC~USD"]
    };
    ccStreamer.send(JSON.stringify(subRequest));
}

ccStreamer.onmessage = function onStreamMessage(message) {
    let data = event.data;

    console.log("Received from Cryptocompare: " + data);
    if(data["TYPE"]=="0"){
        let p = data["P"];
        let configCoin = config["coin"][data["FSYM"]];
        if(p<=(configCoin["preMinP"]-configCoin["rangeP"]) || (configCoin["preMinP"] ==0 && 
            p<=(configCoin["minP"]+configCoin["rangeP"])
            )){
            //push
            config["coin"][data["preMinP"]] = configCoin["preMinP"]-configCoin["rangeP"];
        }
        if(p>=(configCoin["preMinP"]+configCoin["rangeP"]) ){
            //push
            config["coin"][data["preMinP"]] = config["coin"][data["minP"]];
        }

        if(p<=(configCoin["preMinP"]-configCoin["rangeP"]) ){
            //push
            config["coin"][data["preMinP"]] = configCoin["preMinP"]-configCoin["rangeP"];
        }
        
    }
}
    </script>
</html>
