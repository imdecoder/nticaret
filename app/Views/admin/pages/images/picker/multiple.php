<div class="form-group">
	<form action="<?=base_url(route_to('admin_image_upload'))?>" method="post" class="dropzone" id="multiple-image-dropzone">
		<div class="fallback">
			<input type="file" name="file" multiple>
		</div>
	</form>
	<hr>
	<div class="row gutters-sm" id="multiple-image-list">

        <?php for ($i = 0; $i < 10; $i++) : ?>

            <div class="col-6 col-sm-2">
    			<label class="imagecheck mb-4">
    				<input type="checkbox" name="imagecheck" value="1" class="imagecheck-input" data-id="1" data-src="https://demo.getstisla.com/assets/img/news/img01.jpg">
    				<figure class="imagecheck-figure">
    					<img src="https://demo.getstisla.com/assets/img/news/img01.jpg" alt="}" class="imagecheck-image">
    				</figure>
    			</label>
    		</div>
    		<div class="col-6 col-sm-2">
    			<label class="imagecheck mb-4">
    				<input type="checkbox" name="imagecheck" value="2" class="imagecheck-input" data-id="2" data-src="https://demo.getstisla.com/assets/img/news/img02.jpg">
    				<figure class="imagecheck-figure">
    					<img src="https://demo.getstisla.com/assets/img/news/img02.jpg" alt="}" class="imagecheck-image">
    				</figure>
    			</label>
    		</div>
    		<div class="col-6 col-sm-2">
    			<label class="imagecheck mb-4">
    				<input type="checkbox" name="imagecheck" value="3" class="imagecheck-input" data-id="3" data-src="https://demo.getstisla.com/assets/img/news/img03.jpg">
    				<figure class="imagecheck-figure">
    					<img src="https://demo.getstisla.com/assets/img/news/img03.jpg" alt="}" class="imagecheck-image">
    				</figure>
    			</label>
    		</div>
    		<div class="col-6 col-sm-2">
    			<label class="imagecheck mb-4">
    				<input type="checkbox" name="imagecheck" value="4" class="imagecheck-input" data-id="4" data-src="https://demo.getstisla.com/assets/img/news/img04.jpg">
    				<figure class="imagecheck-figure">
    					<img src="https://demo.getstisla.com/assets/img/news/img04.jpg" alt="}" class="imagecheck-image">
    				</figure>
    			</label>
    		</div>
    		<div class="col-6 col-sm-2">
    			<label class="imagecheck mb-4">
    				<input type="checkbox" name="imagecheck" value="5" class="imagecheck-input" data-id="5" data-src="https://demo.getstisla.com/assets/img/news/img05.jpg">
    				<figure class="imagecheck-figure">
    					<img src="https://demo.getstisla.com/assets/img/news/img05.jpg" alt="}" class="imagecheck-image">
    				</figure>
    			</label>
    		</div>
    		<div class="col-6 col-sm-2">
    			<label class="imagecheck mb-4">
    				<input type="checkbox" name="imagecheck" value="6" class="imagecheck-input" data-id="6" data-src="https://demo.getstisla.com/assets/img/news/img06.jpg">
    				<figure class="imagecheck-figure">
    					<img src="https://demo.getstisla.com/assets/img/news/img06.jpg" alt="}" class="imagecheck-image">
    				</figure>
    			</label>
    		</div>

        <?php endfor; ?>

    </div>
</div>
<div id="multiple-modal-attribute" data-area="<?=$area?>" data-input="<?=$inputName?>" style="display: none"></div>

<script>
	Dropzone.autoDiscover = false;

	let myMultipleDropzone = new Dropzone('#multiple-image-dropzone');

	myMultipleDropzone.on('complete', function (file) {
		let image = JSON.parse(file.xhr.response);

		if (!image.status) {
			iziToast.error({
				message: image.message.file,
				position: 'topRight'
			});
		} else {
			$('#multiple-image-list').prepend('<div class="col-6 col-sm-2">' +
				'<label class="imagecheck mb-4">' +
					'<input type="checkbox" name="imagecheck" value="6" class="imagecheck-input" data-id="' + image.id + '" data-src="' + image.src + '">' +
					'<figure class="imagecheck-figure">' +
						'<img src="' + image.src + '" alt="" class="imagecheck-image">' +
					'</figure>' +
				'</label>' +
			'</div>');
		}
	});
</script>
