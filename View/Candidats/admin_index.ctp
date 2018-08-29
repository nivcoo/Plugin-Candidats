<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Ajouter un candidat &nbsp;&nbsp;<a href="<?= $this->Html->url(array('controller' => 'candidats', 'action' => 'add', 'admin' => true)) ?>" class="btn btn-success"><?= $Lang->get('GLOBAL__ADD') ?></a></h3>
				</div>
				<div class="box-body">

					<table class="table table-bordered dataTable">
						<thead>
							<tr>
								<th><?= $Lang->get('GLOBAL__NAME') ?></th>
								<th><?= $Lang->get('CANDIDATS__URL') ?></th>
								<th><?= $Lang->get('CANDIDATS__DESC') ?></th>
								<th><?= $Lang->get('CANDIDATS__RANK') ?></th>
								<th class="right"><?= $Lang->get('GLOBAL__ACTIONS') ?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($search_candidate as $v) { ?>
								<tr>
									<td><?= $v["CandidateList"]["name"] ?></td>
									<td><?= $v["CandidateList"]["url"] ?></td>
									<td><?= $v["CandidateList"]["description"] ?></td>
									<td><?= $v["CandidateList"]["rank"] ?></td>
									<td class="right">
										<a onClick="confirmDel('<?= $this->Html->url(array('controller' => 'candidats', 'action' => 'delete/'.$v["CandidateList"]["id"], 'admin' => true)) ?>')" class="btn btn-danger"><?= $Lang->get('GLOBAL__DELETE') ?></a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
</section>
