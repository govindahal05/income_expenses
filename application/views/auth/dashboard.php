
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
                <h5 class="card-title">Income</h5>
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
                            foreach ($w_income as $inc):
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
                <h5 class="card-title">Expenses</h5>
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
                            foreach ($w_expenses as $exp):
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
                <h5 class="card-title">Income</h5>
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
                            foreach ($lw_income as $inc):
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
                <h5 class="card-title">Expenses</h5>
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
                            foreach ($lw_expenses as $exp):
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
                <h5 class="card-title">Income</h5>
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
                            foreach ($m_income as $inc):
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
                <h5 class="card-title">Expenses</h5>
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
                            foreach ($m_expenses as $exp):
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
                <h5 class="card-title">Income</h5>
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
                            foreach ($y_income as $inc):
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
                <h5 class="card-title">Expenses</h5>
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
                            foreach ($y_expenses as $exp):
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


