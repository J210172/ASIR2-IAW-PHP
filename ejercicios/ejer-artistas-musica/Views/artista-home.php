<h1 class="mt-1">Artistas</h1>

<div class="box">
    <div <?= empty($error_messages) ? 'hidden="hidden"' : '' ?> class="content-75">
        <div class="error-messages">
            <?php
            foreach ($error_messages as $message)
                echo "<p class='error-message'>$message</p>";
            ?>
        </div>
    </div>
    <form class="d-grid content middle" method="post">
        <div class="input-set">
            <label for="nombre">Nombre del Artista / Grupo: </label>
            <input type="text" name="nombre" id="nombre">
        </div>
        <div class="input-set">
            <label for="descripcion">Descripcion:</label>
            <textarea name="descripcion" id="descripcion"></textarea>
        </div>
        <div class="input-set">
            <label for="num_albumes">Numero de albums</label>
            <input type="number" name="num_albumes" id="num_albumes">
        </div>
        <div class="input-set">
            <label for="aragones">
                <input type="checkbox" name="aragones" id="aragones"> Aragones
            </label>
        </div>
        <div class="input-set inline">
            <input class="btn primary" type="submit">
            <input class="btn primary-outline" type="reset">
        </div>
    </form>
</div>

<div class="mt-1">
    <table>
        <thead>
            <tr>
                <th colspan="5">grupos_musica</th>
            </tr>
            <tr>
                <th>#</th>
                <th>NOMBRE</th>
                <th>DESCRIPCION</th>
                <th>NUMERO DE ALBUMS</th>
                <th>ARAGONES</th>
            </tr>
        </thead>
        <tbody>
            <template id="tabla-fila-artista">
                <tr>
                    <td>{id}</td>
                    <td>{nombre}</td>
                    <td>{descripcion}</td>
                    <td>{num_albums}</td>
                    <td>{aragones}</td>
                </tr>
            </template>
        </tbody>
    </table>
</div>