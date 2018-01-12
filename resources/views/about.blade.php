<!DOCTYPE HTML>
<!--
    Transitive by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>
        <title>Easy Go</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="{{asset('about/css/main.css')}}" />
    </head>
    <body>

        <!-- Header -->
            <header id="header" class="alt">
                <a href="#menu" class="toggle"><span>Menu</span></a>
            </header>

        <!-- Nav -->
            <nav id="menu">
                <ul class="links">
                    <li><a href="{{ route('HomePage') }}">Trang Chủ</a></li>
                    <li><a href="{{ route('LoginPage') }}">Đăng Nhập</a></li>
                    <li><a href="{{ route('RegisterPage') }}">Đăng Ký</a></li>
                </ul>
            </nav>

        <!-- Banner -->
        <!--
            To use a video as your background, set data-video to the name of your video without
            its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
            formats to work correctly.
        -->
            <section id="banner" data-video="{{asset('about/images/banner')}}">
                <div class="inner">
                    <h1>Easy Go</h1>
                    <p>" Make your trips easier "</p>
                    <a href="#one" class="button special scrolly">Get Started</a>
                </div>
            </section>

        <!-- One -->
            <section id="one" class="wrapper style2">
                <div class="inner">
                    <div>
                        <div class="box">
                            <div class="image fit">
                                <img src="{{asset('about/images/pic01.jpg')}}" alt="" />
                            </div>
                            <div class="content">
                                <header class="align-center">
                                    <h2>Hãy Chia Sẽ Những Chuyến Đi Của Bạn</h2>
                                    <p>Cùng nhau bảo vệ môi trường</p>
                                </header>
                                <hr />
                                <p> Việt Nam hiện có hơn 45 triệu môtô, xe máy các loại (tương đương cứ 2 người dân có một xe máy). Chính vì có số lượng xe máy rất lớn như vậy, nên tại các đô thị lớn, chẳng hạn như ở Sài Gòn, người ta đã thống kê được rằng, cứ 1km đường có tới 2.500 xe máy hoạt động.</p>
                                <p>Nguồn xả thải của ôtô, xe máy được cho là nguyên nhân chính khiến chất lượng không khí Sài Gòn và các Thành phố Lớn ở mức "báo động đỏ", có ngày trong năm mức ô nhiễm cao nhất thế giới.</p>
                                <p>Giải pháp cho việc giảm tải lưu lượng giao thông. Chúng tôi đưa ra một web app giúp mọi người chia sẻ cho nhau những chuyến đi khi có cùng quảng đường đi lại. 2 bên có thể tự thoả thuận điều kiện tự do. Trang web sử dụng rất đơn giản chỉ qua 3 thao tác</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Two -->
            <section id="two" class="wrapper style3">
                <div class="inner">
                    <div id="flexgrid">
                        <div>
                            <header>
                                <h3>Bước 1: Đăng Ký</h3>
                            </header>
                            
                            <ul class="actions" >
                                <li><a href="{{ route('RegisterPage') }}" class="button alt">Đăng Ký</a></li>
                            </ul>
                        </div>
                        <div>
                            <header>
                                <h3>Bước 2: Đăng Nhập</h3>
                            </header>
        
                            <ul class="actions" >
                                <li><a href="{{ route('LoginPage') }}" class="button alt">Đăng Nhập</a></li>
                            </ul>
                        </div>
                        <div>
                            <header>
                                <h3>Bước 3: Đăng Bài</h3>
                            </header>
                            <p>Khi có nhu cầu đi lại. Chúng ta có thể đăng bài để cho người khác đi nhờ xe hoặc xin đi nhờ xe của người khác.</p>
                            <ul class="actions">
                                <li><a href="{{ route('HomePage') }}" class="button alt">Learn More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

        <!-- Three -->
            <section id="three" class="wrapper style2">
                <div class="inner">
                    <div class="grid-style">

                        <div>
                            <div class="box">
                                <div class="image fit">
                                    <img src="{{asset('about/images/pic02.jpg')}}" alt="" />
                                </div>
                                <div class="content">
                                    <header class="align-center">
                                        <h2>Kết bạn bốn phương</h2>
                                        <p>dễ dàng kết nối mọi người với nhau bằng chuyến đi</p>
                                    </header>
                                    <hr />
                                    <p> Qua các chuyển đi chúng ta có thể lưu lại sđt và kết bạn với người khác dễ dàng. Giúp cho chúng ta có nhiều mối quan hệ hơn trong cuộc sống và làm cho cuộc sống trở nên dễ dàng hơn.</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="box">
                                <div class="image fit">
                                    <img src="{{asset('about/images/pic03.jpg')}}" alt="" />
                                </div>
                                <div class="content">
                                    <header class="align-center">
                                        <h2>Cơ hội tìm "Gấu"</h2>
                                        <p>nhiều cơ hội hơn cho nhưng thanh niên FA</p>
                                    </header>
                                    <hr />
                                    <p> Các bạn hay rụt rè hoặc ngại tiếp xúc với người khác giới thì đây là cơ hội để bạn có thể cải thiện yếu điểm đó, cũng là cơ hội để bạn tìm kiếm 1 nửa còn lại của mình giữa dòng đời tấp nập.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        <!-- Four -->
            <section id="four" class="wrapper style3">
                <div class="inner">

                    <header class="align-center">
                        <h2>Easy go and easy life</h2>
                        <p>Hãy đăng ký ngay hôm nay để trãi nghiệm ứng dụng web tuyệt vời và hoàn toàn miễn phí!</p>
                    </header>

                </div>
            </section>

        <!-- Footer -->
            <footer id="footer" class="wrapper">
                <div class="inner">
                    <section>
                        <div class="box">
                            <div class="content">
                                <h2 class="align-center">Feed Back</h2>
                                <hr />
                                <form action="#" method="post">
                                    <div class="field half first">
                                        <label for="name">Name</label>
                                        <input name="name" id="name" type="text" placeholder="Name">
                                    </div>
                                    <div class="field half">
                                        <label for="email">Email</label>
                                        <input name="email" id="email" type="email" placeholder="Email">
                                    </div>
                                    <div class="field">
                                        <label for="dept">Department</label>
                                        <div class="select-wrapper">
                                            <select name="dept" id="dept">
                                                <option value="">- Category -</option>
                                                <option value="1">Manufacturing</option>
                                                <option value="1">Shipping</option>
                                                <option value="1">Administration</option>
                                                <option value="1">Human Resources</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
                                    </div>
                                    <ul class="actions align-center">
                                        <li><input value="Send Message" class="button special" type="submit"></li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </section>
                    <div class="copyright">
                        &copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a>. Images <a href="{{asset('https://unsplash.com/')}}">Unsplash</a>. Video <a href="{{asset('http://coverr.co/')}}">Coverr</a>.
                    </div>
                </div>
            </footer>

        <!-- Scripts -->
            <script src="{{asset('about/js/jquery.min.js')}}"></script>
            <script src="{{asset('about/js/jquery.scrolly.min.js')}}"></script>
            <script src="{{asset('about/js/jquery.scrollex.min.js')}}"></script>
            <script src="{{asset('about/js/skel.min.js')}}"></script>
            <script src="{{asset('about/js/util.js')}}"></script>
            <script src="{{asset('about/js/main.js')}}"></script>

    </body>
</html>