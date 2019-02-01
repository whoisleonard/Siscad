<div class="page-wrapper">

    <div class="container-fluid">
        <?php if ($this->session->flashdata('error') == TRUE): ?>
            <div class="alert alert-danger alert-dismissible" id="myAlert">
                <a href="#" class="close">&times;</a>
                <strong> <?php echo $this->session->flashdata('error'); ?></strong> 
            </div>
        <?php endif; ?>
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card">
                        <div class="card-body"> 

     <form action="<?= base_url(); ?>Relatorios/pdf_quantitativo" method="post">
                        <div class="col-12 form-group row">
                            <label class="m-t-5"><h5>Data Inicial:</h5></label> 
                            <div class="input-group col-md-3">                                                           
                                <input type="date" class="form-control col-md-8" name="dataini" id="dataini" required> 
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                </div>   
                            </div> 
                            <label class="m-t-5"><h5>Data Final:</h5></label> 
                            <div class="input-group col-md-3">
                                <input type="date" class="form-control col-md-8" name="datafim" id="datafim" required> 
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                </div>   
                            </div> 
                            <div class="input-group col-md-3">
                                <button type="submit" class=" btn btn-info col-md-5" target="_blank" >Filtrar</button>                                             
                            </div> 
                        </div> 
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>