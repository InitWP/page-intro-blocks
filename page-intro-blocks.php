<?php /************************************* Page Intro Blocks *************************************/
if( have_rows('page_intro_blocks') ): ?>
	<div class="grid-{{number}} teaserIntroBlocks grid-equalColumns">

	<?php while( have_rows('page_intro_blocks') ): the_row();

		// Get the page
		$block_title = get_sub_field('page_intro_block_title');
		$block_introtext = get_sub_field('page_intro_block_introtext');
		$block_pagelink = get_sub_field('page_intro_block_page_link');

		if ($block_title && $block_introtext && $block_pagelink) {
		?>
			<div class="teaserIntroBlock">
				<a href="<?php echo $block_pagelink; ?>" class="teaserIntroBlock--inner">
					{{#if title}}
					<h2 class="teaserIntroBlock--title"><?php echo $block_title; ?></h2>
					{{/if}}
					<div class="teaserIntroBlock--content">
						<?php echo $block_introtext; ?>
					</div>
					{{#if readmore}}
					<div class="readmore">
						<?php echo 'Read more > (make global)' ?>
					</div>
					{{/if}}
				</a>
			</div>
			<?php
		}

	endwhile; ?>

	</div>
<?php
endif;
/************************************* /Page Intro Blocks *************************************/ ?>
