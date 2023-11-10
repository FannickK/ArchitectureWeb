document.addEventListener("DOMContentLoaded", function () {
    loadClients();

    // Variable pour suivre l'état d'affichage des détails du client
    let clientDetailsVisible = false;

    // Ajoutez un gestionnaire d'événements pour le conteneur des clients
    const clientsContainer = document.getElementById("clients-container");
    clientsContainer.addEventListener("click", function (event) {
        // Assurez-vous que l'élément cliqué est une instance de client-item
        if (event.target.classList.contains("client-item")) {
            const clientId = event.target.dataset.clientId;

            // Vérifiez si les détails sont déjà visibles
            if (!clientDetailsVisible) {
                loadClientDetails(clientId, event.target);
                clientDetailsVisible = true;
            } else {
                // Cachez les détails s'ils sont déjà visibles
                hideClientDetails();
                clientDetailsVisible = false;
            }
        }
    });
});

function loadClients() {
    fetch("get_clients.php")
        .then(response => response.json())
        .then(clients => {
            const clientsContainer = document.getElementById("clients-container");
            clientsContainer.innerHTML = "";

            clients.forEach(client => {
                const clientItem = document.createElement("div");
                clientItem.className = "client-item";
                clientItem.textContent = `${client.Prenom} ${client.Nom}`;

                // Ajoutez un attribut data-client-id pour stocker l'ID du client
                clientItem.setAttribute("data-client-id", client.ID_Client);

                clientsContainer.appendChild(clientItem);
            });
        })
        .catch(error => console.error("Erreur lors du chargement des clients :", error));
}

function loadClientDetails(clientId, targetElement) {
    fetch('get_client_details.php?client_id=' + clientId)
        .then(response => response.json())
        .then(clientDetails => {
            // Créez un élément pour les détails du client
            const detailItem = document.createElement("div");
            detailItem.className = "client-details";

            for (const [key, value] of Object.entries(clientDetails)) {
                const detailItemRow = document.createElement("div");
                detailItemRow.textContent = `${key}: ${value}`;
                detailItem.appendChild(detailItemRow);
            }

            // Ajoutez les détails du client juste après l'élément client sélectionné
            targetElement.insertAdjacentElement("afterend", detailItem);
        })
        .catch(error => console.error('Erreur lors de la récupération des détails du client :', error));
}

function hideClientDetails() {
    const clientDetailsContainer = document.querySelector(".client-details");

    if (clientDetailsContainer) {
        // Cachez les détails du client
        clientDetailsContainer.style.display = "none";

        // Supprimez l'élément client-details du DOM
        clientDetailsContainer.parentNode.removeChild(clientDetailsContainer);
    }
}
