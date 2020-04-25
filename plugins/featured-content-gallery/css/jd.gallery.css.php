
#myGallery, #myGallerySet, #flickrGallery {
width: 520px;
height: 400px;
z-index:5;
border: 1px solid black;
}

.jdGallery .slideInfoZone
{
background: white;
color: black;
}

.jdGallery .slideElement
{
width: 100%;
height: 100%;
background-color: white;
background-repeat: no-repeat;
background-position: center center;
background-image: url('img/loading-bar-black.gif');
}

.jdGallery .loadingElement
{
width: 100%;
height: 100%;
position: absolute;
left: 0;
top: 0;
background-color: white;
background-repeat: no-repeat;
background-position: center center;
background-image: url('img/loading-bar-black.gif');
}

.jdGallery .slideInfoZone h2
{
padding: 0 !important;
font-size: 14px !important;
background-color: white !important;
margin: 2px 5px !important;
font-weight: bold !important;
color: black !important;
background-image: none !important;
text-align: left !important;
}

.jdGallery .slideInfoZone p
{
padding: 0 !important;
background-color: white !important;
font-size: 11px !important;
margin: 2px 5px !important;
color: black !important;
background-image: none !important;
text-align: left !important;
}

.jdGallery a.carouselBtn, .jdGallery a.carouselBtn:hover, .jdGallery a.carouselBtn:active
{
position: absolute;
bottom: 0;
right: 30px;
height: 20px;
/*width: 100px; background: url('img/carousel_btn.gif') no-repeat;*/
text-align: center;
padding: 0 10px;
font-size: 13px;
background: white;
color: black !important;
cursor: pointer;
}

.jdGallery .carousel
{
position: absolute;
width: 100%;
margin: 0px;
left: 0;
top: 0;
height: 115px;
background: white;
color: black;
text-indent: 0;
overflow: hidden;
}

.jdGallery .carousel .carouselInner .thumbnail, .jdExtCarousel .carouselInner .thumbnail
{
cursor: pointer;
background: white;
background-position: center center;
float: left;
border: solid 1px black;
}

.jdGallery .carousel .wallButton, .jdExtCarousel .wallButton
{
font-size: 10px;
position: absolute;
bottom: 5px;
right: 10px;
padding: 1px 2px;
margin: 0;
background: white;
border: 1px solid black;
cursor: pointer;
}

.jdGallery .carousel .label .number, .jdExtCarousel .label .number
{
color: black;
}

.jdGallery a
{
font-size: 100%;
text-decoration: none;
color: black;
}

/* Gallery Sets */

.jdGallery a.gallerySelectorBtn
{
z-index: 15;
position: absolute;
top: 0;
left: 30px;
height: 20px;
/*width: 100px; background: url('img/carousel_btn.gif') no-repeat;*/
text-align: center;
padding: 0 10px;
font-size: 13px;
background: white;
color: black;
cursor: pointer;
opacity: .4;
-moz-opacity: .4;
-khtml-opacity: 0.4;
filter:alpha(opacity=40);
}

.jdGallery .gallerySelector
{
z-index: 20;
width: 100%;
height: 100%;
position: absolute;
top: 0;
left: 0;
background: white;
}

.jdGallery .gallerySelector h2
{
margin: 0;
padding: 10px 20px 10px 20px;
font-size: 20px;
line-height: 30px;
color: black;
}

.jdGallery .gallerySelector .gallerySelectorInner div.galleryButton
{
margin-left: 10px;
margin-top: 10px;
border: 1px solid black;
padding: 5px;
height: 40px;
color: black;
cursor: pointer;
float: left;
}

.jdGallery .gallerySelector .gallerySelectorInner div.hover
{
background: white;
}

.jdGallery .gallerySelector .gallerySelectorInner div.galleryButton div.preview
{
background: white;
background-position: center center;
float: left;
border: none;
width: 40px;
height: 40px;
margin-right: 5px;
}

.jdGallery .gallerySelector .gallerySelectorInner div.galleryButton p.info
{
margin: 0;
padding: 0;
font-size: 12px;
font-weight: normal;
color: black;
}