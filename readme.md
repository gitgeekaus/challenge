# Technical challenge

This repository contains a technical challenge using the Laravel framework to test the ability of potential hires. It is only a simple challenge designed to test how you approach new features within the framework, testing your knowledge of the tools provided by the framework and your ability to write quality code.

## The task

This application is basically a boilerplate Laravel 5.2 application with the standard authentication enabled. You won't need to build any registration/authentication components as the built-in ones are fine. We've stubbed out a `PostsController` and also added a migration for a `posts` table, and we want to create a very simple blog application. There is an SQLite database setup, migrated and ready to go.

Here are the requirements for the application:

* The home page lists out all the posts, showing the most recent first.
* Logged in users are able to create new posts, and the posts are associated with their account.
* You can view a single post and the name of the author.
* Only the author of the post can edit and/or delete that post.

We're not concerned about how the application looks too much - but feel free to use Bootstrap components if you like. This test is about creating a single resource, a `Post` model, and the CRUD/authorisation that goes with it. We don't think this should take up too much of your time, we just want to get a feel of how you tackle this sort of problem with the framework.

If you have any questions or need parts of the task clarified, please just ask.
