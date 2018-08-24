$('input#name-submit').on('click', function(){
	var name = $('input#username').val();
	if ($.trim(name) != '') {
		$.post('ajax/name_ajax.php', {username: name}, function(data){
			$('div#name-data').text(data);
		})
	}

});