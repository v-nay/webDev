document.addEventListener("DOMContentLoaded", () => {
    const menuItems = {
      appetizers: [
        "Garlic Bread - $3.99",
        "Stuffed Mushrooms - $5.99",
        "Bruschetta - $4.99",
      ],
      "main-courses": [
        "Grilled Salmon - $20.99",
        "Steak Diane - $24.99",
        "Chicken Alfredo - $18.99",
      ],
      desserts: [
        "Tiramisu - $8.99",
        "Cheesecake - $7.99",
        "Chocolate Lava Cake - $9.99",
      ],
      beverages: [
        "Espresso - $3.99",
        "Lemonade - $2.99",
        "Wine - $9.99",
      ],
    };
  
    const menuGallery = document.querySelector(".menu-gallery");
    const menuDetails = document.getElementById("menu-details");
    const menuDetailsContent = menuDetails.querySelector(".menu-details-content");
  
    // Event listener for showing menu details
    menuGallery.addEventListener("click", (event) => {
      const menuItem = event.target.closest(".menu-item");
      if (menuItem) {
        const category = menuItem.dataset.category;
        if (menuItems[category]) {
          const items = menuItems[category];
  
          // Populate the menu details section
          menuDetailsContent.innerHTML = `
            <h3>${category.replace("-", " ").toUpperCase()}</h3>
            <ul>${items.map((item) => `<li>${item}</li>`).join("")}</ul>
            <button id="close-details">Close</button>
          `;
  
          // Position the menu details below the clicked item
          const rect = menuItem.getBoundingClientRect();
          menuDetails.style.top = `${window.scrollY + rect.bottom + 10}px`; // Below the clicked item
          menuDetails.style.left = `${rect.left}px`; // Align to the left of the item
          menuDetails.style.display = "block";
  
          // Add close functionality
          const closeButton = document.getElementById("close-details");
          closeButton.addEventListener("click", () => {
            menuDetails.style.display = "none"; // Hide menu details
          });
        }
      }
    });
  });
  