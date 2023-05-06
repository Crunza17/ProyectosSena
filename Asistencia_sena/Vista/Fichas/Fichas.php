<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="../../assets/img/LogoSena.png" rel="icon">
	<link href="../../assets/img/LogoSena.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="../../assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="../../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="../../assets/vendor/aos/aos.css" rel="stylesheet">

	<!-- Template Main CSS File -->
		<link rel="stylesheet" href="../../assets/css/style2.css">
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <asp:Image runat="server" ImageUrl="srcs/Png/Logo_Touch_Colombia.png" Height="95px" Width="179px"/>
        <h1 class="text-light">Monitoreo</h1>
        <div class="social-links mt-3 text-center">
        <a href="https://twitter.com/SENAComunica" target="_blanck" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/SENA" target="_blanck" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/senacomunica/channel/" target="_blanck" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.sena.edu.co/es-co/Paginas/default.aspx" target="_blanck" class="home"><i class="bx bx-home-alt" ></i></a>
        </div>
      </div>
      <nav class="nav-menu">
        <ul>
          <li class="#"><a href="../menu.php"><i class="bx bx-home"></i><span>Inicio</span></a></li>
          <li><a href="../Miperfil/perfil.php"><i class="bx bx-user-pin"></i> <span>Mi perfil</span></a></li>
          <li><a href="../Fichas/Inicio.php"><i class="bx bx-list-check"></i> <span>Asistencia</span></a></li>
          <li><a href="../Funcionario/Funcionario.php"><i class="bx bx-user"></i> <span>Funcionario</span></a></li>
          <li><a href="../Aprendiz/Aprendiz.php"><i class="bx bx-user"></i>Aprendiz</a></li>
          <li><a href="../Reportes/menu_reportes.php"><i class="bx bxs-file-pdf"></i>Reportes</a></li>
          <li><a href="../../procesos/cerrar_sesion.php"><i class="bx bx-log-out-circle"></i>Cerrar Sesión</a></li>
          
        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->



  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/typed.js/typed.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

