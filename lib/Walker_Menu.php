<?php

function get_list_all_services_for_current_location($location='Newnan'){
    $output = '';
    $query = new WP_Query( [
        'post_type' => 'service',
        'locations' => $location,
    ] );
    if($query->have_posts()) {
        while($query->have_posts()) {
            $query->the_post();
            $title = get_the_title();
            $link = get_post_permalink();
            $output .= "<li><a class='dropdown-item' href='$link'>$title</a>";
        }
    }
    return $output;
}

function get_current_location(){
    $full_uri = $_SERVER['REQUEST_URI'];
    $sub_url = explode('/',$full_uri)[1];
    if ($sub_url == 'locations') {
        return explode('/',$full_uri)[2];
    }
    return 'Newnan';
}

class My_Custom_Nav_Walker extends Walker_Nav_Menu {
    public function start_lvl(&$output, $depth = 0, $args = null)    {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat( $t, $depth );

        // Default class.
        $classes = array( 'sub-menu', 'dropdown-menu');

        $class_names = implode( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $output .= "{$n}{$indent}<ul$class_names>{$n}";
    }

    public function end_lvl(&$output, $depth = 0, $args = null)
    {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent  = str_repeat( $t, $depth );
        $output .= "$indent</ul>{$n}";
    }

    public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
    {
        if ( $data_object->title == 'Services' ) {
            $output .= "<li class='nav-item dropdown'>";
            $output .= "<a class='nav-link dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false' data-toggle='dropdown'>";
            $output .= "$data_object->title </a>";
            $output .= '<ul class="dropdown-menu">';
            // loop for add services
            $output .= get_list_all_services_for_current_location(get_current_location());

            $output .= '</ul>';
        } elseif ( $data_object->title == 'Locations' ) {
            $output .= '<li class="nav-item dropdown">';
            $output .= '<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"  data-toggle="dropdown">';
            $output .= "$data_object->title</a>";
        } elseif ( $data_object->type == 'taxonomy' && $data_object->object == 'locations' ) {
            $output .= "<li><a class='dropdown-item' href='$data_object->url'>$data_object->title</a>";
        } else {
            $output .= '<li class="nav-item">';
            $output .= " <a class='nav-link' href='$data_object->url'>$data_object->title</a>";
        }
        //var_dump($data_object);
        //echo '____________________________________________________________________________________________________________________________________________________';
//        $menu_item = $data_object;
//
//        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
//            $t = '';
//            $n = '';
//        } else {
//            $t = "\t";
//            $n = "\n";
//        }
//        $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';
//
//
//
//        $classes   = empty( $menu_item->classes ) ? array() : (array) $menu_item->classes;
//        $classes[] = 'menu-item-' . $menu_item->ID;
//
//        $args = apply_filters( 'nav_menu_item_args', $args, $menu_item, $depth );
//
//        $class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $menu_item, $args, $depth ) );
//        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
//
//        $id = apply_filter s( 'nav_menu_item_id', 'menu-item-' . $menu_item->ID, $menu_item, $args, $depth );
//        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
//
//        $output .= $indent . '<li' . $id . $class_names . '>';
//
//        $atts           = array();
//        $atts['title']  = ! empty( $menu_item->attr_title ) ? $menu_item->attr_title : '';
//        $atts['target'] = ! empty( $menu_item->target ) ? $menu_item->target : '';
//        if ( '_blank' === $menu_item->target && empty( $menu_item->xfn ) ) {
//            $atts['rel'] = 'noopener';
//        } else {
//            $atts['rel'] = $menu_item->xfn;
//        }
//        $atts['href']         = ! empty( $menu_item->url ) ? $menu_item->url : '';
//        $atts['aria-current'] = $menu_item->current ? 'page' : '';
//
//        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $menu_item, $args, $depth );
//
//        $attributes = '';
//        foreach ( $atts as $attr => $value ) {
//            if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
//                $value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
//                $attributes .= ' ' . $attr . '="' . $value . '"';
//            }
//        }
//
//        /** This filter is documented in wp-includes/post-template.php */
//        $title = apply_filters( 'the_title', $menu_item->title, $menu_item->ID );
//
//        $title = apply_filters( 'nav_menu_item_title', $title, $menu_item, $args, $depth );
//
//        $item_output  = $args->before;
//        $item_output .= '<a' . $attributes . '>';
//        $item_output .= $args->link_before . $title . $args->link_after;
//        $item_output .= '</a>';
//        $item_output .= $args->after;
//
//        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $menu_item, $depth, $args );
    }
}

