# laravel-eloquent-relationships

This is a project to help you tinker around and play with Laravel's Eloquent Relationships.

First, copy the .env file, `cp .env.example .env`, and change the database username, password, and database schema name to whatever user/db/empty schema you have locally setup (and also if needed, change the host and port).

In the database/migrations folder I have the migration tables setup.
In the app/Models directory, I have the models associated with those tables and their relationships defined. 
  Also in each of those Model folders is an 'info.txt' file to show you what you need to run to tinker with this test.
  I like to check the database after each ->save();

For example, for the following tests run the statements in the respective section below:

## OneToOne

--run db migration

`php artisan migrate --path="database/migrations/HasManyThrough"`

--then run 

`php artisan tinker`
  
--and run the statements i have in the info.txt in the Tinker playground

--then when done, run db reset to remove these tables if want to check out the next relationship to play around with

`php artisan migrate:reset --path="database/migrations/HasManyThrough"`

## OneToMany

--run db migration

`php artisan migrate --path="database/migrations/OneToMany"`

--then run 

`php artisan tinker`

--and run the statements i have in the info.txt in the Tinker playground

--then when done, run db reset to remove these tables if want to check out the next relationship to play around with

`php artisan migrate:reset --path="database/migrations/OneToMany"`



## ManyToMany

--run db migration

`php artisan migrate --path="database/migrations/ManyToMany"`

--then run 

`php artisan tinker`

--and run the statements i have in the info.txt in the Tinker playground

--then when done, run db reset to remove these tables if want to check out the next relationship to play around with

`php artisan migrate:reset --path="database/migrations/ManyToMany"`

## OneToOnePolymorphic

--run db migration
`php artisan migrate --path="database/migrations/OneToOnePolymorphic"`

--then run 
`php artisan tinker`

--and run the statements i have in the info.txt in the Tinker playground

--then when done, run db reset to remove these tables if want to check out the next relationship to play around with

`php artisan migrate:reset --path="database/migrations/OneToOnePolymorphic"`


## OneToManyPolymorphic

--run db migration

`php artisan migrate --path="database/migrations/OneToManyPolymorphic"`

--then run 

`php artisan tinker`

--and run the statements i have in the info.txt in the Tinker playground

--then when done, run db reset to remove these tables if want to check out the next relationship to play around with

`php artisan migrate:reset --path="database/migrations/OneToManyPolymorphic"`


## ManyToManyPolymorphic

--run db migration

`php artisan migrate --path="database/migrations/ManyToManyPolymorphic"`

--then run 

`php artisan tinker`

--and run the statements i have in the info.txt in the Tinker playground

--then when done, run db reset to remove these tables if want to check out the next relationship to play around with

`php artisan migrate:reset --path="database/migrations/ManyToManyPolymorphic"`

## HasManyThrough

--run db migration

`php artisan migrate --path="database/migrations/HasManyThrough"`

--then run 

`php artisan tinker`

--and run the statements i have in the info.txt in the Tinker playground

--then when done, run db reset to remove these tables if want to check out the next relationship to play around with

`php artisan migrate:reset --path="database/migrations/HasManyThrough"`