<body>
<form runat="server">
        <header>
            <%--<div class="img-header">
                <asp:Image ID="Image1" runat="server" ImageUrl="srcs/Png/Logo_Touch_Colombia.png" Height="95px" Width="179px"/>
            </div>
            <div class="t-header">
                <h1 class="t-text">Monitoreo</h1>
            </div>
            <div class="user-header">
                <asp:Button ID="btnUser" class="btn btn-danger" runat="server" Text="Ingresar" data-bs-toggle="modal" data-bs-target="#exampleModal" OnClientClick="return false;"/>
            </div>--%>
                <div class="d-flex flex-column">

                  <div class="profile">
                    <asp:Image ID="Image1" runat="server" ImageUrl="srcs/Png/Logo_Touch_Colombia.png" Height="95px" Width="179px"/>
                    <h1 class="text-light">Monitoreo</h1>
                    <div class="social-links mt-3 text-center">
                    <a href="https://twitter.com/SENAComunica" target="_blanck" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="https://www.facebook.com/SENA" target="_blanck" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.instagram.com/senacomunica/channel/" target="_blanck" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="https://www.sena.edu.co/es-co/Paginas/default.aspx" target="_blanck" class="home"><i class="bx bx-home-alt" ></i></a>
                    </div>
                  </div>
                  <nav class="nav-menu">
                    <ul>
                      <li class="#"><a href="../menu.php"><i class="bx bx-home"></i><span>Inicio</span></a></li>
                      <li><a href="../Miperfil/perfil.php"><i class="bx bx-user-pin"></i> <span>Mi perfil</span></a></li>
                      <li><a href="../Fichas/Inicio.php"><i class="bx bx-list-check"></i> <span>Asistencia</span></a></li>
                      <li><a href="../Funcionario/Funcionario.php"><i class="bx bx-user"></i> <span>Funcionario</span></a></li>
                      <li><a href="../Aprendiz/Aprendiz.php"><i class="bx bx-user"></i>Aprendiz</a></li>
                      <li><a href="../Reportes/menu_reportes.php"><i class="bx bxs-file-pdf"></i>Reportes</a></li>
                      <li><a href="../../procesos/cerrar_sesion.php"><i class="bx bx-log-out-circle"></i>Cerrar Sesión</a></li>
          
                    </ul>
                  </nav><!-- .nav-menu -->
                  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

                </div>
        </header>
        <div class="content-list">
            <asp:LinkButton class="list-btn" runat="server" href="Alarmas.aspx">Monitoreo</asp:LinkButton>
            <asp:LinkButton class="list-btn" runat="server" href="Arqueos.aspx">Consultas</asp:LinkButton>
        </div>
        <div class="content-box">
            <asp:LinkButton ID="btnalarmasA" class="pestañas" runat="server" style="border-bottom: none;" href="Alarmas.aspx">Alarmas en línea</asp:LinkButton>
            <asp:LinkButton ID="btnsaldosA" class="pestañas-inactivas" runat="server" href="Saldos.aspx">Saldos en línea</asp:LinkButton>
            <div class="contenido">
                <div class="content-DGW">
                    <asp:ScriptManager id="ScriptManager1" runat="server"></asp:ScriptManager>
                    <asp:UpdatePanel id="UpdatePanel1" UpdateMode="Conditional" runat="server">
                        <ContentTemplate>
                            <asp:GridView ID="GVAlarmas" runat="server"  AutoGenerateColumns="false" Height="95%" Width="100%" CellPadding="5">
                                <Columns>
                                    <asp:BoundField HeaderText="Kiosko" DataField="IdCajero"/>
                                    <asp:ImageField HeaderText="Cash" DataImageUrlField="Cashpayment" dataimageurlformatstring="~\srcs\Png\{0}.png" ControlStyle-Width="20px" ItemStyle-HorizontalAlign="Center"/>
                                    <asp:ImageField HeaderText="Impresora" DataImageUrlField="Impresora" dataimageurlformatstring="~\srcs\Png\{0}.png" ControlStyle-Width="20px" ItemStyle-HorizontalAlign="Center"/>
                                    <asp:ImageField HeaderText="Datáfono" DataImageUrlField="BarcodeReader" dataimageurlformatstring="~\srcs\Png\{0}.png" ControlStyle-Width="20px" ItemStyle-HorizontalAlign="Center"/>
                                    <asp:ImageField HeaderText="Saldos" DataImageUrlField="Saldos" dataimageurlformatstring="~\srcs\Png\{0}.png" ControlStyle-Width="20px" ItemStyle-HorizontalAlign="Center"/>
                                    <asp:ImageField HeaderText="Web" DataImageUrlField="WS" dataimageurlformatstring="~\srcs\Png\{0}.png" ControlStyle-Width="20px" ItemStyle-HorizontalAlign="Center"/>
                                    <asp:ImageField HeaderText="EnLinea" DataImageUrlField="EnLinea" dataimageurlformatstring="~\srcs\Png\{0}.png" ControlStyle-Width="20px" ItemStyle-HorizontalAlign="Center"/>
                                    <asp:BoundField HeaderText="Inactividad" DataField="Inactivo"/>
                                </Columns>
                            </asp:GridView>
                        </ContentTemplate>
                    </asp:UpdatePanel>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Perfil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <h5 class="modal-title" id="H1">Cambiar Contraseña</h5><br />
                <asp:TextBox ID="txtPassA" class="form-control" TextMode="Password" runat="server" placeholder="Antigua Contraseña" Text="*"></asp:TextBox><br />
                <asp:TextBox ID="txtPassN" class="form-control" TextMode="Password" runat="server" placeholder="Nueva Contraseña" Text="*"></asp:TextBox><br />
                <asp:TextBox ID="txtPassC" class="form-control" TextMode="Password" runat="server" placeholder="Confirmar Contraseña" aria-describedby="basic-addon2" Text="*"></asp:TextBox>
              </div>
                <hr />
              <div class="modal-header">
                <asp:Button ID="btnCambiar" class="btn btn-secondary" runat="server" Text="Cambiar" data-bs-toggle="modal" data-bs-target="#Modal1" OnClientClick="return false;" />
                <asp:Button ID="btnCerrar" class="btn btn-danger" runat="server" Text="Cerrar Sesión" OnClick="btnCerrar_Click" />
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="Modal1" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="H2">Perfil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <h5 class="modal-title" id="H3">¿Está seguro?</h5>
              </div>
              <div class="modal-footer">
                <asp:Button ID="btnSi" class="btn btn-secondary" runat="server" Text="Si" OnClick="btnCambiar_Click" />
                <asp:Button ID="btnNo" class="btn btn-danger" runat="server" Text="No" data-bs-dismiss="modal" aria-label="Close" OnClientClick="return false;"/>
              </div>
            </div>
          </div>
        </div>
    </form>
</body>
</html>