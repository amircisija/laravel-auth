## Laravel-Auth
#### Laravel-Auth is a Complete Build of Laravel 5.6 with Email Registration Verification, Social Authentication, User Roles and Permissions, User Profiles, and Admin restricted user management system.
[![Build Status](https://travis-ci.org/jeremykenedy/laravel-auth.svg?branch=master)](https://travis-ci.org/jeremykenedy/laravel-auth)
[![StyleCI](https://styleci.io/repos/44714043/shield?branch=master)](https://styleci.io/repos/44714043)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/jeremykenedy/laravel-auth/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/jeremykenedy/laravel-auth/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/jeremykenedy/laravel-auth/badges/build.png?b=master)](https://scrutinizer-ci.com/g/jeremykenedy/laravel-auth/build-status/master)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)



### About
Laravel 5.6 with user authentication, registration with email confirmation, social media authentication, password recovery, and captcha protection. This also makes full use of Controllers for the routes, templates for the views, and makes use of middleware for routing. Project can be stood up in minutes.

### Installation Instructions
1. Run `git clone https://github.com/jeremykenedy/laravel-auth.git laravel-auth`
2. Create a MySQL database for the project
    * ```mysql -u root -p```, if using Vagrant: ```mysql -u homestead -psecret```
    * ```create database laravelAuth;```
    * ```\q```
3. From the projects root run `cp .env.example .env`
4. Configure your `.env` file
5. Run `composer update` from the projects root folder
6. From the projects root folder run:
```
php artisan vendor:publish --tag=laravelroles &&
php artisan vendor:publish --tag=laravel2step
```
7. From the projects root folder run `sudo chmod -R 755 ../laravel-auth`
8. From the projects root folder run `php artisan key:generate`
9. From the projects root folder run `php artisan migrate`
10. From the projects root folder run `composer dump-autoload`
11. From the projects root folder run `php artisan db:seed`
12. Compile the front end assets with [npm steps](#using-npm) or [yarn steps](#using-yarn).

#### Build the Front End Assets with Mix
##### Using NPM:
1. From the projects root folder run `npm install`
2. From the projects root folder run `npm run dev` or `npm run production`
  * You can watch assets with `npm run watch`

##### Using Yarn:
1. From the projects root folder run `yarn install`
2. From the projects root folder run `yarn run dev` or `yarn run production`
  * You can watch assets with `yarn run watch`

#### Optionally Build Cache
1. From the projects root folder run `php artisan config:cache`

### Seeds
##### Seeded Roles
  * Unverified - Level 0
  * User  - Level 1
  * Administrator - Level 5

##### Seeded Permissions
  * view.users
  * create.users
  * edit.users
  * delete.users

##### Seeded Users

|Email|Password|Access|
|:------------|:------------|:------------|
|user@user.com|password|User Access|
|admin@admin.com|password|Admin Access|

##### Themes Seed List
  * [ThemesTableSeeder](https://github.com/jeremykenedy/laravel-auth/blob/master/database/seeds/ThemesTableSeeder.php)

### Routes

#### Authentication Routes
* ```/login```
* ```/logout```
* ```/register```
* ```/password/email```
* ```/password/reset```
* ```/activate```
* ```/activate/{token}```
* ```/activation-required```
* ```/re-activate/{token}```

#### Profile Routes
* ```/profile/{username}```
* ```/profile/{username}/edit``` <- Editing in this view is limited to current user only.

#### Admin User Management Routes
* ```/users```
* ```/users/create```
* ```/users/{user_id}```
* ```/users{user_id}/edit```

#### Admin Theme Routes
* ```/themes```
* ```/themes/create```
* ```/themes/{theme_id}```
* ```/themes/{theme_id}/edit```

#### Admin Tools Routes
* ```/logs```
* ```/phpinfo```
* ```/routes```

#### Admin Soft Deleted Users Management Routes
* ```/users/deleted```
* ```/users/deleted/{user_id}```

#### Activity Log Routes
* ```/activity```
* ```/activity/cleared```
* ```/activity/log/{id}```
* ```/activity/cleared/log/{id}```

#### 2-Step Verfication Routes (disabled by default in .env.example file)
* ```/verification/needed```
* ```/verification/verify```
* ```/verification/resend```

### Socialite

#### Get Socialite Login API Keys:
* [Google Captcha API](https://www.google.com/recaptcha/admin#list)
* [Facebook API](https://developers.facebook.com/)
* [Twitter API](https://apps.twitter.com/)
* [Google &plus; API](https://console.developers.google.com/)
* [GitHub API](https://github.com/settings/applications/new)
* [YouTube API](https://developers.google.com/youtube/v3/getting-started)
* [Twitch TV API](http://www.twitch.tv/kraken/oauth2/clients/new)
* [Instagram API](https://instagram.com/developer/register/)
* [37 Signals API](https://github.com/basecamp/basecamp-classic-api)

#### Add More Socialite Logins
* See full list of providers: [http://socialiteproviders.github.io](http://socialiteproviders.github.io/#providers)
###### **Steps**:
  1. Go to [http://socialiteproviders.github.io](http://socialiteproviders.github.io/providers/twitch/) and select the provider to be added.
  2. From the projects root folder in terminal run composer command to get the needed package.
     * Example:

      ```
         composer require socialiteproviders/twitch
      ```

  3. From the projects root folder run ```composer update```
  4. Add the service provider to ```/config/services.php```
     * Example:

     ```
        'twitch' => [
            'client_id'   => env('TWITCH_KEY'),
            'client_secret' => env('TWITCH_SECRET'),
            'redirect'    => env('TWITCH_REDIRECT_URI'),
        ],
     ```

  5. Add the API credentials to ``` /.env  ```
     * Example:

      ```
         TWITCH_KEY=YOURKEYHERE
         TWITCH_SECRET=YOURSECRETHERE
         TWITCH_REDIRECT_URI=http://YOURWEBSITEURL.COM/social/handle/twitch
      ```

  6. Add the social media login link:
      * Example:
      In file ```/resources/views/auth/login.blade.php``` add ONE of the following:
         * Conventional HTML:
        ```
        <a href="{{ route('social.redirect', ['provider' => 'twitch']) }}" class="btn btn-lg btn-primary btn-block twitch">Twitch</a>
        ```
         * Use Laravel HTML Facade with [Laravel Collective](https://laravelcollective.com/):

        ```
        {!! HTML::link(route('social.redirect', ['provider' => 'twitch']), 'Twitch', array('class' => 'btn btn-lg btn-primary btn-block twitch')) !!}
        ```

### Other API keys
* [Google Maps API v3 Key](https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key)


### Environment File

Example `.env` file:

```bash

APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelAuth
DB_USERNAME=homestead
DB_PASSWORD=secret

BROADCAST_DRIVER=pusher
CACHE_DRIVER=file
SESSION_DRIVER=file
SESSION_LIFETIME=120
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

MAIL_FROM_ADDRESS=
MAIL_FROM_NAME=''

EMAIL_EXCEPTION_ENABLED=false
EMAIL_EXCEPTION_FROM=email@email.com
EMAIL_EXCEPTION_TO='email1@gmail.com, email2@gmail.com'
EMAIL_EXCEPTION_CC=''
EMAIL_EXCEPTION_BCC=''
EMAIL_EXCEPTION_SUBJECT=''

# You will also need to update the pusher credentials in /resources/assets/js/bootstrap.js - lines 64 - 66
PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

ACTIVATION=true
ACTIVATION_LIMIT_TIME_PERIOD=24
ACTIVATION_LIMIT_MAX_ATTEMPTS=3
NULL_IP_ADDRESS=0.0.0.0

DEBUG_BAR_ENVIRONMENT=local

USER_RESTORE_CUTOFF_DAYS=31
USER_RESTORE_ENCRYPTION_KEY=
USER_LIST_PAGINATION_SIZE=50

LARAVEL_2STEP_ENABLED=false
LARAVEL_2STEP_DATABASE_CONNECTION=mysql
LARAVEL_2STEP_DATABASE_TABLE=laravel2step
LARAVEL_2STEP_USER_MODEL=App\User
LARAVEL_2STEP_EMAIL_FROM="jeremykenedy@gmail.com"
LARAVEL_2STEP_EMAIL_FROM_NAME="Laravel 2 Step Verification"
LARAVEL_2STEP_EMAIL_SUBJECT='Laravel 2 Step Verification'
LARAVEL_2STEP_EXCEEDED_COUNT=3
LARAVEL_2STEP_EXCEEDED_COUNTDOWN_MINUTES=1440
LARAVEL_2STEP_VERIFIED_LIFETIME_MINUTES=360
LARAVEL_2STEP_RESET_BUFFER_IN_SECONDS=300
LARAVEL_2STEP_CSS_FILE="css/laravel2step/app.css"
LARAVEL_2STEP_APP_CSS_ENABLED=false
LARAVEL_2STEP_APP_CSS="css/app.css"
LARAVEL_2STEP_BOOTSTRAP_CSS_CDN_ENABLED=true
LARAVEL_2STEP_BOOTSTRAP_CSS_CDN="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"

DEFAULT_GRAVATAR_SIZE=80
DEFAULT_GRAVATAR_FALLBACK=http://c1940652.r52.cf0.rackcdn.com/51ce28d0fb4f442061000000/Screen-Shot-2013-06-28-at-5.22.23-PM.png
DEFAULT_GRAVATAR_SECURE=false
DEFAULT_GRAVATAR_MAX_RATING=g
DEFAULT_GRAVATAR_FORCE_DEFAULT=false
DEFAULT_GRAVATAR_FORCE_EXTENSION=jpg

LARAVEL_LOGGER_DATABASE_CONNECTION=mysql
LARAVEL_LOGGER_DATABASE_TABLE=laravel_logger_activity
LARAVEL_LOGGER_ROLES_ENABLED=true
LARAVEL_LOGGER_ROLES_MIDDLWARE=role:admin
LARAVEL_LOGGER_MIDDLEWARE_ENABLED=true
LARAVEL_LOGGER_USER_MODEL=App\Models\User
LARAVEL_LOGGER_PAGINATION_ENABLED=true
LARAVEL_LOGGER_PAGINATION_PER_PAGE=25
LARAVEL_LOGGER_DATATABLES_ENABLED=false
LARAVEL_LOGGER_DASHBOARD_MENU_ENABLED=true
LARAVEL_LOGGER_DASHBOARD_DRILLABLE=true
LARAVEL_LOGGER_LOG_RECORD_FAILURES_TO_FILE=true
LARAVEL_LOGGER_FLASH_MESSAGE_BLADE_ENABLED=false
LARAVEL_LOGGER_JQUERY_CDN_ENABLED=false
LARAVEL_LOGGER_JQUERY_CDN_URL=https://code.jquery.com/jquery-2.2.4.min.js
LARAVEL_LOGGER_BLADE_CSS_PLACEMENT_ENABLED=true
LARAVEL_LOGGER_BLADE_JS_PLACEMENT_ENABLED=true
LARAVEL_LOGGER_BOOTSTRAP_JS_CDN_ENABLED=false
LARAVEL_LOGGER_BOOTSTRAP_JS_CDN_URL=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js
LARAVEL_LOGGER_FONT_AWESOME_CDN_ENABLED=false
LARAVEL_LOGGER_FONT_AWESOME_CDN_URL=https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
LARAVEL_LOGGER_BOOTSTRAP_CSS_CDN_ENABLED=false
LARAVEL_LOGGER_BOOTSTRAP_CSS_CDN_URL=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css

// NOTE: YOU CAN REMOVE THE KEY CALL IN app.blade.php IF YOU GET A POP UP AND DO NOT WANT TO SETUP A KEY FOR DEV
# Google Maps API v3 Key - https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key
GOOGLEMAPS_API_STATUS=true
GOOGLEMAPS_API_KEY=YOURGOOGLEMAPSkeyHERE

# https://console.developers.google.com/ - NEED OAUTH CREDS
GOOGLE_ID=YOURGOOGLEPLUSidHERE
GOOGLE_SECRET=YOURGOOGLEPLUSsecretHERE
GOOGLE_REDIRECT=http://yourwebsiteURLhere.com/social/handle/google

# https://www.google.com/recaptcha/admin#list
ENABLE_RECAPTCHA=true
RE_CAP_SITE=YOURGOOGLECAPTCHAsitekeyHERE
RE_CAP_SECRET=YOURGOOGLECAPTCHAsecretHERE

# https://developers.facebook.com/
FB_ID=YOURFACEBOOKidHERE
FB_SECRET=YOURFACEBOOKsecretHERE
FB_REDIRECT=http://yourwebsiteURLhere.com/social/handle/facebook

# https://apps.twitter.com/
TW_ID=YOURTWITTERidHERE
TW_SECRET=YOURTWITTERkeyHERE
TW_REDIRECT=http://yourwebsiteURLhere.com/social/handle/twitter

# https://github.com/settings/applications/new
GITHUB_ID=YOURIDHERE
GITHUB_SECRET=YOURSECRETHERE
GITHUB_URL=https://larablog.io/social/handle/github

# https://developers.google.com/youtube/v3/getting-started
YOUTUBE_KEY=YOURKEYHERE
YOUTUBE_SECRET=YOURSECRETHERE
YOUTUBE_REDIRECT_URI=https://larablog.io/social/handle/youtube

# http://www.twitch.tv/kraken/oauth2/clients/new
TWITCH_KEY=YOURKEYHERE
TWITCH_SECRET=YOURSECRETHERE
TWITCH_REDIRECT_URI=http://laravel-authentication.local/social/handle/twitch

# https://instagram.com/developer/register/
INSTAGRAM_KEY=YOURKEYHERE
INSTAGRAM_SECRET=YOURSECRETHERE
INSTAGRAM_REDIRECT_URI=http://laravel-authentication.local/social/handle/instagram

# https://basecamp.com/
# https://github.com/basecamp/basecamp-classic-api
37SIGNALS_KEY=YOURKEYHERE
37SIGNALS_SECRET=YOURSECRETHERE
37SIGNALS_REDIRECT_URI=http://laravel-authentication.local/social/handle/37signals

```

#### Laravel Developement Packages Used References
* http://laravel.com/docs/5.6/authentication
* http://laravel.com/docs/5.6/authorization
* http://laravel.com/docs/5.6/routing
* https://laravel.com/docs/5.6/migrations
* https://laravel.com/docs/5.6/queries
* https://laravel.com/docs/5.6/views
* https://laravel.com/docs/5.6/eloquent
* https://laravel.com/docs/5.6/eloquent-relationships
* https://laravel.com/docs/5.6/requests
* https://laravel.com/docs/5.6/errors

###### Updates:
* Update to Laravel 5.6
* Added optional 2-step account login verfication with [Laravel 2-Step Verification](https://github.com/jeremykenedy/laravel2step)
* Added activity logging using [Laravel-logger](https://github.com/jeremykenedy/laravel-logger)
* Added Configurable Email Notification using [Laravel-Exception-Notifier](https://github.com/jeremykenedy/laravel-exception-notifier)
* Update to Laravel 5.5
* Added User Delete with Goodbye email
* Added User Restore Deleted Account from email with secure token
* Added [Soft Deletes](https://laravel.com/docs/5.6/eloquent#soft-deleting) and Soft Deletes Management panel
* Added User Account Settings to Profile Edit
* Added User Change Password to Profile Edit
* Added User Delete Account to Profile Edit
* Added [Password Strength Meter](https://github.com/elboletaire/password-strength-meter)
* Added [hideShowPassword](https://github.com/cloudfour/hideShowPassword)
* Added Admin Routing Details
* Admin PHP Information
* Added Robust [Laravel Logging](https://laravel.com/docs/5.6/errors#logging) with admin UI using MonoLog
* Added Active Nav states using [Laravel Requests](https://laravel.com/docs/5.6/requests)
* Added [Laravel Debugger](https://github.com/barryvdh/laravel-debugbar) with Service Provider to manage status in `.env` file.
* Updated Capture IP not found IP address
* Added User Avatar Image AJAX Upload with [Dropzone.js](http://www.dropzonejs.com/#configuration)
* Added User Gravatar using Gravatar API
* Added Themes Management.
* Add user profiles with seeded list and global view
* Major overhaul on Laravel 5.4
* Update from Laravel 5.1 to 5.2
* Added eloquent editable user profile
* Added IP Capture
* Added Google Maps API v3 for User Location lookup
* Added Google Maps API v3 for User Location Input Geocoding
* Added Google Maps API v3 for User Location Map with Options
* Added CRUD(Create, Read, Update, Delete) User Management


### Laravel Auth License
Laravel-auth is licensed under the [MIT license](https://opensource.org/licenses/MIT). Enjoy!
