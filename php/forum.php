<?php 
$identifier = 2;
include("page_header.php"); ?>

<section class="s2">
<div class="container-fluid">
<style>
	input[type=checkbox]
{
  /* Double-sized Checkboxes */
  -ms-transform: scale(1.5); /* IE */
  -moz-transform: scale(1.5); /* FF */
  -webkit-transform: scale(1.5); /* Safari and Chrome */
  -o-transform: scale(1.5); /* Opera */
  transform: scale(1.5);
  padding: 10px;
}
.list-group-item +  .list-group-item {
    border-top-width: 1px !important;
}
</style>
	<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				
			</div>
		</div>
		<div class="row">
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>Thread List</b>
						<span class="">

							<button class="btn btn-primary btn-block btn-sm col-sm-2 float-right" type="button" id="new_topic">
					<i class="fa fa-plus"></i><a href="createthread.php"> Create Thread</button></a>
				</span>
					</div>
					<div class="card-body">
						<ul class="w-100 list-group" id="topic-list">
						<li class="list-group-item mb-4">
							<a href=# style="color:blue;">Sample Post</a>
							<hr>
							
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Donec elementum nunc bibendum, luctus diam id, tincidunt nisl. 
						Vestibulum turpis arcu, fringilla sed lacus in, eleifend vulputate purus.
						 <a style="color: blue"; href="#">Read more...</a>
					
					<hr>		
					<p class="row justify-content-left"><span class="badge badge-success text-white"><i>  Posted By: Naufal Hadi </i></span></p>
					<span><button type="button" class="btn btn-info"> <a href="editthread.php">Edit</button></span></a>
								<hr>
								
								<span class="float-left badge badge-secondary text-white"> 10 view/s</span>
								<span class="float-left badge badge-primary text-white ml-2"><i class="fa fa-comments"></i> 3 comment/s </span>
									<span class="float-right">
									<span>Tags: </span>
									<span class="badge badge-info text-white ml-2">sample</span>
			
							
						
					
					</div>
					<div class="card-body">
						<ul class="w-100 list-group" id="topic-list">
						<li class="list-group-item mb-4">
					
							<a href=# style="color:blue;">Sample Post 2</a>
							<hr>
							
							Sample TopicSed porta nisi quis nunc gravida, ut ornare velit vulputate.
							 Aenean dictum mauris suscipit ante imperdiet tincidunt. 
							 Nulla accumsan mauris eu libero semper, eget faucibus mi vulputate. 
						 <a style="color: blue"; href="#">Read more...</a>
					
					<hr>		
					<p class="row justify-content-left"><span class="badge badge-success text-white"><i>  Posted By: Ramadhan Muhammad </i></span></p>
								<hr>
								
								<span class="float-left badge badge-secondary text-white"> 10 view/s</span>
								<span class="float-left badge badge-primary text-white ml-2"><i class="fa fa-comments"></i> 3 comment/s </span>
									<span class="float-right">
									<span>Tags: </span>
									<span class="badge badge-info text-white ml-2">sample</span>
			
					</div>
				</div>
				</div>
				
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<style>
	
	td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset
	}
	img{
		max-width:100px;
		max-height:150px;
	}
</style>
<script>
	$(document).ready(function(){
		$('table').dataTable()
	})
	$('#topic-list').JPaging({
	    pageSize: 15,
	    visiblePageSize: 10

	  });

	$('#new_topic').click(function(){
		uni_modal("New Entry","manage_topic.php",'mid-large')
	})
	
	$('.edit_topic').click(function(){
		uni_modal("Edit Topic","manage_topic.php?id="+$(this).attr('data-id'),'mid-large')
		
	})
	$('.delete_topic').click(function(){
		_conf("Are you sure to delete this topic?","delete_topic",[$(this).attr('data-id')],'mid-large')
	})

	function delete_topic($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_topic',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>
</section>