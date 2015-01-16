<?php

function hide_admin_bar_from_front_end() {
  if (is_blog_admin()) {
    return true;
  }
  return false;
}

add_filter( 'show_admin_bar', 'hide_admin_bar_from_front_end' );









add_action('init', 'bones_head_cleanup');

/*********************
WP_HEAD GOODNESS
The default wordpress head is
a mess. Let's clean it up by
removing all the junk we don't
need.
*********************/

function bones_head_cleanup() {
  // category feeds
  // remove_action( 'wp_head', 'feed_links_extra', 3 );
  // post and comment feeds
  // remove_action( 'wp_head', 'feed_links', 2 );
  // EditURI link
  remove_action( 'wp_head', 'rsd_link' );
  // windows live writer
  remove_action( 'wp_head', 'wlwmanifest_link' );
  // index link
  remove_action( 'wp_head', 'index_rel_link' );
  // previous link
  remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
  // start link
  remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
  // links for adjacent posts
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

} /* end bones head cleanup */









/*
 * LAYOUT FUNCTIONS
 * Feel free to create your own layout functions, or write your own calls to these
 * in your template files.
 */

function two_columns($count) {
  $string = "sixcol";
  if($count % 2 == 0) {
    $string .= " last";
  } else {
    $string .= " first";
  }
  return $string;
}

function two_columns_12($count) {
  if($count % 2 == 0) {
    $string = "eightcol last";
  } else {
    $string = "fourcol first";
  }
  return $string;
}

function two_columns_21($count) {
  if($count % 2 == 0) {
    $string = "fourcol last";
  } else {
    $string = "eightcol first";
  }
  return $string;
}

function three_columns($count) {
  $string = "fourcol";
  if($count % 3 == 0) {
    $string .= " last";
  } elseif(($count - 1) % 3 == 0) {
    $string .= " first";
  }
  return $string;
}

function three_columns_112($count) {
  $string = "threecol";
  if($count % 3 == 0) {
    $string = "sixcol last";
  } elseif(($count - 1) % 3 == 0) {
    $string .= " first";
  }
  return $string;
}

function three_columns_121($count) {
  $string = "sixcol";
  if($count % 3 == 0) {
    $string = "threecol last";
  } elseif(($count - 1) % 3 == 0) {
    $string = "threecol first";
  }
  return $string;
}

function three_columns_211($count) {
  $string = "threecol";
  if($count % 3 == 0) {
    $string .= " last";
  } elseif(($count - 1) % 3 == 0) {
    $string = "sixcol first";
  }
  return $string;
}

function four_columns($count) {
  $string = "threecol";
  if($count % 4 == 0) {
    $string .= " last";
  } elseif(($count - 1) % 4 == 0) {
    $string .= " first";
  }
  return $string;
}

function five_columns($count) {
  $string = "twoptfourcol";
  if($count % 5 == 0) {
    $string .= " last";
  } elseif(($count - 1) % 5 == 0) {
    $string .= " first";
  }
  return $string;
}

function six_columns($count) {
  $string = "twocol";
  if($count % 6 == 0) {
    $string .= " last";
  } elseif(($count - 1) % 6 == 0) {
    $string .= " first";
  }
  return $string;
}

function custom_columns($count) {

  $string = "custom-col";
  
  if($count % 2 == 0) {
    $string .= " even";
  } else {
    $string .= " odd";
  }
  
  if($count % 3 == 0) {
    $string .= " three-last";
  } elseif(($count - 1) % 3 == 0) {
    $string .= " three-first";
  }
  
  if($count % 4 == 0) {
    $string .= " four-last";
  } elseif(($count - 1) % 4 == 0) {
    $string .= " four-first";
  }
  
  return $string;
  
}

function two_columns_flex($blocks, $count) {
  $block_count = count($blocks);
  if($block_count % 2 == 0) {
    return two_columns($count);
  } elseif(($block_count - 1) % 2 == 0) {
    if($count == $block_count) {
      return "twelvecol first";
    } else {
      return two_columns($count);
    }
  } else {
    return "error";
  }
}

