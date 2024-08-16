<!DOCTYPE html>
<html>
<head>
    <meta charset="uf-8">
    <title>验证提交</title>
    <meta name="descripton" content="">
    <meta name="keywords" content="">
    <link href="" rel="stylesheet">
</head>
<body>
<form action={{route('register')}} method="post">
    <div align="center">
        <p>用&nbsp;户&nbsp;名：<input type="text" name="user_name" value="" placeholder="请输入用户名"/></p>
        <p>用户密码：<input type="password" name="user_password"   value=""  placeholder="请输入用户密码"/></p>
        {{--    <input type="hidden" name="_token" value="{{csrf_token()}}" />--}}
        {{csrf_field()}}
        <input type="submit" value="注册" >
        &emsp;&emsp;<input type="submit" value="登录" formaction="test_12">
        <p><a href="test_7">忘记密码</a></p>
    </div>
</form>
</body>
</html>

