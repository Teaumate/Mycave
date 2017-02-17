<?php
/* Smarty version 3.1.30, created on 2017-02-17 15:41:33
  from "/opt/lampp/htdocs/www/MyCave/template/mob.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a70b9d70c1f6_07441024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdc368934ba23d0fba16e2ba36a137418bd2d4f4' => 
    array (
      0 => '/opt/lampp/htdocs/www/MyCave/template/mob.tpl',
      1 => 1487337212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a70b9d70c1f6_07441024 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container visible-xs-block" style="margin-top:65px;">
  <div class="row">
    <div class="col-xs-1">
    <a href="index.php?bottle=<?php echo $_smarty_tpl->tpl_vars['bottle']->value;?>
&direction=left"><i class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i></a>
    </div>
    <div class="col-xs-10 text-center">
      <button type="button" class="update btn btn-default <?php if (!(isset($_smarty_tpl->tpl_vars['session']->value['id']) && isset($_smarty_tpl->tpl_vars['session']->value['pseudo']))) {?>disabled<?php }?>" data-toggle="modal" data-target="#CreateModal" >
        <em class="fa fa-plus"></em>
      </button>
      <button type="button" class="update btn btn-default <?php if (!(isset($_smarty_tpl->tpl_vars['session']->value['id']) && isset($_smarty_tpl->tpl_vars['session']->value['pseudo']))) {?>disabled<?php }?>" data-toggle="modal" data-target="#UpdateModal" >
      <i class="fa fa-pencil"></i>
      </button>
      <form method="post" action="php/delete.php" style="display: inline;">
        <button type="submit" class="delete btn btn-danger <?php if (!(isset($_smarty_tpl->tpl_vars['session']->value['id']) && isset($_smarty_tpl->tpl_vars['session']->value['pseudo']))) {?>disabled<?php }?>" ><i class="fa fa-trash"></i></button>
        <div class="hidden"><input type="text" name="Del_rec" value="<?php echo $_smarty_tpl->tpl_vars['elts']->value[0]['id'];?>
"></div>
      </form>
    </div>
    <div class="col-xs-1 text-right">
    <a href="index.php?bottle=<?php echo $_smarty_tpl->tpl_vars['bottle']->value;?>
&direction=right"><i class="fa fa-arrow-circle-right fa-2x" aria-hidden="true"></i></a>
    </div>
  </div >
  <form class="form-horizontal">
    <fieldset style="margin-top:8px;">
    <div class="form-group">
      <label class="col-xs-3 control-label text-right">Name</label>  
      <div class="col-xs-9">
      <input disabled name="name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['elts']->value[0]['name'];?>
" class="form-control input-xs name">
      </div>
    </div>
    <div class="form-group">
      <label class="col-xs-3 control-label text-right">Year</label>  
      <div class="col-xs-9">
      <input disabled name="Year" type="number" value="<?php echo $_smarty_tpl->tpl_vars['elts']->value[0]['year'];?>
" class="form-control input-xs year">
      </div>
    </div>
    <div class="form-group">
      <label class="col-xs-3 control-label text-right">Grapes</label>  
      <div class="col-xs-9">
      <input disabled name="Grapes" type="text" value="<?php echo $_smarty_tpl->tpl_vars['elts']->value[0]['grapes'];?>
" class="form-control input-xs grapes">
      </div>
    </div>
    <div class="form-group">
      <label class="col-xs-3 control-label text-right">Country</label>  
      <div class="col-xs-9">
      <input disabled name="Country" type="text" value="<?php echo $_smarty_tpl->tpl_vars['elts']->value[0]['country'];?>
" class="form-control input-xs country">
      </div>
    </div>
    <div class="form-group">
      <label class="col-xs-3 control-label text-right">Region</label>  
      <div class="col-xs-9">
      <input disabled name="Region" type="text" value="<?php echo $_smarty_tpl->tpl_vars['elts']->value[0]['region'];?>
" class="form-control input-xs region">
      </div>
    </div>
    <div class="form-group">
      <label class="col-xs-3 control-label text-right">Description</label>  
      <div class="col-xs-9">
      <p class="disabled description"><?php echo $_smarty_tpl->tpl_vars['elts']->value[0]['description'];?>
</p>
      </div>
    </div>
    <div class="form-group">
      <label class="col-xs-3 control-label text-right"></label> 
      <div class="col-xs-9">
      <img class="img-responsive" src="img/<?php echo $_smarty_tpl->tpl_vars['elts']->value[0]['picture'];?>
" alt="bouteille de <?php echo $_smarty_tpl->tpl_vars['elts']->value[0]['name'];?>
">
      </div>
    </div>
    </fieldset>
  </form>
</div>
    <!--******************************************** Modal Create *****************************************-->
    <div class="modal fade" id="CreateModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel">Nvle Teteille</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="php/create.php" method="post">
              <div class="form-group">
                <label class="form-control-label">Nom:</label>
                <input type="text" class="form-control" name="name" required>
              </div>
              <div class="form-group">
                <label class="form-control-label">Année:</label>
                <input type="number" class="form-control year" name="year" min="0" required>
              </div>
              <div class="form-group">
                <label class="form-control-label">Grapes:</label>
                <input type="text" class="form-control" name="grapes" required>
              </div>
              <div class="form-group">
                <label class="form-control-label">Country:</label>
                <input type="text" class="form-control" name="country" required>
              </div>
              <div class="form-group">
                <label class="form-control-label">Region:</label>
                <input type="text" class="form-control" name="region" required>
              </div>
              <div class="form-group">
                <label class="form-control-label">Description:</label>
                <input type="text" class="form-control" name="description" required>
              </div>
              <div class="form-group">
                <label class="form-control-label">Picture:</label>
                <input type="text" class="form-control" name="picture" required>
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
     <!--******************************************** Modal Update *****************************************-->
     <div class="modal fade" id="UpdateModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabl" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalLabl">Nvle Teteille</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="php/update.php" method="post">
              <div class="hidden">
                <label class="form-control-label">Id:</label>
                <input type="text" class="form-control" name="id" value="<?php echo $_smarty_tpl->tpl_vars['elts']->value[0]['id'];?>
">
              </div>
              <div class="form-group">
                <label class="form-control-label">Nom:</label>
                <input type="text" class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['elts']->value[0]['name'];?>
">
              </div>
              <div class="form-group">
                <label class="form-control-label">Année:</label>
                <input type="number" class="form-control year" name="year" value="<?php echo $_smarty_tpl->tpl_vars['elts']->value[0]['year'];?>
" min="0">
              </div>
              <div class="form-group">
                <label class="form-control-label">Grapes:</label>
                <input type="text" class="form-control" name="grapes" value="<?php echo $_smarty_tpl->tpl_vars['elts']->value[0]['grapes'];?>
">
              </div>
              <div class="form-group">
                <label class="form-control-label">Country:</label>
                <input type="text" class="form-control" name="country" value="<?php echo $_smarty_tpl->tpl_vars['elts']->value[0]['country'];?>
">
              </div>
              <div class="form-group">
                <label class="form-control-label">Region:</label>
                <input type="text" class="form-control" name="region" value="<?php echo $_smarty_tpl->tpl_vars['elts']->value[0]['region'];?>
">
              </div>
              <div class="form-group">
                <label class="form-control-label">Description:</label>
                <input type="text" class="form-control" name="description" value="<?php echo $_smarty_tpl->tpl_vars['elts']->value[0]['description'];?>
">
              </div>
              <div class="form-group">
                <label class="form-control-label">Picture:</label>
                <input type="text" class="form-control" name="picture" value="<?php echo $_smarty_tpl->tpl_vars['elts']->value[0]['picture'];?>
">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">OK</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div><?php }
}
