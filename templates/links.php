<?php
if (get_row_layout() == 'links') { ?>

<section class="link_section section_spacing_only_top_small">
    <ul>
        <?php
            // check if repeater field has rows
            if (have_rows('links_content')) {
                while (have_rows('links_content')) {
                    the_row();

                    $link = get_sub_field('link'); ?>
        <li>
            <?php if ($link) {
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                        ?>
            <a href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>

            <?php } ?>
        </li>
        <?php  }
            }  ?>
    </ul>
</section>

<?php
} ?>