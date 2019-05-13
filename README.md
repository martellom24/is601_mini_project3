# is601_mini_project3

My Final Project will be included in the "Posts" branch of this repo.

For my final feature, I created a library of posts in which every user that is registered in my app has access too. 

These Posts have randomly generated Images and randomly genertated URL's that link to real websites.  

In order to create my Library, I had to create a new Controller, Model, View, Factory, Migration, and Seeder.

The main part of this project was to create a Database that seeded into Heroku.  Since Heroku only accepts read-only databases, SQLite was not a compatiable database.  So I decided to use the Postgresql database.  I re-configured my database.php file to accept my SQLite database and migrate it to a Postgresql database.  Once I achieved this, I was able to success migrate and seed my libaray database using the Heroku Bash commands.

Once I successfully migrated the Postgresql database, now when the app refreshes, new content is generated for each post.  This includes images and URL's.
