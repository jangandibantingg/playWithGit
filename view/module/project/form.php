<?php if ($action == 'add'): ?>
<div class="section-body mt-3">
<div class="container-fluid">
<div class="row clearfix">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h3 class="card-title">New Project</h3>
</div>
<div class="card-body">
<form id="form" action="webapp/engoncode/<?php echo "$page"; ?>/post" method="post" validate>
 <div class="form-group">
<label>Project board name</label>
<input type="text" name="name" class="form-control" required>
<input type="hidden" name="data" value="<?php echo "$page"; ?>"class="form-control" required>

</div>

<div class="form-group">
<label>Description</label>
<textarea name="text" class="form-control" rows="5" cols="30" required></textarea>
</div>

<div class="form-group">
<label>Link Project</label>
<input type="text" name="link" class="form-control" required>
</div>

<br>
<button id="submit" type="submit" class="btn btn-primary">Submit</button>
<a href="<?php echo "$server/$page.aspx"; ?>" class="btn btn-info">Cancel</a>

</form>
<label id="info" ></label>
</div>
</div>
</div>
<?php endif; ?>
<?php if ($action == 'edit' && isset($_GET['id']) ): ?>
  <div class="section-body mt-3">
  <div class="container-fluid">
  <div class="row clearfix">
  <div class="col-md-12">
  <div class="card">
  <div class="card-header">
  <h3 class="card-title">New Project</h3>
  </div>
  <div class="card-body">
  <form id="form" action="webapp/engoncode/<?php echo "$page"; ?>/post" method="post" validate>
   <div class="form-group">
  <label>Project board name</label>
  <input value="<?php echo $edit->data[0]->name; ?>" type="text" name="name" class="form-control" required>
  <input type="hidden" name="data" value="<?php echo "$page"; ?>"class="form-control" required>
  <input type="hidden" name="id" value="<?php echo "$_GET[id]"; ?>"class="form-control" required>

  </div>

  <div class="form-group">
  <label>Description</label>
  <textarea name="text" class="form-control" rows="5" cols="30" required><?php echo $edit->data[0]->text; ?></textarea>
  </div>

  <div class="form-group">
  <label>Link Project</label>
  <input value="<?php echo $edit->data[0]->link; ?>" type="text" name="link" class="form-control" required>
  </div>

  <br>
  <button id="submit" type="submit" class="btn btn-primary">Submit</button>
  <a href="<?php echo "$server/$page.aspx"; ?>" class="btn btn-info">Cancel</a>
  </form>
  <label id="info" ></label>
  </div>
  </div>
  </div>
<?php endif; ?>