function three_columns_flex($blocks, $count) {
  $block_count = count($blocks);
  if($block_count % 3 == 0) {
    return three_columns($count);
  } elseif(($block_count + 1) % 3 == 0) {
    if($count == $block_count || $count == ($block_count - 1)) {
      if(($count - 1) % 3 == 0) {
        return "sixcol first";
      } else {
        return "sixcol last";
      }
    } else {
      return three_columns($count);
    }
  } elseif(($block_count - 1) % 3 == 0) {
    if($count == $block_count) {
      return "twelvecol first";
    } else {
      return three_columns($count);
    }
  } else {
    return "error";
  }
}

function four_columns_flex($blocks, $count) {
  $block_count = count($blocks);
  if($block_count % 4 == 0) {
    return four_columns($count);
  } elseif(($block_count + 1) % 4 == 0) {
    if($count == $block_count ||
       $count == ($block_count - 1) ||
       $count == ($block_count - 2)) {
      if(($count - 1) % 4 == 0) {
        return "fourcol first";
      } elseif(($count - 2) % 4 == 0) {
        return "fourcol";
      } else {
        return "fourcol last";
      }
    } else {
      return four_columns($count);
    }
  } elseif(($block_count + 2) % 4 == 0) {
    if($count == $block_count || $count == ($block_count - 1)) {
      if(($count - 1) % 4 == 0) {
        return "sixcol first";
      } else {
        return "sixcol last";
      }
    } else {
      return four_columns($count);
    }
  } elseif(($block_count - 1) % 4 == 0) {
    if($count == $block_count) {
      return "twelvecol first";
    } else {
      return four_columns($count);
    }
  } else {
    return "error";
  }
}









/*
 * NEW LAYOUT FUNCTIONS (v1.2 and up)
 * Feel free to create your own layout functions, or write your own calls to these
 * in your template files.
 */

function five_columns_flex($blocks, $count) {
  $block_count = count($blocks);
  if($block_count % 5 == 0) {
    return five_columns($count);
  } elseif(($block_count + 1) % 5 == 0) {
    if($count == $block_count ||
       $count == ($block_count - 1) ||
       $count == ($block_count - 2) ||
       $count == ($block_count - 3)) {
      if(($count - 1) % 5 == 0) {
        return "threecol first";
      } elseif(($count - 2) % 5 == 0 ||
               ($count - 3) % 5 == 0) {
        return "threecol";
      } else {
        return "threecol last";
      }
    } else {
      return five_columns($count);
    }
  } elseif(($block_count + 2) % 5 == 0) {
    if($count == $block_count ||
       $count == ($block_count - 1) ||
       $count == ($block_count - 2)) {
      if(($count - 1) % 4 == 0) {
        return "fourcol first";
      } elseif(($count - 2) % 4 == 0) {
        return "fourcol";
      } else {
        return "fourcol last";
      }
    } else {
      return five_columns($count);
    }
  } elseif(($block_count + 3) % 5 == 0) {
    if($count == $block_count ||
       $count == ($block_count - 1)) {
      if(($count - 1) % 5 == 0) {
        return "sixcol first";
      } else {
        return "sixcol last";
      }
    } else {
      return five_columns($count);
    }
  } elseif(($block_count - 1) % 5 == 0) {
    if($count == $block_count) {
      return "twelvecol first";
    } else {
      return five_columns($count);
    }
  } else {
    return "error";
  }
}

function six_columns_flex($blocks, $count) {
  $block_count = count($blocks);
  if($block_count % 6 == 0) {
    return six_columns($count);
  } elseif(($block_count + 1) % 6 == 0) {
    if($count == $block_count ||
       $count == ($block_count - 1) ||
       $count == ($block_count - 2) ||
       $count == ($block_count - 3) ||
       $count == ($block_count - 4)) {
      if(($count - 1) % 6 == 0) {
        return "twoptfourcol first";
      } elseif(($count - 2) % 5 == 0 ||
               ($count - 3) % 5 == 0 ||
               ($count - 4) % 5 == 0) {
        return "twoptfourcol";
      } else {
        return "twoptfourcol last";
      }
    } else {
      return six_columns($count);
    }
  } elseif(($block_count + 2) % 6 == 0) {
    if($count == $block_count ||
       $count == ($block_count - 1) ||
       $count == ($block_count - 2) ||
       $count == ($block_count - 3)) {
      if(($count - 1) % 6 == 0) {
        return "threecol first";
      } elseif(($count - 2) % 6 == 0 ||
               ($count - 3) % 6 == 0) {
        return "threecol";
      } else {
        return "threecol last";
      }
    } else {
      return six_columns($count);
    }
  } elseif(($block_count + 3) % 6 == 0) {
    if($count == $block_count ||
       $count == ($block_count - 1) ||
       $count == ($block_count - 2)) {
      if(($count - 1) % 6 == 0) {
        return "fourcol first";
      } elseif(($count - 2) % 6 == 0) {
        return "fourcol";
      } else {
        return "fourcol last";
      }
    } else {
      return six_columns($count);
    }
  } elseif(($block_count + 4) % 6 == 0) {
    if($count == $block_count ||
       $count == ($block_count - 1)) {
      if(($count - 1) % 6 == 0) {
        return "sixcol first";
      } else {
        return "sixcol last";
      }
    } else {
      return six_columns($count);
    }
  } elseif(($block_count - 1) % 6 == 0) {
    if($count == $block_count) {
      return "twelvecol first";
    } else {
      return six_columns($count);
    }
  } else {
    return "error";
  }
}

