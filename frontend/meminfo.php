<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>帳戶資料</title>

    <link rel="stylesheet" href="../lib/reset.css">
    <link rel="stylesheet" href="../css/header03.css">
    <link rel="stylesheet" href="../css/meminfo.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script src="../js/08/meminfo.js"></script>

</head>

<body>
    <?php include("../hd.html"); ?>
    <div class="jk_wrapper">
        <div class="container">
            <div class="sideMenu">
                <ul>
                    <li class="-on"><a href="#">帳戶資料</a></li>
                    <li><a href="#">我的收藏</a></li>
                    <li><a href="#">訂單查詢</a></li>
                    <li><a href="#">通知總覽</a></li>
                </ul>
            </div>


            <main>
                <form id="memberInfo" action="#" method="post">

                    <div>
                        <div>
                            <label for="account">帳號</label>
                        </div>
                        <input type="text" id="account" value="goodguy" disabled>
                    </div>

                    <div>
                        <div>
                            <label for="email">信箱</label>
                            <span class="email">修改</span>
                        </div>
                        <input class="input" type="text" id="email" value="goodguy@gmail.com" disabled>
                    </div>

                    <div>
                        <div>
                            <label for="phone">手機</label>
                            <span class="phone">修改</span>
                        </div>
                        <input class="input" type="text" id="phone" value="0912345678" disabled>
                    </div>

                    <div>
                        <div>
                            <label for="name">姓名</label>
                            <span class="name">修改</span>
                        </div>
                        <input class="input" type="text" id="name" value="就是宅" disabled>
                    </div>

                    <div>
                        <div>
                            <label for="address">地址</label>
                            <span class="address">修改</span>
                        </div>
                        <input class="input" type="text" id="address" value="天龍國" disabled>
                    </div>

                    <div>
                        <div>
                            <label for="password">密碼</label>
                            <span class="btn_pwd">修改</span>
                        </div>
                        <input type="text" id="password" value="************" disabled>

                        <div id="changePassword">
                            <input class="input" type="password" id="oldPassword" placeholder="輸入舊密碼" value="************">
                            <input class="input" type="password" id="newPassword" placeholder="輸入新密碼" value="************">
                            <input class="input" type="password" id="checkPassword" placeholder="確認新密碼" value="************">
                        </div>
                    </div>

                    <div id="btn">
                        <input type="submit" value="儲存">
                        <input type="reset" value="取消">
                    </div>
                </form>
            </main>
        </div>
    </div>
    <script src="../js/header.js"></script>
</body>
</html>