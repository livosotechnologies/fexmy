document.addEventListener("DOMContentLoaded",function(){var e=document.querySelectorAll(".card.custom-card");e.forEach(function(t){t.addEventListener("click",function(){e.forEach(function(c){c.classList.remove("active")}),t.classList.add("active")})})});var r=document.querySelector(".list-wrapper"),o;console.log("listWrapper",r);r&&setTimeout(()=>{o=new Isotope(r,{itemSelector:".card-item"})},100);var i=document.querySelectorAll(".pos-category");i.length>0&&i.forEach(function(e){e.addEventListener("click",function(t){if(t.target.matches(".categories")){var c=t.target.getAttribute("data-filter");c&&o.arrange({filter:c})}})});document.querySelectorAll("#switcher-boxed, #switcher-full-width, #switcher-default-width, #reset-all, #switcher-default-menu, #switcher-closed-menu, #switcher-icontext-menu, #switcher-icon-overlay, #switcher-detached, #switcher-double-menu, #switcher-menu-click, #switcher-menu-hover, #switcher-icon-click, #switcher-icon-hover, #switcher-horizontal, #switcher-vertical").forEach(e=>{e.addEventListener("click",()=>{setTimeout(()=>{new Isotope(document.querySelector(".list-wrapper"),{itemSelector:".card-item"})},100)})});
