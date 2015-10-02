<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="alert">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<div id="comments">
	<h3><?php comments_number('No Comments', '1 Comment', '% Comments');?></h3>

	<?php if(have_comments()) : ?>

		<ol class="commentlist">
			<?php wp_list_comments('avatar_size=64&type=comment'); ?>
		</ol>

		<?php if ($wp_query->max_num_pages > 1) : ?>

			<div class="pagination">
				<ul>
					<li class="older"><?php previous_comments_list('Older') ?></li>
					<li class="newer"><?php previous_comments_list('Newer') ?></li>
				</ul>
			</div>
		<?php endif; ?>

<?php endif; ?>


<?php if (comments_open() ) : ?>

	<div id="respond">
		<h3>Leave a response</h3>

		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<fieldset>
				<label for="author">Name:</label>
				<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" />

				<label for="email">Email:</label>
				<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" />

				<label for="url">Website:</label>
				<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" />

				<label for="comment">Message:</label>
				<textarea name="comment" id="comment" cols="" rows=""></textarea>

				<input type="submit" class="commentsubmit" value="Submit Comment" />

				<?php comment_id_fields(); ?>
				<?php do_action('comment_form', $post->ID); ?>
			</fieldset>
		</form>
		<p class="cancel"><?php cancel_comment_reply_link('Cancel Reply'); ?></p>
	</div>

	<?php else : ?>

	<h3>Comments are now closed.</h3>
<?php endif; ?>

</div><!--comments-->
