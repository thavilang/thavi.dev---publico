<?php 

function sprite($icon, $title = '', $sprite = 'sprite')
{
    return '<svg role="img" aria-label="Ícone ' . $title . '"><title>' . $title . '</title><use xlink:href="' . get_template_directory_uri() . '/assets/images/' . $sprite . '.svg#' . $icon . '" /></svg>';
}