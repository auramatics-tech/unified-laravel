var selected_items = [];
$(document).on('change', ".select-all-checkbox" , function() {
	if ($(this).prop('checked') == true) {
		$('.multi-select-checkBox').prop('checked', true);
	} else {
		$('.multi-select-checkBox').prop('checked', false);
	}
	getSelectedItems();
});

//To select the individual select
$(document).on('change', '.multi-select-checkBox', function() {
	var count = $('tbody input[type="checkbox"].multi-select-checkBox').length;
	var checked_item_count = $('tbody input[type="checkbox"].multi-select-checkBox:checked').length;
	if(checked_item_count < count) {
		($('.select-all-checkbox').prop('checked') == true) ? $('.select-all-checkbox').prop('checked', false) : '';
	} else {
		($('.select-all-checkbox').prop('checked') == false) ? $('.select-all-checkbox').prop('checked', true) : '';
	}
	getSelectedItems();
});

//Function to get the selected items
function getSelectedItems() {
	selected_items = [];
	$('tbody input[type="checkbox"].multi-select-checkBox:checked').each(function(e) {
		selected_items.push($(this).val());
	});
	setTimeout(function() {
		if(selected_items.length) {
			$('.remove-btn').show();
		} else {
			$('.remove-btn').hide();
		}
	}, 100)
}

//To remove the selected items
$(document).on('click', '.remove-btn', function() {
	var type = $(this).attr('data-type');
	var url = $(this).attr('data-url');
	console.log(selected_items);
	if(selected_items.length && type != '' && url != '') {
		if (confirm("Are you sure you want to delete records ?")) {
			$.ajax({
			    url: url + '/remove-items',
			    type: "POST",
			    data: { ids : JSON.stringify(selected_items), 'type': type}, 
			    success: function(data){
			       if(data.status == 200) {
			           location.reload();
			       } else {
					   alert('Something went wrong');
				   }
			    },
			    error: function(error) {
			        if(error.responseJSON != '' && error.status == 400) {
			            alert(error.responseJSON.error);
			        }
			    }
			});
		}
	}
})