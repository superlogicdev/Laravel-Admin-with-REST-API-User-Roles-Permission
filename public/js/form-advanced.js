"use strict";
$(document).ready(function() {
    // Single swithces
    var elemsingle = document.querySelector('.js-single');
    var switchery = new Switchery(elemsingle, {
        color: '#4099ff',
        jackColor: '#fff'
    });
    // Multiple swithces
    var elem = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    elem.forEach(function(html) {
        var switchery = new Switchery(html, {
            color: '#4099ff',
            jackColor: '#fff'
        });
    });
    // Disable enable swithces
    var elemstate = document.querySelector('.js-dynamic-state');
    var switcheryy = new Switchery(elemstate, {
        color: '#4099ff',
        jackColor: '#fff'
    });
    document.querySelector('.js-dynamic-disable').addEventListener('click', function() {
        switcheryy.disable();
    });
    document.querySelector('.js-dynamic-enable').addEventListener('click', function() {
        switcheryy.enable();
    });
    // Color Swithces
    var elemdefault = document.querySelector('.js-default');
    var switchery = new Switchery(elemdefault, {
        color: '#d6d6d6',
        jackColor: '#fff'
    });
    var elemprimary = document.querySelector('.js-primary');
    var switchery = new Switchery(elemprimary, {
        color: '#4099ff',
        jackColor: '#fff'
    });
    var elemprimary = document.querySelector('.js-success');
    var switchery = new Switchery(elemprimary, {
        color: '#2ed8b6',
        jackColor: '#fff'
    });
    var elemprimary = document.querySelector('.js-info');
    var switchery = new Switchery(elemprimary, {
        color: '#4099ff',
        jackColor: '#fff'
    });
    var elemprimary = document.querySelector('.js-warning');
    var switchery = new Switchery(elemprimary, {
        color: '#FFB64D',
        jackColor: '#fff'
    });
    var elemprimary = document.querySelector('.js-danger');
    var switchery = new Switchery(elemprimary, {
        color: '#FF5370',
        jackColor: '#fff'
    });
    var elemprimary = document.querySelector('.js-inverse');
    var switchery = new Switchery(elemprimary, {
        color: '#222',
        jackColor: '#fff'
    });
    // Switch sizes
    var elemlarge = document.querySelector('.js-large');
    var switchery = new Switchery(elemlarge, {
        color: '#4099ff',
        jackColor: '#fff',
        size: 'large'
    });
    var elemmedium = document.querySelector('.js-medium');
    var switchery = new Switchery(elemmedium, {
        color: '#4099ff',
        jackColor: '#fff',
        size: 'medium'
    });
    var elemsmall = document.querySelector('.js-small');
    var switchery = new Switchery(elemsmall, {
        color: '#4099ff',
        jackColor: '#fff',
        size: 'small'
    });
});