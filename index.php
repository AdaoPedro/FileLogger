<?php

    require_once 'vendor/autoload.php';

    $fileLogger = new App\FileLogger();
    // $fileLogger->debug('Registro salvo');

    // $mailer = new App\MailService(logger: $fileLogger);
    // $mailer->send();

    $nome = 'Juca Likano';
    $email = 'me@juca.likano0192.za';
    $fileLogger->debug(message: 'Registro salvo', context: [
        'nome' => $nome,
        'email' => $email
    ]);
    