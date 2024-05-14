<!DOCTYPE html>
<html>
<head>
    <meta charset="uf-8">
    <title>用户数据提交</title>
    <meta name="descripton" content="">
    <meta name="keywords" content="">
    <link href="" rel="stylesheet">
</head>
<body>
<form action="add" method="post" enctype="multipart/form-data">
    {{--        @csrf--}}
    <div align="center">
        <p>姓名：<input type="text" name="name" value=""></p>
        <p>年龄：<input type="text" name="age" value=""></p>
        <p>性别：<input type="text" name="sex" value=""></p>
        <p>学校：<input type="text" name="school" value=""></p>
        <p>地址：<input type="text" name="address" value=""></p>
        <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;访问地址：<input type="file" name="avater" value=""></p>
        {{csrf_field()}}
        <input type="submit" value="提交">
    </div>
</form>
</body>
</html>


