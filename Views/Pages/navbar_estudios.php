<script type="text/javascript">
$(document).ready(function(){
  // $('#cambios').hide();
  // var x = document.getElementsByClassName("active");
  // console.log(x[0].id);
  // if (x[0].id != "agregar"){
  //   $('#busqueda').show();
  // }else {
  //   $('#busqueda').hide();
  // }
});

</script>
<html ng-app="myApp">
    <body>
      <!-- <ul class="nav nav-tabs nav-justified">
        <li role="presentation"><a href="#">Disabled link</a></li>
        <li role="presentation"><a href="#">Disabled link</a></li>
      </ul> -->
      <!--navbar code  -->
      <!-- <nav class="navbar navbar-inverse">
        <div class="container-fluid"> -->
          <!-- Brand and toggle get grouped for better mobile display -->
          <!-- <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Arribos</a>
          </div> -->

          <!-- Collect the nav links, forms, and other content for toggling -->
          <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li id="realizados" class="active"><a ui-sref="estudios.tabla">Realizados </a></li>
              <li id="pendientes" ><a href="estudios.">Pendientes</a></li>
              <li id="agregar" ><a href="#">Agregar</a></li>
            </ul>
            <form id="busqueda" class="navbar-form navbar-right">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div> -->
              <!-- <button type="submit" class="btn btn-default">Submit</button> -->
            <!-- </form> -->
          <!-- </div> --><!-- /.navbar-collapse -->
        <!-- </div>--><!-- /.container-fluid -->
      <!-- </nav> -->
      <!--end navbar code  -->
      <!--result table code  -->
      <div ui-view="table"></div>
        <!--result table code  -->
    </body>
</html>
