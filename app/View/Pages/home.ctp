<div class="container-fluid"> 

            <!-- Hero unit para o showcase -->
            <div class="hero-unit">
            	
                <h3>
                    <?php 
                    if($this->Session->check('Auth.User.login_usuario')){
                    echo  'Bem vindo,' . AuthComponent::user('nome_usuario'); 
                }else{
                    //echo 'Unimed Help Desk Angra';
                }
                ?> 
                	
                </h3> 

                <br />
                <p align='center'><?php echo $this->Html->image('uni_helpdesk_black.png', array('width'=>'800px'));?></p>
                <p><!-- <a href="#" class="btn btn-primary btn-large" rel="" title="">Saiba mais &raquo;</a> --></p>
            </div>
 <!-- /container hero -->
</div>
