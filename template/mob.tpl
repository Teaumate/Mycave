<div class="container visible-xs-block" style="margin-top:65px;">
  <div class="row">
    <div class="col-xs-1">
    <a href="index.php?bottle={$bottle}&direction=left"><i class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i></a>
    </div>
    <div class="col-xs-10 text-center">
      <button type="button" class="update btn btn-default {if !(isset($session['id']) AND isset($session['pseudo']))}disabled{/if}" data-toggle="modal" data-target="#CreateModal" >
        <em class="fa fa-plus"></em>
      </button>
      <button type="button" class="update btn btn-default {if !(isset($session['id']) AND isset($session['pseudo']))}disabled{/if}" data-toggle="modal" data-target="#UpdateModal" >
      <i class="fa fa-pencil"></i>
      </button>
      <form method="post" action="php/delete.php" style="display: inline;">
        <button type="submit" class="delete btn btn-danger {if !(isset($session['id']) AND isset($session['pseudo']))}disabled{/if}" ><i class="fa fa-trash"></i></button>
        <div class="hidden"><input type="text" name="Del_rec" value="{$elts[0].id}"></div>
      </form>
    </div>
    <div class="col-xs-1 text-right">
    <a href="index.php?bottle={$bottle}&direction=right"><i class="fa fa-arrow-circle-right fa-2x" aria-hidden="true"></i></a>
    </div>
  </div >
  <form class="form-horizontal">
    <fieldset style="margin-top:8px;">
    <div class="form-group">
      <label class="col-xs-3 control-label text-right">Name</label>  
      <div class="col-xs-9">
      <input disabled name="name" type="text" value="{$elts[0].name}" class="form-control input-xs name">
      </div>
    </div>
    <div class="form-group">
      <label class="col-xs-3 control-label text-right">Year</label>  
      <div class="col-xs-9">
      <input disabled name="Year" type="number" value="{$elts[0].year}" class="form-control input-xs year">
      </div>
    </div>
    <div class="form-group">
      <label class="col-xs-3 control-label text-right">Grapes</label>  
      <div class="col-xs-9">
      <input disabled name="Grapes" type="text" value="{$elts[0].grapes}" class="form-control input-xs grapes">
      </div>
    </div>
    <div class="form-group">
      <label class="col-xs-3 control-label text-right">Country</label>  
      <div class="col-xs-9">
      <input disabled name="Country" type="text" value="{$elts[0].country}" class="form-control input-xs country">
      </div>
    </div>
    <div class="form-group">
      <label class="col-xs-3 control-label text-right">Region</label>  
      <div class="col-xs-9">
      <input disabled name="Region" type="text" value="{$elts[0].region}" class="form-control input-xs region">
      </div>
    </div>
    <div class="form-group">
      <label class="col-xs-3 control-label text-right">Description</label>  
      <div class="col-xs-9">
      <p class="disabled description">{$elts[0].description}</p>
      </div>
    </div>
    <div class="form-group">
      <label class="col-xs-3 control-label text-right"></label> 
      <div class="col-xs-9">
      <img class="img-responsive" src="img/{$elts[0].picture}" alt="bouteille de {$elts[0].name}">
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
                <input type="text" class="form-control" name="id" value="{$elts[0].id}">
              </div>
              <div class="form-group">
                <label class="form-control-label">Nom:</label>
                <input type="text" class="form-control" name="name" value="{$elts[0].name}">
              </div>
              <div class="form-group">
                <label class="form-control-label">Année:</label>
                <input type="number" class="form-control year" name="year" value="{$elts[0].year}" min="0">
              </div>
              <div class="form-group">
                <label class="form-control-label">Grapes:</label>
                <input type="text" class="form-control" name="grapes" value="{$elts[0].grapes}">
              </div>
              <div class="form-group">
                <label class="form-control-label">Country:</label>
                <input type="text" class="form-control" name="country" value="{$elts[0].country}">
              </div>
              <div class="form-group">
                <label class="form-control-label">Region:</label>
                <input type="text" class="form-control" name="region" value="{$elts[0].region}">
              </div>
              <div class="form-group">
                <label class="form-control-label">Description:</label>
                <input type="text" class="form-control" name="description" value="{$elts[0].description}">
              </div>
              <div class="form-group">
                <label class="form-control-label">Picture:</label>
                <input type="text" class="form-control" name="picture" value="{$elts[0].picture}">
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