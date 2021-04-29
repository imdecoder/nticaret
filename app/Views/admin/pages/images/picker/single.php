<div class="form-group">
	<form action="<?=base_url(route_to('admin_image_upload'))?>" method="post" class="dropzone" id="<?=$divId?>">
		<div class="fallback">
			<input type="file" name="file">
		</div>
	</form>
	<hr>
	<div class="row gutters-sm" id="single-image-list">

        <?php foreach ($images as $image) : ?>

            <div class="col-6 col-sm-2">
    			<label class="imagecheck mb-4">
    				<input type="radio" name="imagecheck" value="<?=$image->id?>" class="imagecheck-input" data-id="<?=$image->id?>" data-src="<?=$image->getUrl('187x134')?>">
    				<figure class="imagecheck-figure">
    					<img src="<?=$image->getUrl('187x134')?>" alt="" class="imagecheck-image">
    				</figure>
    			</label>
    		</div>

        <?php endforeach; ?>

    </div>
</div>
<div id="single-modal-attribute" data-src="<?=$srcID?>" data-input="<?=$inputID?>" style="display: none"></div>

<script>
	Dropzone.autoDiscover = false;

	let <?=$variable?> = new Dropzone('#<?=$divId?>');

	<?=$variable?>.on('complete', function (file) {
		let image = JSON.parse(file.xhr.response);

		if (!image.status) {
			iziToast.error({
				message: image.message.file,
				position: 'topRight'
			});
		} else {
			$('#single-image-list').prepend('<div class="col-6 col-sm-2">' +
				'<label class="imagecheck mb-4">' +
					'<input type="radio" name="imagecheck" value="6" class="imagecheck-input" data-id="' + image.id + '" data-src="' + image.src + '">' +
					'<figure class="imagecheck-figure">' +
						'<img src="' + image.src + '" alt="" class="imagecheck-image">' +
					'</figure>' +
				'</label>' +
			'</div>');
		}
	});
</script>
