<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8"/>
    <title>查询学生信息</title>
    <style type="text/css">
        table,tr,td{border:1px solid silver;}
    </style>
</head>
<body>
    <table>
        <caption>学生信息表</caption>
        <thead>
          <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>sex</th>
            <th>school</th>
            <th>address</th>
          <tr>
        </thead>
        <tbody>
@foreach($date as $key=>$value)
     <tr>
      <td>{{$key}}</td>
      <td>{{$value->name}}</td>
      <td>{{$value->age}}</td>
      <td>{{$value->sex}}</td>
      <td>{{$value->school}}</td>
      <td>{{$value->address}}</td>
     <tr>
@endforeach
        </tbody>
    </table>
</body>
</html>

