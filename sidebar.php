<!-- Sidebar
          ============================================= -->
<div class="sidebar nobottommargin col_last">
    <div class="sidebar-widgets-wrap">
        <?php
        if (is_active_sidebar('su_sidebar')) {
            dynamic_sidebar('su_sidebar');
        }
        ?>

    </div>

</div><!-- .sidebar end -->