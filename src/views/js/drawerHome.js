const btnMostrar = document.getElementById("btnMostrar");
const sidebar = document.querySelector(".sidebar");
const toggleSidebarButton = document.getElementById("toggleSidebarButton");
let sidebarVisible = true;

function toggleSidebar() {
  const sidebarWidth = 300;
  if (sidebarVisible) {
    sidebar.style.left = `-${sidebarWidth}px`;
    toggleSidebarButton.style.transform = "translateX(0)";
    sidebarVisible = false;
  } else {
    sidebar.style.left = "0";
    toggleSidebarButton.style.transform = "translateX(300px)";
    sidebarVisible = true;
  }
}

toggleSidebarButton.addEventListener("click", toggleSidebar);

//------------------------------------------------------------------------------------------------------------------

const sidebarLinks = document.querySelectorAll(".sidebar li a");
sidebarLinks.forEach((link) => {
  link.addEventListener("click", toggleSidebar);
});
