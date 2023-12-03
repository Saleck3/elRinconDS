# El Rincon DS

## Introduction

This is a simple discord bot whose main task is to punish you for your bad jokes.

If your friends deem your joke bad enough, they can ask the bot to move you to "the corner" voice channel ("El rincon" in Spanish), you probably deserve it.

This is a personal project which means is not really tested, implemented or even being used, so please do not use any of this code in a production environment.

## Requirements

To run this code, you'll need to have installed PHP 8.2+ and composer, surf the internet on how to install those depending on your operating system and preferences.

It's important to note that since we're using [DiscordPHP](https://github.com/discord-php/DiscordPHP), you need to have installed and running the CLI kind of PHP, also, you won't need a web server or create a site for this, DiscorPHP will manage that.

## Installation

Check [Discord's Getting started tutorial](https://discord.com/developers/docs/getting-started) for instructions on how to create your own bot, obtain your bot token and ID and create an invitation to join a server.

Once you have that, copy and rename ".env.example" to ".env" and complete the values to match your environment.

Lastly, on the root folder you must execute composer to install and upgrade the required libraries:

```
composer install
```

That should be it, let me know if you had any trouble!

## Usage

Since it's an ongoing development, it still doesn’t have a useful functionality, the intended functions/commands are:

* Move -> Send a friend to the corner
* Come back! -> bring them back to the channel you're connected (useful for helping that friend that doesn’t really use discord)
* Get counter -> get a counter for how many times everyone has been sent to the corner
* Get counter by @ -> same as before but for a specific user
* Add/remove to counter -> for being able to modify them manually
* Reset counter -> set all counters to 0

Configs

* Set channel -> for setting the corner channel (so it can have any name)
* Set permissions -> eventually you will be able to block certain roles to use the bot (this will be the last functionality)

## Intended use

This is not a bot for massive servers and also is not intended to be a moderation tool, this was conceived as an internal joke, and everyone should use be able to use it

It will depend on the server participants to moderate and not abuse the use of the bot