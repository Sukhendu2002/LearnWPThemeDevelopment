<?php

class SU_Custom_Nav_Walker extends Walker_Nav_Menu
{
    public function start_lvl(&$output, $depth = 0, $args = [])
    {
        $output     .= '<ul class="special-class">';
    }

    public function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $output     .= '<li class="special-class">';
        $output     .= $args->before;
        $output     .= '<a href="' . $item->url . '" title="' . esc_attr($item->title) . '">';
        $output     .= $item->title;
        $output     .= '</a>';
        $output     .= $args->after;
    }

    public function end_el(&$output, $item, $depth = 0, $args = [])
    {
        $output .= '</li>';
    }

    public function end_lvl(&$output, $depth = 0, $args = [])
    {
        $output .= '</ul>';
    }
}
