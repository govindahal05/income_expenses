<?php
$this->load->view('common/admin-header');
?>
    <div id="main-wrapper">
    	<?php
	    $this->load->view('header/header-top');
	    $this->load->view('header/member-left-aside');
	    ?>
        
        <div class="page-wrapper">
           
            <?php $this->load->view('header/breadcrumb');
           	echo '<div class="container-fluid">';
            if($module){
            	$this->load->view($module.'/'.$page);
            }else{
            	$this->load->view($page);
            }
            echo '</div></div>';

            $this->load->view('footer/footer-top');
            ?>
    		</div>
        
    </div>

<?php
$this->load->view('common/admin-footer');