function scratch_row_start() {
  global $row_count, $column_count, $columns;
  if($columns !== 'custom') {
    if(($column_count - 1) % $columns === 0) {
      echo '<div class="clearfix row-' . $row_count . '">';
    }
  }
}

function scratch_column_start() {
  global $blocks, $column_count, $last, $twelvecol, $columns;
  $class = scratch_column_class();
  echo '<div class="' . $class . ' column-' . $column_count . '">';
  $last = strpos($class, 'last');
  $twelvecol = strpos($class, 'twelvecol');
}

function scratch_column_end() {
  global $column_count;
  echo '</div> <!-- /.column-' . $column_count . ' -->';
}

function scratch_row_end() {
  global $row_count, $column_count, $last, $twelvecol, $columns;
  if($columns !== 'custom') {
    if($last !== false || $twelvecol !== false) {
      echo '</div> <!-- /.row-' . $row_count . ' -->';
      $row_count++;
    }
  }
  $column_count++;
}

function scratch_column_class() {
  global $blocks, $column_count, $columns, $offset;
  switch($columns) {
    case 2:
    if($offset === '1:2') {
      return two_columns_12($column_count);
    } elseif($offset === '2:1') {
      return two_columns_21($column_count);
    } else {
      return two_columns_flex($blocks, $column_count);
    }
    break;
    case 3:
    if($offset === '1:1:2') {
      return three_columns_112($column_count);
    } elseif($offset === '1:2:1') {
      return three_columns_121($column_count);
    } elseif($offset === '2:1:1') {
      return three_columns_211($column_count);
    } else {
      return three_columns_flex($blocks, $column_count);
    }
    break;
    case 4:
    return four_columns_flex($blocks, $column_count);
    break;
    case 5:
    return five_columns_flex($blocks, $column_count);
    break;
    case 6:
    return six_columns_flex($blocks, $column_count);
    break;
    case 'custom':
    return custom_columns($column_count);
    break;
    default:
    return 'error';
    break;
  }
}

function scratch_layout_declare($args, $columns, $offset = null, $option = null) {
  if(is_array($args)) {
    $GLOBALS['blocks'] = get_posts($args);
  } else {
    if($option !== null) {
      $GLOBALS['blocks'] = get_field($args, $option);
    } else {
      $GLOBALS['blocks'] = get_field($args);
    }
  }
  $GLOBALS['row_count'] = $GLOBALS['column_count'] = 1;
  $GLOBALS['last'] = $GLOBALS['twelvecol'] = false;
  $GLOBALS['columns'] = $columns;
  $GLOBALS['offset'] = $offset;
}

function scratch_sub_layout_declare($args, $columns, $offset = null, $option = null) {
  if(is_array($args)) {
    $GLOBALS['blocks'] = get_posts($args);
  } else {
    if($option !== null) {
      $GLOBALS['blocks'] = get_sub_field($args, $option);
    } else {
      $GLOBALS['blocks'] = get_sub_field($args);
    }
  }
  $GLOBALS['row_count'] = $GLOBALS['column_count'] = 1;
  $GLOBALS['last'] = $GLOBALS['twelvecol'] = false;
  $GLOBALS['columns'] = $columns;
  $GLOBALS['offset'] = $offset;
}

