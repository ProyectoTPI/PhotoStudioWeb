const photoContainer = document.getElementById("photo-container");

let content = "<div class='column'>";

for(let i = 0; i < 20; i++){
    if(i != 0 && (i % 5 == 0)){
        content += "</div><div class='column'>"+ getPhotoElement(i + 1);
    }
    else{
        content += getPhotoElement(i + 1);
    }
}

content += "</div>";

photoContainer.innerHTML = content;

function getPhotoElement(photo_id){
    return '<a href="#" class="photo"><img alt="Photo '+ photo_id +'" src="src/views/img/photo '+ photo_id +'.jpg"/></a>';
}

//const photoContainer = document.getElementById("photo-container");
const packageContainer = document.getElementById("package-container");
const aboutContainer = document.getElementById("about-container");

// Inicialmente, solo mostrar photo-container
//photoContainer.style.display = "flex";
packageContainer.style.display = "none";
aboutContainer.style.display = "none";

// Función para cambiar el contenido activo
function setActiveContent(contentId) {
    if (contentId === "photo-container") {
        photoContainer.style.display = "flex";
        packageContainer.style.display = "none";
        aboutContainer.style.display = "none";
    } else if (contentId === "package-container") {
        photoContainer.style.display = "none";
        packageContainer.style.display = "grid";
        aboutContainer.style.display = "none";
    } else if (contentId === "about-container") {
        photoContainer.style.display = "none";
        packageContainer.style.display = "none";
        aboutContainer.style.display = "block";
    }
}

// Manejar clic en etiquetas del sidebar
const sidebarLinks = document.querySelectorAll("#sidebar a");
sidebarLinks.forEach(link => {
    link.addEventListener("click", function (e) {
        e.preventDefault();
        const contentId = this.getAttribute("data-content");
        setActiveContent(contentId);

        // Remover clase active de todos los links
        sidebarLinks.forEach(link => {
            link.classList.remove("active");
        });

        // Agregar clase active al link clickeado
        this.classList.add("active");
    });
});
