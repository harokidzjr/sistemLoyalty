<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$this->widget('booster.widgets.HaroMenu', array(
                'linkLabelWrapper' => 'span',
                'linkLabelWrapperHtmlOptions' => array(
                    'class' => 'mm-text mmc-dropdown-delay animated fadeIn'
                ),
                'itemCssClass' => '',
                'encodeLabel' => false,
                'htmlOptions' => array(
                    'class' => 'navigation',
                ),
                'submenuHtmlOptions' => array(
                    'class' => 'mm-dropdown mm-dropdown-root',
                ),
                'items' => array(
                    array('label' => 'Dashboard', 'icon' => 'menu-icon fa fa-dashboard', 'url' => array('/site')),
                    array(
                        'label' => 'Kategori',
                        'url' => '#',
                        'icon' => 'menu-icon fa fa-file-text-o',
                        'itemOptions' => array('class' => 'mm-dropdown mm-dropdown-root', 'tabindex' => "-1"),
                        'items' => array(
                            array('label' => 'Manage Kategori', 'url' => array('/kategori/index')),
                            array('label' => 'Create Kategori', 'url' => array('/kategori/create')),
                        )),
                    array(
                        'label' => 'Artikel',
                        'url' => '#',
                        'icon' => 'menu-icon fa fa-file-text-o',
                        'itemOptions' => array('class' => 'mm-dropdown mm-dropdown-root', 'tabindex' => "-1"),
                        'items' => array(
                            array('label' => 'Manage Artikel', 'url' => array('/artikel/index')),
                            array('label' => 'Create Artikel', 'url' => array('/artikel/create')),
//                            array('label' => 'List Artikel', 'url' => array('/artikel/index')),
                        )),
                    array(
                        'label' => 'Group Portofolio',
                        'url' => '#',
                        'icon' => 'menu-icon fa fa-calendar-o',
                        'itemOptions' => array('class' => 'mm-dropdown mm-dropdown-root', 'tabindex' => "-1"),
                        'items' => array(
                            array('label' => 'Manage Group Portofolio', 'url' => array('/groupPortofolio/admin')),
                            array('label' => 'Create Group Portofolio', 'url' => array('/groupPortofolio/create')),
                            array('label' => 'List Group Portofolio', 'url' => array('/groupPortofolio/index')),
                        )),
                    array(
                        'label' => 'Portofolio',
                        'url' => '#',
                        'icon' => 'menu-icon fa  fa-stack-exchange',
                        'itemOptions' => array('class' => 'mm-dropdown mm-dropdown-root', 'tabindex' => "-1"),
                        'items' => array(
                            array('label' => 'Manage Portofolio', 'url' => array('/portofolio/admin')),
                            array('label' => 'Create Portofolio', 'url' => array('/portofolio/create')),
                            array('label' => 'List Portofolio', 'url' => array('/portofolio/index')),
                        )),
                    array(
                        'label' => 'Team',
                        'url' => '#',
                        'icon' => 'menu-icon fa  fa-stack-exchange',
                        'itemOptions' => array('class' => 'mm-dropdown mm-dropdown-root', 'tabindex' => "-1"),
                        'items' => array(
                            array('label' => 'Manage Team', 'url' => array('/team/admin')),
                            array('label' => 'Create Team', 'url' => array('/team/create')),
                            array('label' => 'List Team', 'url' => array('/team/index')),
                        )),
                    array(
                        'label' => 'Slideshow',
                        'url' => '#',
                        'icon' => 'menu-icon fa  fa-picture-o',
                        'itemOptions' => array('class' => 'mm-dropdown mm-dropdown-root', 'tabindex' => "-1"),
                        'items' => array(
                            array('label' => 'Manage Slideshow', 'url' => array('/slideshow/admin')),
                            array('label' => 'Create Slideshow', 'url' => array('/slideshow/create')),
                            array('label' => 'List Slideshow', 'url' => array('/slideshow/index')),
                        )),
                    array(
                        'label' => 'Settings',
                        'url' => '#',
                        'icon' => 'menu-icon fa  fa-cog',
                        'itemOptions' => array('class' => 'mm-dropdown mm-dropdown-root', 'tabindex' => "-1"),
                        'items' => array(
                            array('label' => 'Update Profile','icon' => 'menu-icon fa  fa-user', 'url' => array('/user/updateProfile')),
                            array('label' => 'Change Password','icon' => 'menu-icon fa  fa-edit', 'url' => array('/user/updatePassword')),
//                            array('label' => 'List Portofolio', 'url' => array('/portofolio/index')),
                        )),
                ),
            ));