function scratch_layout_start() {
  scratch_row_start();
  scratch_column_start();
}

function scratch_layout_end() {
  scratch_column_end();
  scratch_row_end();
}









/*
 * ACF SHORTCUTS (v1.2 and up)
 * Feel free to create your own ACF functions, or write your own calls to these
 * in your template files.
 */

function scratch_field($field_name, $tag = null, $classes = null, $option = null) {
  if($tag !== null) {
    $opening_tag = '<' . $tag;
    if($classes !== null) {
      $opening_tag .= ' class="' . $classes . '">';
    } else {
      $opening_tag .= '>';
    }
    $closing_tag = '</' . $tag . '>';
    if($option !== null) {
      if(get_field($field_name, $option)) {
        echo $opening_tag;
        the_field($field_name, $option);
        echo $closing_tag;
      }
    } else {
      if(get_field($field_name)) {
        echo $opening_tag;
        the_field($field_name);
        echo $closing_tag;
      }
    }
  } else {
    if($option !== null) {
      if(get_field($field_name, $option)) {
        the_field($field_name, $option);
      }
    } else {
      if(get_field($field_name)) {
        the_field($field_name);
      }
    }
  }
}

function scratch_raw_field($field_name, $before = null, $after = null, $option = null) {
  if($before !== null) {
    echo $before;
  }
  if($option !== null) {
    if(get_field($field_name, $option)) {
      the_field($field_name, $option);
    }
  } else {
    if(get_field($field_name)) {
      the_field($field_name);
    }
  }
  if($after !== null) {
    echo $after;
  }
}

function scratch_sub_field($field_name, $tag = null, $classes = null, $option = null) {
  if($tag !== null) {
    $opening_tag = '<' . $tag;
    if($classes !== null) {
      $opening_tag .= ' class="' . $classes . '">';
    } else {
      $opening_tag .= '>';
    }
    $closing_tag = '</' . $tag . '>';
    if($option !== null) {
      if(get_sub_field($field_name, $option)) {
        echo $opening_tag;
        the_sub_field($field_name, $option);
        echo $closing_tag;
      }
    } else {
      if(get_sub_field($field_name)) {
        echo $opening_tag;
        the_sub_field($field_name);
        echo $closing_tag;
      }
    }
  } else {
    if($option !== null) {
      if(get_sub_field($field_name, $option)) {
        the_sub_field($field_name, $option);
      }
    } else {
      if(get_sub_field($field_name)) {
        the_sub_field($field_name);
      }
    }
  }
}

function scratch_raw_sub_field($field_name, $before = null, $after = null, $option = null) {
  if($before !== null) {
    echo $before;
  }
  if($option !== null) {
    if(get_sub_field($field_name, $option)) {
      the_sub_field($field_name, $option);
    }
  } else {
    if(get_sub_field($field_name)) {
      the_sub_field($field_name);
    }
  }
  if($after !== null) {
    echo $after;
  }
}

function scratch_link_start($href, $title, $classes = null, $option = null) {
  if($option !== null) {
    if(get_field($href, $option)) {
      echo '<a href="' . get_field($href, $option) . '"';
      echo ' title="' . get_field($title, $option) . '"';
      if($classes !== null) {
        echo ' class="' . $classes . '">';
      } else {
        echo '>';
      }
    }
  } else {
    if(get_field($href)) {
      echo '<a href="' . get_field($href) . '"';
      echo ' title="' . get_field($title) . '"';
      if($classes !== null) {
        echo ' class="' . $classes . '">';
      } else {
        echo '>';
      }
    }
  }
}

function scratch_link_end($href, $option = null) {
  if($option !== null) {
    if(get_field($href, $option)) {
      echo '</a>';
    }
  } else {
    if(get_field($href)) {
      echo '</a>';
    }
  }
}

function scratch_sub_link_start($href, $title, $classes = null, $option = null) {
  if($option !== null) {
    if(get_sub_field($href, $option)) {
      echo '<a href="' . get_sub_field($href, $option) . '"';
      echo ' title="' . get_sub_field($title, $option) . '"';
      if($classes !== null) {
        echo ' class="' . $classes . '">';
      } else {
        echo '>';
      }
    }
  } else {
    if(get_sub_field($href)) {
      echo '<a href="' . get_sub_field($href) . '"';
      echo ' title="' . get_sub_field($title) . '"';
      if($classes !== null) {
        echo ' class="' . $classes . '">';
      } else {
        echo '>';
      }
    }
  }
}

