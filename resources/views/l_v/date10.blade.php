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
{{--@if ($errors->any())--}}
{{--    <div class="alert alert-danger">--}}
{{--        <ul>--}}
{{--            @foreach ($errors->all() as $error)--}}
{{--                <li>{{ $error }}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--@endif--}}
<form action="test_3" method="post">
    {{--    @csrf--}}
    @include('errors.error')
    <div align="center">
        <p>用&nbsp;户&nbsp;名：<input type="text" name="user_name" value="" placeholder="请输入用户名"/></p>
        <p>用户密码：<input type="password" name="user_password"   value=""  placeholder="请输入用户密码"/></p>
        <p>用户邮箱：<input type="text" name="user_email"   value=""  placeholder="请输入用户邮箱"/></p>
        <p><img src="{{captcha_src()}}" alt="验证码" onclick="this.src='{{captcha_src()}}'+Math.random()"/></p>
        <p>验证码：<input type="text" name="captcha" value="" placeholder="请输入验证码"/></p>
        {{--    <input type="hidden" name="_token" value="{{csrf_token()}}" />--}}
        {{csrf_field()}}
        <input type="submit" value="注册" >
        &emsp;&emsp;<input type="submit" value="登录" formaction="test_12">
        <p><a href="test_7">忘记密码</a></p>
    </div>
</form>
</body>
</html>

