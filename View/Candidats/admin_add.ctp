<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Ajouter un candidat</h3>
        </div>
        <div class="box-body">
          <form action="<?= $this->Html->url(array('controller' => 'candidats', 'action' => 'add')) ?>" method="post" data-ajax="true" data-redirect-url="<?= $this->Html->url(array('controller' => 'candidats', 'action' => 'index', 'admin' => true)) ?>">

            <div class="ajax-msg"></div>

            <div class="form-group">
              <label><?= $Lang->get('GLOBAL__NAME') ?></label>
              <input name="name" class="form-control"type="text">
            </div>
			
			<div class="form-group">
              <label>Url de l'image de profil</label>
              <input name="url" class="form-control"type="text">
            </div>
			
			<div class="form-group">
              <label>Courte description</label>
              <input name="desc" class="form-control"type="text">
            </div>
			
			<div class="form-group">
              <label>Grade attendu</label>
              <input name="rank" class="form-control"type="text">
            </div>
			
            <div class="pull-right">
              <a href="<?= $this->Html->url(array('controller' => 'candidats', 'action' => 'index', 'admin' => true)) ?>" class="btn btn-default"><?= $Lang->get('GLOBAL__CANCEL') ?></a>
              <button class="btn btn-primary" type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
