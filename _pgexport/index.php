<?php get_header(); ?>

<div class="site"> 
    <header class="site-header"> 
        <section class="w-full px-8 text-zinc-700 bg-white" {!! $attributes ?? '' !!}> 
            <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl"> 
                <div class="relative flex flex-col md:flex-row"> <a href="#_" class="flex items-center mb-5 font-medium text-zinc-900 lg:w-auto lg:items-center lg:justify-center md:mb-0"> <span class="mx-auto text-xl font-black leading-none text-zinc-900 select-none"><?php _e( 'tails', 'bbifresh' ); ?><span class="text-indigo-600" data-primary="indigo-600">.</span></span> </a> 
                    <nav class="flex flex-wrap items-center mb-5 text-base md:mb-0 md:pl-8 md:ml-8 md:border-l md:border-zinc-200"> <a href="#_" class="mr-5 font-medium leading-6 text-zinc-600 hover:text-zinc-900"><?php _e( 'Home', 'bbifresh' ); ?></a> <a href="#_" class="mr-5 font-medium leading-6 text-zinc-600 hover:text-zinc-900"><?php _e( 'Features', 'bbifresh' ); ?></a> <a href="#_" class="mr-5 font-medium leading-6 text-zinc-600 hover:text-zinc-900"><?php _e( 'Pricing', 'bbifresh' ); ?></a> <a href="#_" class="mr-5 font-medium leading-6 text-zinc-600 hover:text-zinc-900"><?php _e( 'Blog', 'bbifresh' ); ?></a> 
                    </nav>                             
                </div>                         
                <div class="inline-flex items-center ml-5 space-x-6 lg:justify-end"> <a href="#" class="text-base font-medium leading-6 text-zinc-600 whitespace-no-wrap transition duration-150 ease-in-out hover:text-zinc-900">  <?php _e( 'Sign in', 'bbifresh' ); ?> </a> <a href="#" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600" data-rounded="rounded-md" data-primary="indigo-600">  <?php _e( 'Sign up', 'bbifresh' ); ?> </a> 
                </div>                         
            </div>                     
        </section>                 
    </header>             
    <?php rewind_posts(); ?>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php PG_Helper_v2::rememberShownPost(); ?>
            <main id="content" <?php post_class( 'site-content' ); ?>>
                <?php the_content(); ?>
            </main>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'bbifresh' ); ?></p>
    <?php endif; ?> 
    <!-- footer -->             
    <footer class="site-footer"> 
        <section class="h-auto md:py-32 py-20 2xl:px-0 px-10 bg-white"> 
            <div class="max-w-7xl mx-auto flex md:flex-row md:space-y-0 space-y-20 flex-col flex-wrap xl:space-x-5 xl:flex-nowrap items-start justify-between"> 
                <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 space-y-5 pr-10"> 
                    <h4 class="text-4xl"><?php _e( 'CodeDelivery.', 'bbifresh' ); ?></h4> 
                    <p class=""><?php _e( 'Baked with awesome recipes to help you build apps quicker and more efficiently.', 'bbifresh' ); ?></p> <a href="mailto:hello@codedelivery.dev" class="block underline"><?php _e( 'hello@codedelivery.dev', 'bbifresh' ); ?></a> 
                </div>                         
                <div class="w-full md:w-1/4 pt-2"> 
                    <h4 class="text-2xl mb-5"><?php _e( 'Features', 'bbifresh' ); ?></h4> 
                    <ul class="relative  space-y-2"> 
                        <li><a href="#_" class="hover:underline"><?php _e( 'Continuous Integration', 'bbifresh' ); ?></a>
                        </li>                                 
                        <li><a href="#_" class="hover:underline"><?php _e( 'Continuous Delivery', 'bbifresh' ); ?></a>
                        </li>                                 
                        <li><a href="#_" class="hover:underline"><?php _e( 'Recipes', 'bbifresh' ); ?></a>
                        </li>                                 
                        <li><a href="#_" class="hover:underline"><?php _e( 'Ingredients', 'bbifresh' ); ?></a>
                        </li>                                 
                        <li><a href="#_" class="hover:underline"><?php _e( 'Open Source', 'bbifresh' ); ?></a>
                        </li>                                 
                    </ul>                             
                </div>                         
                <div class="w-full md:w-1/4 lg:w-1/4 pt-2"> 
                    <h4 class="text-2xl mb-5"><?php _e( 'About Us', 'bbifresh' ); ?></h4> 
                    <ul class="relative space-y-2"> 
                        <li><a href="#_" class="hover:underline"><?php _e( 'About Us', 'bbifresh' ); ?></a>
                        </li>                                 
                        <li><a href="#_" class="hover:underline"><?php _e( 'Contact', 'bbifresh' ); ?></a>
                        </li>                                 
                        <li><a href="#_" class="hover:underline"><?php _e( 'Team', 'bbifresh' ); ?></a>
                        </li>                                 
                        <li><a href="#_" class="hover:underline"><?php _e( 'Plans &amp; Pricing', 'bbifresh' ); ?></a>
                        </li>                                 
                        <li><a href="#_" class="hover:underline"><?php _e( 'News', 'bbifresh' ); ?></a>
                        </li>                                 
                    </ul>                             
                </div>                         
                <div class="w-full md:w-2/3 lg:w-1/3 pt-2"> 
                    <h4 class="text-2xl mb-5"><?php _e( 'Our Mission', 'bbifresh' ); ?></h4> 
                    <p><?php _e( 'Our mission is simple, we want to provide the simplest and best CI/ CD service. And we want to have fun doing it!', 'bbifresh' ); ?></p> 
                </div>                         
            </div>                     
        </section>                 
    </footer>             
</div>                 

<?php get_footer(); ?>