<?php 

function plantilla($url, $data)
{
    // header
    echo view("_header", $data);

    // carga de vista
    echo view($url, $data);

    // footer
    echo view("_footer", $data);
}