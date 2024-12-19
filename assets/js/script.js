const nextBtn = document.getElementById("next")
validate.addEventListener("click", () => {
    console.log('olizefjjiozge');
    
})

fetch('https://api.worldoftanks.eu/wot/encyclopedia/vehicles/?application_id=77b55a76eb843a2b51927278550b8534&tier=10&nation=usa&type=heavyTank')
    .then(response => response.json()) // Convertir la réponse en JSON
    .then(data => {
        const tankData = data.data // Convertir l'objet en tableau de valeurs

        console.log(tankData["14881"]["name"]);

        nextBtn.addEventListener("click", () => {
            // console.log(Object.keys(data));
            var randomIndex = Math.floor(Math.random() * tankData.length);
            console.log(tankData[2]);
            // console.log(Object.keys(data.data)[random]);
        })
    })
    .catch(error => {
        // Gérer les erreurs
        console.error('Erreur:', error);
    });
