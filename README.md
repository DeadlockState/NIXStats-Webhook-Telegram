# NIXStats-Webhook-Telegram

## Description

A Webhook to get your servers/monitors notifications on Telegram with NIXStats

## Screenshots

![screenshot](http://i.imgur.com/0UGfmlH.png)

## Installation

### Pre-requisites

- A NIXStats account
- NIXStats agent installed on your server
- A Telegram Bot (see [here](https://core.telegram.org/bots#creating-a-new-bot) how to create a new Telegram bot)
- Your Telegram user ID (you can get it [here](https://telegram.me/myidbot))

### On your server

- Download the Webhook

```shell
cd /var/www/html/

mkdir NIXStats && cd NIXStats/

wget https://raw.githubusercontent.com/Punk--Rock/NIXStats-Webhook-Telegram/master/webhook.php

mkdir functions && cd functions/

wget https://raw.githubusercontent.com/Punk--Rock/NIXStats-Webhook-Telegram/master/functions/telegram.php
```

- Edit ```$telegrambot``` and ```$telegramchatid``` variables in webhook.php with your Telegram bot token and your Telegram user ID

### On NIXStats

- On your account go to "Settings" and in "NOTIFICATION CONTACTS" tab add the URL of your Webhook in "Webhook URI" field

![Webhook_URI](http://i.imgur.com/4kQd93E.png)

- On your server in "NOTIFICATIONS" tab and "Manage Notifications" click on "recipients" and check "Webhook"

![Notification](http://i.imgur.com/VWvJehU.png)

## Special Thanks

[![Twitter](https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-24.png)](https://twitter.com/Bilyb0y) [![GitHub](https://cdn0.iconfinder.com/data/icons/octicons/1024/mark-github-24.png)](https://github.com/bilyboy785/) Martin Bouillaud and his [NIXStats-Webhook-Telegram](https://github.com/bilyboy785/nixstats-webhook-telegram) version

[![Twitter](https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-24.png)](https://twitter.com/nixstats) [![GitHub](https://cdn0.iconfinder.com/data/icons/octicons/1024/mark-github-24.png)](https://github.com/NIXStats) Vincent from [NIXStats](https://nixstats.com) for json samples

## Contact me

[![Twitter](https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-24.png)](https://twitter.com/Punk__R0ck) [@Punk__R0ck](https://twitter.com/Punk__R0ck)
