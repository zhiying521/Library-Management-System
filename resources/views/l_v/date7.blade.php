<!DOCTYPE html>
<html>
<head>
    <meta charset="uf-8">
    <title>用户修改密码验证</title>
    <meta name="descripton" content="">
    <meta name="keywords" content="">
    <link href="" rel="stylesheet">
</head>
<body>
<form action="test_9" method="post" >
    <div align="center">
        <p>邮&emsp;箱：<input type="text" name="email" value={{$Email}} ></p>
        <p>验证码：<input type="text" name="captcha" value="" placeholder="请输入验证码"/></p>
        {{csrf_field()}}
        <input type="submit" value="确认">
    </div>
</form>
</body>
</html>



