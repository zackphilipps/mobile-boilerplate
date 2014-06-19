<?php

/*
 * Template Name: Style Guide
 */

get_header(); ?>

<header class="wrap hpad clearfix">
  <h1 class="center">Scratch Theme Style Guide</h1>
  <p class="center">To make visible changes to the Style Guide, you'll need to edit <a href="https://github.com/zackphilipps/scratch-theme/blob/master/scss/_custom-variables.scss">scss/_custom-variables.scss</a>, <a href="https://github.com/zackphilipps/scratch-theme/blob/master/scss/_custom-global.scss">scss/_custom-global.scss</a>, and <a href="https://github.com/zackphilipps/scratch-theme/blob/master/page-style_guide.php">page-style_guide.php</a>.</p>
  <p class="center">Feel free to right-click anything and select "Inspect Element" to see color codes, fonts, etc. See the <a href="http://www.html5rocks.com/en/tutorials/developertools/part1/">Introduction to Chrome Developer Tools.</a></p>
  <p class="center">View <a href="http://scratchtheme.com">the Scratch Theme website</a> for further documentation.</p>
</header>

<main class="wrap hpad clearfix">

  <section>
    
    <h2 class="center">Typography</h2>
    
    <h1>Heading 1</h1>
    <h2>Heading 2</h2>
    <h3>Heading 3</h3>
    <h4>Heading 4</h4>
    <h5>Heading 5</h5>
    <h6>Heading 6</h6>
    
    <p>I barely knew Philip, but as a clergyman I have no problem telling his most intimate friends all about him. Ok, we'll go deliver this crate like professionals, and then we'll go ride the bumper cars. Switzerland is small and neutral! We are more like Germany, ambitious and misunderstood! One hundred dollars. Say it in Russian! Who's brave enough to fly into something we all keep calling a death sphere?</p>
    
    <ul>

      <li>I've got to find a way to escape the <strong>horrible ravages of youth</strong>. Suddenly, I'm going to the bathroom like clockwork, every three hours. And those jerks at Social Security stopped sending me checks. Now 'I'' have to pay ''them'!</li>
      <li>Kif, <em>I have mated with a woman</em>. Inform the men.</li>
    </ul>
    
    <blockquote>
      <h3>Blockquote</h3>
      <p>Good man. Nixon's pro-war and pro-family. Son, as your lawyer, I declare y'all are in a 12-piece bucket o' trouble. But I done struck you a deal: Five hours of community service cleanin' up that ol' mess you caused.</p>
      <small> - A Clone of My Own</small>
    </blockquote>

  </section>
  
  <section class="clearfix vmarg-half">
    <h2 class="center">Colors</h2>
    <figure class="threecol first scratch-image black-bg">
      <figcaption class="white center valign">Black</figcaption>
    </figure>
    <figure class="threecol scratch-image red-bg">
      <figcaption class="white center valign">Red</figcaption>
    </figure>
    <figure class="threecol scratch-image orange-bg">
      <figcaption class="white center valign">Orange</figcaption>
    </figure>
    <figure class="threecol last scratch-image yellow-bg">
      <figcaption class="center valign">Yellow</figcaption>
    </figure>
  </section>
  <section class="clearfix vmarg-half">
    <figure class="threecol first scratch-image green-bg">
      <figcaption class="white center valign">Green</figcaption>
    </figure>
    <figure class="threecol scratch-image blue-bg">
      <figcaption class="white center valign">Blue</figcaption>
    </figure>
    <figure class="threecol scratch-image purple-bg">
      <figcaption class="white center valign">Purple</figcaption>
    </figure>
    <figure class="threecol last scratch-image gray-bg">
      <figcaption class="center valign">Gray</figcaption>
    </figure>
  </section>
  
  <section class="clearfix vmarg-half">
    <h2 class="center">Links</h2>
    <figure class="sixcol first scratch-image gray-bg">
      <figcaption class="center valign"><a href="">Normal</a></figcaption>
    </figure>
    <figure class="sixcol last scratch-image gray-bg">
      <figcaption class="center valign">
        <a href="" class="button">Button</a><br><br>
        <a href="" class="button black">Button</a>
      </figcaption>
    </figure>
  </section>
  
</main>

<?php get_footer(); ?>