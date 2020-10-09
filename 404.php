<?php get_header(); ?>

	<h2 class="pageTitle">404 NOT FOUND<span>ERROR</span></h2>

    <?php get_template_part('template-parts/breadcrumb'); ?>

	<main class="main">
		<div class="container">
          <div class="row">
            <div class="col-12 col-md-9">
              <p>お探しのページが見つかりませんでした。</p>
              <p>申し訳ございませんが、<a href="<?php echo home_url('/'); ?>">こちらのリンク</a>からトップページにお戻りください。</p>
            </div>
                        
           <div class="col-12 col-md-3">
                <?php get_sidebar('latests'); ?>
                <?php get_sidebar('categories'); ?>
                <?php get_sidebar('archives'); ?>
		   </div>
          </div>
          
         </div>
	</main>

<?php get_footer(); ?>