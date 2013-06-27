		<!-- Início da barra de navegação -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse">
                    <!-- <a class="brand" href="http://desenv.angra.unimed.com.br" target="_blank" title="Portal Unimed Angra dos Reis"><i class="icon-home icon-white"></i></a> -->
                    <ul class="nav">
                        <?php if( $this->Session->check('Auth.User.login_usuario')) 
                        {?>
                        <li>
                       
                       <a class="brand" href="http://localhost/helpdeskunimed/cakephp-2.2.4/"  title="Help Desk Unimed Angra"><?php echo $this->Html->image('uni_helpdesk_white_small.png', array('alt'=>'UniHelpDesk')); ?></a>
                       </li>
                       <li>
                        <?php
                       
                           // echo 'Bem vindo,' . AuthComponent::user("login_admin");

                        echo $this->Html->link('Usuarios', array('controller'=>'usuarios', 'action' => 'index'), array('class' =>'center'));
                        ?>
                        </li>
                        <li><?php echo $this->Html->link('Chamados Abertos', array('controller'=>'chamados','action'=>'index')); ?></li>
                        <li><?php echo $this->Html->link('Setores',array(
                        'controller'=>'Setores','action'=>'index'));?></li>
                        <li><?php echo $this->Html->link('Status',array(
                        'controller'=>'Status','action'=>'index'));?></li>
                        <div class="btn-group">
                          
                   </ul>
                </div>
                    <div class="nav-collapse collapse">
                        <button class="btn pull-right">
                        <?php echo $this->Html->link('Logout',array('controller'=>'usuarios','action'=>'logout')); 
                        }else{?>
                        </button>
                        <div class="offset2 span2">
                        <?php
                        echo $this->Session->flash('auth');
                        echo $this->Form->create('Usuario',array('action' =>'login'));
                        ?>
                        </div>  
                         <div class="span2 center">                       
                        </div>
                        <div class="span2">
                        <?php
                        echo $this->Form->input('login_usuario',array('class'=>'span2','placeholder' =>'Login', 'label' =>''));
                        ?>
                        </div>
                        <div class="span2">
                        <?php
                        echo $this->Form->input('senha_usuario',array('class'=>'span2', 'placeholder' =>'Senha', 'label' => '', 'type' => 'password'));
                        ?>
                        </div>
                        <div class="span2">
                        <?php
                        echo $this->Form->button('Enviar', array('class' =>'btn btn-primary'));
                        echo $this->Form->end(); 
                        }
                        ?>
                        </div>
                        </div>
                        
                    </div><!--/.nav-collapse -->
               </div>
           </div>
        </div>
		<!-- Fim da barra de navegação -->

