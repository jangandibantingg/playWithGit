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
<form id="form" action="webapp/engoncode/<?php echo "$page"; ?>/post" method="post" novalidate>
 <div class="form-group">
<label>Project board name</label>
<input type="text" name="project" class="form-control" required>
</div>

<div class="form-group">
<label>Description</label>
<textarea name="description" class="form-control" rows="5" cols="30" required></textarea>
</div>

<div class="form-group">
<label>Link Project</label>
<input type="text" name="link" class="form-control" required>
</div>

<br>
<button id="submit" class="btn btn-primary">Submit</button>
</form>
<label id="info" ></label>
</div>
</div>
</div>
<?php endif; ?>