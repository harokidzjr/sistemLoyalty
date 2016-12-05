<?php

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
            'label' => 'Tenant',
            'url' => '#',
            'icon' => 'menu-icon fa fa-shopping-cart',
            'itemOptions' => array('class' => 'mm-dropdown mm-dropdown-root', 'tabindex' => "-1"),
            'items' => array(
                array('label' => 'Block', 'icon' => 'menu-icon fa fa-circle-o', 'url' => array('/block/admin')),
                array('label' => 'Floor', 'icon' => 'menu-icon fa fa-circle-o', 'url' => array('/floor/admin')),
                array('label' => 'Tenant', 'icon' => 'menu-icon fa fa-circle-o', 'url' => array('/tenant/admin')),
                array('label' => 'Owner', 'icon' => 'menu-icon fa fa-circle-o', 'url' => array('/owner/admin')),
                array('label' => 'Zoning', 'icon' => 'menu-icon fa fa-circle-o', 'url' => array('/zoning/admin')),
                array('label' => 'Merek Dagang', 'icon' => 'menu-icon fa fa-circle-o', 'url' => array('/merkDagang/admin')),
                array('label' => 'Lisensi', 'icon' => 'menu-icon fa fa-circle-o', 'url' => array('/lisensi/admin')),
                array('label' => 'Jenis Jualan', 'icon' => 'menu-icon fa fa-circle-o', 'url' => array('/jenisJualan/admin')),
            )),
        array(
            'label' => 'Loyalty',
            'url' => '#',
            'icon' => 'menu-icon fa fa-credit-card',
            'itemOptions' => array('class' => 'mm-dropdown mm-dropdown-root', 'tabindex' => "-1"),
            'items' => array(
                array('label' => 'Konversi', 'icon' => 'menu-icon fa fa-circle-o', 'url' => array('/konversi/admin')),
                array('label' => 'Promo', 'icon' => 'menu-icon fa fa-circle-o', 'url' => array('/promo/admin')),
                array('label' => 'Marchendise', 'icon' => 'menu-icon fa fa-circle-o', 'url' => array('/tukarPointMarchendise/admin')),
                array('label' => 'Undian', 'icon' => 'menu-icon fa fa-circle-o', 'url' => array('/tukarPointUndian/admin')),
                array('label' => 'Voucher', 'icon' => 'menu-icon fa fa-circle-o', 'url' => array('/tukarPointVoucher/admin')),
            )),
        array(
            'label' => 'Customer',
            'url' => '#',
            'icon' => 'menu-icon fa fa-users',
            'itemOptions' => array('class' => 'mm-dropdown mm-dropdown-root', 'tabindex' => "-1"),
            'items' => array(
                array('label' => 'Customer', 'icon' => 'menu-icon fa fa-circle-o', 'url' => array('/customer/admin')),
                array('label' => 'Item Kwitansi', 'icon' => 'menu-icon fa fa-circle-o', 'url' => array('/itemKwitansi/admin')),
                array('label' => 'Kwitansi', 'icon' => 'menu-icon fa fa-circle-o', 'url' => array('/kwitansi/admin')),
                array('label' => 'Marchendise Customer', 'icon' => 'menu-icon fa fa-circle-o', 'url' => array('/marchendiseCustomer/admin')),
                array('label' => 'Point', 'icon' => 'menu-icon fa fa-circle-o', 'url' => array('/point/admin')),
                array('label' => 'Undian Customer', 'icon' => 'menu-icon fa fa-circle-o', 'url' => array('/undianCustomer/admin')),
                array('label' => 'Voucher Customer', 'icon' => 'menu-icon fa fa-circle-o', 'url' => array('/voucherCustomer/admin')),
            )),
        array('label' => 'User', 'icon' => 'menu-icon fa fa-user', 'url' => array('//admin')),
    ),
));
?>