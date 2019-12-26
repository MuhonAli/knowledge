    <section class="contact py-5" id="contact">
        <div class="container py-xl-5 py-lg-3">

            <section class="form_area" > 
    
    
            <div class="conatiner "> 
            
            
                <form action="" method="post" >
                <div class="col-lg-8 offset-2"> 
                
                    <h3 class="title-w3 mb-sm-5 mb-4 text-center text-wh font-weight-bold">Ask Your Question</h3>
                
                <br />
                
                    <?php if($this->session->flashdata('message')){
                        echo $this->session->flashdata('message');
                    }?>
                
                    <div class="form-group"> 
                    
                    
                        <input type="text" value="<?=set_value('title')?>"  name="title" class="form-control input-lg" placeholder="Question Title" required />
                    
                    </div>
                    <div class="error"><?=form_error('title')?></div>
                    
                    <div class="form-group"> 
                    
                        <select name="category_id"   class="form-control input-lg" >
                        
                            <option value="">Question Category</option>
                            <option <?php  if(set_value('category_id')=='php') {echo 'selected'; } ?> value="php">php</option>
                            <option <?php  if(set_value('category_id')=='mysql') {echo 'selected'; } ?> value="mysql">mysql</option>
                            <option <?php  if(set_value('category_id')=='html') {echo 'selected'; } ?> value="html">html</option>
                            <option <?php  if(set_value('category_id')=='css') {echo 'selected'; } ?> value="css">css</option>
                            <option <?php  if(set_value('category_id')=='java') {echo 'selected'; } ?> value="java">java</option>
                            <option <?php  if(set_value('category_id')=='python') {echo 'selected'; } ?> value="python">python</option>
                            <option <?php  if(set_value('category_id')=='ruby') {echo 'selected'; } ?> value="ruby">ruby</option>
                            <option <?php  if(set_value('category_id')=='c') {echo 'selected'; } ?> value="c">c</option>
                            <option <?php  if(set_value('category_id')=='other') {echo 'selected'; } ?> value="c++">Other</option>
                        
                        </select>
                
                    
                    </div>
                    
                    <div class="error"><?=form_error('category_id')?></div>
                    
                    <div class="form-group">

                        
                    
                        <textarea name="description" class="form-control input-lg" rows="10"  placeholder="Question Description.." required="" ><?=set_value('description')?></textarea>
                    
                    </div>
                    
                    <div class="form-group">

                        
                    
                        <textarea name="description" class="form-control input-lg" rows="10"  placeholder="Your Code (optional)" ><?=set_value('code')?></textarea>
                    
                    </div>


                    <div class="error"><?=form_error('code')?></div>
                    
                    
                            <div class="sub-honey">
                                <button class="form-control btn btn-info" type="submit" value="Submit" name="submit">Submit</button>
                            </div>
                    
                    
                    
                    
                    
                    
                
                
                </div>
            
                </form>
            
            
            </div>
    
    
    
    </section>
    
</div>
</section>    
    
    
