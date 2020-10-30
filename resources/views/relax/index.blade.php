<!DOCTYPE html>
<html>
    <head>
        <title>60 giây - Tất cả đều là chuyện nhỏ!</title>
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
        <link rel="image_src" type="image/jpeg" href="{{ asset('images/moon.jpg') }}">
        <link rel="stylesheet" type="text/css" href="{{ mix('css/relax/app.css') }}">
        <script>
            if (/Android/i.test(navigator.userAgent)) {
              var html = document.getElementsByTagName("html")
              html[0].style.background = '#111821'
            }
        </script>
    </head>
    <body>
        <div id="cover"></div>
        <img src="{{ asset('images/fullscreen.png') }}" height="32" width="32" align="right" style="opacity:0.2">
        <div class="message">
            <span class="insideMessage">Viết một suy nghĩ khiến bạn không vui vào ngôi sao bên dưới</span>
        </div>
        <div class="mainTitle title">
            <div>Avengers Group</div>
            <div class="sub-title">Một sản phẩm của Avengers Group - Trong 60 giây sẽ giúp đầu óc bạn thoải mái</div>
            <br>
            <div class="sub-title custom-message-username"></div>
        </div>
        <div class="mainStar">
            <div class="thought">
                <span class="thoughtText"></span>
            </div>
        </div>
        <input placeholder="Điều gì đang khiến bạn buồn phiền?..." class="typeHere" style="position:fixed;"></input>
        <a href="#" class="button submit btn-enterthought" style="position:fixed;">
            <span>Chính nó!</span>
        </a>
        <div class="overlay" style="left: 54%;">
            <div class="title done title-done">
                Khi bạn xuyên qua bão táp,
                <br>bạn sẽ không còn là bạn của trước kia nữa.
            </div>
            <div class="content-wrapper">
                {{-- <div class="addthis_toolbox addthis_default_style" style="opacity:0.5; margin-left:265px; display: flex;">
                    <a class="addthis_button_facebook_like" fb:like:layout="button_count" fb:like:href="http://www.facebook.com/pixelthoughts"></a>
                    -
                    <a class="addthis_button_tweet" addthis:url="http://www.pixelthoughts.co" tw:text="A 60 second meditation tool to help clear the mind"></a>
                    <a class="addthis_counter addthis_pill_style" addthis:url="http://www.pixelthoughts.co"></a>
                </div>
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-554826c06f8a35e4"></script> --}}
                <div class="subscribe-wrapper">
                    <span class="with-love mindful-tools">Một game xếp hình kiểu mới sắp ra mắt</span>
                    <br>
                    <a href="{{ route('home.index') }}">
                        <button class="button subscribe">
                            <p style="margin-top:-10px">Trang chủ</p>
                        </button>
                    </a>
                    {{-- <form class="done" action="/subscribe" method="POST" id="subForm" accept-charset="utf-8">
                        <input placeholder="Enter email for updates" class="emailAddy" id="fieldEmail" name="email" type="email" required />
                        <button class="button subscribe" type="submit">
                            <p style="margin-top:-10px">subscribe</p>
                        </button>
                    </form> --}}
                </div>
                <div class="done2 with-love" style="padding-top:20px">
                    Web đưọc làm bởi <span class="heart">&#9829;</span> <a style="color: white; text-decoration: none" href="">Avengers Group</a>
                </div>
            </div>
        </div>
        <audio class="audio" autoplay>
            <source src="{{ asset('media/background.mp3') }}" type="audio/mp3">
        </audio>
        <script src="{{ mix('js/relax/app.js') }}"></script>
    </body>
</html>
