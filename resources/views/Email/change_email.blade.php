<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <style></style>
  <body>
    <!-- 中文 -->
    <p>亲爱的用户 {{$user_name}} :您好!</p>
    <p>
      &nbsp;&nbsp;&nbsp;&nbsp;您收到了这封电子邮件是因为您(也可能是某人冒充您的名义)申请了修改邮箱。加入这不是您本人所申请，请不用理会这封电子邮件，但是如果您持续受到这类的信件骚扰，请您尽快联络管理员。
    </p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;请使用以下验证码完成后续修改邮箱流程</p>
    <p style="font-weight: bold; color: #409eff">
      &nbsp;&nbsp;&nbsp;&nbsp;{{$code}}
    </p>
    <p>
      &nbsp;&nbsp;&nbsp;&nbsp;注意:请您在收到验证码的{{$datetime}}分钟内({{$date}}前)使用，否则该验证码将会失效。
    </p>

    <!-- 意大利 -->
    <p>Ciao! Gentile utente {{$user_name}}.</p>
    <p>
      &nbsp;&nbsp;&nbsp;&nbsp;Hai ricevuto questa email perché tu (o qualcuno
      potrebbe esserti impersonato) hai chiesto di cambiare il tuo indirizzo
      email. Partecipare a questa richiesta non è la tua candidatura personale,
      ti preghiamo di non prestare attenzione a questa email. Tuttavia, se
      continui a essere molestato da tali lettere, ti preghiamo di contattare
      l'amministratore il prima possibile.
    </p>
    <p>
      &nbsp;&nbsp;&nbsp;&nbsp;Si prega di utilizzare il seguente codice di
      verifica per completare il processo di modifica e-mail successivo
    </p>
    <p style="font-weight: bold; color: #409eff">
      &nbsp;&nbsp;&nbsp;&nbsp;{{$code}}
    </p>
    <p>
      &nbsp;&nbsp;&nbsp;&nbsp; Attenzione: Si prega di utilizzare il codice di
      verifica entro {{$datetime}} minuti (prima del {{$date}}) dalla ricezione,
      altrimenti il codice diventerà non valido
    </p>

    <!-- 英文 -->
    <p>Hello! Dear user {{$user_name}}.</p>
    <p>
      &nbsp;&nbsp;&nbsp;&nbsp;You received this email because you (or someone
      may have impersonated you) applied to change your email address. Joining
      this is not your personal application, please do not pay attention to this
      email. However, if you continue to be harassed by such letters, please
      contact the administrator as soon as possible.
    </p>
    <p>
      &nbsp;&nbsp;&nbsp;&nbsp;Please use the following verification code to
      complete the subsequent email modification process.
    </p>
    <p style="font-weight: bold; color: #409eff">
      &nbsp;&nbsp;&nbsp;&nbsp;{{$code}}
    </p>
    <p>
      &nbsp;&nbsp;&nbsp;&nbsp;Attention: Please use the verification code within
        {{$datetime}}minutes (before {{$date}}) of receiving it, otherwise the code
      will become invalid.
    </p>
  </body>
</html>
