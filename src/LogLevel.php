<?php
    namespace App;

    enum LogLevel: string {
        case debug = 'DEBUG';
        case info = 'INFO';
        case notice = 'NOTICE';
        case warning = 'WARNING';
        case error = 'ERROR';
        case critical = 'CRITICAL';
        case alert = 'ALERT';
        case emergency = 'EMERGENCY';
    } 