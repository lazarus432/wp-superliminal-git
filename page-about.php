<?php 

/*
* Template Name: About Page
*/

get_header(); ?>

<!-- Page Header -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php $image = get_field('banner'); ?>

    <header class="about" style="background-image: url('<?php echo $image['url']; ?>')">
    </header>

    <div class="heading">
        <h1><?php the_title(); ?></h1>
      </div>

    <!-- Main Content -->
    <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
          </div>
        </div>
      </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php the_content() ?>
        </div>
      </div>
    </div>

<?php endwhile; else: ?>
    <p>Sorry, page not found.</p>
<?php endif; ?>

<?php get_footer(); ?>