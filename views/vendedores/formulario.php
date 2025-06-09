<fieldset>
    <legend>Registrar Admin</legend>

        <label for="nombre">Nombre</label>
            <input type="text" name="vendedor[nombre]" id="nombre" placeholder="Nombre Admin" 
                value="<?php echo s($vendedor->nombre);?>">
        
        <label for="apellido">Apellido</label>
            <input type="text" name="vendedor[apellido]" id="apellido" placeholder="Apellido Admin" 
                value="<?php echo s($vendedor->apellido);?>">

</fieldset>

<fieldset>
    <legend>Informacion Extra</legend>

        <label for="telefono">Telefono:</label>
            <input type="text" name="vendedor[telefono]" id="telefono" placeholder="Telefono Admin" 
                value="<?php echo s($vendedor->telefono);?>">
        
        

</fieldset>