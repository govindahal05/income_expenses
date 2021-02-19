<?php
$this->load->view('login/header.php');
?>
	<div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
		    <?php
		if($module){
		    $this->load->view($module.'/'.$page);
		    
		}else{
		    $this->load->view($page);
		}
        
    echo '</div>';
$this->load->view('login/footer.php');
?>

    