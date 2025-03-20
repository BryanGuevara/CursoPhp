<?php
    require_once(__DIR__.'/Database.php');
    require_once(__DIR__.'/Orm.php');
    require_once(__DIR__.'/clases/Usuario.php');
    require_once(__DIR__.'/clases/Cliente.php');

    $database = new DataBase();
    $connection = $database->getConnection();

    $usuarioModel = new Usuario($connection);
    $usuario=$usuarioModel->getAll();

    $clientesModel = new Cliente($connection);
    $clientes=$clientesModel->getAll();

    echo '<h2>Obtener Todos</h2>';
    echo '<h3>Clientes</h3>';

    echo '<pre>';
    var_dump($clientes);
    echo '</pre>';

    echo '<h3>Usuarios</h3>';

    echo '<pre>';
    var_dump($usuario);
    echo '</pre>';

    $usuario = $usuarioModel->getById(2);
    $clientes=$clientesModel->getById(3);

    echo '<h3>Obtener por Id</h3>';
    echo '<h3>Clientes (Id=1)</h3>';

    echo '<pre>';
    var_dump($clientes);
    echo '</pre>';

    echo '<h3>Usuarios (Id=2)</h3>';

    echo '<pre>';
    var_dump($usuario);
    echo '</pre>';

    
    $usuarioModel->deleteById(1);
    $usuario = $usuarioModel->getById(1);
    
    echo '<h3>Eliminar por Id</h3>';
    echo '<h3>Usuario (Id=1)</h3>';
    echo '<pre>';
    var_dump($usuario);
    echo '</pre>';

    $clientesModel->updateById(2, [
        'nombres' => 'ana',
        'apellidos' => 'quiñones',
        'direccion' => 'av. arequipa',
    ]);
    $clientes=$clientesModel->getById(2);

    echo '<h3>Actualizar por Id</h3>';
    echo '<h3>Clientes (Id=2)</h3>';
    echo '<pre>';
    var_dump($clientes);
    echo '</pre>';

    
    $clientesModel->insert([
        'nombres' => 'ana',
        'apellidos' => 'quiñones',
        'direccion' => 'av. arequipa',
    ]);

    
    echo '<h3>Añadir';
    echo '<h3>Clientes</h3>';
    echo 've a revisar la tabla en base de datos';

    
    
    $usuario=$usuarioModel->paginate(1,2);
    $clientes=$clientesModel->paginate(2,3);

    echo '<h3>Paginado</h3>';
    echo '<h3>Clientes [(pagina=2),(limit=3)]</h3>';
    echo '<pre>';
    var_dump($clientes);
    echo '</pre>';
    echo '<h3>Usuarios [(pagina=1),(limit=2)]</h3>';
    echo '<pre>';
    var_dump($usuario);
    echo '</pre>';
  ?>