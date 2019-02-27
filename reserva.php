<?php
    require_once('functions.php');
    index();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NATURALFOOD</title>

    <link rel="icon" href="imagens/favicon.png">


    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/modal.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.onepage-scroll.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top">
<!-- Topo -->
    <nav id="page-top" class="navbar navbar-default navbar-inverse navbar-transparent">
        <div class="container">
            <!-- Header -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
                    <span class="sr-only">alternar navegação</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="#page-top" class="navbar-brand">
                    <span class="img-logo">NATURAL FOOD</span>
                </a>
            </div>
            <!-- Fim Header -->

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="barra-navegacao">
                <ul class="nav navbar-nav navbar-right">
                    <li class="scroll"><a href="index.html">Home</a></li>
                    <li class="divisor" role="separator"></li>
                    <li><a href="reserva.html">Reservas</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">Entrar</a></li>

                </ul>
            </div>
            <!-- Fim Menu -->
        </div>
    </nav>


<!-- Conteúdo -->
            <section id="pratos" >
                <div class="container">
                    <div class="row">

                            <form class="form-horizontal" action="reservas/add.php" method="post">
                                <fieldset>

                                <!-- Form Name -->
                                <legend>Reserva</legend>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <!-- Text input-->
                                            <div class="form-group">
                                            <label class="col-md-4 control-label" for="textinput"></label>
                                                <div class="col-md-5">
                                                <input id="textinput" name="reserva['nome_r']" type="text" placeholder="Nome Completo" class="form-control input-md" required="">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                            <label class="col-md-4 control-label" for="textinput2"></label>
                                                <div class="col-md-5">
                                                <input id="textinput2" name="reserva['email_r']" type="email" placeholder="Email" class="form-control input-md" required="">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                            <label class="col-md-4 control-label" for="textinput"></label>
                                                <div class="col-md-4">
                                                <input id="textinput" name="reserva['tel_r']" type="text" placeholder="Telefone" class="form-control input-md" required="">

                                                </div>
                                            </div>

                                            <!-- Select Basic -->
                                            <div class="form-group">
                                            <label class="col-md-4 control-label" for="selectbasic">Mesas</label>
                                                <div class="col-md-4">
                                                        <select id="selectbasic" name="reserva['mesa_id_r']" class="form-control">

                                            <?php if ($mesas) : ?>
                                            <?php foreach ($mesas as $mesa) : ?>
                                                                <option value="<?php echo $mesa['id_m']; ?>"><?php echo $mesa['desc_m'].' - '. $mesa['qtd_m'] .' - Lugares '; ?></option>

                                            <?php endforeach; ?>
                                            <?php endif; ?>

                                        </select>
                                </div>
                            </div>


                            <!-- Text input-->
                            <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput2"></label>
                                <div class="col-md-5">
                                <input id="textinput2" name="reserva['data_r']" type="date" placeholder="Data" class="form-control input-md" required="">

                                </div>
                            </div>



                                            <!-- Button -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="singlebutton"></label>
                                                <div class="col-md-4">
                                                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Fazer Reserva</button>
                                                </div>
                                            </div>

                                            </fieldset>
                                            </form>

                                        </div>

                                    </div>

                                </div>

                    </div>
                </div>
            </section>

            <section id="fale" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="page-header">
                                <h2>Nos deixe uma mensagem</h2>
                            </div>

                            <form action="contato/add.php" method="post">
                                <div class="row form-group input-group-lg">
                                    <div class="col-md-12">
                                        <label for="name">Nome</label>
                                        <input type="text" id="name" name="msg['nome_ms']" class="form-control" placeholder="Nome Completo">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="email">Email</label>
                                        <input type="email" id="email" name="msg['email_ms']" class="form-control" placeholder="email">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="subject">Assunto</label>
                                        <input type="text" name="msg['assun_ms']" id="subject" class="form-control" placeholder="Assunto">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="message">Mesagem</label>
                                        <textarea name="msg['msg_ms']" id="message" cols="30" rows="10" class="form-control" placeholder="Deixe sua mensagem"></textarea>
                                    </div>
                                </div>

                                <div id="actions" class="row">
                                        <button type="submit" class="btn btn-custom btn-verde">ENVIAR</button>
                                </div>

                            </form>

                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="maps">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.0932641367085!2d-38.60591116661291!3d-3.789870432298148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74c56cb609d29%3A0xd0a248f1fa16d36e!2sR.+Osc%C3%A1r+Fran%C3%A7a%2C+1670+-+Bom+Jardim%2C+Fortaleza+-+CE%2C+60543-366!5e0!3m2!1spt-BR!2sbr!4v1494074641975" width="550" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Fim Conteúdo -->




<!-- Rodapé -->
    <footer id="rodape">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <span class="img-logo">NATURALFOOD</span>
                </div>

                <div class="col-md-2">
                    <h4>company</h4>
                    <ul class="nav">
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Culinária</a></li>
                        <li><a href="#">Vantagens</a></li>
                    </ul>
                </div>

                <div class="col-md-2">
                    <h4>comunidades</h4>
                    <ul class="nav">
                        <li><a href="#">Mestres</a></li>
                        <li><a href="#">Donos</a></li>
                        <li><a href="#">Marca</a></li>
                    </ul>
                </div>

                <div class="col-md-2">
                    <h4>links úteis</h4>
                    <ul class="nav">
                        <li><a href="#">Fale Conosco</a></li>
                        <li><a href="#">Reservas</a></li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <ul class="nav">
                        <li class="item-rede-social"><a href="#"><img src="imagens/twitter.png"></a></li>
                        <li class="item-rede-social"><a href="#"><img src="imagens/instagram.png"></a></li>
                        <li class="item-rede-social"><a href="#"><img src="imagens/facebook.png"></a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <center><h5>Todos os direitos reservados &copy - NATURALFOOD 2017</h5></center>
                </div>
            </div>
        </div>
    </footer>
<!-- Fim Rodapé -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login - Administrativo</h1><br>
				  <form>
					<input type="text" name="user" placeholder="Usuário">
					<input type="password" name="pass" placeholder="Senha">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>
				</div>
			</div>
		  </div>


          <script type="text/javascript">
                      $(function () {
                          $('#datetimepicker1').datetimepicker();
                      });
                  </script>
