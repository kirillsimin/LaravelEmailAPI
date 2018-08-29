# PHP/Laravel Email Service API

## Description

This software provides a RESTful API back-end email service, based on the [Uber coding challenge](https://github.com/uber/coding-challenge-tools) requirements.

## Installation

* Pull down the repository
* Set up your local server to point to the `/public` folder
* Run `composer install` to install all dependencies
* Create a local database and run `php artisan migrate`

## Usage

This package is intended as a back-end service only.

After registering a new user at `/api/register` (requires name, email and password), the authenticated user may send himself or herself an email by creating a new `Email` resource at (POST) `/api/emails`. The endpoint requires a subject and a body.
*Authentication with the front-ent is done via JWT.*

Once the resource is created, the app attempts to send an email to the authenticated user through MailGun. If the 3rd party service fails and throws an exception. The app falls back on SparkPost and attempts to send the email that way.

## Notes

Because of the time constraints on the coding challenge, this applications is a bare-bones implementation of the service. In production, the emails should be queued in a key-value database, such as [Redis](https://redis.io). Workers should be set up to run the queue. [Laravel's Horizon](https://horizon.laravel.com/) provides an excellent queue / jobs monitoring tool. Other useful monitoring tools that might be included in production are [BugSnag](https://www.bugsnag.com), [Sentry](https://sentry.io/) or the like.

Other precautions that might be wise to include are an anti-bot protection, such as Google's ReCaptcha, email verification, and throttle sending frequencies. The database is provisioned for the implementation of verification and throttle.
