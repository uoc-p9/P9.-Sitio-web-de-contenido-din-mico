</div>

        <!--FOOTER-->

    </div>
    <div id="footer">
        <p> &copy; JDA CERVEZAS. <?=date('Y')?>.
        	<?php
                if(isset($_SESSION["nombre_usuario"])){
                    echo " Usuario: ".$_SESSION["nombre_usuario"]. " <a href='model/cerrar_sesion.php'>Cerrar sesión</a>";
                }else{
                    echo " Sesión no iniciada.";
                }
            ?>
        </p>
    </div>
</body>

</html>