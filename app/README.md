Facebook Bot:

Needed Stuff: 

1.) PHP 7.2.x

2.) A Database



Installation:

Clone this Repository 

`composer install`

`cp .env.example .env`

`php artisan key:generate`

Edit `.env` File to your needs

`php artisan migrate`

Done

Usage:

Call `php artisan facebook:add` to add a new Site to your parser

Call `php artisan facebook:parse` to parse the page and write posts and comments to your database.

Done

TODO Features:
Deletion of Added Pages
List of Added Pages
