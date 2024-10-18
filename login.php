<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave&display=swap" rel="stylesheet">
    <title>Document</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sedgwick+Ave&display=swap"
        rel="stylesheet">

</head>

<body>
    <img src="logo.png" alt="logo" id="logo">
    <main>
        <h1>Quản lý sinh viên</h1>
        <form action="main.php" method="post">
            <h4>ĐĂNG NHẬP</h4>
            <div class="group">
                <label for="">Tài khoản</label>
                <input type="text" id="username" name="username" placeholder="Tên đăng nhập">
            </div>
            <div class="group">
                <label for="">Mật khẩu</label>
                <input type="password" id="password" name="password" placeholder="Mật khẩu">
                <img id="view-pw" src="eyeopen.svg" alt="">

                <a href="/forgetpw">Quên mật khẩu?</a>
            </div>
            <button class="button-24" role="button">ĐĂNG NHẬP</button>
        </form>
    </main>
    <script>
        document.getElementById("password").addEventListener('input', function (){
            if(this.value){
                document.getElementById("view-pw").style.display = 'block';
            }else{
                document.getElementById("view-pw").style.display = 'none';
            }
        })
        document.getElementById("view-pw").addEventListener('click', function (){
            let pw = document.getElementById("password");
            if (pw.getAttribute('type') == 'password')
            {   
                pw.setAttribute('type',"text");
                this.src = this.src.replace('open', 'close')
            }
            else
            {
                pw.setAttribute('type',"password");
                this.src = this.src.replace('close', 'open')
            }       
        });
    </script>
</body>

</html>