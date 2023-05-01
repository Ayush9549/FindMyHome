// click slider
var sliderValue = 0;
var indexValue = 0;
$(".next").click(function () {nextSlider();});

// click slider
var previousSliderValue = 0;
var previousIndexValue = 0;
$(".previous").click(function () {previousSlider();});

// slider function
function previousSlider() {
	previousIndexValue++;
	previousSliderValue = previousSliderValue-68;
	$(".cumsSlider").animate({"margin-left":+previousSliderValue+"%"},3000);
	if (previousIndexValue==3)
	{
		previousSliderValue = 0;
		previousIndexValue =0;
	}
}

// auto slider
setInterval(function(){nextSlider();},3000)

// slider function
function nextSlider() {
	indexValue++;
	sliderValue = sliderValue+68;
	$(".cumsSlider").animate({"margin-left":"-"+sliderValue+"%"},3000);
	if (indexValue==3)
	{
		sliderValue = 0;
		indexValue =0;
	}
}

// Menu
$(".menu_icon").click(function(){
	$(".menu_list").animate({"width": '30%'},300);
});

$(".close_menu").click(function() {
	$(".menu_list").animate({"width": "0%"},300);
})

// mobile house filter
$(".rent_buy li").click(function () {
    $(this).addClass('active').siblings().removeClass("active");
});

$(".paginations ul li").click(function () {
    $(this).addClass('active_page').siblings().removeClass("active_page");
});

$(".rent_buy .buy").click(function () {
	$(".more_opsn").css({"display":"flex"})    
});

// rent_list li bg change
$(".rent_list li").click(function () {
    $(this).addClass('active_bg').siblings().removeClass("active_bg");
});

// buy
	var isClicked = false;
$(".more_opsn").click(function(){
	if (isClicked==false)
	{
		$(".hero_section").css({"height":"900px"});
		$(".apart_build,.invest").css({"display":"flex"});
		$(".rent_list").css({"flex-wrap":"wrap"});
		isClicked = true;
	}
	else
	{
		$(".hero_section").css({"height":"765px"});
		$(".apart_build,.invest").css({"display":"none"});
		isClicked = false;
		console.log("no");
	}
});

// email validation
// $(".email").on("input",function()
// {
// 	var gamil_str = $(this).val();
// 	let pattern = /^[^ ]+@[^]+\.[a-z]{2,3}$/   //reg-ular ex-pression
	
// 	if (gamil_str.match(pattern))  
// 	{
// 	  $(this)
// 	}
// });

// 										Adjust Result JS

$(".buy_container ul li,.room_container ul li,.district_container ul li").click(function(){
	$(this).toggleClass("active_bg_buy");
});

$(".search_container ul li,.last_days_container ul li").click(function(){
	$(this).addClass("active_bg_buy").siblings().removeClass("active_bg_buy");
});

$(".prop").click(function(){
	$(this).removeClass("active_bg_buy");
	$(this).toggleClass("prop_bg").siblings().removeClass("active_bg_buy");
});

$(".remove").click(function(){
	$(".prop").removeClass("prop_bg");
	$(".prop").removeClass("active_bg_buy");
});

$(".fprop").click(function(){
	$(this).removeClass("active_bg_buy");
	$(this).toggleClass("prop_bg").siblings().removeClass("active_bg_buy");
});

$(".fremove").click(function(){
	$(".fprop").removeClass("prop_bg");
	$(".fprop").removeClass("active_bg_buy");
});


$(".burgland").click(function(){
	$(".burgland_list").css({"display":"flex"}).siblings().css({"display":"none"});
	$(".all_select").show();
});

$(".carinthia").click(function(){
	$(".carinthia_list").css({"display":"flex"}).siblings().css({"display":"none"});
	$(".all_select").show();
});

$(".lower_austr").click(function(){
	$(".lower_austr_list").css({"display":"flex"}).siblings().css({"display":"none"});
	$(".all_select").show();
});

$(".upr_austr").click(function(){
	$(".upr_austr_list").css({"display":"flex"}).siblings().css({"display":"none"});
	$(".all_select").show();
});

$(".salzburg").click(function(){
	$(".salzburg_list").css({"display":"flex"}).siblings().css({"display":"none"});
	$(".all_select").show();
});

$(".stria").click(function(){
	$(".stria_list").css({"display":"flex"}).siblings().css({"display":"none"});
	$(".all_select").show();
});

$(".tyrol").click(function(){
	$(".tyrol_list").css({"display":"flex"}).siblings().css({"display":"none"});
	$(".all_select").show();
});

$(".vorarlberg").click(function(){
	$(".vorarlberg_list").css({"display":"flex"}).siblings().css({"display":"none"});
	$(".all_select").show();
});

$(".vienna_area").click(function(){
	$(".vienna_area_list").css({"display":"flex"}).siblings().css({"display":"none"});
	$(".all_select").show();
});

