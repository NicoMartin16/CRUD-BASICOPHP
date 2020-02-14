<?php
$tecnologias = ['HTML', 'CSS3','JavaScript', 'Mysql', 'Postgresql', 'Java', 'Spring', 'Angular', 'Ionic', 'Bootstrap', 'JSF'];
function imprimirTecnologias($tecnologias){
    for ($i=0; $i < sizeof($tecnologias); $i++) { 
        echo "
        <ul>
            <li>$tecnologias[$i]</li>
        </ul>
        ";
    }
}
imprimirTecnologias($tecnologias);
?>