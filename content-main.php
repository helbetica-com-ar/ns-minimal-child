<div class="container">
  <div id="content" class="site-content">
    <div id="primary" class="content-area column full">
      <ul class="nav nav-tabs nav-fill mb-3" id="gofio-tabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button
            class="nav-link flex-fill active"
            id="the-project"
            data-mdb-toggle="tab"
            data-mdb-target="#project"
            type="button"
            role="tab"
            aria-controls="project"
            aria-selected="true"
          >
            Project
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button
            class="nav-link flex-fill"
            id="participation"
            data-mdb-toggle="tab"
            data-mdb-target="#participate"
            type="button"
            role="tab"
            aria-controls="participate"
            aria-selected="false"
          >
            Participate
          </button>
        </li>
      
      
        <li class="nav-item" role="presentation">
          <button
            class="nav-link flex-fill"
            id="blog-tab"
            data-mdb-toggle="tab"
            data-mdb-target="#blog"
            type="button"
            role="tab"
            aria-controls="blog"
            aria-selected="false"
          >
            Blog
          </button>
        </li>
      
      
      
        <li class="nav-item" role="presentation">
          <button
            class="nav-link"
            id="contact-tab"
            data-mdb-toggle="tab"
            data-mdb-target="#contact"
            type="button"
            role="tab"
            aria-controls="contact"
            aria-selected="false"
          >
            Credits
          </button>
        </li>
      </ul>
      <div class="tab-content" id="gofio-tabs-content">
        <div class="tab-pane fade show active"id="project"role="tabpanel"aria-labelledby="the-project">
          <?php get_template_part( 'content', 'project' ); ?>
        </div>
        <div class="tab-pane fade" id="participate" role="tabpanel" aria-labelledby="participation">
          <?php get_template_part( 'content', 'participate' ); ?>
        </div>
      
      
        <div class="tab-pane fade" id="blog" role="tabpanel" aria-labelledby="blog-tab">
          <?php get_template_part( 'content', 'blog' ); ?>
        </div>
      
      
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <?php get_template_part( 'content', 'credits' ); ?>
        </div>
      </div>
    </div><!-- #primary -->
  </div><!-- #content -->
</div><!-- .container -->