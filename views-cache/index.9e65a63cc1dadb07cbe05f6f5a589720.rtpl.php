<?php if(!class_exists('Rain\Tpl')){exit;}?>  <!-- Content Wrapper. Contains page content -->
  <style>
    .col-lg-3, .col-6{
    padding-right: 0px;
    padding-left: 10px;
    }
    .col-lg-3 {
    width: 20%;
}
    .btn-sm{
      font-size: 19px;
      color: black;
    }
    .card {
    box-shadow: 0 0 1px rgb(0 0 0 / 13%), 0 1px 3px rgb(0 0 0 / 20%);
    margin-bottom: 1rem;
}
.content{
  min-height: 25px;
}
.card-title{
  text-align: center;
}
.card {
  transform: translate(120px, 10px);
  width: 900px;
    position: relative;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
:root {
    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #007bff;
    --secondary: #6c757d;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: "Source Sans Pro",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    --font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
}
html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
}
*, ::after, ::before {
    box-sizing: border-box;
}
*, ::after, ::before {
    box-sizing: border-box;
}
    .row{
      padding: 10px;
    }
    .bg-info{
      background-color: rgb(0, 134, 255);

    }
    #VV{
      background-color: #28a745!important;
    }
    .bg-warning {
    background-color: #f8e838;
    color:black;
    }
    .bg-danger {
    background-color: #1bc5ac!important;
    }
    #Shopee{
      background-color: #f53d2d;
    }
    .inner {
    text-decoration: none;
    color: #f9f9f9;
    } 
  </style>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo htmlspecialchars( $Name, ENT_COMPAT, 'UTF-8', FALSE ); ?><br>
        Seja Bem-vindo!
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Nível</a></li>
        <li class="active">Aqui</li>
      </ol>
    </section>
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font><?php echo htmlspecialchars( $MagaluStilo, ENT_COMPAT, 'UTF-8', FALSE ); ?></font></h3>

            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Produtos Magalu<br> com Pendencias</font></font></p>
          </div>
          <div class="icon">
            <i class="ion-alert-circled"></i>
          </div>
          <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Stilo Eletro</font></font><i class="fa fa-registered" aria-hidden="true"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success"id="VV">
          <div class="inner">
            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font><sup style="font-size: 20px"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></sup></h3>

            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Produtos Via Varejo<br> com Pendencias</font></font></p>
          </div>
          <div class="icon">
            <i class="ion-alert-circled "></i>
          </div>
          <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Stilo Eletro</font></font><i class="fa fa-registered" aria-hidden="true"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></h3>

            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Produtos Mercado Livre<br> com Pendencias</font></font></p>
          </div>
          <div class="icon">
            <i class="ion-alert-circled"></i>
          </div>
          <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Stilo Eletro</font></font><i class="fa fa-registered" aria-hidden="true"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo htmlspecialchars( $b2wStilo, ENT_COMPAT, 'UTF-8', FALSE ); ?></font></font></h3>

            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Produtos B2W<br> com Pendencias</font></font></p>
          </div>
          <div class="icon">
            <i class="ion-alert-circled"></i>
          </div>
          <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Stilo Eletro</font></font><i class="fa fa-registered" aria-hidden="true"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success" id="Shopee">
          <div class="inner">
            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0 </font></font><sup style="font-size: 20px"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">%</font></font></sup></h3>

            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Produtos Shopee<br> com Pendencias</font></font></p>
          </div>
          <div class="icon">
            <i class="ion-alert-circled "></i>
          </div>
          <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Stilo Eletro</font></font><i class="fa fa-registered" aria-hidden="true"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>

    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo htmlspecialchars( $MagaluClick, ENT_COMPAT, 'UTF-8', FALSE ); ?></font></font></h3>

            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Produtos Magalu<br> com Pendencias</font></font></p>
          </div>
          <div class="icon">
            <i class="ion-alert-circled"></i>
          </div>
          <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Click24</font></font><i class="fa fa-registered" aria-hidden="true"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success"id="VV">
          <div class="inner">
            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font><sup style="font-size: 20px"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></sup></h3>

            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Produtos Via Varejo<br> com Pendencias</font></font></p>
          </div>
          <div class="icon">
            <i class="ion-alert-circled "></i>
          </div>
          <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Click24</font></font><i class="fa fa-registered" aria-hidden="true"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo htmlspecialchars( $mlClick, ENT_COMPAT, 'UTF-8', FALSE ); ?></font></font></h3>

            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Produtos Mercado Livre<br> com Pendencias</font></font></p>
          </div>
          <div class="icon">
            <i class="ion-alert-circled"></i>
          </div>
          <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Click24</font></font><i class="fa fa-registered" aria-hidden="true"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo htmlspecialchars( $b2wClick, ENT_COMPAT, 'UTF-8', FALSE ); ?></font></font></h3>

            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Produtos B2W<br> com Pendencias</font></font></p>
          </div>
          <div class="icon">
            <i class="ion-alert-circled"></i>
          </div>
          <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Click24</font></font><i class="fa fa-registered" aria-hidden="true"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success" id="Shopee">
          <div class="inner">
            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font><sup style="font-size: 20px"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></sup></h3>

            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Produtos Shopee<br> com Pendencias</font></font></p>
          </div>
          <div class="icon">
            <i class="ion-alert-circled "></i>
          </div>
          <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Click24</font></font><i class="fa fa-registered" aria-hidden="true"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>

    

    <div class="card">
      <div class="card-header border-0">
        <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Preço</font></font></h3>
        <div class="card-tools">
          <a href="#" class="btn btn-tool btn-sm">
            <i class="fa fa-download" aria-hidden="true"></i>
          </a>
          <a href="#" class="btn btn-tool btn-sm">
            <i class="fa fa-bars" aria-hidden="true"></i>   
          </a>
        </div>
      </div>
      <div class="card-body table-responsive p-0">
        <table class="table table-striped table-valign-middle">
          <thead>
          <tr>
            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">produtos</font></font></th>
            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Preço</font></font></th>
            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vendas</font></font></th>
            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mais</font></font></th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>
              Algum Produto
            </font></font></td>
            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 13 USD</font></font></td>
            <td>
              <small class="text-success mr-1">
                <i class="fa fa-arrow-up" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                12%
              </font></font></small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 
              12.000 vendidos
            </font></font></td>
            <td>
              <a href="#" class="text-muted">
                <i class="fa fa-search" aria-hidden="true"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              Outro Produto
            </font></font></td>
            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 29 USD</font></font></td>
            <td>
              <small class="text-warning mr-1">
                <i class="fa fa-arrow-right" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                0,5%
              </font></font></small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 
              123.234 vendido
            </font></font></td>
            <td>
              <a href="#" class="text-muted">
                <i class="fa fa-search" aria-hidden="true"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              Produto Incrível
            </font></font></td>
            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 1.230 USD</font></font></td>
            <td>
              <small class="text-danger mr-1">
                <i class="fa fa-arrow-down" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                3%
              </font></font></small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 
              198 vendidos
            </font></font></td>
            <td>
              <a href="#" class="text-muted">
                <i class="fa fa-search" aria-hidden="true"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              Item Perfeito
              </font></font><span class="badge bg-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NOVO</font></font></span>
            </td>
            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 199 USD</font></font></td>
            <td>
              <small class="text-success mr-1">
                <i class="fa fa-arrow-up" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                63%
              </font></font></small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 
              87 vendido
            </font></font></td>
            <td>
              <a href="#" class="text-muted">
                <i class="fa fa-search" aria-hidden="true"></i>
              </a>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  
