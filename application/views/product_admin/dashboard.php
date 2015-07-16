<div class="pmf-container" style="margin-left:auto; margin-right:auto; margin-top:30px; max-width:1170px; min-height:800px; ">
  <div class="row" style="margin-left:30px; margin-right:30px;">
        
        <div class="row" style="margin-left:15px; margin-right:15px;" >
            <?php if($this->session->flashdata('msg')) {?>
                        
                <?php if($this->session->flashdata('type') =='0') { ?>
            
                <div class="alert alert-danger">
            
                <?php } else {?>
                <div class="animated flash alert alert-success">
                    <?php } ?>
                    <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i>
                    </button> <i class="fa fa-ban-circle"></i>
                    <?php echo $this->session->flashdata('msg');?>
                </div>
            <?php } ?>
        </div>

        <div class="col-sm-12">
            <header class="panel-heading font-bold">Products</header>
            <section class="panel">

                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-10">
                           <!--  <a target="_blank" href=" <?php echo site_url('blog/preview'); ?>">Preview Blog</a> -->
                          
                        </div>
                        <div class="col-sm-2">
                            <a href="<?php echo site_url("product_admin/insert_product"); ?>">
                                <button  type="submit" class="btn btn-purplet btn-s-xs pull-right" id="">
                                <i class="fa fa-plus"></i> Add Product</button>
                            </a>
                        </div>
                    </div>

                    <div class="row">

                    <?php foreach ($query->result() as $row ):?>
                    <?php $id = $row->id; ?>
                    <div class="line"></div>
                    <div class="col-sm-1">
                        <img src="<?php echo base_url("img/uploads/$row->img"); ?>" style="max-width:60px;" alt="" />
                         
                    </div>
                    <div class="col-sm-5" style="margin-top:20px;">
                        <strong><?php echo($row->name); ?></strong>
                    </div>
                    <div class="col-sm-2" style="margin-top:20px;">
                        <div class="pull-right"> <?php echo anchor("product_admin/spec_view/$id", "Upload spec", 'attributs'); ?></div>
                    </div>
                    <div class="col-sm-2" style="margin-top:20px;">
                        <div class="pull-right"> <?php echo anchor("product_admin/img_view/$id", "Upload image", 'attributs'); ?></div>
                    </div>
                    <div class="col-sm-2" style="margin-top:20px;">
                        <div class="pull-right"> <?php echo anchor("product_admin/edit_product/$id", "View/Edit", 'attributs'); ?></div>
                    </div>
                    <div class="clearfix"></div>
                   
                   <?php endforeach; ?>
               </div>
                </div>
            </section>
        </div>
  </div>
</div>