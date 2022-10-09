<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta title="Menú">
    <style>
        nav {
            width:180px;
            background-color:#6589ff;
            font-family:Arial;font-size:0.8em;
            color:#ccc;
        }
        nav ul {list-style:none;padding-left:0px;}
        nav li {padding:2px 0px;border-bottom:1px solid #c3c3c3;}
        nav ul li {padding-left:10px;}
 
        nav a {text-decoration:none;color:#fff;}
        nav a:hover li {background-color:#3a68ff;}
 
        .submenu {padding-left:20px;}
    </style>
</head>
 
<body>
<h1>Menu funcional</h1>
<?php
# definimos el array de valores para el menu y submenus
$menu=array(
    array(
        'titulo' => 'Menu de ejercicios',
        'enlace' => '',
        'subcategoria' => array(
            /**array(
                'enlace' => 'index1a',
                'titulo' => 'Ejercicio 1',
                'enlace' => 'index1a.php',
            ),*/
           /** array(
                'enlace' => 'index1b',
                'titulo' => 'Ejercicio 2',
                'enlace' => 'index1b.php',
            ),*/
            
             array(
                'enlace' => 'index1c',
                'titulo' => 'Ejercicio 3',
                'enlace' => 'index1c.php',
            ),

              array(
                'enlace' => 'index1d',
                'titulo' => 'Ejercicio 4',
                'enlace' => 'index1d.php',
            ),

            array(
                'enlace' => 'index1e',
                'titulo' => 'Ejercicio 5',
                'enlace' => 'index1e.php',
            ),

            array(
                'enlace' => 'index1f',
                'titulo' => 'Ejercicio 6',
                'enlace' => 'index1f.php',
            ),

            array(
                'enlace' => 'index1g',
                'titulo' => 'Ejercicio 7',
                'enlace' => 'index1g.php',
            ),

            array(
                'enlace' => 'index1h',
                'titulo' => 'Ejercicio 8',
                'enlace' => 'index1h.php',
            ),


        ),
    ),
);
 
/**
 * Funcion para mostrar los enlaces
 * Tiene que recibir el array de valores y la clase a asignar que puede ser:
 * menu o submenu
 */
function mostrarEnlace($menu,$class)
{
    if($menu['enlace'])
    {
        echo "<a href='".$menu['enlace']."'>";
    }
 
    echo "<li class='".$class."'>";
        echo $menu['titulo'];
    echo "</li>";
 
    if($menu['enlace'])
    {
        echo "</a>";
    }
}
 
echo "<nav>";
    echo "<ul>";
    # recorremos todo el array de valores
    for($i = 0; $i < count($menu); $i++)
    {
        mostrarEnlace($menu[$i],"menu");
 
        # Si dispone de subcategorias, las mostramos
        if(count($menu[$i]["subcategoria"])>0)
        {
            for ($j=0;$j<count($menu[$i]["subcategoria"]);$j++)
            {
                mostrarEnlace($menu[$i]["subcategoria"][$j], "submenu");
            }
        }
    }
    echo "<ul>";
echo "</nav>";
?>
</body>
</html>
