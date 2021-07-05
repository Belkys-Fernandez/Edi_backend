<?php


class ProductosController{

    public static function retornarListaProductos($request,$response,$args){
        $listaProductos=Productos::buscarListaProductos();
        $response->getBody()->write(json_encode($listaProductos));
        return $response;
    }
 

    public  function retornarProductosPorId($request,$response,$args){
        $onjetoProducto=new Productos;
        $Producto=$onjetoProducto->buscarProductosPorId($args['Id']);
        $response->getBody()->write(json_encode($Producto));
        return $response;
    }
    
    public  function retornarProductosDescripcion($request,$response,$args){
        $onjetoProducto=new Productos;
        $descripcionProductos=$onjetoProducto->buscarDescripcionProducto($args['id_prod']);
        $response->getBody()->write(json_encode($descripcionProductos));
        return $response;
    }
}




    ?>