function scratch_sub_link_end($href, $option = null) {
  if($option !== null) {
    if(get_sub_field($href, $option)) {
      echo '</a>';
    }
  } else {
    if(get_sub_field($href)) {
      echo '</a>';
    }
  }
}

function scratch_image_start($src, $classes = null, $option = null) {
  if($option !== null) {
    if(get_field($src, $option)) {
      echo '<figure class="scratch-image';
      if($classes !== null) {
        echo ' ' . $classes . '"';
      } else {
        echo '"';
      }
      echo ' style="background-image: url(' . get_field($src, $option) . ');">';
    }
  } else {
    if(get_field($src)) {
      echo '<figure class="scratch-image';
      if($classes !== null) {
        echo ' ' . $classes . '"';
      } else {
        echo '"';
      }
      echo ' style="background-image: url(' . get_field($src) . ');">';
    }
  }
}

function scratch_image_end($src, $option = null) {
  if($option !== null) {
    if(get_field($src, $option)) {
      echo '</figure>';
    }
  } else {
    if(get_field($src)) {
      echo '</figure>';
    }
  }
}

function scratch_sub_image_start($src, $classes = null, $option = null) {
  if($option !== null) {
    if(get_sub_field($src, $option)) {
      echo '<figure class="scratch-image';
      if($classes !== null) {
        echo ' ' . $classes . '"';
      } else {
        echo '"';
      }
      echo ' style="background-image: url(' . get_sub_field($src, $option) . ');">';
    }
  } else {
    if(get_sub_field($src)) {
      echo '<figure class="scratch-image';
      if($classes !== null) {
        echo ' ' . $classes . '"';
      } else {
        echo '"';
      }
      echo ' style="background-image: url(' . get_sub_field($src) . ');">';
    }
  }
}

function scratch_sub_image_end($src, $option = null) {
  if($option !== null) {
    if(get_sub_field($src, $option)) {
      echo '</figure>';
    }
  } else {
    if(get_sub_field($src)) {
      echo '</figure>';
    }
  }
}

function scratch_icon($field_name, $classes = null, $option = null) {
  if($option !== null) {
    if(get_field($field_name, $option)) {
      if($classes !== null) {
        echo '<i class="' . get_field($field_name, $option) . ' ' . $classes . '"></i>';
      } else {
        echo '<i class="' . get_field($field_name, $option) . '"></i>';
      }
    }
  } else {
    if(get_field($field_name)) {
      if($classes !== null) {
        echo '<i class="' . get_field($field_name) . ' ' . $classes . '"></i>';
      } else {
        echo '<i class="' . get_field($field_name) . '"></i>';
      }
    }
  }
}

function scratch_sub_icon($field_name, $classes = null, $option = null) {
  if($option !== null) {
    if(get_sub_field($field_name, $option)) {
      if($classes !== null) {
        echo '<i class="' . get_sub_field($field_name, $option) . ' ' . $classes . '"></i>';
      } else {
        echo '<i class="' . get_sub_field($field_name, $option) . '"></i>';
      }
    }
  } else {
    if(get_sub_field($field_name)) {
      if($classes !== null) {
        echo '<i class="' . get_sub_field($field_name) . ' ' . $classes . '"></i>';
      } else {
        echo '<i class="' . get_sub_field($field_name) . '"></i>';
      }
    }
  }
}

function scratch_icon_circle($field_name, $option = null) {
  if($option !== null) {
    if(get_field($field_name, $option)) {
      echo '<div class="circle center">';
      echo '<i class="' . get_field($field_name, $option) . ' valign-always"></i>';
      echo '</div>';
    }
  } else {
    if(get_field($field_name)) {
      echo '<div class="circle center">';
      echo '<i class="' . get_field($field_name) . ' valign-always"></i>';
      echo '</div>';
    }
  }
}

