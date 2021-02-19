
<!-- this week -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Weekly</h5>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Income <?php echo $w_income['total'] ?></h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>Date</th>
                                <th>Category</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i = 0;
                            foreach ($w_income['income'] as $inc):
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
    <div class="col-6">
        
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Expenses <?php echo $w_expenses['total'] ?></h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>Date</th>
                                <th>Category</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i = 0;
                            foreach ($w_expenses['expenses'] as $exp):
                                $i++;
                            ?>
                            <tr>
                                <td>
                                    <?php echo $i ?>
                                </td>
                                <td>
                                    <?php echo $exp->date ?>
                                </td>
                                <td>
                                    <?php echo $exp->category_name ?>
                                </td>
                                <td>
                                    <?php echo $exp->amount ?>
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
<div class="show__graph">
    
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Pie Chart</h5>
                <div class="pie" style="height: 400px;"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Line Chart</h5>
                <div class="bars" style="height: 400px;"></div>
            </div>
        </div>
    </div>
</div>
<!-- Last Week -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Last Weekly</h5>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Income <?php echo $lw_income['total'] ?></h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>Date</th>
                                <th>Category</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i = 0;
                            foreach ($lw_income['income'] as $inc):
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
    <div class="col-6">
        
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Expenses <?php echo $lw_expenses['total'] ?></h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>Date</th>
                                <th>Category</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i = 0;
                            foreach ($lw_expenses['expenses'] as $exp):
                                $i++;
                            ?>
                            <tr>
                                <td>
                                    <?php echo $i ?>
                                </td>
                                <td>
                                    <?php echo $exp->date ?>
                                </td>
                                <td>
                                    <?php echo $exp->category_name ?>
                                </td>
                                <td>
                                    <?php echo $exp->amount ?>
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
<!-- This Month -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">This Month</h5>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Income <?php echo $m_income['total'] ?></h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>Date</th>
                                <th>Category</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i = 0;
                            foreach ($m_income['income'] as $inc):
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
    <div class="col-6">
        
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Expenses <?php echo $m_expenses['total'] ?></h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>Date</th>
                                <th>Category</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i = 0;
                            foreach ($m_expenses['expenses'] as $exp):
                                $i++;
                            ?>
                            <tr>
                                <td>
                                    <?php echo $i ?>
                                </td>
                                <td>
                                    <?php echo $exp->date ?>
                                </td>
                                <td>
                                    <?php echo $exp->category_name ?>
                                </td>
                                <td>
                                    <?php echo $exp->amount ?>
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
<!-- This Year -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">This Year</h5>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Income <?php echo $y_income['total'] ?></h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>Date</th>
                                <th>Category</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i = 0;
                            foreach ($y_income['income'] as $inc):
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
    <div class="col-6">
        
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Expenses <?php echo $y_expenses['total'] ?></h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>Date</th>
                                <th>Category</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i = 0;
                            foreach ($y_expenses['expenses'] as $exp):
                                $i++;
                            ?>
                            <tr>
                                <td>
                                    <?php echo $i ?>
                                </td>
                                <td>
                                    <?php echo $exp->date ?>
                                </td>
                                <td>
                                    <?php echo $exp->category_name ?>
                                </td>
                                <td>
                                    <?php echo $exp->amount ?>
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


