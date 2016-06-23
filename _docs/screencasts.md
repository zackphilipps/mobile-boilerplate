---
title: Screencasts
currentMenu: screencasts
---

These screencasts pick up after you've set up your environment, set up your `wp-config.php` file, and run the WordPress installation. For instructions on how to do that, specifically via the command line, [click here](/getting-started.html).

## Using MAMP to Complete the WordPress Installation

Open the MAMP start page, and then head over to phpMyAdmin. Click on the _Users_ tab, then scroll down and click _Add User._ Create a memorable username, strong password, and set the host to `localhost`. Check _Create database with same name and grant all privileges,_ then click _Go._

Now, navigate to `localhost:xxxx` where `xxxx` is the web port you configured in MAMP's preferences. Complete the WordPress installation and log in.

![Using MAMP to Complete the WordPress Installation](/_assets/img/screencast2-slower.gif)

## Activating Scratch & Installing Recommended Plugins

Once logged in to WordPress, navigate to _Appearance > Themes_ and activate Scratch. Follow the subsequent prompts to install the recommended plugins. If you want, delete Akismet and Hello Dolly.

![Activating Scratch & Installing Recommended Plugins](/_assets/img/screencast3.gif)

## Running Grunt, BrowserSync, and Compiling SCSS and JavaScript

Run `npm install` in the `_assets/grunt/` directory from your command line to install all of the Node packages. Once that's done, you can run `grunt` from the same directory to begin your automated workflow.

**Update:** as of [v1.5.9](https://github.com/zackphilipps/scratch-theme/tree/v1.5.9), Gulp is also available. Run `npm install` and then `gulp` in the `_assets/gulp/` directory.

![Running Grunt, BrowserSync, and Compiling SCSS and JavaScript](/_assets/img/screencast4-pattern.gif)

## Adding Scratch's Style Guide and Main Navigation Menu

Navigate to _Appearance > Menus_ and click _Create Menu._ Make sure the menu points to the _Main Nav_ location, and then save it again. Next, go to _Pages > Add New_ and set the Page Template to _Style Guide._ Publish and view the page.

![Adding Scratch's Style Guide and Main Navigation Menu](/_assets/img/screencast5.gif)

## Implementing Your Own Typography with Scratch

This example uses Google Fonts and sets them to SCSS variables in [config/_variables.scss](https://github.com/zackphilipps/scratch-theme/blob/master/_assets/scss/config/_variables.scss).

![Implementing Your Own Typography with Scratch](/_assets/img/screencast6-pattern.gif)

## Implementing Your Own Color Scheme with Scratch

Edit [config/_variables.scss](https://github.com/zackphilipps/scratch-theme/blob/master/_assets/scss/config/_variables.scss) and [page-style_guide.php](https://github.com/zackphilipps/scratch-theme/blob/master/page-style_guide.php).

![Implementing Your Own Color Scheme with Scratch](/_assets/img/screencast7-pattern.gif)

## Moving the Right Files to the Root of Your Site & Editing the Permalink Structure

Basically, `_root/` contains files that should be moved to the root of your site if you desire to use the configuration that comes with [HTML5 Boilerplate](https://github.com/h5bp/html5-boilerplate).

Navigate to _Settings > Permalinks_, and change the Permalink Structure to _Post Name_ for cleaner, SEO-friendly URLs.

![Moving the Right Files to the Root of Your Site & Editing the Permalink Structure](/_assets/img/screencast8-pattern.gif)

## Congratulations!

High fives, you're all finished! If you're having trouble, feel free to [submit an issue on GitHub](https://github.com/zackphilipps/scratch-theme/issues).

---

**Next up:** [CSS](/css.html)
