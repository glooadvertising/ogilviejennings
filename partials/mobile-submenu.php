<div id="open" class="floating-btn">See more lawyers</div>
<div id="show" class="submenu-container">
    <div id="close" class="close">
    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 50 50">
        <path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z"></path>
    </svg>
    </div>
    <!--?php wp_nav_menu(['menu' => 'practice-areas']); ?-->
    <?php get_template_part( 'partials/lawyers-list' );?>
</div>