<?php
    //crea una instancia de la claseDOMDocument
    $dom = new DOMDocument();
    
    //establece la codificacion del documento en utf-8
    $dom->encoding = 'utf-8';

    //especifica  el numero de version 1.0
    $dom->xmlVersion = '1.0';

    //asegura que la salida esta bien formateada
    $dom->formatOutput = true;

    //creamos el nombre del archivo
$xml_file_name = 'lista_peliculas.xml';

    //crea el nodo raiz llamado peliculas
    $raiz = $dom->createElement('Peliculas');

    //creamos el nodo Pelicula. para cada pelicula
    $nodo_peli = $dom->createElement('pelicula');

    //define el atributo ID para el nodo pelicula(aunque aun no lo asignamos)
    $attr_peli_id = new DOMAttr('peli_id', '5467');

    //ahora si, aqui le asignamos el atributo al nodo pelicula
    $nodo_peli->setAttributeNode($attr_peli_id);

    //CREAMOS el nodo hijo 'TITULO' para el nodo Pelicula.
    //El primer parametro especifica el nombre del elemento:Titulo.
    //El segundo parametro estabalece el valor del nodo: La campaña.
        $child_node_title = $dom->createElement('Titulo', 'La Campaña');
        //agregamos el nodo hijo 'TITULO' al nodo pelicula
        $nodo_peli->appendChild($child_node_title);

        //CREAMOS el nodo hijo 'Año' para el nodo Pelicula
        $nodo_hijo_año = $dom->createElement('Año', 2012);
        //agregamos el nodo hijo 'Año' al nodo pelicula
        $nodo_peli->appendChild($nodo_hijo_año);

        //CREAMOS el nodo hijo 'Genero' para el nodo Pelicula
        $nodo_hijo_genero = $dom->createElement('Genero', 'Drama');
        //agregamos el nodo hijo 'Año' al nodo pelicula
        $nodo_peli->appendChild($nodo_hijo_genero);

        //CREAMOS el nodo hijo 'Clasificacion' para el nombre de la pelicula
        $child_node_ratings = $dom->createElement('Clasificacion', 'B');
        //agregamos el nodo hijo 'Clasificacion' al  nodo pelicula
        $nodo_peli->appendChild($child_node_ratings);

    //agregamos los elementos nodo_peli al nodo raiz Peliculas
    $raiz->appendChild($nodo_peli);

    //agregamos el nodo raiz al documento XML
    $dom->appendChild($raiz);

    //guarda el archivo XML en el archivo
    $dom->save($xml_file_name);

    //creamos el enlace al archivo XML y un mensaje 
    echo "El archivo: <a href= '$xml_file_name'> $xml_file_name </a> se ha creado con exito";