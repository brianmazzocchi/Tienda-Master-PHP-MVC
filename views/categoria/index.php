<h1>Gestionar Categorias</h1>

<a href="<?=base_url?>categoria/crear" class="button button-small">Crear Categoria</a>


<table>
    <!-- Defino los encabezados de la tabla     -->
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
        </tr>

    <!-- Itero en el objeto que me trae de $categorias y por cada registro creo una $cat -->
    <?php while($cat = $categorias->fetch_object()): ?>
        <tr>
            <td><?=$cat->id;?></td>
            <td><?=$cat->nombre;?></td>
        </tr>
    <?php endwhile; ?>
</table>