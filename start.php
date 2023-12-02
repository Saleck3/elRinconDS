<?php

include __DIR__.'/vendor/autoload.php';

//include constants
/** @link  https://github.com/vlucas/phpdotenv */
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use Discord\Discord;
use Discord\Parts\Channel\Message;
use Discord\WebSockets\Intents;
use Discord\WebSockets\Event;

try {
    $discord = new Discord([
        'token' => $_ENV['BOT_TOKEN'],
        'intents' => Intents::getDefaultIntents()
    ]);
} catch (\Discord\Exceptions\IntentException $e) {
    echo "The bot haven't been correctly configured check discord docs to set intents";
    exit;
}

$discord->on('ready', function (Discord $discord) {
    echo "Bot is ready!", PHP_EOL;

    // Listen for messages.
    $discord->on(Event::MESSAGE_CREATE, function (Message $message, Discord $discord) {
        if ($message->author->bot) return;

        if(in_array($_ENV["BOT_ID"],array_keys($message->mentions->toArray()))){
            $message->reply("Hello there!");
        }
        echo "{$message->author->username}: {$message->content}", PHP_EOL;
    });
});

$discord->run();