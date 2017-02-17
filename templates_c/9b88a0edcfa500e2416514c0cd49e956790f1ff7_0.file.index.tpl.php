<?php
/* Smarty version 3.1.30, created on 2017-02-17 15:41:33
  from "/opt/lampp/htdocs/www/MyCave/template/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a70b9d688397_95619821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b88a0edcfa500e2416514c0cd49e956790f1ff7' => 
    array (
      0 => '/opt/lampp/htdocs/www/MyCave/template/index.tpl',
      1 => 1487337212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:mob.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58a70b9d688397_95619821 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"MyCave"), 0, false);
?>
  
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="img/logo.png" class="logo" alt="logo"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <?php if ((isset($_smarty_tpl->tpl_vars['session']->value['id']) && isset($_smarty_tpl->tpl_vars['session']->value['pseudo']))) {?>
                <a id="logout" href="php/logout.php"> <b>Logout</b> <i class="fa fa-sign-out" aria-hidden="true"></i></a>
              <?php } else { ?>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                  <ul id="login-dp" class="dropdown-menu">
                    <li>
                      <div class="row">
                        <div class="col-md-12">
                          <form class="form" role="form" method="post" action="php/login_post.php" accept-charset="UTF-8" id="login-nav">
                            <div class="form-group">
                              <label class="sr-only" for="exampleInputEmail2">Login</label>
                              <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Login" name="login" required autofocus>
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="exampleInputPassword2">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="pswd" required>
                            </div>
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
              <?php }?>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <div class="col-md-12 hidden-xs"> <!-- ******************************************************************************-->
    <div class="panel panel-default panel-table">
      <div class="panel-heading">
        <div class="row">
          <div class="col col-xs-6">
            <h3 class="panel-title">This is MyCave!</h3>
          </div>
          <div class="col col-xs-6 text-right">

          </div>
        </div>
      </div>
      <div class="panel-body">
        <div class="table table-striped table-bordered table-list">
          <div class="thead">
            <div class="tr">
              <!--**************  Header ****************-->
              <div class="col-sm-1 th">Picture</div>
              <div class="col-sm-2 th">Name</div>
              <div class="col-sm-1 th">Year</div>
              <div class="col-sm-1 th">Grapes</div>
              <div class="col-sm-1 th">Country</div>
              <div class="col-sm-1 th">Region</div>
              <div class="col-sm-4 th">Description</div>
              <div class="col-sm-1 th btn-create-head">            
                <?php if ((isset($_smarty_tpl->tpl_vars['session']->value['id']) && isset($_smarty_tpl->tpl_vars['session']->value['pseudo']))) {?> <!--************** button Create ****************-->
                  <button type="button" class="btn btn-sm btn-primary btn-create" id="create">Create New</button>
                <?php } else { ?>
                    <button type="button" class="btn btn-sm btn-primary btn-create disabled" id="create">Create New</button>
                <?php }?>
              </div>
            </div>
          </div>
          <div class="tbody">
          <div class="row" id="newRow">
            <!--**************  Create  ****************-->
            <div class="col-sm-12 tr">
              <form class="" method="post" action="php/create.php">
                <div class=" col-sm-1 td">
                  <input type="text" class="form-control newrow" name="picture" placeholder="Picture..." required/>
                </div>
                <div class=" col-sm-2 td">
                  <input type="text" class="form-control newrow" name="name" placeholder="Name..." required autofocus/>
                </div>
                <div class=" col-sm-1 td">
                  <input type="number" class="form-control newrow year" name="year" placeholder="Year..." min="1" required/>
                </div>
                <div class=" col-sm-1 td">
                  <input type="text" class="form-control newrow" name="grapes" placeholder="Grapes..." required/>
                </div>
                <div class=" col-sm-1 td">
                  <input type="text" class="form-control newrow" name="country" placeholder="Country..." required/>
                </div>
                <div class=" col-sm-1 td">
                  <input type="text" class="form-control newrow" name="region" placeholder="Region..." required/>  
                </div>
                <div class=" col-sm-4 td">
                  <input type="text" class="form-control newrow" name="description" placeholder="Description..." required/>
                </div>
                <div class="col-sm-1 td">
                  <input type="submit" class="btn btn-md btn-info" value="OK">
                </div>
              </form>
            </div>
          </div>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['elts']->value, 'elt');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->value) {
?>
            <div class="row">
                <div class="col-sm-12 tr">
                  <div class="hidden"> <!--      necessaire pour l'update'   -->
                      <?php echo $_smarty_tpl->tpl_vars['elt']->value['id'];?>

                  </div>
                  <div class=" col-sm-4 td hidden">
                      <?php echo $_smarty_tpl->tpl_vars['elt']->value['picture'];?>
      <!--      necessaire pour récup nom de l'image dans modal  (en fait non) -->
                  </div>
                  <div class=" col-sm-1 td">     <!--      affiche la colonne  7   -->
                      <img class="img-responsive" src="img/<?php echo $_smarty_tpl->tpl_vars['elt']->value['picture'];?>
" alt="bouteille de <?php echo $_smarty_tpl->tpl_vars['elt']->value['name'];?>
">
                  </div>
                  <div class="col-sm-2 td">
                      <?php echo $_smarty_tpl->tpl_vars['elt']->value['name'];?>

                  </div>
                  <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (2) : 2-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 2, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                  <div class=" col-sm-1 td">
                      <?php echo $_smarty_tpl->tpl_vars['elt']->value[$_smarty_tpl->tpl_vars['i']->value];?>

                  </div>
                  <?php }
}
?>

                  <!-- fin for -->
                  <div class=" col-sm-4 td">
                      <?php echo $_smarty_tpl->tpl_vars['elt']->value[6];?>
      <!--      affiche la colonne  6   -->
                  </div>
                  <div class=" col-sm-1 td">
                      <button type="button" class="update btn btn-default <?php if (!(isset($_smarty_tpl->tpl_vars['session']->value['id']) && isset($_smarty_tpl->tpl_vars['session']->value['pseudo']))) {?>disabled<?php }?>" data-toggle="modal" data-target="#myModal" >
                      <em class="fa fa-pencil"></em>
                      </button>
                      <form method="post" action="php/delete.php" id="Dform">
                      <button type="submit" class="delete btn btn-danger <?php if (!(isset($_smarty_tpl->tpl_vars['session']->value['id']) && isset($_smarty_tpl->tpl_vars['session']->value['pseudo']))) {?>disabled<?php }?>"><em class="fa fa-trash"></em></button>
                      <div class="hidden"><input type="text" name="Del_rec" value="<?php echo $_smarty_tpl->tpl_vars['elt']->value['id'];?>
"></div>
                      </form>
                  </div>
                </div>
            </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
        <!-- panel Body -->
      </div>
      </div>
      <div class="panel-footer">
        <div class="row">
          <div class="col col-xs-4">Page <?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
 of <?php echo $_smarty_tpl->tpl_vars['nb_pages']->value;?>

          </div>
          <div class="col col-xs-8">
            <ul class="pagination hidden-xs pull-right">
              <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nb_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nb_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                <li><a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['i']->value-1;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
              <?php }
}
?>

            </ul>
            <ul class="pagination visible-xs pull-right">
              <li><a href="#">«</a></li>
              <li><a href="#">»</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--******************************************** Modal Update > xs *****************************************-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update plz</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="php/update.php" method="post">
              <div class="hidden">
                <label class="form-control-label">Id:</label>
                <input type="text" class="form-control" name="id">
              </div>
              <div class="form-group">
                <label class="form-control-label">Nom:</label>
                <input type="text" class="form-control" name="name">
              </div>
              <div class="form-group">
                <label class="form-control-label">Année:</label>
                <input type="number" class="form-control year" name="year" min="1">
              </div>
              <div class="form-group">
                <label class="form-control-label">Grapes:</label>
                <input type="text" class="form-control" name="grapes">
              </div>
              <div class="form-group">
                <label class="form-control-label">Country:</label>
                <input type="text" class="form-control" name="country">
              </div>
              <div class="form-group">
                <label class="form-control-label">Region:</label>
                <input type="text" class="form-control" name="region">
              </div>
              <div class="form-group">
                <label class="form-control-label">Description:</label>
                <input type="text" class="form-control" name="description">
              </div>
              <div class="form-group">
                <label class="form-control-label">Picture:</label>
                <input type="text" class="form-control" name="picture">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">OK</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<div id="SwipeScreen">
<?php $_smarty_tpl->_subTemplateRender("file:mob.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }
}
