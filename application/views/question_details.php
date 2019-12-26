    <section class="blog_w3ls py-5" id="events">
        <div class="container py-xl-5 py-lg-3">
	<section class="form_area" > 
	
	
			<div class="container "> 
			
					<?php if($this->session->flashdata('q_message')){
						echo $this->session->flashdata('q_message');
					}?>
			
			
				<h1> <i class="icofont icofont-hand-right"></i> <?=$question[0]['title']?> </h1>
				
				<br /> 
				
				<p> <?=$question[0]['description']?> </p>
				
				<br /> 
				
				<br /> 
				
				<xmp class="jumbotron"><?=strip_tags($question[0]['code']);?></xmp>
			 <!-- <textarea id="demotext"  readonly ><?=$question[0]['code'];?></textarea>
		 -->	
			<!--<pre> <?=$question[0]['code'];?> </pre>---->
			
			
			
			
			</div>
			
	
	
	
	</section>
	

	
	<section class="" > 


	<div class="container">
	
		<?php if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');
		}?>
		<div class="Comment"> 
		
		<h4>Comment: </h4>
		
		<br /> 
		<div class="container">
		<form action="<?=base_url()?>Question/comment/<?=$question[0]['id']?>" method="post" > 
		
			<div class="form-group">
				<textarea name="comment" class="form-control input-lg" placeholder="add your comment"></textarea>
			</div>
			
			<div class="error"><?=form_error('comment')?></div>
			
			
			<div class="form-group">
			
				<?php  if($this->session->userdata('userid')){ ?>
				
						<input type="submit" class="btn btn-primary" value="Add Comment" />
				
				<?php  }else {  ?>
				
						<input type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" value="Add Comment" />
			
				<?php  } ?>
				
			</div>
			<br />
		
		
		</form>
	</div>

		<?php   

		if(!empty($comment)){
			
			foreach($comment as $row){  
		
			?>
			
			
			<div class="comment_area"> 
			<p><strong> <i class="icofont icofont-comment"></i> <?=$row['u_name']?> </strong> <?=$row['comment']?></p>
			
			
				
			</div>
			<br />
			<?php  
		
			}
		}
		
		?>
		
		
		</div>
	</div>
	
	
	
	
	</section>
	
	
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Message</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			Please Login.
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<a href="<?=base_url()?>login"><button type="button" class="btn btn-primary">Login</button></a>
		  </div>
		</div>
	  </div>
	</div>
	</div>
</section>
	
	