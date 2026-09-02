document.addEventListener("DOMContentLoaded", function () {

    const searchInput = document.getElementById("memberSearch");
    const memberCards = document.querySelectorAll(".member-card");

    if (searchInput) {

        searchInput.addEventListener("input", function () {

            const searchText = searchInput.value.toLowerCase().trim();

            memberCards.forEach(function (card) {

                const memberName = card
                    .querySelector("h2")
                    .textContent
                    .toLowerCase();

                if (memberName.includes(searchText)) {

                    card.style.display = "";

                } else {

                    card.style.display = "none";

                }

            });

        });

    }

});
