<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
?>
<?php
if (post_password_required()) {
  return;
}
?>

<div id="comments" class="comments-area">
  <h2 class="comments-title">
    Comentários
  </h2>
  <?php if (have_comments()): ?>
    <?php comment_form(); ?>


    <?php the_comments_navigation(); ?>

    <ol class="comment-list">
      <?php
      wp_list_comments(array(
        'style' => 'ol',
        'short_ping' => true,
        'callback' => 'wc_custom_comment_template',
      ));
      ?>
    </ol>

    <?php the_comments_navigation(); ?>

    <?php if (!comments_open()): ?>
      <p class="no-comments"><?php esc_html_e('Comments are closed.', '_s'); ?></p>
    <?php endif; ?>


  <?php else: ?>
    <p class="no-comments">Nenhum comentário!</p>
  <?php endif; ?>

</div>

<?php
/**
 * Callback personalizada para renderizar cada comentário
 */

function wc_custom_comment_template($comment, $args, $depth)
{
  $GLOBALS['comment'] = $comment;
  ?>

  <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
    <article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
      <footer class="comment-meta">
        <div class="comment-author vcard">
          <?php echo get_avatar($comment, 48); ?>
          <div>
            <b class="fn"><?php comment_author_link(); ?></b>
            <span class="comment-date">Comentou em <?php echo get_comment_date('M d, Y'); ?></span>
          </div>
        </div>
      </footer>

      <div class="comment-content">
        <?php comment_text(); ?>
      </div>

      <?php
      // Curtidas
      $likes = get_comment_meta(get_comment_ID(), 'likes', true);
      if (!$likes)
        $likes = 0;
      ?>
      <?php
      // Curtidas
      $deslikes = get_comment_meta(get_comment_ID(), 'deslikes', true);
      if (!$deslikes)
        $deslikes = 0;
      ?>
     <div class="wc-comment-actions">
        <div class="wc-comment-like" data-comment-id="<?php echo get_comment_ID(); ?>">
          <button class="wc-like-btn" id="wc-like-btn">
           aaa
          </button>
          <span class="wc-like-count"><?php echo esc_html($deslikes); ?></span>
        </div>
        <div class="wc-comment-deslike" data-comment-id="<?php echo get_comment_ID(); ?>">
          <button class="wc-deslike-btn" id="wc-deslike-btn">
           aaa
          </button>
          <span class="wc-deslike-count"><?php echo esc_html($deslikes); ?></span>
        </div>
        <div class="reply">
          <?php
          comment_reply_link(array_merge($args, array(
            'reply_text' => 'Responder',
            'depth' => $depth,
            'max_depth' => $args['max_depth']
          )));
          ?>
        </div>
      </div>
    </article>
  </li>

  <?php
}
?>


</div><!-- #comments -->

