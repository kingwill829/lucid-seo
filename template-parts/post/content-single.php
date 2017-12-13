			<h1 itemprop="headline"><?php the_title(); ?></h1>

			<div class="post-meta">
				<div class="clearfix">
					<time class="post-meta__date">
						<?php the_date(); ?>
					</time>

					<p class="post-meta__author">
						By: <?php the_author(); ?>
					</p>
				</div>
				<div class="post-meta__like">
					
				</div>
			</div>

			<article itemprop="articleBody">
				<?php the_content(); ?>
			</article>

			<section class="post-comments">
				<?php comments_template(); ?>
			</section>