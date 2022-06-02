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

    'service' => [
        'title' => 'Services',

        'actions' => [
            'index' => 'Services',
            'create' => 'New Service',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'slug' => 'Slug',
            'name' => 'Name',
            'title' => 'Title',
            'description' => 'Description',
            'description_long' => 'Description long',
            'description_short' => 'Description short',
            'img_cover' => 'Img cover',
            'img_cover_low_res' => 'Img cover low res',
            'img_cover_alt' => 'Img cover alt',
            'has_page' => 'Has page',
            'featured' => 'Featured',
            'order' => 'Order',
            
        ],
    ],

    'post' => [
        'title' => 'Posts',

        'actions' => [
            'index' => 'Posts',
            'create' => 'New Post',
            'edit' => 'Edit :name',
            'will_be_published' => 'Post will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'perex' => 'Perex',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'medium' => [
        'title' => 'Media',

        'actions' => [
            'index' => 'Media',
            'create' => 'New Medium',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'model_type' => 'Model type',
            'model_id' => 'Model',
            'uuid' => 'Uuid',
            'collection_name' => 'Collection name',
            'name' => 'Name',
            'file_name' => 'File name',
            'mime_type' => 'Mime type',
            'disk' => 'Disk',
            'conversions_disk' => 'Conversions disk',
            'size' => 'Size',
            'manipulations' => 'Manipulations',
            'custom_properties' => 'Custom properties',
            'generated_conversions' => 'Generated conversions',
            'responsive_images' => 'Responsive images',
            'order_column' => 'Order column',
            
        ],
    ],

    'video' => [
        'title' => 'Videos',

        'actions' => [
            'index' => 'Videos',
            'create' => 'New Video',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'video_link' => 'Video link',
            'service_id' => 'Service',
            'order' => 'Order',
            
        ],
    ],

    'contact' => [
        'title' => 'Contacts',

        'actions' => [
            'index' => 'Contacts',
            'create' => 'New Contact',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'service_id' => 'Service',
            'phone' => 'Phone',
            'message' => 'Message',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];