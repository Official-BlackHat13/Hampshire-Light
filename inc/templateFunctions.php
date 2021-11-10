<?php


/**
 * Get phone number from global options
 */
function getPhoneNumber()
{
    $phonenumber = get_field('phone', 'options');

    return  $phonenumber;
}

function getCopyrightText()
{
    $copyright_text = get_field('copyright_text', 'options');

    return  $copyright_text;
}

function getBrandsLogo()
{
    $brands_logo = get_field('brands', 'options');

    return  $brands_logo;
}
function getSmallLogoUrl()
{
    $smallLogo = get_field('logo_favicon', 'options');

    return  $smallLogo['url'];
}