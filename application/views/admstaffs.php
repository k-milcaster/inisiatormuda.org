<div class="content"><div class="ic"></div>
    <div class="container_12">  
        <div class="grid_12">
            <h2>Staffs Organizer</h2>

            <h3><span>Greetings From Executive Director</span></h3>
            <form id="form" method="post" action="<?php echo base_URL(); ?>admin/doSaveGreetings" enctype="multipart/form-data">
                <fieldset>                    
                    <textarea name="greets" placeholder="Greetings:"></textarea>  
                    <br class="clear">
                    <div class="btns">
                        <input type="submit" name="submit" value="Save" class="btn-red-gundek">
                        <div class="clear"></div>
                    </div>
                </fieldset>
            </form>
        
        <h3><span>Board of Advisor</span></h3>
        </div>
        <div class="grid_6 prefix_1">     
            <form id="form" method="post" action="<?php echo base_URL(); ?>admin/doAddAdvisor" enctype="multipart/form-data">
                <fieldset>                    
                    <label class="name">
                        <input type="text" name="name" placeholder="Name:" class="field">
                        <br class="error">
                        <span class="empty error-empty">*This field is required.</span> </label>
                    <div class="clear"></div>
                    <label class="name">
                        <textarea name="bio" placeholder="Bio:"></textarea>      
                    </label>
                    <div class="clear"></div>
                    <p>Upload picture :</p>
                    <label class="name">
                        <input type='file' onchange="readURL(this);" name="userfile" accept="image/jpeg, image/png"/>
                    </label>
                    <div class="clear"></div>
                    <div class="btns">
                        <input type="submit" name="submit" value="Add" class="btn-red-gundek">                            
                    </div>                        
                </fieldset>
            </form>
        </div>
        <div class="grid_6">
            <br>
            <img id="blah" src="<?php echo base_url(); ?>public/images/400.jpg" alt="your image" />
        </div>
        <div class="clear"></div>
        <h3><span>Board of Director</span></h3>
        <div class="grid_6 prefix_1">     
            <form id="form" method="post" action="<?php echo base_URL(); ?>admin/doAddAdvisor" enctype="multipart/form-data">
                <fieldset>                    
                    <label class="name">
                        <input type="text" name="name" placeholder="Name:" class="field">
                        <br class="error">
                        <span class="empty error-empty">*This field is required.</span> </label>
                    <div class="clear"></div>
                    <label class="name">
                        <textarea name="bio" placeholder="Bio:"></textarea>      
                    </label>
                    <div class="clear"></div>
                    <p>Upload picture :</p>
                    <label class="name">
                        <input type='file' onchange="readURL(this);" name="userfile" accept="image/jpeg, image/png"/>
                    </label>
                    <div class="clear"></div>
                    <div class="btns">
                        <input type="submit" name="submit" value="Add" class="btn-red-gundek">                            
                    </div>                        
                </fieldset>
            </form>
        </div>
        <div class="grid_6">
            <br>
            <img id="blah" src="<?php echo base_url(); ?>public/images/400.jpg" alt="your image" />
        </div>
        <div class="clear"></div>
        <h3><span>Initiators</span></h3>
        <div class="grid_6 prefix_1">     
            <form id="form" method="post" action="<?php echo base_URL(); ?>admin/doAddAdvisor" enctype="multipart/form-data">
                <fieldset>                    
                    <label class="name">
                        <input type="text" name="name" placeholder="Name:" class="field">
                        <br class="error">
                        <span class="empty error-empty">*This field is required.</span> </label>
                    <div class="clear"></div>
                    <label class="name">
                        <textarea name="bio" placeholder="Bio:"></textarea>      
                    </label>
                    <div class="clear"></div>
                    <p>Upload picture :</p>
                    <label class="name">
                        <input type='file' onchange="readURL(this);" name="userfile" accept="image/jpeg, image/png"/>
                    </label>
                    <div class="clear"></div>
                    <div class="btns">
                        <input type="submit" name="submit" value="Add" class="btn-red-gundek">                            
                    </div>                        
                </fieldset>
            </form>
        </div>
        <div class="grid_6">
            <br>
            <img id="blah" src="<?php echo base_url(); ?>public/images/400.jpg" alt="your image" />
        </div>
        <div class="clear"></div>
    </div>
</div>
