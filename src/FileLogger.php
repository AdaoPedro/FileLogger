<?php
    namespace App;

    use Psr\Log\LoggerInterface;
    //use Psr\Log\LogLevel;

    class FileLogger implements LoggerInterface {

        public function log($level, $message, array $context = [] ): void {
            $dateFormatted = (new \DateTime())->format('Y-m-d H:i:s');
            $contextString = json_encode($context);
            $message = sprintf(
                '[%s] %s: %s %s%s',
                $dateFormatted,
                $level,
                $message,
                $contextString,
                PHP_EOL
            );
            file_put_contents(__DIR__ . '/../medium.log', $message, FILE_APPEND);
        }

        public function debug ($message, $context = []): void {
            //debugging information that reveals the details of the event in detail
            $this->log(LogLevel::debug->value, $message, $context);
        }

        public function info ($message, $context = []): void {
            //any interesting events. for instance: user has signed in
            $this->log(LogLevel::info->value, $message, $context);
        }

        public function notice ($message, $context = []): void {
            //important events within the expected behavior
            $this->log(LogLevel::notice->value, $message, $context);
        }

        public function warning ($message, $context = []): void {
            //exceptional cases which are still not errors. for example usage of a deprecated method or wrong API request
            $this->log(LogLevel::warning->value, $message, $context);
        }

        public function error ($message, $context = []): void {
            //error to be monitored, but which don't require an urgent fixing
            $this->log(LogLevel::error->value, $message, $context);
        }

        public function critical ($message, $context = []): void {
            //critical state or an event. for instance: unavailability of a component or an unhandled exception
            $this->log(LogLevel::critical->value, $message, $context);
        }

        public function alert ($message, $context = []): void {
            //error and an event to be solved in the shortest time. for example, the database is unavailable
            $this->log(LogLevel::alert->value, $message, $context);
        }

        public function emergency ($message, $context = []): void {
            //whole app/system is completely out of order
            $this->log(LogLevel::emergency->value, $message, $context);
        }
    }

    
