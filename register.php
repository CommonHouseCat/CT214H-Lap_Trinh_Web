<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bread</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CT214H/assets/font/fontawesome-free-6.5.2-web/css/all.min.css">
</head>

<body>
    <div class="main">
        <div class="header">
            <div class="grid">
                <div class="headerbar">
                    <div class="header__logo">
                        <img class="header__logo-img" src="./assets/image/Bread_logo2.png" alt="store_logo">
                    </div>


                    <div class="header__navigation">
                        <ul class="header__navigation-list">
                            <li class="header__navigation-item"><a class="header__navigation-link" href="#">TRANG CHỦ</a></li>
                            <li class="header__navigation-item"><a class="header__navigation-link" href="#">GIỚI THIỆU</a></li>
                            <li class="header__navigation-item"><a class="header__navigation-link" href="#">LIÊN HỆ</a></li>
                        </ul>
                    </div>


                    <div class="header__utility">
                        <div class="header__utility-connect">
                            <ul class="header__utility-list">
                                <li class="header__utility-item"><a class="header__utility-link" href="#">ĐĂNG NHẬP</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Body -->
        <div class="container">

            <div class="container__registerForm">
                <form class="registerForm" action="#" method="post">
                    <p class="registerForm__Title">Đăng Ký</p> 
                    <input type="text" class="registerForm__input" name="registerForm-name" placeholder="Tên tài khoản" >
                    <input type="password" class="registerForm__input" name="registerForm-name" placeholder="Mật Khẩu">
                    <input type="button" class="registerForm__button" name="registerForm-name" value="Đăng Ký">
                    <p class="registerForm__redirect"> Bạn đã có tài khoản?  <a class="registerForm__redirect-link" href="#">Đăng Nhập</a></p>
                </form>
            </div>
            

        </div>

        <div class="footer"></div>
    </div>
</body>

</html>