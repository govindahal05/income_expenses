<aside class="left-sidebar" data-sidebarbg="skin5">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url() ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Users </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="<?php echo base_url('auth/') ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> List user </span></a></li>
                        <li class="sidebar-item"><a href="<?php echo base_url('auth/create_user') ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Create user </span></a></li>
                        <li class="sidebar-item"><a href="<?php echo base_url('auth/show_group') ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> List Group </span></a></li>
                        <li class="sidebar-item"><a href="<?php echo base_url('auth/create_group') ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Create Group </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Expenses </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="<?php echo base_url('all-expenses') ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> All Expenses </span></a></li>
                        <li class="sidebar-item"><a href="<?php echo base_url('add-expenses') ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Add Expenses </span></a></li>
                        
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Income </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="<?php echo base_url('all-income') ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> All Income </span></a></li>
                        <li class="sidebar-item"><a href="<?php echo base_url('add-income') ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Add Income </span></a></li>
                        
                    </ul>
                </li>
                
            </ul>
        </nav>
    </div>
</aside>