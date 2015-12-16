<!-- File : src/Template/index.ctp -->
<h1>Blog Article</h1> <?= $this->Html->link('Add Article', ['action' => 'add']) ?>

<?php foreach ($articles as $article) : ?>

<div class="row">
	<div class="box">
		<h2><?= $this->Html->link($article->title,['action' => 'view', $article->id]) ?> </h2>
		<small> <?= $article->created->format(DATE_RFC850) ?></small>
		<div class="extension">
					<?= $this->Form->postLink(
                		'Delete',
                		['action' => 'delete', $article->id],
                		['confirm' => 'Are you sure?'])
            		?>
					<?= $this->Html->link('Edit', ['action' => 'edit',$article->id]) ?>
		</div>
	</div>
</div>

<?php endforeach; ?>