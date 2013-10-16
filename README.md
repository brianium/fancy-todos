Fancy Todos
===========

Built to showcase PHPStorm for [GrPhpDev](http://www.meetup.com/GrPhpDev/events/141341842/)

Slides for this presentation located at [slid.es](http://slid.es/brianscaturro/phpstorm-a-love-story)

Stack
-----
This simple showpiece was initialized via composer. It is built off of the [ZF2 Skeleton Application](https://github.com/zendframework/ZendSkeletonApplication)

MongoDB was the db of choice, and the [Doctrine ODM Module](https://github.com/doctrine/DoctrineMongoODMModule) for ZF2 was used to do the talking.

Running
-------
First install dependencies via composer (from the project root):

```
composer install
```

The easiest way to run this app is to fire up mongodb on the default port and use the the PHP 5.4 builtin web server.

```
mongod
php -s 0.0.0.0:8080
```

There is only one endpoint this piece exposes - /todos. There is a POST endpoint for creating todos, and a GET endpoint for listing them.