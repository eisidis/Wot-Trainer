const nextBtn = document.getElementById("next")
const tankName = document.getElementById("tankName")
const userHp = document.getElementById("userHp")
const resultHp = document.getElementById("resultHp")

// https://api.worldoftanks.eu/wot/encyclopedia/vehicles/?application_id=77b55a76eb843a2b51927278550b8534&tier=10
// https://api.worldoftanks.eu/wot/encyclopedia/vehicles/?application_id=77b55a76eb843a2b51927278550b8534&tier=10&nation=usa&type=heavyTank

fetch('https://api.worldoftanks.eu/wot/encyclopedia/vehicles/?application_id=77b55a76eb843a2b51927278550b8534&tier=10')
    .then(response => response.json()) // Convertir la réponse en JSON
    .then(data => {
        const tankData = Object.values(data.data) // Convertir l'objet en tableau de valeurs

        // console.log(tankData["14881"]["name"]);
        // console.log(Object.keys(data));
        var randomIndex = Math.floor(Math.random() * tankData.length); // Génère un nombre aléatoire en fonction de la taille du tableau
        // console.log(randomIndex);
        console.log(tankData[randomIndex]["name"]);

        const title = tankName.appendChild(document.createElement("p"));
        title.innerHTML = tankData[randomIndex]["name"];

        tankName.appendChild(document.createElement("img")).src = tankData[randomIndex]["images"]["big_icon"];
        // console.log(Object.keys(data.data)[random]);
        nextBtn.addEventListener("click", () => {
            location.reload()
        })
        validate.addEventListener("click", () => {
            const tank = tankData[randomIndex]["default_profile"];
            
            if (userHp.value == tank["hp"]) {
                console.log("Bravo");
                resultHp.innerText = "Bravo";
            } else {
                console.log("Perdu");
                resultHp.innerText = "raté c'était " + tank["hp"] + " big noob ahahah";
            }
        })

    })
    .catch(error => {
        // Gérer les erreurs
        console.error('Erreur:', error);
    });
