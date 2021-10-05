 $(document).ready(function(){
        load_data();
        function load_data(page){
            $.ajax({
                url:"read.php", 
                method:"POST",
                data:{page:page},
                success:function(data){
                    $("#pagination").html(data);
                }
            })
        }
    $(document).on("click", ".pagination_link",function(){
        var page = $(this).attr("id");
        load_data(page);
    })

    $("#submit").click(function( event ) {
        event.preventDefault();
        
        id = $('#sid').val()
        name = $('#name').val()
        description = $('#description').val();

        $.ajax({
            url: "create.php",
            method: "POST",
            data: {
                id:id,
                name: name,
                description: description
                }
            })
            .done(function( msg ) {
                $("#msg").html(msg);
                $("#crud")[0].reset();
                load_data();
            })
    });

	$(document).on("click",".btn-del", function(){
		console.log("delete button clicked");
		let id = $(this).attr("data-id");
		mythis = (this)
		$.ajax({
			url: "delete.php",
			method: "POST",
			data: {id: id},
			success: function(data) {
				if(data==1){
					msg = "<div class='alert alert-success'>Record deleted successfully</div>";
				}
				else if(data==0){
					msg = "<div class='alert alert-dark mt-3'>Record not deleted successfully></div>";
				}
				$("#msg").html(msg);
				$(mythis).closest('tr').fadeOut();
				load_data();
			}
		});
	});
});
