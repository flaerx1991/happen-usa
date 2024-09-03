console.log('Worked');
const toggles = document.querySelectorAll(".sub-menu-btn");
const toggles2 = document.querySelectorAll(".sub-2");
const open_menu = document.getElementById('open');
const close_menu = document.getElementById('close');
const close_banner = document.getElementById('close-banner');
let header_banner = document.querySelector('.upper-header-banner');


let header = document.getElementById('masthead');
open_menu.addEventListener("click",()=>{
  header.classList.add("open")
}); 
close_menu.addEventListener("click",()=>{
  header.classList.remove("open");
});  



function toggleAccord(e) {
  e.preventDefault();
  if (this.parentNode.classList.contains("active")) {
    this.parentNode.classList.remove("active");
  } else {
    for (i = 0; i < toggles.length; i++) {
      toggles[i].parentNode.classList.remove("active");
    }
    this.parentNode.classList.add("active");
  }
}
function toggleAccord2(e) {
    e.preventDefault();
    if (this.parentNode.classList.contains("active")) {
      this.parentNode.classList.remove("active");
    } else {
      for (i = 0; i < toggles2.length; i++) {
        toggles2[i].parentNode.classList.remove("active");
      }
      this.parentNode.classList.add("active");
    }
  }
for (i = 0; i < toggles.length; i++) {
  toggles[i].addEventListener("click", toggleAccord);
}

for (i = 0; i < toggles2.length; i++) {
    toggles2[i].addEventListener("click", toggleAccord2);
  }
if (document.getElementById("popup") !== null) {
    let popup_modal = document.querySelector('.popup');
    let popup = document.getElementById('popup')
    let elements = document.getElementsByClassName("more");
    let popup_content = document.querySelector('#popup .popup-container');
    let popup_image = document.querySelector('#popup .popup-container .leader-image');
    let popup_leader_info = popup_content.querySelector(".leader-info");
    let close_button = document.querySelector('.close-popup');
    let popupOpen = function(e) {
          e.preventDefault(); 
        popup_modal.classList.add('active');
        let leader_content = this.parentNode.querySelector('.leader-popup-text').textContent;
        let leader_image = this.parentNode.previousElementSibling.getAttribute('src');
        let leader_name = this.parentNode.querySelector('.leader-name').textContent;
        let leader_position = this.parentNode.querySelector('.leader-position').textContent;
        popup_image.setAttribute('src',leader_image);
        popup_leader_info.querySelector('.leader-name').textContent += leader_name;
        popup_leader_info.querySelector('.leader-description').textContent += leader_content;
        popup_leader_info.querySelector('.leader-position').textContent += leader_position;
    };

    for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener('click', popupOpen, false);
    }
    let popupClose = function() {
      
      popup_modal.classList.remove('active');
      popup_leader_info.querySelector('.leader-name').textContent='';
      popup_leader_info.querySelector('.leader-description').textContent='';
      popup_leader_info.querySelector('.leader-position').textContent='';
    
    } 
      close_button.addEventListener('click', popupClose, false);   
}

function banner_close() {
  header_banner.classList.add('closed_banner');
}
if (close_banner !== null) {
  close_banner.addEventListener('click',banner_close,false);
}
let close_video = document.getElementById('close-video');
let videos = document.querySelectorAll('.video-hook');
let video_popup = document.getElementById('video-popup');
let video_empower = document.getElementById('empower-video');
let sources = video_empower.getElementsByTagName("iframe");

function updateSrc(pos, arr, src) {
  return arr[pos] ? arr[pos].src = src : false;
}



 function openVideo (e) {
    let video_src = this.getAttribute('video-data');  
    console.log(video_src);
    updateSrc(0, sources, video_src);
    video_popup.classList.add('activated');

 }



 for (var i = 0; i < videos.length; i++) {
  videos[i].addEventListener('click', openVideo, false);
}

function stopVideo( element ) {
	var iframe = element.querySelector( 'iframe');
	var video = element.querySelector( 'video' );
	if ( iframe ) {
		var iframeSrc = iframe.src;
		iframe.src = iframeSrc;
	}
	if ( video ) {
		video.pause();
	}
};



function closeVideo () {
  
  video_popup.classList.remove('activated');
}
 
close_video.addEventListener('click', closeVideo, false);