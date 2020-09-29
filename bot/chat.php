<?php
include "Bot.php";
$bot = new Bot;
$questions = [
    //"what is php" => "PHP is a server side language",
    "what is your name"  => "My name is " . $bot->getName(),
    "what is your name?"  => "My name is " . $bot->getName(),
    "what's your name?"  => "My name is " . $bot->getName(),
    "your name?"  => "My name is " . $bot->getName(),

    "what is your gender" => "I am a " . $bot->getGender(),
    "what is your gender?" => "I am a " . $bot->getGender(),
    "what's your gender" => "I am a " . $bot->getGender(),
    "what's your gender?" => "I am a " . $bot->getGender(),
    "your gender" => "I am a " . $bot->getGender(),
    "your gender?" => "I am a " . $bot->getGender(),
    "gender" => "I am a " . $bot->getGender(),
    "gender?" => "I am a " . $bot->getGender(),

    "wanna fuck you" => "Visit here " . $bot->getLink()
];

if (isset($_GET['msg'])) {
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hello there!');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Can not reached you, Visit here <a href='https://www.google.com'>CPA Link</a>");
        } else {
            $botty->reply($botty->ask($msg, $questions));
        }
    });
}
