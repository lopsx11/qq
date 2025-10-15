<?php
    session_start();
    include 'conecta.php';
    if (!isset($_SESSION["user"])) {
        echo "<script language='javascript' type='text/javascript'>
        window.location.href='index.php';
        </script>";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-language" content="pt-br">
       <title>CONECTA JOVEM</title>
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <style>
            body {
                padding: 5px;
                margin: 5px;
            }
            h2 {
                color: #00008B;
            }
            .main-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 15px 10px;
            }
            .user-info {
                display: flex;
                align-items: center;
                gap: 8px;
                color: gray;
            }
            .username {
                font-weight: bold;
            }
            .logout-link {
                color: red;
                font-weight: bold;
                text-decoration: none;
            }
            .logout-link:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <header class="main-header">

         <h2>CONECTA JOVEM</h2>
            <div class="user-info">
                <?php
                    if (!empty($_SESSION["user"])) {
                        $usuario = $_SESSION["user"];
                        echo "<span class='username'>".htmlspecialchars($usuario)." | </span><a class='logout-link' href='sair.php'>SAIR</a>";
                    }
                ?>
            </div>
        </header>
        <hr>
        <nav>
            <?php
                include 'menu.php';
            ?>
        </nav>
        <br>
        <center><h2>DASHBOARD</h2></center>
        <br/>
        <div class="row justify-content-center row-cols-1 row-cols-md-4 mb-4 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">
                        <h2>USUÁRIOS</h2>
                    </div>
                    <div class="card-body text-center" style="background-color: #4169E1;">
                        <center>
                        <?php
                            $sql = "SELECT count(id) AS numusu FROM moreta";
                            $resultado = mysqli_query($conn, $sql);
                            $dados = mysqli_fetch_assoc($resultado);
                            $total_usuario = $dados['numusu'];
                        ?>
                        <table>
                            <tr>
                                <td><svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                                </svg></td>
                                <td>&nbsp;&nbsp;<h4>TOTAL</h4></td>
                            </tr>
                            <tr>
                                <td colspan="2"><center><?php echo "<font size='40'><b>".$total_usuario."</b></font>"; ?></center></td>
                            </tr>
                        </table>
                        </center>
                    </div>
                </div>       
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">
                        <h2>QUEST</h2>
                    </div>
                    <div class="card-body text-start" style="background-color: #4169E1;">
                        <center>
                        <?php
                            $sql = "SELECT count(id) AS numquest FROM quest";
                            $resultado = mysqli_query($conn, $sql);
                            $dados = mysqli_fetch_assoc($resultado);
                            $total_quest = $dados['numquest'];
                        ?>
                        <table>
                            <tr>
                           <td><svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
  <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
                                 </svg>
                                <td>&nbsp;&nbsp;<h4>TOTAL</h4></td>
                            </tr>
                            <tr>
                                <td colspan="2"><center><?php echo "<font size='40'><b>".$total_quest."</b></font>"; ?></center></td>
                            </tr>
                        </table>
                        </center>
                         </div>
                    </div>
                </div>       
            </div>
        <div class="row justify-content-center row-cols-3 row-cols-md-4 mb-4 text-center">
            <div class="col">
                <div class="card mb-1 rounded-3 shadow-sw">
                    <div class="card-header py-2">
                        <h2>OPÇÕES POR ESPORTE</h2>
                    </div>
                    <div class="card-body text-center">
                        <?php
                            include 'graf_espo_quest.php';
                        ?>
                           
                        
                    </div>
                </div>       
            </div>
            <div class="col">
                <div class="card mb-1 rounded-3 shadow-sw">
                    <div class="card-header py-2">
                        <h2>OPÇÕES POR MÚSICAS</h2>
                    </div>
                    <div class="card-body text-start">
                        <?php
                            include 'graf_music_quest.php';
                        ?>
                           </div>
                        </div>
                    </div>
                </div>       
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">
                        <h2>PEDIDOS POR CIDADES</h2>
                    </div>
                    <div class="card-body text-start">
                        <?php
                            include 'graf_curs_quest.php';
                        ?>
                        </div>
                    </div>
                </div>       
            </div>
        </div>
    </body>
</html>