function scratch_sub_icon_circle($field_name, $option = null) {
  if($option !== null) {
    if(get_sub_field($field_name, $option)) {
      echo '<div class="circle center">';
      echo '<i class="' . get_sub_field($field_name, $option) . ' valign-always"></i>';
      echo '</div>';
    }
  } else {
    if(get_sub_field($field_name)) {
      echo '<div class="circle center">';
      echo '<i class="' . get_sub_field($field_name) . ' valign-always"></i>';
      echo '</div>';
    }
  }
}

function scratch_button($href, $title, $classes = null, $option = null) { ?>

<?php if($option !== null) { ?>

<?php if(get_field($title, $option)) { ?>

<p>
  <a class="button<?php if($classes !== null) { echo ' ' . $classes; } ?>"
   href="<?php the_field($href, $option); ?>"
   title="<?php the_field($title, $option); ?>">
   <?php the_field($title, $option); ?>
 </a>
</p>

<?php } ?>

<?php } else { ?>

<?php if(get_field($title)) { ?>

<p>
  <a class="button<?php if($classes !== null) { echo ' ' . $classes; } ?>"
   href="<?php the_field($href); ?>"
   title="<?php the_field($title); ?>">
   <?php the_field($title); ?>
 </a>
</p>

<?php } ?>

<?php }

}

function scratch_sub_button($href, $title, $classes = null, $option = null) { ?>

<?php if($option !== null) { ?>

<?php if(get_sub_field($title, $option)) { ?>

<p>
  <a class="button<?php if($classes !== null) { echo ' ' . $classes; } ?>"
   href="<?php the_sub_field($href, $option); ?>"
   title="<?php the_sub_field($title, $option); ?>">
   <?php the_sub_field($title, $option); ?>
 </a>
</p>

<?php } ?>

<?php } else { ?>

<?php if(get_sub_field($title)) { ?>

<p>
  <a class="button<?php if($classes !== null) { echo ' ' . $classes; } ?>"
   href="<?php the_sub_field($href); ?>"
   title="<?php the_sub_field($title); ?>">
   <?php the_sub_field($title); ?>
 </a>
</p>

<?php } ?>

<?php }

}









/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/php/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function my_theme_register_required_plugins() {

	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin from the WordPress Plugin Repository
                   array(
                         'name' 		=> 'Custom Post Type UI',
                         'slug' 		=> 'custom-post-type-ui',
                         'required' 	=> false,
                         ),
                   array(
                         'name' 		=> 'Relevanssi - A Better Search',
                         'slug' 		=> 'relevanssi',
                         'required' 	=> false,
                         ),
                   array(
                         'name' 		=> 'Resize Image After Upload',
                         'slug' 		=> 'resize-image-after-upload',
                         'required' 	=> false,
                         ),
                   array(
                         'name' 		=> 'WordPress Backup to Dropbox',
                         'slug' 		=> 'wordpress-backup-to-dropbox',
                         'required' 	=> false,
                         ),
                   array(
                         'name'      => 'WordPress SEO by Yoast',
                         'slug'      => 'wordpress-seo',
                         'required'  => false,
                         ),
                   array(
                         'name'      => 'WP Migrate DB',
                         'slug'      => 'wp-migrate-db',
                         'required'  => false,
                         )

                   );

	// Change this to your theme text domain, used for internationalising strings
$theme_text_domain = 'tgmpa';

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'domain'       		=> $theme_text_domain,         	// Text domain - likely want to be the same as your theme.
		'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
		'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
		'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
		'menu'         		=> 'install-required-plugins', 	// Menu slug
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> false,					   	// Automatically activate plugins after installation or not
		'message' 			=> '',							// Message to output right before the plugins table
		'strings'      		=> array(
                             'page_title'                       			=> __( 'Install Required Plugins', $theme_text_domain ),
                             'menu_title'                       			=> __( 'Install Plugins', $theme_text_domain ),
			'installing'                       			=> __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name
			'oops'                             			=> __( 'Something went wrong with the plugin API.', $theme_text_domain ),
			'notice_can_install_required'     			=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'			=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
			'install_link' 					  			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
			'activate_link' 				  			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
			'return'                           			=> __( 'Return to Required Plugins Installer', $theme_text_domain ),
			'plugin_activated'                 			=> __( 'Plugin activated successfully.', $theme_text_domain ),
			'complete' 									=> __( 'All plugins installed and activated successfully. %s', $theme_text_domain ), // %1$s = dashboard link
			'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
      )
);

tgmpa( $plugins, $config );

}

?>