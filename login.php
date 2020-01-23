<!DOCTYPE>

<html>
<head>
        <meta charset='utf-8'>
</head>

<body>
        <div align='center'>
        <span>로그인</span>

        <form action='login_action.php' method='POST'>
                <p>ID: <input name="id" type="text"></p>
                <p>PW: <input name="pw" type="password"></p>
                <input type="submit" value="로그인">
        </form>
        <br />
        <button id="join" onclick="location.href='./join.php'">회원가입</button>

        </div>


</body>

</html>
