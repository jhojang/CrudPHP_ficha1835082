<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/74c8479318.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
        <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
        <title>JSP Page</title>
    </head>
    <body>
    <div class="contenedor">
        <header class="header">
                <nav>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Horarios</a></li>
                        <li><a href="">Sobre Nosotros</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </nav>
            
        </header>
        <main class="principal">
            
            <div class="content_left">
                <div class="titulo">
                    <h2>Buenos días, GatoNauta!</h2>
                    <h1>Gestión de luces</h1>
                </div>
                <div class="bombillos_content">
                    <div class="cuarto">
                        <ul class="lista_de_cuartos">
                            <li><a href="" id = "todos" class="active link_cuarto">Todos</a></li>
                        </ul>
                        <form id="form_cuarto" class="form_cuarto_visible">
                            <input type="text" id="cuarto_item" name="cuarto_item" placeholder="Agregar cuarto">
                            <input type="submit" value="Agregar">
                        </form>
                        <a href="" class="agregar_cuarto">+</a>
                    </div>
                    <div class="bombillos">
                        
                                
                        <!--Aquí se agregan los bombillos-->
                        <button class="botonBombillo agregar_bombillo">+</button>
                    </div>
                    
                </div>
                <div class="modal_content">
                </div>
                    <div class="modal modal_cerrar">
                        <a href="" class="boton_cerrar_modal">X</a>
                        <div class="nuevo_bombillo">
                            <img src="image/b9ead3f99800213fe312f5a82a4be058.png" alt="">
                            <form id="formAddBombillo">
                                <input type="text" id="set_nombre_bombillo" name="set_nombre_bombillo" placeholder="Nombre del bombillo">
                                <select name="set_cuarto_bombillo" id="set_cuarto_bombillo">

                                </select>
                                <br>
                                <input type="submit" value="Agregar">
                            </form>
                            <form id="formUpdateBombillo">
                                <input type="text" id="get_nombre_bombillo" name="get_nombre_bombillo" placeholder="Nombre del bombillo">
                                <input type="text" id="id_bombillo" name="id_bombillo" placeholder="Id del bombillo">
                                <select name="get_cuarto_bombillo" id="get_cuarto_bombillo">

                                </select>
                                <br>
                                <input type="submit" value="Actualizar">
                            </form>
                        </div>
                    </div>
                
            </div>
            <div class="content_right"></div>
        </main>
        <aside class="sidebar">
            <div class="aside_content">
                <div class="hud">
                    <img src="image/LOGO.png" class="logo" alt="">
                    <img src="image/Eve.jpg" alt="" class="user_img">
                    <h2>GatoNauta</h2>
                    <div class="hr"></div>
                </div>
                <div class="menu_aside">
                    <ul class="lista_menu">
                        <li><a href="" class="active"> <i class="far fa-lightbulb"></i> Gestión de luces</a></li>
                        <li><a href=""><i class="fas fa-bolt"></i> Informe de energía</a></li>
                        <li><a href=""><i class="fas fa-user"></i> Control parental</a></li>
                        <li><a href=""><i class="fas fa-cog"></i> Configuración</a></li>
                    </ul>
                </div>
            </div>

        </aside>
    </div>
    <script src="js/main.js?v=<?php echo(rand()); ?>" type="text/javascript"></script>
</body>
</html>