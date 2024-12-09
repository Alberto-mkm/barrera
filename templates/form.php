<form id="consulta" class="row">
    <!-- Nombre -->
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control rounded-0 border-0" id="nombre"
            placeholder="Ingresa tu nombre">
    </div>
    <!-- Apellidos -->
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
        <label for="apellidos" class="form-label">Apellidos</label>
        <input type="text" name="apellidos" class="form-control rounded-0 border-0" id="apellidos"
            placeholder="Ingresa tus apellidos">
    </div>
    <!-- País -->
    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-3">
        <label for="pais" class="form-label">País</label>
        <select class="form-select rounded-0 border-0" id="pais" name="pais">
            <option value="" disabled selected>Selecciona tu país</option>
            <option value="mx">México</option>
            <option value="us">Estados Unidos</option>
            <option value="es">España</option>
        </select>
    </div>
    <!-- Estado -->
    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-3">
        <label for="estado" class="form-label">Estado</label>
        <input type="text" name="estado" class="form-control rounded-0 border-0" id="estado"
            placeholder="Ingresa tu estado">
    </div>
    <!-- Ciudad -->
    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-3">
        <label for="ciudad" class="form-label">Ciudad</label>
        <input type="text" name="ciudad" class="form-control rounded-0 border-0" id="ciudad"
            placeholder="Ingresa tu ciudad">
    </div>
    <!-- Email -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-3">
        <label for="email" class="form-label">Correo Electrónico</label>
        <input type="email" class="form-control rounded-0 border-0" id="email" name="email"
            placeholder="nombre@ejemplo.com">

    </div>
    <!-- Teléfono -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="tel" class="form-control rounded-0 border-0" id="telefono" name="telefono"
            placeholder="Ingresa tu número de teléfono">
    </div>
    <!-- Mensaje -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-3">
        <label for="mensaje" class="form-label">Mensaje</label>
        <textarea class="form-control rounded-0 border-0" id="mensaje" name="mensaje" rows="4"
            placeholder="Escribe tu mensaje aquí"></textarea>
    </div>
    <!-- Botón Enviar -->
    <div class="text-center">
        <button type="submit" class="btn bg-color-primary rounded-0 px-5 py-2">Enviar Consulta</button>
    </div>
</form>