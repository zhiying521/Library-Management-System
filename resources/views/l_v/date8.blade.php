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
<form action="test_10" method="post" >
    <div align="center">
        <p>新&emsp;密码：<input type="text" name="password" value='' placeholder="请输入新密码"/></p>
        <p>确认密码：<input type="text" name="password_confirmation" value="" placeholder="请再次确认密码"/></p>
        {{csrf_field()}}
        <input type="submit" value="确认">
    </div>
</form>
</body>
</html>



