const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

var mediaFB = $('.media_fb');
var mediaInsta = $('.media_insta');
var mediaTwitter = $('.media_twitter');
var mediaYtb = $('.media_ytb');

var FbHover = $('.media_fb_hover');
var InstaHover = $('.media_insta_hover');
var TwitterHover = $('.media_twitter_hover');
var YtbHover = $('.media_ytb_hover');

mediaFB.onmouseover = function() {
    FbHover.style.display = 'block';
}

mediaFB.onmouseout = function() {
    FbHover.style.display = 'none';
}

mediaInsta.onmouseover = function() {
    InstaHover.style.display = 'block';
}

mediaInsta.onmouseout = function() {
    InstaHover.style.display = 'none';
}

mediaTwitter.onmouseover = function() {
    TwitterHover.style.display = 'block';
}

mediaTwitter.onmouseout = function() {
    TwitterHover.style.display = 'none';
}

mediaYtb.onmouseover = function() {
    YtbHover.style.display = 'block';
}

mediaYtb.onmouseout = function() {
    YtbHover.style.display = 'none';
}