# Scratch Theme for WordPress

## SCSS

View [`master.scss`](https://github.com/zackphilipps/scratch-theme/blob/master/scss/master.scss) and [`ie.scss`](https://github.com/zackphilipps/scratch-theme/blob/master/scss/ie.scss), and have a look at the structure. 

Also note the `sass` task in [`Gruntfile.js`](https://github.com/zackphilipps/scratch-theme/blob/master/grunt/Gruntfile.js).

If you name your files prefixed with an underscore, they will not be compiled into a `.css` file. This ensures that you're only compiling what you want to [enqueue](http://codex.wordpress.org/Function_Reference/wp_enqueue_style) and vice versa. 

View [`functions.php`](https://github.com/zackphilipps/scratch-theme/blob/master/functions.php) to see how `master.css`, `ie.css`, and `login.css` are enqueued.