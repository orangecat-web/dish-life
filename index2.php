<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <!--測試網址用 , 啟用正式網址前請先移除-->
        <meta name="robots" content="noindex,nofollow">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!--slidebars-->
        <link rel="stylesheet" href="js/slidebars/slidebars.css">
        <link rel="stylesheet" href="js/slidebars/style.css">

        <!--layout css-->
        <link rel="stylesheet" href="css/layout2.css">
        <link rel="stylesheet" href="css/d-layout2.css">
        
        <!--title-->
        <title>Dish Life</title>
    </head>
    <body>
        <!--header-->
        <header>
            <nav class="navbar navbar-toggleable-md fixed-top navbar-light">
                <button class="js-toggle-left-slidebar navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="images/layout/logo.png"></a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto left">
                        <li><a href="about.php">關於我們</a><span>｜</span></li>
                        <li><a href="products.php">全部商品</a><span>｜</span></li>
                        <li><a href="news.php">最新消息</a><span>｜</span></li>
                        <li><a href="contact.php">聯絡我們</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signin.php">登入</a> / <a href="signup.php">註冊</a></li>
                        <li>
                            <a href="cart.php">
                                <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
                                <span>0</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <section class="container">
            <!--slider-->
            <!--AD 1-->
            <div class="row">
                <dl>
                    <dd class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 left">
                        <!--自訂廣告連結-->
                        <a href="#"><img src="upload/img-ind-ad-1-1.jpg"></a>
                    </dd>
                    <dd class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 right">
                        <div>
                            <dl>
                                <dd class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <h1>木趣食光木質方型托盤/餐盤</h1>
                                    <p>輕巧且方便使用的木製餐盤。為輕食小點或午餐時光增添風味。</p>
                                    <p>輕巧且方便使用的木製餐盤。為輕食小點或午餐時光增添風味。</p>
                                    <button class="btn_183" onClick="location.href='product-detail.php'">詳細內容</button>
                                </dd>
                                <dd class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <img src="upload/img-ind-ad-1-2.jpg" class="img-responsive">
                                </dd>
                            </dl>
                        </div>
                    </dd>
                </dl>
            </div>
        </section>

        <div off-canvas="slidebar-1 left overlay" class="slidebars">
            <dl>
                <dd>
                    <a href="cart.php"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i><span style="color: #f00">0</span></a>
                </dd>
            </dl>
            <dl>
                <dd><a href="about.php"><i class="fa fa-info-circle" aria-hidden="true"></i>關於我們</a></dd>
                <dd><a href="products.php"><i class="fa fa-product-hunt" aria-hidden="true"></i>全部商品</a></dd>
                <dd><a href="news.php"><i class="fa fa-newspaper-o" aria-hidden="true"></i>最新消息</a></dd>
                <dd><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i>聯絡我們</a></dd>
            </dl>
            <dl>
                <dd><a href="privacy.php">隱私權政策</a></dd>
                <dd><a href="member-rule.php">會員服務說明</a></dd>
                <dd><a href="shop-rule.php">購物須知</a></dd>
            </dl>
        </div>
        <footer class="row">
            <div class="row container mx-auto">
                <!--ft logo-->
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 ft_contact">
                    <img src="images/layout/logo-footer.png">
                    <dl>
                        <dt><img src="images/layout/icon-footer-01.png"></dt>
                        <dd>+886-2-1234-5678</dd>
                        <dt><img src="images/layout/icon-footer-02.png"></dt>
                        <dd>service@service.com.tw</dd>
                        <dt><img src="images/layout/icon-footer-03.png"></dt>
                        <dd>11070 台北市信義區基隆路一段 155 號 8 樓之 3</dd>
                        <div class="clearfix"></div>
                    </dl>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 links">
                    <dl>
                        <dd><a href="privacy.php">隱私權政策</a></dd>
                        <dd><a href="member-rule.php">會員服務說明</a></dd>
                        <dd><a href="shop-rule.php">購物須知</a></dd>
                    </dl>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12 links">
                    <dl>
                        <dd><a href="about.php">關於我們</a></dd>
                        <dd><a href="products.php">全部商品</a></dd>
                        <dd><a href="news.php">最新消息</a></dd>
                        <dd><a href="contact.php">聯絡我們</a></dd>
                    </dl>
                </div>
            </div>
            <div class="col-xl-12 mx-auto copyright">2017 &copy; Dish Life</div>
        </footer>


        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <!--slidebars-->
        <script src="js/slidebars/slidebars.js"></script>
        <script src="js/slidebars/scripts.js"></script>
    </body>
</html>