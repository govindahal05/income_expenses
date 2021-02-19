    <div class="row">
        <div class="col-12">
            
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $title ?></h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
									<th>Sno.</th>
									<th>Date</th>
									<th>Category</th>
									<th>Note</th>
									<th>Amount</th>
								</tr>
                            </thead>
                            <tbody>
                                <?php 
                                $i = 0;
                                foreach ($income as $inc):
                                    $i++;
                                ?>
                                <tr>
									<td>
							            <?php echo $i ?>
									</td>
                                    <td>
                                        <?php echo $inc->date ?>
                                    </td>
                                    <td>
                                        <?php echo $inc->category_name ?>
                                    </td>
                                    <td>
                                        <?php echo $inc->note ?>
                                    </td>
                                    <td>
                                        <?php echo $inc->amount ?>
                                    </td>
                                </tr>
								<?php endforeach;?>
                            </tbody>
						</table>

                    </div>

                </div>
            </div>
        </div>
    </div>
