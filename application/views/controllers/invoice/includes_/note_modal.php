<div class="modal modal-slide-in fade" id="note-modal">
	<div class="modal-dialog sidebar-sm">
		<?php echo form_open(site_url('invoice/add-note'), ['autocomplete' => 'off', 'class' => 'modal-content pt-0']); ?>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
			<div class="modal-header mb-1">
				<h5 class="modal-title" id="exampleModalLabel">Add Note</h5>
			</div>
			<div class="modal-body flex-grow-1">
				<input type="hidden" id="note-invoice-id" name="invoice_id">
				<div class="form-group">
					<label class="form-label" for="name">Note <span class="text-danger">*</span></label>
					<textarea name="note" class="form-control note" id="note-invoice" rows="4"></textarea>
				</div>
				<button type="submit" class="btn btn-primary data-submit mr-1">Submit</button>
				<button type="reset" class="btn btn-outline-secondary btn-cancel-note" data-dismiss="modal">Cancel</button>
				<hr>

				<div class="notes-section"></div>
			</div>
		<?php echo form_close(); ?>
	</div>
</div>