$(".vienna").click(function(){
	$(".vienna_list").css({"display":"flex"}).siblings().css({"display":"none"});
	$(".all_select").hide();
});

$(".fedral_state_container ul li").click(function(){
	$(this).addClass("active_bg_buy").siblings().removeClass("active_bg_buy");
});

// fedral_state_container
$(".hide").click(function() {
	$(".fedral_state_container,.district_container").css({"display":"flex"});
	$(".postcode_container").css({"display":"none"});
});

$(".show").click(function() {
	$(".fedral_state_container,.district_container").css({"display":"none"});
	$(".postcode_container").css({"display":"flex"});
});

$(".prop").click(function(){
	$(".room_container ul li").toggleClass("disabled");
});

$(".remove").click(function(){
	$(".room_container ul li").removeClass("disabled");
});

// show_all_btn
$(".show_all_btn").click(function(){
	$(".show_all_list,.hide_country").addClass("show_all_list_active");
});

$(".austria").click(function() {
	$(".fedral_state_container,.district_container").show();
	$(".hide_country").hide();
});

$(".abord").click(function() {
	$(".fedral_state_container,.district_container").hide();
	$(".hide_country").show();
});

$(".all_select").click(function(){
	$(".district_container ul li").toggleClass("active_bg_buy");
});

let changeBtn = false;

$(".buy_container ul li").click(function(){
if (changeBtn==false)
{
	$(".disabled_btn").hide();
	$(".find_my_properties").show();
	changeBtn=true;
}
else
{
	$(".disabled_btn").show();
	$(".find_my_properties").hide();
	changeBtn=false;
}
});

// 										Details Page js

// Accordion
$(".accordin_card .title").click(function(){
	$(".accordin_card_main_body").toggleClass("accordin_card_body_active");
	$(".accordin_card>.title i:nth-child(2)").toggleClass("rotate");
});

$(".accordin_card_two .titl").click(function(){
	$(".accordin_card_two_body").toggleClass("accordin_card_bodi_active");
	$(".accordin_card_two>.titl i:nth-child(2)").toggleClass("rotat");
});

$(".accordin_card_sub .sub_title").click(function(){
	// console.log("ok");
	$(".accordin_card_sub ul").toggleClass("sub_accordin_card_body");
	$(".accordin_card_sub>.sub_title i:nth-child(2)").toggleClass("sub_rotate");
});

$(".accordin_card_two_body a").click(function(){
	$(".show_all_details_container").addClass("show_all_details");
	$(".accordin_card_two_body a").hide();
});


$(".split").click(function(){
	// console.log("shi h");
	$(".split_popup").css({"display":"flex"});
});

$(".close_split_popup,.split_popup").click(function(){
	$(".split_popup").css({"display":"none"});
});


//===================== Contact ====================

$(".req_call div").click(function () {
    $(this).addClass('deactive_color').siblings().removeClass("deactive_color");
});

$(".show_number").click(function(){
	$(".show_number_container").show();
	$(this).hide();
});

$(".callback_service").click(function(){
	$(".contact_dropdown").show();
	$(".free_of_charge").show();
});

$(".emial_request").click(function(){
	$(".contact_dropdown").hide();
	$(".free_of_charge").hide();
});

$(".financing .title").click(function(){
	$(".financing .row").toggleClass('financing_ad');
	$(".financing .title i").toggleClass("arrow_rotate");
});

$(".relocation .title").click(function(){
	$(".relocation .row").toggleClass('relocation_body');
	$(".relocation .title i:nth-child(2)").toggleClass("arrow_rotate");
});

$(".search_agent .title").click(function(){
	$(".search_agent .row").toggleClass('search_agent_body');
	$(".search_agent .title i:nth-child(2)").toggleClass("arrow_rotat");
});

$(".zoom_bottom i").click(function(){
	$(".zoomSwiper").toggleClass("zoom_bottom_active");
	$(".zoomSlider .modal-dialog").toggleClass("full_height");
});

$(".swiper-slide").click(function () {
    $(this).addClass('border_active').siblings().removeClass("border_active");
});

// responsible_homes
$(".responsible_homes_container ul li").click(function () {
    $(this).addClass('toggle_border').siblings().removeClass("toggle_border");
});

$(".rent").click(function(){
	$(".rent_select").show();
	$(".prop_select").hide();
});

$(".prop").click(function(){
	$(".rent_select").hide();
	$(".prop_select").show();
});

// virtual visit
$(".prop_state .burg").click(function(){
	console.log("ok");
});

// real estate search

$(".particularities ul li").click(function(){

	$(this).toggleClass("active_bg_buy");
})

$(".country_container ul li,.fedral_state li,.district li").click(function(){
	$(this).addClass("active_bg_buy").siblings().removeClass("active_bg_buy");
});