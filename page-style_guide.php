<?php

/*
 * Template Name: Style Guide
 */

get_header(); ?>

<header class="wrap hpad clearfix">
  <h1 class="center">Scratch Theme Style Guide</h1>
  <p class="center">For a complete list of CSS helper classes, see <a href="https://github.com/zackphilipps/scratch-theme/blob/master/core/scss/_global.scss">core/scss/_global.scss</a>. (Don't edit; view it for reference.)</p>
  <p class="center">To make visible changes to the Style Guide, you'll need to edit <code>scss/_custom-variables.scss</code>, <code>scss/_custom-global.scss</code>, and <code>page-style_guide.php</code>.</p>
  <p class="center">Feel free to right-click anything and select "Inspect Element" to see color codes, fonts, etc. See the <a href="http://www.html5rocks.com/en/tutorials/developertools/part1/">Introduction to Chrome Developer Tools.</a> Resize your browser window to see how the different elements behave.</p>
  <p class="center">View <a href="http://scratchtheme.com">the Scratch Theme website</a> for further documentation.</p>
</header>

<section class="clearfix vmarg-half">
  <h2 class="center">Containers</h2>
  <p class="center">Scratch Theme comes with 3 different containers.</p>
  <figure class="flex-contain hpad clearfix block-image gray-bg">
    <figcaption class="center valign">
      <small>Flex-Contain</small>
    </figcaption>
  </figure><br>
  <figure class="wrap hpad clearfix block-image gray-bg">
    <figcaption class="center valign"><small>Wrap</small></figcaption>
  </figure><br>
  <figure class="contain hpad clearfix block-image gray-bg">
    <figcaption class="center valign"><small>Contain</small></figcaption>
  </figure>
</section>

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
    <figure class="threecol first block-image black-bg">
      <figcaption class="white center valign">Black</figcaption>
    </figure>
    <figure class="threecol block-image red-bg">
      <figcaption class="white center valign">Red</figcaption>
    </figure>
    <figure class="threecol block-image orange-bg">
      <figcaption class="white center valign">Orange</figcaption>
    </figure>
    <figure class="threecol last block-image yellow-bg">
      <figcaption class="center valign">Yellow</figcaption>
    </figure>
  </section>
  <section class="clearfix vmarg-half">
    <figure class="threecol first block-image green-bg">
      <figcaption class="white center valign">Green</figcaption>
    </figure>
    <figure class="threecol block-image blue-bg">
      <figcaption class="white center valign">Blue</figcaption>
    </figure>
    <figure class="threecol block-image purple-bg">
      <figcaption class="white center valign">Purple</figcaption>
    </figure>
    <figure class="threecol last block-image gray-bg">
      <figcaption class="center valign">Gray</figcaption>
    </figure>
  </section>
  
  <section class="clearfix vmarg-half">
    <h2 class="center">Links</h2>
    <figure class="sixcol first block-image gray-bg">
      <figcaption class="center valign"><a href="">Normal</a></figcaption>
    </figure>
    <figure class="sixcol last block-image gray-bg">
      <figcaption class="center valign">
        <a href="" class="button">Button</a><br><br>
        <a href="" class="button black">Button</a>
      </figcaption>
    </figure>
  </section>
  
</main>

<?php get_footer(); ?>