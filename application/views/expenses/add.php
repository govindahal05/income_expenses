<div class="row">
    <div class="col-md-12">
        <div class="card">
            <?php 
            echo form_open_multipart($formsubmit_url, array('class' => "form-horizontal", 'id' => "myform", "autocomplete" => "off")); ?>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $title ?></h4>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label class="text-right control-label col-form-label" for="category_id">Category</label>
                             <?php
                                $attr = array('class'=> 'form-control ', 'id' => 'category_id', 'data-live-search'=>'true');
                                echo form_dropdown('category_id', $e_categories, $category_id, $attr);
                            ?>
                        </div>
                        <div class="col-md-4">
                            <label for="date" class="text-right control-label col-form-label">Date</label>
                                <?php echo form_input($date, 'value');
                                ?>
                        </div>
                        <div class="col-md-4">
                            <label for="amount" class="text-right control-label col-form-label">Amount</label>
                                <?php echo form_input($amount);
                                ?>
                        </div>
                        <div class="col-md-4">
                            <label for="note" class="text-right control-label col-form-label">Note</label>
                                <?php echo form_input($note);
                                ?>
                        </div>
                    </div>
                    
                <div class="border-top">
                    <div class="card-body">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>