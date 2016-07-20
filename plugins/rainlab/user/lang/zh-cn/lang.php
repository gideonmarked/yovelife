<?php

return [
    'plugin' => [
        'name' => '用户',
        'description' => '用户管理.',
        'tab' => '用户',
        'access_users' => '管理用戶'
    ],
    'users' => [
        'menu_label' => '用户',
        'all_users' => '所有用户',
        'new_user' => '添加新用户',
        'list_title' => '管理用户',
        'activating' => '激活中...',
        'activate_warning_title' => '用户未激活!',
        'activate_warning_desc' => '用户未激活,无法登录.',
        'activate_confirm' => '确认激活该用户?',
        'active_manually' => '手动激活该用户',
        'delete_confirm' => '确认删除该用户?',
        'activated_success' => '用户激活成功!',
        'return_to_list' => '返回用户列表',
        'delete_selected_empty' => '未选择任何用户.',
        'delete_selected_confirm' => '删除所选用户?',
        'delete_selected_success' => '成功删除所选用户.',
    ],
    'settings' => [
        'users' => '用户',
        'menu_label' => '用户选项',
        'menu_description' => '管理用户选项.',
        'activation_tab' => '激活',
        'signin_tab' => '登录',
        'activate_mode' => '激活模式',
        'activate_mode_comment' => '选择激活方式.',
        'activate_mode_auto' => '自动',
        'activate_mode_auto_comment' => '注册成功后自动激活.',
        'activate_mode_user' => '用户',
        'activate_mode_user_comment' => '邮件激活.',
        'activate_mode_admin' => '管理员',
        'activate_mode_admin_comment' => '管理员激活.',
        'welcome_template' => '欢迎模版',
        'welcome_template_comment' => '用户激活成功后邮件模版.',
        'require_activation' => '选项',
        'require_activation_comment' => '用户必须激活后才能登录.',
        'use_throttle' => '登录限制',
        'use_throttle_comment' => '用户重复登录失败时禁用用户.',
        'login_attribute' => '登录字段',
        'login_attribute_comment' => '选择用户登录类型.',
        'no_mail_template' => '不发送邮件提醒',
        'hint_templates' => '你可以通过管理面板 邮件 > 邮件模版 设置邮件正文模版.'
    ],
    'user' => [
        'label' => '用户',
        'id' => 'ID',
        'username' => '用户名',
        'name' => '名',
        'surname' => '姓',
        'email' => '邮箱',
        'created_at' => '注册时间',
        'reset_password' => '重置密码',
        'reset_password_comment' => '请输入新密码.',
        'confirm_password' => '确认密码',
        'confirm_password_comment' => '再次输入密码.',
        'groups' => 'Groups',
        'empty_groups' => 'There are no user groups available.',
        'avatar' => '头像',
        'details' => '描述',
        'account' => '帐号'
    ],
    'login' => [
        'attribute_email' => '邮箱',
        'attribute_username' => '用户名'
    ],
    'account' => [
        'account' => '帐号',
        'account_desc' => '用户信息.',
        'redirect_to' => '跳转至',
        'redirect_to_desc' => '登录或注册成功后跳转页面.',
        'code_param' => 'Activation Code Param',
        'code_param_desc' => 'The page URL parameter used for the registration activation code',
        'invalid_activation_code' => '错误的activation code',
        'invalid_user' => 'A user was not found with the given credentials.',
        'success_activation' => '您的帐号已成功激活.',
        'success_saved' => '设置保存成功!',
        'login_first' => '您需要先登录帐号才能访问该页面!',
        'already_active' => '您的帐号暂未激活!',
        'activation_email_sent' => '激活邮件已发送至您的邮箱.',
        'sign_in' => '登录',
        'register' => '注册',
        'full_name' => '全名',
        'email' => '邮箱',
        'password' => '密码',
        'register' => '注册',
        'login' => '登录',
        'new_password' => '设置密码',
        'new_password_confirm' => '确认密码'
    ],
    'reset_password' => [
        'reset_password' => '重置密码',
        'reset_password_desc' => '找回密码.',
        'code_param' => 'Reset Code Param',
        'code_param_desc' => 'The page URL parameter used for the reset code'
    ],
    'session' => [
        'session' => '会话',
        'session_desc' => 'Adds the user session to a page and can restrict page access.',
        'security_title' => 'Allow only',
        'security_desc' => 'Who is allowed to access this page.',
        'all' => '所有人',
        'users' => '注册用户',
        'guests' => '游客',
        'redirect_title' => '跳转至',
        'redirect_desc' => 'Page name to redirect if access is denied.'
    ]
];
