<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'book-type' => [
        'title' => 'Book Type',

        'actions' => [
            'index' => 'Book Type',
            'create' => 'New Book Type',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'Book_catigory' => 'Book catigory',
            'enabled' => 'Enabled',
            
        ],
    ],

    'book-upload' => [
        'title' => 'Book Upload',

        'actions' => [
            'index' => 'Book Upload',
            'create' => 'New Book Upload',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'Book_Titel' => 'Book Titel',
            'booK_Summry' => 'BooK Summry',
            'enabled' => 'Enabled',
            
        ],
    ],

    'book-cat' => [
        'title' => 'Book Cat',

        'actions' => [
            'index' => 'Book Cat',
            'create' => 'New Book Cat',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'Book_Titel' => 'Book Titel',
            'booK_type' => 'BooK type',
            'booK_Summry' => 'BooK Summry',
            'enabled' => 'Enabled',
            
        ],
    ],

    'comment' => [
        'title' => 'Comment',

        'actions' => [
            'index' => 'Comment',
            'create' => 'New Comment',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'user_name' => 'User name',
            'user_id' => 'User',
            'user_comments' => 'User comments',
            'enabled' => 'Enabled',
            
        ],
    ],

    'receipt' => [
        'title' => 'Receipts',

        'actions' => [
            'index' => 'Receipts',
            'create' => 'New Receipt',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'Department' => 'Department',
            'Reg_no' => 'Reg no',
            'phoneNum' => 'PhoneNum',
            'trans_id' => 'Trans',
            'amount' => 'Amount',
            'fees' => 'Fees',
            'Receipt_plan' => 'Receipt plan',
            'enabled' => 'Enabled',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];