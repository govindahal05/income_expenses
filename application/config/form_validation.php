<?php
$config = array(

    'expenses' => array(
        array(
            'field' => 'date',
            'label' => 'Date',
            'rules' => 'required',
        ),
        array(
            'field' => 'category_id',
            'label' => 'Category',
            'rules' => 'required',
        ),
        array(
            'field' => 'amount',
            'label' => 'Amount',
            'rules' => 'required',
        ),	
    ),
    'income' => array(
        array(
            'field' => 'date',
            'label' => 'Date',
            'rules' => 'required',
        ),
        array(
            'field' => 'category_id',
            'label' => 'Category',
            'rules' => 'required',
        ),
        array(
            'field' => 'amount',
            'label' => 'Amount',
            'rules' => 'required',
        ),	
    )
);