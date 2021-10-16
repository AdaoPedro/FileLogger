<?php
    namespace App;

    use Psr\Log\LoggerInterface;

    class MailService {

        public function __construct (
            private ?LoggerInterface $logger = null
        ){
            $this->logger = $logger;
        }

        public function send(): void {
            $this->logger->debug('Log from ' . __CLASS__);
        }

    }