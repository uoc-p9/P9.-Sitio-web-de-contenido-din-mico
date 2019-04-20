<h1>REGISTRAR NUEVO USUARIO</h1>
			<form id="frm-alumno" action="?c=Web&a=Guardar_usuarios" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>New Username</label>
                    <input type="text" name="nombre_usuario" value="<?php echo $user->nombre_usuario; ?>" class="form-control"   placeholder="Nombre de usuario" data-validacion-tipo="requerido|min:3">
                </div>
                <div class="form-group">
                    <label>New Password</label>
                    <input type="password" value="<?php echo $user->password_usuario; ?>" class="form-control" name="password_usuario" placeholder="Contraseña" data-validacion-tipo="requerido|min:3">
                </div>
                <div class="form-group">
                    <label>Repeat Password</label>
                    <input type="password" class="form-control" id="password2" placeholder="Repite la contraseña" data-validacion-tipo="requerido|min:3">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
           