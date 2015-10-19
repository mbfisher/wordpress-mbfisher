<?php
/**
 *
 */
get_header(); ?>
<div id="home">
    <header class="container">
        <div class="row">
            <div class="avatar col-sm-6">
                <img class="avatar--circle" src="http://www.gravatar.com/avatar/3cec7764e69f16c6cb881b51f25ce536?s=240"/>
            </div>
            <div class="col-sm-6 home__who">
                <h1>Mike Fisher</h1>
                <h2>Software Engineer</h2>
            </div>
        </div>
    </header>

    <section class="skills container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default panel-skill panel-skill--php">
                    <div class="panel-heading">
                        <h3 class="panel-title">PHP Specialist</h3>
                    </div>
                    <div class="panel-body"></div>
                    <div class="panel-footer">
                        Web apps, back-office tools, RESTful APIs, command line utilities, Composer packages, long-running processes...
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default panel-skill panel-skill--data">
                    <div class="panel-heading">
                        <h3 class="panel-title">Value and data driven</h3>
                    </div>
                    <div class="panel-body"></div>
                    <div class="panel-footer">Think <a target="_blank" href="http://theleanstartup.com/">lean</a>! Don't spend months building guesswork;
                        work in iterations and talk to your users constantly.</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default panel-skill">
                    <div class="panel-heading">
                        <h3 class="panel-title">Isomorphism* Enthusiast</h3>
                    </div>
                    <div class="panel-body"></div>
                    <div class="panel-footer">
                        React</a> is an amazing tool for user interfaces and Node.js is perfect for event-driven services.
                        The combination is a powerful toolset for rich user experiences. <a href="https://github.com/yahoo/flux-examples" target="_blank">*Err.. wut?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $recent = new WP_Query('showposts=1'); while($recent->have_posts()): $recent->the_post();?>
        <?php the_title(); ?>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>