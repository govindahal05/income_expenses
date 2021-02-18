<div class="row">
    <div class="col-12">
        
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $title ?></h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            foreach ($groups as $g) {
                                $i++;
                                ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <th scope="row"><a href="<?php echo site_url('auth/users/'.$g->id) ?>" class="btn-label-brand btn-sm" ><?php echo $g->name; ?></a></th>
                                <th scope="row"><?php echo $g->description; ?></th>
                                <th scope="row">
                                    <a class="btn btn-bold btn-label-brand btn-sm" href="<?php echo site_url('auth/edit_group/' . $g->id); ?>" ><i class="la la-edit"></i> Edit</a> | <a href="<?php echo site_url('auth/delete_group/'.$g->id) ?>" class="btn btn-bold btn-label-brand btn-sm" onclick="return confirm_delete()"> Del </a>

                                </th>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
