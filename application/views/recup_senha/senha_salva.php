              <div>
                          <?php if ($this->session->flashdata('error') == TRUE): ?>
                                <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
                            <?php endif; ?>
                        
                                
                                  <?php if ($this->session->flashdata('sucess') == TRUE): ?>
            <div class="alert alert-success alert-dismissible" id="myAlert">
                <a href="#" class="close">&times;</a>
                <strong> <?php echo $this->session->flashdata('sucess'); ?></strong> 
            </div>
        <?php endif; ?>

                         </div>